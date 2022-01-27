<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): Response
    {
        $post = Post::with('image')->
        where('status','=', 2)->get();

        return Inertia::render('Applications/Post/index', [
            'post'  =>  $post,
        ]);
    }
}
