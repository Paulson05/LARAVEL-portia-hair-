<?php

namespace App\Http\Controllers;

use App\Models\Order;
use DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{

   


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $data = array();
        $data['name'] = $request->name;
        $data['phone_number'] = $request->phone_number;
        $data['address'] = $request->address;
        $data['type'] = $request->type;
        $data['range'] = $request->range;
        $data['color'] = $request->color;
        $contact=DB::table('order')->insert($data);
        return redirect('/');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    
        $order=Order::all();
        return view('order.show')->with([
            'orders'=>$order,
        ]);
    
    }
    public function items(Order $id)
    {
        //

        return view('order.items')->with([
            'item'=>$id,
            ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
        
            // $order=Order::delete();
            // return redirect('/pages/contact/store')->with([
            //     'order'=>$order,
            // ]);
            $order->delete();
            return redirect()->route('show');
    }
}
