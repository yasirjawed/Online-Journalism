<?php

namespace App\Http\Controllers\admin;

use App\Models\post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\PostFormRequest;

class PostController extends Controller
{
    public function index(){
        $posts= Post::all();
        return view('admin.post.index',compact('posts'));
    }
    public function create(){
        $category=Category::where('status','0')->get();
        return view('admin.post.create',compact('category'));
    }

    public function store(PostFormRequest $request){
        $data = $request -> validated();
        // ddd($data);
       $post = new post;
       $post->category_id = $data['category_id'];
       $post->name = $data['name'];
       $post->slug = Str::slug($data['slug']);
       $post->description = $data['description'];
        if($request->hasfile('image')){
            $file= $request->file('image');
            $filename= time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/posts/', $filename);
            $post->image = $filename;
        }
       $post->yt_iframe = $data['yt_iframe'];
       $post->meta_title = $data['meta_title'];
       $post->meta_description = $data['meta_description'];
       $post->meta_keyword = $data['meta_keyword'];
       $post->active_status = $data['active_status'];
       $post->status_remarks = $data['Rejection'];
       $post->status = $request->status == true ? '1':'0';
       $post->created_by= Auth::user()->id;
       $post->save();
       return redirect('admin/post')->with('message','Post Added Successfully');
    }
    public function edit($post_id){
        $posts= Post::find($post_id);
        $category=Category::where('status','0')->get();
        return view('admin.post.edit',compact('posts','category'));
    }
    public function process($post_id){
        $posts= Post::find($post_id);
        $category=Category::where('status','0')->get();
        return view('admin.approval.process',compact('posts','category'));
    }
    public function update(PostFormRequest $request ,$post_id){
        $data = $request -> validated();
       $post = post::find($post_id);
       $post->category_id = $data['category_id'];
       $post->name = $data['name'];
       $post->slug = Str::slug($data['slug']);
       $post->description = $data['description'];
       $post->yt_iframe = $data['yt_iframe'];
       if($request->hasfile('image')){
           $destination = 'uploads/posts/'. $post->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file= $request->file('image');
            $filename= time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/posts/', $filename);
            $post->image = $filename;
        }

       $post->meta_title = $data['meta_title'];
       $post->meta_description = $data['meta_description'];
       $post->active_status = $data['active_status'];
       $post->status_remarks = $data['Rejection'];
       $post->meta_keyword = $data['meta_keyword'];
       $post->status = $request->status == true ? '1':'0';
    //    $post->created_by= Auth::user()->id;
       $post->update();
       return redirect('admin/post')->with('message','Post Updated Successfully');
    }
    public function update_process(PostFormRequest $request ,$post_id){
        $data = $request -> validated();
       $post = post::find($post_id);
       $post->category_id = $data['category_id'];
       $post->name = $data['name'];
       $post->slug = Str::slug($data['slug']);
       $post->description = $data['description'];
       $post->yt_iframe = $data['yt_iframe'];
       $post->meta_title = $data['meta_title'];
       $post->meta_description = $data['meta_description'];
       $post->meta_keyword = $data['meta_keyword'];
       $post->active_status = $data['active_status'];
       $post->status_remarks = $data['Rejection'];
       $post->status = $request->status == true ? '1':'0';
        
    //    $to = "somebody@example.com";
    //     $subject = "My subject";
    //     $txt = "Hello world!";
    //     $header = "From: webmaster@example.com";
    //     mail($to,$subject,$txt,$header);
    //    $post->created_by= Auth::user()->id;
       $post->update();
       return redirect('admin/post')->with('message','Post Updated Successfully');
    }
    public function destroy(Request $request){
        $post = post::find($request->category_delete_id);
        if($post){
            if($post->image!=null){
                $destination = 'uploads/posts/'. $post->image;
                if(File::exists($destination)){
                    File::delete($destination);
                }

            }
            $post->delete();
            return redirect('admin/post')->with('message','Post deleted succesfully!');
        }else{
            return redirect('admin/post')->with('message','No Post id found!');
        }

    }

}
