<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use App\Events\StatusLiked;


class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Orders $orders)
    {
 
        return $orders::where('status',1)->with('itens','itens.products')->get();
    }

    public function getEnd(Orders $orders)
    {
 
        return $orders::where('status',2)->with('itens','itens.products')->get();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Orders $orders)
    {
        return $orders::create($request->all());
    }

    public function send($order_id, Orders $orders)
    {
        $order = orders::find($order_id);
        
        $order->status = 2;
        
        $order->save();
        return $order = orders::find($order_id);
    }

    public function finaly($order_id, Orders $orders)
    {
        $order = orders::find($order_id);
        
        $order->status = 3;
        
        $order->save();
        return $order = orders::find($order_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $orders)
    {
        //
    }
}
