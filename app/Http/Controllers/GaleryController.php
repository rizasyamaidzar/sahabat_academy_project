<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GaleryController extends Controller
{
    //
    protected $fillable = ['nama', 'deskripsi'];


    public function dokumentasi(): BelongsTo
    {
        return $this->belongsTo(Dokumentasi::class);
    }

    public function index()
    {
        return view('galery', [
            "title" => "Galery",
            "detail" => Galery::with('dokumentasi')->latest()->get(),
            
        ]);
    }
    public function show(Galery $galery){
        // Use $nama as the parameter
    return view('viewgalery', [
        'title' => $galery->nama,
        'dokumentasi' => $galery->dokumentasi,
        'detail' => $all = Galery::all()
    ]);
    }
}
