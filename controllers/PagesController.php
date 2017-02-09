<?php

class PagesController
{

    public function home()
    {
        $articles = App::get('database')->selectAll('articals');

        require 'views/index.view.php';
    }

    public function about()
    {
        require 'views/about.view.php';
    }

    public function contact()
    {
        require 'views/about.view.php';
    }
    
}