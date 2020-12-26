<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        dd($posts);
    }

    public function edit($id) {

        $post = Post::find($id);

        if ( Auth::user()->can('view', $post) ) {
            dd( Post::find($id) );
        } else {
            dd('403');
        }
    }

    public function store() {
        $post = Post::create([
            'author_id' => 2,
            'title' => 'Đây là tiêu đề bài viết mới',
            'excerpt' => 'Xin chào các bạn, đây là trích đoạn của bài viết mới',
            'body' => '<p>eyooooo whatsup bro</p>',
            'slug' => 'my-post',
            'meta_description' => 'Đây là thẻ meta miêu tả',
            'meta_keywords' => 'Đây là, thẻ meta, keywords',
        ]);
    }
}
