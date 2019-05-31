<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryPost;
use App\Http\Requests\UpdateCategoryPut;
use App\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view ('admin.category.show', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryPost $request)
    {
        $data = $request->only([
            'brand_name',
        ]);

        try {
            $category = Category::create($data);
        } catch (Exception $e) {
            return back()->with('status', __('product.create_fail'));
        }

        return redirect('/categories'); 
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
        $category = Category::find($id);

        if (!$category) {
            return back()->with('status', __('product.fail'));
        }

        return view('admin.category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryPut $request, $id)
    {
        $data = $request->only([
            'brand_name',
        ]);

        try {
            $category = Category::find($id);
            $category->update($data);
        } catch (Exception $e) {
            return back()->with('status', __('product.update_fail'));
        }

        return redirect('/categories');
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
            $category = Category::find($id);
            $category->delete();
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
