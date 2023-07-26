<?php

namespace App\Http\Controllers\Journalist;

use App\Models\post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
    public function store(PostFormRequest $request){
        $data = $request -> validated();
       $post = new post;
       $post->category_id = $data['category_id'];
       $post->name = $data['name'];
       $post->slug = Str::slug($data['slug']);
       $post->description = $data['description'];
       $post->yt_iframe = $data['yt_iframe'];
       $post->meta_title = $data['meta_title'];
       $post->meta_description = $data['meta_description'];
       $post->meta_keyword = $data['meta_keyword'];
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
       $post->meta_title = $data['meta_title'];
       $post->meta_description = $data['meta_description'];
       $post->meta_keyword = $data['meta_keyword'];
    //    $post->created_by= Auth::user()->id;
       $post->update();
       return redirect('journalist/post')->with('message','Post Updated Successfully');
    }
    public function destroy($post_id){
        $post = post::find($post_id);
        if($post){
            $post->delete();
            return redirect('journalist/post')->with('message','Post deleted succesfully!');
        }else{
            return redirect('journalist/post')->with('message','No Post id found!');
        }

    }
}
