<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\categoryrequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\Console\Descriptor\Descriptor;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return $Categories = Category::with(['articles','Media'])->get();
        return view('admin.Category.index', compact('Categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.Category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(categoryrequest $request)
    {
        $category = Category::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        if ($request->image) {
            $category->addmediafromRequest('image')->tomediacollection('category');
        }

        return $category;
        return redirect()->route('admin.Category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $Category = Category::findorfail($id);
        return view('admin.Category.edit', compact('Category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(categoryrequest $request, int $id)
    {
        $category = Category::findorfail($id);
        $category->update($request->all());
        return redirect()->route('admin.Category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $Category = Category::findorfail($id);
        $Category->delete();
        return redirect()->route('admin.Category.index');
    }
}
