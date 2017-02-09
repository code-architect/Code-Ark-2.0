<?php

namespace App\Controllers;

use App\Core\App;

class BlogController
{
    public function home()
    {
        $articles = App::get('database')->selectAll('articals');
        return view('blog',[
            'articles' =>  $articles
        ]);
    }


    public function store()
    {
        unset($_POST['submit']);
        App::get('database')->insert('articals', $_POST);
        redirect('blog');
    }


    public function doit()
    {
        return view('doit/do');
    }

}