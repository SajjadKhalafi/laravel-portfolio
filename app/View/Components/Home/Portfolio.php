<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portfolio extends Component
{
    public array $items = [];
    public array $tabs = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'title' => 'movie app',
                'category' => ['TALL Stack'],
                'image' => url('img/logo.png'),
                'github' => 'https://github.com/SajjadKhalafi/movie-app-example'
            ],
            [
                'title' => 'Blog',
                'category' => ['Laravel' , 'JavaScript'],
                'image' => url('img/logo.png'),
                'github' => 'https://github.com/SajjadKhalafi/blog-bicoo'
            ],
            [
                'title' => 'CMS project',
                'category' => ['PHP' , 'JavaScript'],
                'image' => url('img/logo.png'),
                'github' => 'https://github.com/SajjadKhalafi/Blog'
            ],
            [
                'title' => 'front-end_project',
                'category' => ['JavaScript'],
                'image' => url('img/logo.png'),
                'github' => 'https://github.com/SajjadKhalafi/front-end_project'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
