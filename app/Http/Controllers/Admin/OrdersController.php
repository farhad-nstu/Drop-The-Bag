<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Order;

class OrdersController extends Controller
{
    public function create()
    {
        return view('admin.order.create-order');
    }

    public function store(Request $request)
    {
        $request->validate([
           'bag_no'      => 'required',
           'deposite'          => 'required|numeric|digits:2',
           'start_time'           => 'required|before:end_time',
           'end_time'        => 'required|after:start_time',
           /*'web'             => 'required|unique:table,web|web', */
           
        ]);

        $orders                       = new Order();
        $orders->bag_no               = $request->bag_no;
        $orders->deposite             = $request->deposite;
        $orders->loc_id               = $request->loc_id;
        $orders->start_time           = $request->start_time;
        $orders->end_time             = $request->end_time;

        $orders->save();
        Session::flash('message', 'The job has been created successfully!');
        Session::flash('alert', 'success');

        return redirect()->back();

    }
}
