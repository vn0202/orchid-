<?php

namespace App\Orchid\Filters;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Orchid\Filters\Filter;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Select;

class TagFilter extends Filter
{
    /**
     * The displayable name of the filter.
     *
     * @return string
     */
    public function name(): string
    {
        return  __('tag');
    }

    /**
     * The array of matched parameters.
     *
     * @return array|null
     */
    public function parameters(): ?array
    {
        return ['tag_id'];
    }

    /**
     * Apply to a given Eloquent query builder.
     *
     * @param Builder $builder
     *
     * @return Builder
     */
    public function run(Builder $builder): Builder
    {
        return $builder->whereHas('tags',function (Builder $query) {
                $query->where('tag_id',$this->request->get('tag_id'));
        });
    }

    /**
     * Get the display fields.
     *
     * @return Field[]
     */
    public function display(): iterable
    {
        //
        return [
            Select::make('tag_id')
                ->fromModel(Tag::class, 'name', 'id')
                ->empty()
                ->value($this->request->get('tag_id'))
                ->title(__('Tags')),
            ];
    }
    public function value(): string
    {
        return $this->name().': '.Tag::where('id',$this->request->get('tag_id'))->first()->name;
    }
}
