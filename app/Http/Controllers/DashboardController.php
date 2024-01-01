<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Dokumentasi;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $player = Player::where("user_id", $user->id)->first();
        $jmcowo = Player::where('jenis_kelamin', 'Laki-Laki')->count();
        $jmcowo = Player::where('jenis_kelamin', 'Laki-Laki')->count();
        $berita = Berita::count();
        $galery = Dokumentasi::count();
        return view('admin.dashboard',[
            'jumlah' => $jmcowo,
            'player' => $player,
            'berita'=>$berita,
            'galery'=> $galery
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
        //
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
