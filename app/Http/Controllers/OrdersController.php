<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOrderPost;
use App\Http\Requests\UpdateOrderPut;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();

        return view('admin.order.show', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderPost $request)
    {
        $data = $request->only([
            'total_price',
            'user_id',
        ]);

        try {
            $order = Order::create($data);            
        } catch (Exception $e) {
            return back()->with('status', __('product.create_fail'));
        }

        return redirect('/orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);

        if (!$order) {
            return back()->with('status', __('product.fail'));
        }

        return view('admin.order.edit', ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderPut $request, $id)
    {
        $data = $request->only([
            'total_price',
            'user_id',
        ]);

        try {
            $order = Order::find($id);
            $order->update($data);
        } catch (Exception $e) {
            return back()->with('status', __('product.fail'));
        }

        return redirect('/orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $order = Order::find($id);
            $order->delete();
            $result = [
                'status' => true,
                'msg' => __('product.delete_success'),
            ];
        } catch (Exception $e) {
            $result = [
                'status' => false,
                'msg' => __('product.delete_fail'),
            ];
        }

        return response()->json($result);
    }
}
