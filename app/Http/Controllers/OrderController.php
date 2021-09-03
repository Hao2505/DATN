<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use App\books;
use App\order_product;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function index(){
        $orders = order::orderBy('created_at', 'DESC')->paginate(12);
        return view('backend.order.list', compact('orders'));
    }

    public function details($id){
        $order = order::where('id', $id)->first();
        $order_product = order_product::where('order_id', $id)->get();
        
        foreach($order_product as $key => $value){
            $products[] = [get_book_by_id($value->product_id), $value->qty];
        }

        return view('backend.order.edit', compact('order', 'products'));
    }

    public function update_status(Request $request){

        order::where('id', $request->id)
            ->update([
                'status' => $request->status, 
            ]);
        
        $order = order::where('id', $request->id)->first();
        $order_product = order_product::where('order_id', $request->id)->get();
        
        foreach($order_product as $key => $value){
            $products[] = [get_book_by_id($value->product_id), $value->qty];
        }
        
        return view('backend.order.edit', compact('order', 'products'));
    }
    
    public function report(){
        $revenue = 0;
        $orders = order::whereDate('created_at', Carbon::today())->where('status', 2)->get();
        $qty_order = order::whereDate('created_at', Carbon::today())->where('status', 2)->get()->count();
        $qty_book = books::all()->count();
        foreach($orders as $key => $value){
            $revenue = $revenue + $value->price;
        }

        $report = ['qty_order' => $qty_order, 'qty_book' => $qty_book, 'revenue' => $revenue];
        $orders_search = $orders;
        return view('backend.order.report', compact('report', 'orders_search'));
    }

    public function report_search(Request $request){
        $revenue = 0;
        $orders = order::whereBetween('created_at', [$request->from." 00:00:00", $request->to." 23:59:59"])->where('status', 2)->get();
        $qty_order = order::whereBetween('created_at', [$request->from." 00:00:00", $request->to." 23:59:59"])->where('status', 2)->get()->count();
        $qty_book = books::all()->count();
        foreach($orders as $key => $value){
            $revenue = $revenue + $value->price;
        }

        $report = ['qty_order' => $qty_order, 'qty_book' => $qty_book, 'revenue' => $revenue];

        $orders_search = order::whereBetween('created_at', [$request->from." 00:00:00", $request->to." 23:59:59"])
                                ->where('status', 2)
                                ->where('name', 'LIKE', '%' . $request->name . '%')
                                ->where('phone', 'LIKE', '%' . $request->phone . '%')
                                ->where('email', 'LIKE', '%' . $request->email . '%')
                                ->get();

        return view('backend.order.report', compact('report', 'orders_search'));
    }

}
