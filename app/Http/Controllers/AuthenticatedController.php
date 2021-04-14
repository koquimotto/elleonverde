<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Attached_file;
use Intervention\Image\Facades\Image;
use Auth;

class AuthenticatedController extends Controller
{
    public function publish()
    {
        $categories = Category::all();
        return view('authenticated.publish')->with('categories', $categories);
    }

    public function do_publish(Request $request)
    {
        // $random = Str::random(40);

        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->title = $request->title_txt;
        $post->slug = $this->do_slug($request->title_txt);
        $post->content = $request->content_txt;
        $post->save();
        $this->upload_image($request->image, $post->slug, $post->id);
    }

    public function do_slug($title_txt)
    {
        $slug = Str::slug($title_txt, '-');
        return $slug;
    }

    public function edit_publish($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $categories = Category::all();
        return view('authenticated.publish_edit')->with('post', $post)->with('categories', $categories);
    }

    public function update_publish(Request $request)
    {
        $post = Post::find($request->id_txt);
        // $post->user_id = Auth::user()->id;
        $post->title = $request->title_txt;
        $post->slug = $this->do_slug($request->title_txt);
        $post->content = $request->content_txt;
        $post->save();
    }

    public function list_publish()
    {
        $posts = Post::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        return view('authenticated.publish_list')->with('posts', $posts);
    }

    public function upload_image($image_txt, $slug_txt, $post_id)
    {
        $image_name = $slug_txt . '-el-leon-verde.' . $image_txt->extension();
        $image = Image::make($image_txt->getRealPath());
        $image->save(public_path('uploads/images/'.$image_name));
        // $image->resize(1200, 628)->save(public_path('uploads/images/facebook/' . $image_name));
        $image->resize(1200, 628)->save(public_path('uploads/images/facebook/'. $image_name));
        $image->resize(370, 309)->save(public_path('uploads/images/medium/'. $image_name));
        $image->resize(80, 77)->save(public_path('uploads/images/thumbnail/'. $image_name));
        $image->resize(50, 50)->save(public_path('uploads/images/thumbs/'. $image_name));
        // $image_txt->move(public_path('uploads/images'), $image_name);
        // $image_txt->move(public_path('uploads/images/thumbnail'), $image_name);
        // $image_txt->move(public_path('uploads/images/thumbs'), $image_name);
        // $image_txt->move(public_path('uploads/images/medium'), $image_name);
        // $image_txt->move(public_path('uploads/images/facebook'), $image_name);
        $file = new Attached_file();
        $file->file_name = $image_name;
        $file->type = 'image';
        $file->post_id = $post_id;
        $file->save();

        return $image_name;
    }
}
