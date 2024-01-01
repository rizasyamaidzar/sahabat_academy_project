<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use App\Models\Galery;
use Illuminate\Http\Request;

class DashboardGaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Menghitung Jumlah Program Elite Cowo
         $jumlahGalery = Galery::all()->count();
         $jumlahDokumentasi = Dokumentasi::all()->count();
         
         // Menghitung Jumlah Program Elite Cewe
         $galery = Galery::with('dokumentasi')->get();
         $dokumentasi = Dokumentasi::with('galery')->get();
 
         //Mendapatkan Data Player Program Cowo Jenis kelamin Cowok
         return view('admin.galery.index',[
             // Menentukan Judul Pada Program
             'title' => 'Program',
             // Mengatur Link untuk menampilkan view detail
             'link' => 'elite',
             "jumlahGalery"=>$jumlahGalery,
             "jumlahDokumentasi"=>$jumlahDokumentasi,
             "galery" => $galery,
             "dokumentasi" => $dokumentasi,
 
 
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
        $validateDate = $request->validate([
            "nama"=> "required",
            "deskripsi" =>"required"
        ]);

        Galery::create($validateDate);
        return redirect('/galeryAdmin')->with("success","New Galery has been added!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Galery $galeryAdmin)
    {
        // mendapatkan dokumentasi berdasarkan jenis galery
        $id = $galeryAdmin->id;
        $dokumentasi = Dokumentasi::where("galery_id",$id)->get();
        return view('admin.galery.show',[
            'galery' => $galeryAdmin,
            'dokumentasi' => $dokumentasi
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galery $galeryAdmin)
    {
        return view('admin.galery.edit',[
            'galery' => $galeryAdmin,
            'dokumentasi' => Dokumentasi::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galery $galeryAdmin)
    {
        $validateDate = $request->validate([
            "nama"=> "required",
            "deskripsi" =>"required"
        ]);

        Galery::where("id",$galeryAdmin->id)->update($validateDate);
        return redirect('/galeryAdmin')->with("success","Galery has been Updated!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galery $galeryAdmin)
    {
        Galery::destroy($galeryAdmin->id);
        return redirect('/galeryAdmin')->with("success","Category has been Deleted!");
    }
}
