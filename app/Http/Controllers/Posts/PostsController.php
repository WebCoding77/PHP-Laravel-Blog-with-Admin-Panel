<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post\Post;
use Auth;


class PostsController extends Controller
{
    
    public function index() {
        $posts = Post::all();

        return view("posts.index", compact('posts'));
    }

    public function single($id) {
        $single = Post::find($id);

        return view("posts.single", compact('single'));
    }


    public function create() {

        return view("posts.create");
    }

    public function store(Request $request) {

        $post = Post::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $request->image->store('images-posts', 'public'),
            'body' => $request->body,
            'user_id' => Auth::user()->id,
        ]);

        if($post) {
            return redirect()->route("index");
        }


    }

    public function delete($id) {

        $delete_post = Post::find($id);
        $delete_post->delete();

        if($delete_post) {
            return redirect()->route("index");
        }


    }

    public function edit($id) {
        $single = Post::find($id);

        return view("posts.edit", compact('single'));
    }


    public function update(Request $request, $id) {

        $update_single = Post::find($id);
        $update_single->update($request->all());

        if($update_single) {
            return redirect()->route("index");
        }    

    }

    public function fuck() {
        echo "fuck";
    }
}
