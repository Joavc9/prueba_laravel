<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\category\CategoryCreateRequest;
use App\Http\Requests\category\CategoryUpdateRequest;
use Exception;
use Illuminate\Http\Request;

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
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
        Category::create([
            'name' => $request->name,
        ]);
        return redirect()->route('categories.index')->with('success', 'Categoría creada correctamente');
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
        $category = Category::FindOrfail($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request)
    {
        $category = Category::FindOrfail($request->id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('categories.index')->with('success', 'Categoría actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $category = Category::FindOrfail($request->id);
        try {
            $category->delete();
            return redirect()->route('categories.index')->with('success', 'Categoría eliminada correctamente');
        } catch (Exception $th) {
            return redirect()->route('categories.index')->with('warning', $th->errorInfo[2]);
        }
    }
}
