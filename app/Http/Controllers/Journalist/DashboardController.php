<?php

namespace App\Http\Controllers\Journalist;

use App\Models\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $TotalPosts=post::where('created_by',Auth::user()->id)->get();
        $totalpostCount= count($TotalPosts);
        // ddd($TotalPosts);

        $pedningApproval=post::where('status','1')->where('created_by',Auth::user()->id)->get();
        $pendingcount= count($pedningApproval);
        return view('journalist.dashboard',compact('totalpostCount','pendingcount'));
    }
}
