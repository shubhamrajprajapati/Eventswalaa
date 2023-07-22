<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class MybookController extends Controller
{
    public function index(){
        $order_view = Order::where('user_id', Auth::id())->get();
        return view('users.mybook.index', compact('order_view'));
    }
}
