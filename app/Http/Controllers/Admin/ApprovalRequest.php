<?php

namespace App\Http\Controllers\admin;

use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApprovalRequest extends Controller
{
   public function index(){
        $pedningApproval=post::where('status','1')->get();;
        // ddd($pedningApproval);
        return view('admin.approval.index', compact('pedningApproval'));
   }
}
