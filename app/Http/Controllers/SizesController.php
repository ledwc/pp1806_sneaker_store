<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSizePost;
use App\Http\Requests\UpdateSizePut;
use Illuminate\Http\Request;
use App\Size;

class SizesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes = Size::all();

        return view('admin.size.show', ['sizes' => $sizes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.size.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSizePost $request)
    {
        $data = $request->only([
            'size_name',
        ]);

        try {
            $size = Size::create($data);
        } catch (Exception $e) {
            return back()->with('status', __('product.create_fail'));
        }

        return redirect('/sizes');
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
        try {
            $size = Size::find($id);
        } catch (Exception $e) {
            return back()->with('status', __('product.fail'));
        }

        return view('admin.size.edit', ['size' => $size]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSizePut $request, $id)
    {
        $data = $request->only([
            'size_name',
        ]);
        
        try {
            $size = Size::find($id);
            $size->update($data);
        } catch (Exception $e) {
            return back()->with('status', __('product.fail'));
        }

        return redirect('/sizes');
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
            $size = Size::find($id);
            $size->delete();
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
