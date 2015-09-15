<?php namespace MyApp\Composers;

use MyApp\Repositories\LatestNewsRepository;

class LatestNewsComposer {
    protected $news;

    public function __construct(LatestNewsRepository $news){
        $this->news = $news;
    }

    public function compose($view){
        $view->with('news', $this->news->getAll());
    }
}