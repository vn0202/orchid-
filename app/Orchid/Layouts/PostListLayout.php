<?php

namespace App\Orchid\Layouts;

use App\Models\Category;
use App\Models\Post;
use App\Orchid\Fields\CkeditorField;
use App\Orchid\Filters\QueryFilter;
use Illuminate\Http\Request;
use Orchid\Filters\Filter;
use Orchid\Platform\Models\User;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Menu;
use Orchid\Screen\Builder;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Layouts\View;
use Orchid\Screen\Repository;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Toast;
use function Symfony\Component\String\s;

class PostListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'posts';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */

    protected function columns(): iterable
    {

//        dd();
        $array =  Category::all()->pluck('title','id')->toArray();



        return [
            TD::make('thumb')->render(function (Post $post)
            {
                return view('columns.image',['value' => $post->thumb]);
            })->width(150),

            TD::make('title', 'Title')
                ->render(function (Post $category) {

                    return Link::make($category->title)
                        ->route('platform.post.edit', $category);
                })->sort(),
            TD::make('description','Description')->render(function (Post $post){
                return "<span class='one-line'>$post->description</span>";
            })->sort(),
            TD::make('slug','Slug')->render(function (Post $post){
                return "<span class='one-line'> $post->slug</span>";
            })->sort(),
            TD::make('category_id',"Category")->render(function (Post $category)
            {
                return $category->category->title ?? "";
            })->sort()->filter(TD::FILTER_SELECT,$array),

            TD::make('active', 'Active')->render(function (Post $post)
            {
                if($post->active == 0)
                {
                    return "<span class='bg-danger p-1 rounded-1'>DRAF</span>";
                }
                return "<span class='bg-success p-1 rounded-1'>PUBLISH</span>";
            })->sort()->filter(TD::FILTER_SELECT,[
                '0'=>'DRAF',
                '1'=>'PUBLISH'
            ]),
            TD::make(__('Actions',))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (Post $post) => DropDown::make()
                    ->icon('options-vertical')
                    ->list([
                        Link::make(__('Edit'))
                            ->route('platform.post.edit', $post->id)
                            ->icon('pencil')->class('text-warning'),

                        Button::make(__('Delete'))
                            ->icon('trash')
                            ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                            ->method('remove', [
                                'id' => $post->id,
                            ])->class('text-danger no-border bg-white')
                        ->canSee(auth()->user()->inRole('admin')),
                    ])),
        ];
    }


}
