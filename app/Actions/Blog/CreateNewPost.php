<?php

namespace App\Actions\Blog;

use App\Models\Post;
use Illuminate\Support\Facades\Validator;

class CreateNewPost
{

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): Post
    {
        Validator::make($input, [
            'title' => ['required', 'string'],
            'description' => [
                'required',
                'string'
            ],
            'content' => ['required', 'string'],
        ])->validate();

        return Post::create([
            'title' => $input['title'],
            'description' => $input['description'],
            'content' => $input['content'],
            'author' => auth()->user()->id
        ]);
    }
}
