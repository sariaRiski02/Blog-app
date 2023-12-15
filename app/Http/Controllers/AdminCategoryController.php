<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

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



        $validatedData = $request->validate([
            'name' => ["required", "max:100"],
            'slug' => ['required', 'unique:categories']
        ]);

        Category::create($validatedData);

        return redirect('/dashboard/categories')->with([
            'message' => 'Category has been Created',
            'feedback' => 'success',
            'mainText' => 'Yeee...'
        ]);



        foreach (Category::all() as $item) {
            if (strtolower($item->name) === $request['addCategory']) {

                return redirect('/dashboard/categories')->with([
                    'message' => 'Category has been already exist',
                    'feedback' => 'danger',
                    'mainText' => 'Oh No..'

                ]);
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.index', [
            'category' => $category,
            'categories' => Category::all()
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'name' => 'required|max:100',
            'slug' => 'required|unique:categories'
        ];

        $validatedData = $request->validate($rules);
        Category::where('id', $category->id)->update($validatedData);

        return redirect('dashboard/categories')->with([
            'message' => 'Category has been updated',
            'feedback' => 'success',
            'mainText' => 'Yee..'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {

        Category::destroy($category->id);

        return redirect('/dashboard/categories')->with([
            'message' => 'Category has been deleted',
            'feedback' => 'success',
            'mainText' => 'Yeee..'
        ]);

        //
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->category);
        return response()->json(['slug' => $slug]);
    }
}
