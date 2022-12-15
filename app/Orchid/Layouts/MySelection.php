<?php

namespace App\Orchid\Layouts;

use App\Orchid\Filters\QueryFilter;
use App\Orchid\Filters\TagFilter;
use Orchid\Filters\Filter;
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
        ];
    }
}
