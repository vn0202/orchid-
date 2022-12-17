<?php

namespace App\Orchid\Presenters;

use Laravel\Scout\Builder;
use Orchid\Screen\Contracts\Searchable;
use Orchid\Support\Presenter;

class PostPresenter extends Presenter implements  Searchable
{

    public function label(): string
    {
        return 'Posts';
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return $this->entity->name;
    }

    /**
     * @return string
     */
    public function subTitle(): string
    {
        return 'Small descriptions';
    }

    /**
     * @return string
     */
    public function url(): string
    {
        return url('/');
    }

    /**
     * @return string
     */
    public function image(): ?string
    {
        return null;
    }

    /**
     * @param string|null $query
     *
     * @return Builder
     */
    public function searchQuery(string $query = null): Builder
    {
     return $this->entity->search($query);

    }

    /**
     * @return int
     */
    public function perSearchShow(): int
    {
        return 3;
    }
}
