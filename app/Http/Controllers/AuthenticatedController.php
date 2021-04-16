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
    // Vista de crear un artículo
    public function publish()
    {
        $categories = Category::all();
        return view('authenticated.publish')->with('categories', $categories);
    }

    // Guardar artículo
    public function do_publish(Request $request) 
    {
        // Validaciones
        $request->validate([
            'title_txt' => 'required|unique:posts,title',
            'image' => 'required'
        ]);
        // $random = Str::random(40);
        
        // if($request->hasFile('image'))
        // {
        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->title = $request->title_txt;
        $post->slug = $this->do_slug($request->title_txt);
        $post->content = $request->content_txt;
        $post->state = 1;
        $post->save();
        
        $this->upload_image($request->image, $post->slug, $post->id);

        return redirect('/colaborador/listar');
        // }
            
        // return redirect('/colaborador/publicar');

        
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
        $posts = Post::where('user_id', Auth::user()->id)
                    ->where('state',1)
                    ->orderBy('id', 'desc')->get();
        return view('authenticated.publish_list')->with('posts', $posts);
    }

    public function upload_image($image_txt, $slug_txt, $post_id)
    {
        $image_name = $slug_txt . '-el-leon-verde.' . $image_txt->extension();
        $image = Image::make($image_txt->getRealPath());
        $image->save(public_path('uploads/images/'.$image_name));
        // $image->resize(1200, 628)->save(public_path('uploads/images/facebook/' . $image_name));
        $image->resize(1200, 628)->save(public_path('uploads/images/facebook/'. $image_name));
        $image->resize(370, 230)->save(public_path('uploads/images/medium/'. $image_name));
        $image->resize(80, 55)->save(public_path('uploads/images/thumbnail/'. $image_name));
        $image->resize(50, 40)->save(public_path('uploads/images/thumbs/'. $image_name));
        // $image->resize(370, 309)->save(public_path('uploads/images/medium/'. $image_name));
        // $image->resize(80, 77)->save(public_path('uploads/images/thumbnail/'. $image_name));
        // $image->resize(50, 50)->save(public_path('uploads/images/thumbs/'. $image_name));
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

    public function ckeditor_upload(Request $request)
    {
        $fileName = time().'-el-leon-verde.'.$request->upload->extension();
        $request->upload->move(public_path('uploads/images/content/'), $fileName);
        // $file = Image::make($request->upload->getRealPath());
        // $file->save(public_path('uploads/images/' . $fileName));
        // $original_name = $request->file('upload')->getClientOriginalName();
        // $filename_org = pathinfo($original_name, options: PATHINFO_FILENAME);
        // $filename_org = pathinfo($original_name, PATHINFO_FILENAME);
        // $ext = $request->file('upload')->getClientOriginalExtension();
        // $filename = $filename_org.'_'.time().'.'.$ext();

        // $request->file('upload')->move(public_path('uploads/images/content/'), $filename);
        $CKEditorFuncNum = $request->input('CKEditorFuncNum');

        $url = asset('uploads/images/content/'.$fileName);
        $message = "Imagen subida correctamente";

        $res = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum,'$url','$message')</script>";
        @header('Content-type: text/html; charset=utf-8');    
        echo $res;
    }
}
