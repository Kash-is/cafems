<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view ('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        // $data = $request->validate();
        $categories = new Category;
        $categories->name = $request->name;

        if($request->hasfile('image')){
            $destination ='uploads/category/'.$categories->image;
            if(File::exists($destination)){
                File::delete($destination);
            }



            $file = $request->file('image');
            $filename = time(). '.' . $file->getClientOriginalExtension();
            $file->move('uploads/category/', $filename);
            $categories->image = $filename;
        }

        $categories->save();

        return redirect('admin/categories')->with('message', 'Category added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($category_id)
    {
        $category = Category::find($category_id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoryRequest $request, $category_id)
    {
        $categories = Category::find($category_id);
        $categories->name = $request->name;

        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time(). '.' . $file->getClientOriginalExtension();
            $file->move('uploads/category/', $filename);
            $categories->image = $filename;
        }

        $categories->update();

        return redirect('admin/categories')->with('message', 'Category Updated successfully');
    }

    /**
     * Remove the specified resource from storage.s
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($category_id)
    {
        $data = Category::find ($category_id);
        if($data){
            $destination = 'uploads/category/'.$data->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $data->delete();
            return redirect('admin/categories')->with('message', 'Category Deleted Sucessfully');
        }

        else

        $data->delete();
        return redirect('admin/categories')->with('message', 'CategoryID not found');
    }
}
