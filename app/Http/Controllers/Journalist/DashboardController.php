<?php

namespace App\Http\Controllers\Journalist;

use App\Models\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(){
        $TotalPosts=post::where('created_by',Auth::user()->id)->get();
        $totalpostCount= count($TotalPosts);
        // ddd($TotalPosts);
        $posts= post::where('created_by',Auth::user()->id)->where('active_status','0')->get();
        $postscount= count($posts);
        $pedningApproval=post::where('created_by',Auth::user()->id)->where('active_status','2')->get();
        $pendingcount= count($pedningApproval);
        // Session::put('newcount', $pendingcount);
        return view('journalist.dashboard',compact('totalpostCount','pendingcount','postscount'));
    }
}
