<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $this->authorize('isAdmin');

        return view('dashboard.categories.index', [
            "categories" => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:100'
        ];



        foreach (Category::all() as $item) {
            if (strtolower($item->name) === $request['addCategory']) {

                return redirect('/dashboard/categories')->with([
                    'message' => 'Category has been already exist',
                    'feedback' => 'danger',
                    'mainText' => 'Oh No..'

                ]);
            }
        }

        $validated = $request->validate($rules);
        Category::create($validated);

        return redirect('/dashboard/categories')->with([
            'message' => 'Category has been Created',
            'feedback' => 'success',
            'mainText' => 'Yeee...'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
