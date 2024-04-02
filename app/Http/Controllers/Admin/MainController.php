<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class MainController extends Controller {
    public function index() {
        // $post = new Post;
        // $post -> title = "Привет мир";
        // $post -> save();
        return view('admin.index');
    }
}
