<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserdetailsController extends Controller
{
     public function index(){

        $userlist = User::all();
        return view('admin.users.index', compact('userlist'));
     }
}
