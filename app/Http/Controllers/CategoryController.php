<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Category;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('berita',[
            "title" => "Berita",
            "detail" => Category::with('berita')->latest()->get(),
        ]);
    }

    public function berita()
    {
        return $this->hasMany(Berita::class);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $categoryName = $category->nama;
        $categoryId = $category->id;
            return view('berita', [
                'title' => $category->nama,
                'detail' => Berita::with('category')->latest()->where('category_id', $categoryId)->filter(request(['search']))->paginate(2),
                "news"=> Berita::with('category')->latest()->take(3)->get(),
                "ct"=> Berita::with('category')->latest()->get()
            ]);
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
    public function update(UpdateCategoryRequest $request, Category $category)
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
