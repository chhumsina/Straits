<?php namespace MyApp\Repositories;
/**
 * Created by PhpStorm.
 * User: User
 * Date: 9/14/2015
 * Time: 3:30 PM
 */

use \Article;

class LatestNewsRepository {
    public function getAll(){
        $articles = Article::where('type','news')->orderBy('created_at','DESC')->limit(5)->get();
        return $articles;
    }
}