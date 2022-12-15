<?php

namespace App\Orchid\Screens\Blogs\Post;

use App\Models\Post;
use App\Orchid\Filters\QueryFilter;
use App\Orchid\Layouts\MySelection;
use App\Orchid\Layouts\PostListLayout;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Orchid\Filters\Filter;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class PostListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {


        return [
            'posts' => Post::filters(MySelection::class)->defaultSort('id')->paginate(10),
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Posts';
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
                ->route('platform.post.edit')
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
            MySelection::class,
            PostListLayout::class,
        ];

    }
    public function remove(Request $request): void
    {
        Post::findOrFail($request->get('id'))->delete();

        Toast::info(__('Post was removed'));
    }
}
