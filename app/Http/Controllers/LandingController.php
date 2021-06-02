<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Subscription;
use App\Models\Product;
use App\Models\Category;
use App\Models\Attached_file;

class LandingController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('id', 'desc')->take(6)->get();
        $videos = Attached_file::orderBy('id', 'desc')
                                ->where('type','youtube')                            
                                ->take(7)
                                ->get();
        return view('landing.home')->with('posts', $posts)->with('videos',$videos);
    }

    public function store($continent)
    {
        switch ($continent) {
            case 'america':
                $store = (object)[
                    'name' => 'América',
                    'image' => '/assets/images/store/store-america-el-leon-verde.jpg',
                    'slug' => 'america'
                    
                ];

                $products = Product::orderBy('id', 'desc')->get();
                $categories = Category::where('section', 'product')
                ->orderBy('created_at')->get();
                return view('store.index')->with('products', $products)->with('categories', $categories)->with('store', $store);


                break;

                case 'europa':
                $store = (object)[
                    'name' => 'Europa',
                    'image' => '/assets/images/store/store-europa-el-leon-verde.jpg',
                    'slug' => 'europa'
                ];

                $products = Product::orderBy('id', 'desc')->get();
                $categories = Category::where('section', 'product')
                ->orderBy('created_at')->get();
                return view('store.index')->with('products', $products)->with('categories', $categories)->with('store', $store);

                break;
            
            default:
                return view('404.index');
                break;
        }
    }


    public function categoryStore($continent,$category){
        $store = $continent;
        $categoryDetail = Category::where('slug',$category)->first();
        $products = Product::where('store',$continent)
                            ->where('category_id',$categoryDetail->id)
                            ->get();
        $categories = Category::where('section', 'product')
                        ->orderBy('created_at')->get();

        return view('store.category')->with('categories', $categories)->with('products', $products)->with('categoryDetail',$categoryDetail)->with('store',$store);
    }

    public function blog()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('blog.index')->with('posts', $posts);
    }

    public function show_blog($post)
    {
        $post = Post::where('slug', $post)->first();
        $last_posts = Post::orderBy('id', 'desc')->take(3)->get();
        $comments = Comment::where('post_id',$post->id)->orderBy('id', 'desc')->get();
        $comment_number = Comment::where('post_id', $post->id)->count();
        return view('blog.detail')->with('last_posts', $last_posts)->with('post', $post)->with('comments', $comments)->with('comment_number', $comment_number);
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


    public function test(){
        return view('comments.editModal');
    }
}
