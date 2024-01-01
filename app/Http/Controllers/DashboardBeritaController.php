<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Menghitung Jumlah Program Elite Cowo
         $jumlahCategory = Category::all()->count();
         $jumlahBerita = Berita::all()->count();
         
         // Menghitung Jumlah Program Elite Cewe
         $category = Category::with('berita')->get();
         $berita = Berita::with('category')->get();
 
         //Mendapatkan Data Player Program Cowo Jenis kelamin Cowok
         return view('admin.berita.index',[
             // Menentukan Judul Pada Program
             'title' => 'Kabar Sahabat',
             // Mengatur Link untuk menampilkan view detail
             'link' => 'Berita',
             "jumlahCategory"=>$jumlahCategory,
             "jumlahBerita"=>$jumlahBerita,
             "category" => $category,
             "berita" => $berita,
 
 
         ]);
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
    public function store(Request $request)
    {
        $validateDate = $request->validate([
            "nama"=> "required",
            "keterangan" =>"required"
        ]);

        Category::create($validateDate);
        return redirect('/beritaAdmin')->with("success","New Category has been added!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $beritaAdmin)
    {
        // mendapatkan data berita berdasarkan category
        $id = $beritaAdmin->id;
        $berita = Berita::where("category_id",$id)->get();
        return view('admin.berita.show',[
            'category' => $beritaAdmin,
            'berita' => $berita
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $beritaAdmin)
    {
       
        return view('admin.berita.edit',[
            'category' => $beritaAdmin,
            'berita' => Berita::all()
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $beritaAdmin)
    {
        $validateDate = $request->validate([
            "nama"=> "required",
            "keterangan" =>"required"
        ]);

        Category::where("id",$beritaAdmin->id)->update($validateDate);
        return redirect('/programAdmin')->with("success","New Category has been Updated!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $beritaAdmin)
    {
        Category::destroy($beritaAdmin->id);
        return redirect('/beritaAdmin')->with("success","Category has been Deleted!");
        
    }
}
