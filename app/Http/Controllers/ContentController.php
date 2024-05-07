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
        $posts->views += 1;
        $posts->update();
        return view("user.single", compact("posts"));
    }

    public function category($slug) {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = Post::where('category_id', $category->id)->get();
        return view("user.category", compact("posts","category"));
    }

    public function tag($slug) {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $posts = $tag->posts()->with('category')->paginate(15);
        return view("user.tag", compact("posts","tag"));
    }
}