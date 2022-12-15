<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Role;

use App\Models\Post;
use Orchid\Platform\Models\Role;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class RoleListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'roles';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('name', __('Name'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(fn (Role $role) => Link::make($role->name)
                    ->route('platform.systems.roles.edit', $role->id)),

            TD::make('slug', __('Slug'))
                ->sort()
                ->cantHide()
                ->filter(Input::make()),

            TD::make('created_at', __('Created'))
                ->sort()
                ->render(fn (Role $role) => $role->created_at->toDateTimeString()),
            TD::make(__('Actions',))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (Role $post) => DropDown::make()
                    ->icon('options-vertical')
                    ->list([
                        Link::make(__('Edit'))
                            ->route('platform.systems.roles.edit', $post->id)
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
