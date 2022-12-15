<?php

namespace App\Orchid\Screens\Blogs\Categoy;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Platform\Models\User;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Illuminate\Support\Str;

class CategoryEditScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public $category;

    public function query(Category $category): iterable
    {
        return [
            'category' => $category,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->category->exists ? 'Edit category' : 'Creating a new category';

    }

    public function description(): ?string
    {
        return "Blogs category";
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
                ->method('createOrUpdate')
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
                Input::make('category.title')
                    ->title('Title')
                    ->placeholder('Title category')
                    ->required(),

                Relation::make('category.category_id')
                    ->title('Parent category')
                    ->fromModel(Category::class, 'title')
                    ->placeholder('select category')


            ])
        ];
    }

    public function createOrUpdate(Category $category, Request $request)
    {
        $request->validate([
            'category.title' => [
                Rule::unique('categories', 'title')->ignore($category->id),
            ],
        ]);

        $category = $category->fill($request->get('category'));
       $category->user_id = auth()->user()->id;
       $category->slug = Str::of($request->input('category.title'))->slug('-');

       $category->save();

        Alert::info('You have successfully created a post.');

        return redirect()->route('platform.category.list');
    }

    public function remove(Category $category)
    {
        $category->delete();

        Alert::info('You have successfully deleted the post.');

        return redirect()->route('platform.category.list');
    }
}
