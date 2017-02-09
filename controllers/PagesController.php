<?php

class PagesController
{

    public function home()
    {
        $articles = App::get('database')->selectAll('articals');

        return view('index',[
            'articles' =>  $articles
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
    
}