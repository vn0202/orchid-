<?php
namespace App\View\Components;

use Illuminate\View\Component;

class Ckeditor extends Component
{
    /**
     * @var string
     */
    public $name;

    /**
     * Create a new component instance.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return <<<'blade'
<textarea type="text" value="{{$name}}">

</textarea>
blade;
    }
}
