<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class BlogController extends Controller
{
    
    public function home()
    {
        $posts = App\Post::where('status','PUBLISHED')->orderBy('created_at','DESC')->paginate('10');
        return view('blog.home',compact('posts'))->with('home','Home');
    }

    public function post($slug)
    {
        $post = App\Post::where('slug',$slug)->first();
        return view('blog.post',compact('post'));
    }

    public function category($id)
    {

        $posts = App\Post::where('category_id',$id)->where('status','PUBLISHED')->orderBy('created_at','DESC')->paginate('10');
        return view('blog.home',compact('posts'))->with('home','Posts by Category');
 
    }

    public function author($id)
    {

        $posts = App\Post::where('author_id',$id)->where('status','PUBLISHED')->orderBy('created_at','DESC')->paginate('10');
        return view('blog.home',compact('posts'))->with('home','Posts by Author');
 
 
    }

    public function search(request $request)
    {
        $authors = App\User::select('id')->where('name', 'LIKE', '%' . $request->search . '%');
        $categories = App\Category::select('id')->where('name', 'LIKE', '%' . $request->search . '%');


        $search = App\Post::select('id')->where('title', 'LIKE', '%' . $request->search . '%')
        ->orwhere('slug', 'LIKE', '%' . $request->search . '%')
        ->orwhere('body', 'LIKE', '%' . $request->search . '%')
        ->orwhere('excerpt', 'LIKE', '%' . $request->search . '%')
        ->orwhere('meta_description', 'LIKE', '%' . $request->search . '%')
        ->orwhere('meta_keywords', 'LIKE', '%' . $request->search . '%')
        ->orwhereIn('author_id',$authors)
        ->orwhereIn('category_id',$categories);
        
        $posts =  App\Post::whereIn('id',$search)->where('status','PUBLISHED')->orderBy('created_at','DESC')->paginate(10); 

        return view('blog.home',compact('posts'))->with('home','Search Results . . .');
    }

}
