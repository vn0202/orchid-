<?php

namespace App\Orchid\Screens\Blogs\Tag;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Layout;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class TagEditScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'TagEditScreen';
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
            \Orchid\Support\Facades\Layout::rows([
                Input::make('tag.name')
                    ->title('Title')
                    ->placeholder('Name tag')
                    ->required(),


            ])
        ];
    }
    public function createOrUpdate(Tag $tag, Request $request)
    {
        $request->validate(['name'=>'required']);
        $tag = $tag->fill($request->get('tag'));
        $tag->slug = Str::of($request->input('tag.name'))->slug('-');
        $tag->save();

        Alert::info('You have successfully created a post.');

        return redirect()->route('platform.tag.list');
    }

    public function remove(Tag $tag)
    {
        $tag->delete();

        Alert::info('You have successfully deleted the tag.');

        return redirect()->route('platform.tag.list');
    }
}
