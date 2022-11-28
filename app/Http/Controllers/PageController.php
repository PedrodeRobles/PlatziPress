<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function posts()
    {
        return view('posts', [
            'posts' => Post::with('user')->latest()->paginate() //Contamos con una relación
        ]);
    }

    public function post(Post $post) //El paramentro coincide con el de la ruta blog/{post}
    {
        return view('post', ['post' => $post]);
    }
}
