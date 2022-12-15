<?php

namespace App\Orchid\Filters;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Orchid\Filters\Filter;
use Orchid\Platform\Models\Role;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;

class QueryFilter extends Filter
{
    /**
     * The displayable name of the filter.
     *
     * @return string
     */

    public function name(): string
    {
        return __("category");
    }

    /**
     * The array of matched parameters.
     *
     * @return array|null
     */
    public function parameters(): ?array
    {

        return ['category_id'];
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
        return $builder->where('category_id','=',$this->request->input('category_id'));

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
        Select::make('category_id')
            ->fromModel(Category::class, 'title', 'id')
            ->empty()
            ->value($this->request->get('category_id'))
            ->title(__('Category')),


    ];
    }
    public function value(): string
    {
        return $this->name().': '.Category::where('id',$this->request->get('category_id'))->first()->title;
    }
}
