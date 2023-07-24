<?php

namespace App\Http\Controllers\Admin;

use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class DashboardController extends Controller
{
   public function index(){
    // return 'admin.dashboard';
    $TotalPosts=post::all();
    $totalpostCount= count($TotalPosts);
    $TotalUsers=User::all();
    $totaluserCount= count($TotalUsers);
    $TotalCategories=Category::all();
    $totalcategoryCount= count($TotalCategories);
    $pedningApproval=post::where('status','1')->get();
    $pendingcount= count($pedningApproval);
    return view('admin.dashboard',compact('totalpostCount','totaluserCount','totalcategoryCount','pendingcount','TotalUsers','pedningApproval'));
   }
}
