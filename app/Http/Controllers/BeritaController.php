<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Category;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    return view('berita',[
        "title" => "Berita",
        "detail" => Berita::with('category')->latest()->filter(request(['search']))->paginate(8),
        "news"=> Berita::with('category')->latest()->take(3)->get(),
        "ct"=> Berita::with('category')->latest()->get()
        
    ]);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
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
    public function store(StoreBeritaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
    //
    // Retrieve the category of the current news article
    $category = $berita->category;

    // Retrieve all news articles that belong to the same category
    $relatedNews = $category->berita;

        return view('viewberita', [
            'title' => $berita->judul,
            'berita' => $berita,
            'detail' => $relatedNews,
            'all' =>Berita::latest()->take(3)->get(),
            'category' =>Category::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBeritaRequest $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        //
    }
}
