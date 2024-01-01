<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Program;
use Illuminate\Http\Request;

class DashboardPlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
       
        // Menghitung Jumlah All Player Cowo
        $jumlahcowok = Player::where('jenis_kelamin','Laki-laki')->count();
        
        // Menghitung Jumlah All Player Cewe
        $jumlahcewek = Player::where('jenis_kelamin','Perempuan')->count();

        //Mendapatkan Data Player Program Cowo Jenis kelamin Cowok
        $cowok = Player::where('jenis_kelamin','Laki-Laki')->get();
        
        //Mendapatkan Data Player Program Cowo Jenis kelamin cewek
        $cewek = Player::where('jenis_kelamin','Perempuan')->get();
        
        return view('admin.player.index',[
            // Menentukan Judul Pada Program
            'title' => '',
            // Mengatur Link untuk menampilkan view detail
            'link' => 'player',

            "male" => $cowok,
            "female" => $cewek,
            "jumlahcowo"=>$jumlahcowok,
            "jumlahcewe"=>$jumlahcewek,
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        return view('admin.player.show',[
            'player' => $player
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        //
    }
}
