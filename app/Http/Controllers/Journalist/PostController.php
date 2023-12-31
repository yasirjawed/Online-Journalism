<?php

namespace App\Http\Controllers\Journalist;

use App\Models\post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use App\Http\Requests\Journalist\PostFormRequest;

class PostController extends Controller
{
    public function index(){
        $posts= post::where('created_by',Auth::user()->id)->get();
        return view('journalist.post.index',compact('posts'));
        
    }
    public function create(){
        $category=Category::where('status','0')->get();
        return view('journalist.post.create',compact('category'));
    }
    public function pending_post(){
        $posts= post::where('created_by',Auth::user()->id)->where('active_status','0')->get();
        return view('journalist.post.pending_post',compact('posts'));
    }
    public function rejected_post(){
        $posts= post::where('created_by',Auth::user()->id)->where('active_status','2')->get();
        // ddd($posts);
        return view('journalist.post.rejected_post',compact('posts'));
    }
    public function store(PostFormRequest $request){
        $data = $request -> validated();
       $post = new post;
       $post->category_id = $data['category_id'];
       $post->name = $data['name'];
       $post->slug = Str::slug($data['slug']);
       $post->description = $data['description'];
       $post->yt_iframe = $data['yt_iframe'];
        if($request->hasfile('image')){
            $file= $request->file('image');
            $filename= time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/posts/', $filename);
            $post->image = $filename;
        }
       $post->meta_title = $data['meta_title'];
       $post->meta_description = $data['meta_description'];
       $post->meta_keyword = $data['meta_keyword'];
       $post->active_status = '0';
       $post->status_remarks = null;
       $post->status = $request->status == true ? '1':'0';
       $post->created_by= Auth::user()->id;
       $post->save();
       return redirect('journalist/post')->with('message','Post Added Successfully');
    }
    public function edit($post_id){
        $posts=post::find($post_id);
        $category=Category::where('status','0')->get();
        return view('journalist.post.edit',compact('posts','category'));
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
       $post->meta_keyword = $data['meta_keyword'];
        $post->active_status = '0';
        $post->status_remarks = null;
    //    $post->created_by= Auth::user()->id;
       $post->update();
       return redirect('journalist/post')->with('message','Post Updated Successfully');
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
            return redirect('journalist/post')->with('message','Post deleted succesfully!');
        }else{
            return redirect('journalist/post')->with('message','No Post id found!');
        }

    }
}
