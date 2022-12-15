<?php

namespace App\Orchid\Screens\Blogs\Tag;

use App\Models\Post;
use App\Models\Tag;
use App\Orchid\Layouts\TagListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class TagListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'tags'=>Tag::all(),
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Tags';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Create new')
                ->icon('pencil')
                ->route('platform.tag.edit')
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
            TagListLayout::class,
        ];
    }
    public function remove(Request $request): void
    {
        Tag::findOrFail($request->get('id'))->delete();

        Toast::info(__('Post was removed'));
    }
}
