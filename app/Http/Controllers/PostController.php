<?php

namespace App\Http\Controllers;

use App\Actions\Blog\CreateNewPost;
use App\Models\Post;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    //
    public function all() {}

    public function store(Request $request)
    {

        $post = new CreateNewPost();
        $input = [
            "title" => request('title'),
            "description" => request('description'),
            "content" => request(('content')),
        ];

        $post = $post->create($input);

        
        return Inertia::render('Blog/Index');
    }
}
