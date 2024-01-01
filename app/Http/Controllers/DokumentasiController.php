<?php

namespace App\Http\Controllers;


use App\Models\Galery;
use App\Models\Dokumentasi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Import BelongsTo

class DokumentasiController extends Controller
{
    // Add the fillable and casts properties inside the class

    protected $fillable = ['galery_id', 'foto'];

    protected $casts = [
        'foto' => 'json'
    ];

    public function index()
    {
        return view('galery', [
            "title" => "Galery",
            "detail" => Dokumentasi::with('galery')->latest()->get()
        ]);
    }

    
}
