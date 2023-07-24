<?php

namespace App\Http\Controllers\Frontend;

use App\Models\post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function viewCategoryPost($category_slug){
        $category = Category::where('slug',$category_slug)->where('status','0')->first();
        if($category){
            $post=post::where('category_id',$category->id)->where('status','0')->get();
            return view('frontend.post.index',compact('post','category'));
        }else{
            return redirect('/');
        }
    }
}
