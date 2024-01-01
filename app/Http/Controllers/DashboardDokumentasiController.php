<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use Illuminate\Http\Request;

class DashboardDokumentasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            "galery_id"=> "required",
        ]);
        if ($request->hasFile('foto')) {
            $imgFiles = $request->file('foto');
            $imgPaths = [];
    
            foreach ($imgFiles as $imgFile) {
                $imgName = uniqid() . '.' . $imgFile->getClientOriginalExtension();
                $imgPath = $imgFile->storeAs("program-image", $imgName);
                $imgPaths[] = $imgPath;
            }
    
            
           
            
            $validateDate['foto'] = $imgPaths;
        Dokumentasi::create($validateDate);
        return redirect('/galeryAdmin')->with("success","New Dokumentasi has been added!");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Dokumentasi $dokumentasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokumentasi $dokumentasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokumentasi $dokumentasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokumentasi $dokumentasi)
    {
        //
    }
}
