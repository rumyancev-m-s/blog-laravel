<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Post;
use App\Category;
use App\Tag;

class ContentController extends Controller {
    public function index() {
        $posts = Post::paginate(15);
        return view("user.index", compact("posts"));
    }

    public function single($slug) {
        $posts = Post::where('slug', $slug)->firstOrFail();
        $categories = Category::pluck('id','title')->all();
        $tags = Tag::pluck('id','title')->all();
        // var_dump($posts);
        return view("user.single", compact("posts"));
    }
}