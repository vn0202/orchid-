<?php

namespace App\Orchid\Layouts;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Toast;

class TagListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'tags';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('name', 'Name'),
            TD::make('slug','Slug'),
             TD::make('Total posts')->render(function (Tag $tag){
                 return Link::make($tag->posts()->count() . " posts")
                     ->href(route('platform.post.list') . "?tag_id=".$tag->id)
                     ->class('text-danger');
             }),
            TD::make('created_at', 'Created'),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (Tag $tag) => DropDown::make()
                    ->icon('options-vertical')
                    ->list([
                        Link::make(__('Edit'))
                            ->route('platform.tag.edit', $tag->id)
                            ->icon('pencil')->class('text-warning'),

                        Button::make(__('Delete'))
                            ->icon('trash')
                            ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                            ->method('remove', [
                                'id' => $tag->id,
                            ])->class('text-danger no-border bg-white')
                            ->canSee(auth()->user()->inRole('admin')),
                    ])),
        ];
    }

}
