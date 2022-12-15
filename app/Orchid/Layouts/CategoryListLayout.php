<?php

namespace App\Orchid\Layouts;

use App\Models\Category;
use App\Models\Tag;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CategoryListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'categories';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('title', 'Title')
                ->render(function (Category $category) {
                    return Link::make($category->title)
                        ->route('platform.category.edit', $category);
                })->sort(),
           TD::make('slug','Slug'),
            TD::make('category_id',"Parent Category")->render(function (Category $category)
            {
                return $category->categories->title ?? "";
            }),
            TD::make('Total posts')->render(function (Category $category){
                return Link::make($category->posts()->count() . " posts")->href(
                    route('platform.post.list').'?filter[category_id][]='.$category->id
                )->class('text-warning');

            }),
            TD::make('created_at', 'Created'),
            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (Category $category) => DropDown::make()
                    ->icon('options-vertical')
                    ->list([
                        Link::make(__('Edit'))
                            ->route('platform.tag.edit', $category->id)
                            ->icon('pencil')->class('text-warning'),

                        Button::make(__('Delete'))
                            ->icon('trash')
                            ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                            ->method('remove', [
                                'id' => $category->id,
                            ])->class('text-danger no-border bg-white')
                            ->canSee(auth()->user()->inRole('admin')),
                    ])),

        ];
    }
}
