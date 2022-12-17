<?php

namespace App\Orchid\Layouts;

use App\Orchid\Filters\QueryFilter;
use App\Orchid\Filters\TagFilter;
use App\Orchid\Filters\TitleFilter;
use Orchid\Filters\Filter;
use Orchid\Platform\Http\Layouts\SearchLayout;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Selection;

class MySelection extends Selection
{
    /**
     * @return Filter[]
     */
    public function filters(): iterable
    {
        return [
            QueryFilter::class,
            TagFilter::class,
            TitleFilter::class,
        ];
    }
}
