<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductPost;
use App\Http\Requests\UpdateProductPut;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.product.show', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductPost $request)
    {
        $data = $request->only([
            'product_name',
            'code',
            'status',
            'image',
            'category_id',
            'price',
        ]);

        $uploaded = $this->upload($data['image']);

        if (!$uploaded['status']) {
            return back()->with('status', $uploaded['msg']);
        }

        $data['image'] = $uploaded['file_name'];

        try {
            $product = Product::create($data);
        } catch (Exception $e) {
            return back()->with('status', __('product.create_fail'));
        }

        return redirect('/products');  
    }

    private function upload($file)
    {
        $destinationFolder = public_path() . '/' . config('products.image_path');

        try {
            $fileName = $file->getClientOriginalName() . '_' . date('Ymd_His');
            $imageFileType = $file->getClientOriginalExtension();

            if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg' && $imageFileType != 'gif') {

                $result = [
                    'status' => false,
                    'msg' => __('product.upload_fial'),
                ];
            }

            $file->move($destinationFolder, $fileName);
            $result = [
                'status' => true,
                'file_name' => $fileName,
            ];
        } catch(Exception $e) {
            $msg = $e->getMessage();

            $result = [
                'status' => false,
                'msg' => $msg,
            ];
        }

        return $result;  
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        
        if (!$product) {
            return back()->with('status', __('product.fail'));
        }

        return view('admin.product.edit', ['product' => $product]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductPut $request, $id)
    {
        $data = $request->only([
            'code',
            'status',
            'category_id',
            'price',
        ]);

        try {
            $product = Product::find($id);
            $product->update($data);
        } catch (Exception $e) {
            return back()->with('status', __('product.update_fail'));
        }

        return redirect('/products');
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
            $product = Product::find($id);
            $product->delete();
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
