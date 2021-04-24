<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Post;
use App\Models\User;
use App\Models\Subscription;

class LandingController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('landing.home')->with('posts', $posts);
    }

    public function store()
    {
        return view('landing.store');
    }

    public function blog()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('landing.blog')->with('posts', $posts);
    }

    public function show_blog($post)
    {
        $post = Post::where('slug', $post)->first();
        $last_posts = Post::orderBy('id', 'desc')->take(3)->get();
        return view('landing.blog_detail')->with('last_posts', $last_posts)->with('post', $post);
    }

    public function vegetable_patch()
    {
        return view('landing.vegetable_patch');
    }

    public function herbal()
    {
        return view('landing.herbal');
    }

    public function insectary()
    {
        return view('landing.insectary');
    }

    public function pets()
    {
        return view('landing.pets');
    }

    //Suscríbete 
    public function subscribe(Request $request)
    {
        $subscription = new Subscription;
        $subscription->email = $request->email_subs;
        $subscription->state = 1;
        $subscription->save();
    }
}
