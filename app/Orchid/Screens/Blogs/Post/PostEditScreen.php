<?php

namespace App\Orchid\Screens\Blogs\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use App\Orchid\Fields\CkeditorField;
use App\View\Components\Ckeditor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Orchid\Access\UserAccess;
use Orchid\Alert\Toast;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Builder;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Layouts\Modal;
use Orchid\Screen\Repository;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class PostEditScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public $post;
    public $category;

    public function query(Post $post): iterable
    {
        $post->load('attachment');
        return [
            'post' => $post,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->post->exists ? 'Edit' : 'Creating ';

    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [

            Button::make('save')
                ->icon('pencil')
                ->method('createOrUpdate'),
            Button::make('delete')
                ->icon('trash')->class('bg-danger rounded-1 no-border')
                ->method('remove')
        ];
    }

    /**
     * View.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {

        return [
            Layout::rows([
                Input::make('post.title')
                    ->title('Title')
                    ->placeholder('Title post')
                    ->required()
                ,
                Input::make('post.description')
                    ->title('Description')
                    ->placeholder(' description')
                    ->required(),
                ]),
                Layout::rows([
                Relation::make('post.category_id')
                    ->fromModel(Category::class, 'title')
                    ->title('Choose category')->required(),
                ModalToggle::make('add category')
                    ->modal('addModal')
                    ->method('createCategory')
                    ->class('bg-primary border-0 p-1 rounded-1'),


                Select::make('post.tags.')
                    ->multiple()
                    ->fromModel(Tag::class, 'name')
                    ->title('Choose tags')
                    ->placeholder('Choose tags'),
                    ModalToggle::make('add tags')
                        ->modal('addTagModal')
                        ->method('createTag')
                        ->modalTitle('add tag')
                        ->class('bg-primary border-0 p-1 rounded-1'),
                Quill::make('post.content')->title('Content')->required(),
                Picture::make('post.thumb')->targetRelativeUrl()
                    ->acceptedFiles('image/*')->required()->title('Thumb'),
                CheckBox::make('post.active')
                    ->sendTrueOrFalse()
                    ->placeholder('Click to publish/unpublish post')
                    ->title('Publish')
                    ->help('Allow pubish a post'),

                Button::make('save')
                    ->icon('pencil')->class('bg-primary border-0 p-1')
                    ->method('createOrUpdate'),
                ]),
            Layout::modal('addModal',
            [
                Layout::rows([
                    Input::make('category.title')
                        ->title('Title')
                        ->placeholder('Title category')
                        ->required(),

                    Relation::make('category.category_id')
                        ->title('Parent category')
                        ->fromModel(Category::class, 'title')
                        ->placeholder('select category')
                ])
            ])->type(Modal::TYPE_CENTER),
            Layout::modal('addTagModal',
                [
                    Layout::rows([
                        Input::make('tag.name')
                            ->title('Title')
                            ->placeholder('Title category')
                            ->required(),

                    ])
                ])->type(Modal::TYPE_CENTER),

            ];
    }

    public function createOrUpdate(Post $post, Request $request)
    {

        $post = $post->fill($request->get('post'));
        $post->author = auth()->user()->id;
        $post->slug = Str::of($request->input('post.title'))->slug('-');


        $post->save();
        $this->replaceTags($request, $post);
        $post->attachment()->syncWithoutDetaching(
            $request->input('post.attachment', [])
        );

        Alert::info('You have successfully created a post.');

        return redirect()->route('platform.post.list');
    }

    public function remove(Post $post)
    {
        $post->delete();

        Alert::info('You have successfully deleted the post.');

        return redirect()->route('platform.post.list');
    }

    public function replaceTags(Request $request, Post $post)
    {

        $id = $post->id;
        $list_tags = PostTag::select('tag_id')->where('post_id', $id)->get()->toArray();
        $list_old_tags = array_column($list_tags, 'tag_id');
        $list_edit_tags = $request->input('post.tags');
        if ($list_edit_tags) {
            $list_delete_tag = array_diff($list_old_tags, $list_edit_tags);
            $list_add_tag = array_diff($list_edit_tags, $list_old_tags);

            foreach ($list_delete_tag as $tag) {
                PostTag::where('post_id', $id)->where('tag_id', (int)$tag)->delete();
            }
            foreach ($list_add_tag as $tag) {
                $postTag = new PostTag();
                $postTag->post_id = $id;
                $postTag->tag_id = (int)$tag;
                $postTag->save();
            }
        }
    }

    public function createCategory( Request $request): void
    {
        $category = new Category();
        $request->validate([
            'category.title' => [
                Rule::unique('categories', 'title')->ignore($category->id),
            ],
        ],
        [
            'category.title.required'=>"The field is can't be empty!",
            'category.title.unique'=>"The values category  has been taken"
        ]);

        $category = $category->fill($request->get('category'));
        $category->user_id = auth()->user()->id;
        $category->slug = Str::of($request->input('category.title'))->slug('-');

        $category->save();
        \Orchid\Support\Facades\Toast::info('Add category successfully!.');
    }
    public function createTag( Request $request)
    {

               $tag = new Tag();
        $request->validate([
            'tag.name'=>Rule::unique('tags','name')->ignore($tag->id),
        ]
        );
        $tag = $tag->fill($request->get('tag'));
        $tag->slug = Str::of($request->input('tag.name'))->slug('-');
        $tag->save();
        \Orchid\Support\Facades\Toast::info('Add tag successfully!');
        return redirect()->back();
    }

}
