<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index',['orders'=> Order::all()]);
    }


    /**
     * Approve Order
     */
    public function approveOrder(Order $order)
    {
        $order->is_approve=true;
        $order->save();
        return back();
    }

    /**
     * Reject Order.
     */
    public function rejectOrder(Request $request ,Order $order)
    {
        $order->is_approve=false;
        $order->comment=$request->comment;
        return back();
    }

}
