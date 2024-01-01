<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class DashboardNewcomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Menghitung Jumlah Program Elite Cowo
         $jumlahcowok = Player::with('user')->where('program_id', '1')->where('jenis_kelamin','Laki-laki')->count();
        
         // Menghitung Jumlah Program Elite Cewe
         $jumlahcewek = Player::with('user')->where('program_id', '1')->where('jenis_kelamin','Perempuan')->count();
 
         //Mendapatkan Data Player Program Cowo Jenis kelamin Cowok
         $cowok = Player::with('user')->where('program_id', '1')->where('jenis_kelamin','Laki-Laki')->get();
         
         //Mendapatkan Data Player Program Cowo Jenis kelamin cewek
         $cewek = Player::with('user')->where('program_id', '1')->where('jenis_kelamin','Perempuan')->get();
         return view('admin.player.index',[
             // Menentukan Judul Pada Program
             'title' => 'New Comers',
             // Mengatur Link untuk menampilkan view detail
             'link' => 'newcomers',
 
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
    public function show(Player $newcomer)
    {
        return view('admin.player.show',[
            'player' => $newcomer,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $newcomers)
    {
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
