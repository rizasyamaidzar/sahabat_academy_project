<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Program;
use Illuminate\Http\Request;

class DashboardJadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Menghitung Jumlah Program Elite Cowo
         $jumlahjadwal = Jadwal::all()->count();

         
         // Menghitung Jumlah Program Elite Cewe

         $jadwal = Jadwal::with('program')->get();
         $program = Program::all();
 
         //Mendapatkan Data Player Program Cowo Jenis kelamin Cowok
         return view('admin.jadwal.index',[
             // Menentukan Judul Pada Program
             'title' => 'Jadwal',
             // Mengatur Link untuk menampilkan view detail
             'link' => 'elite',
             "jumlahjadwal"=>$jumlahjadwal,
             "jadwal" => $jadwal,
             "program" => $program
 
 
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
            "hari"=> "required",
            "jam_mulai" =>"required",
            "jam_selesai" =>"required",
            "lokasi" => "required",
            "program_id"=> "required",
        ]);

        Jadwal::create($validateDate);
        return redirect('/jadwal')->with("success","New Jadwal has been added!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        return view('admin.jadwal.show',[
            'jadwal' => $jadwal
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jadwal $jadwal)
    {
        $program = Program::all();
 
        return view('admin.jadwal.edit',[
            'jadwal' => $jadwal,
            'program' => $program
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $validateDate = $request->validate([
            "hari"=> "required",
            "jam_mulai" =>"required",
            "jam_selesai" =>"required",
            "lokasi" => "required",
            "program_id"=> "required",
        ]);
        Jadwal::where("id",$jadwal->id)->update($validateDate);

        return redirect('/jadwal')->with("success","New Category has been Updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jadwal $jadwal)
    {
        Jadwal::destroy($jadwal->id);
        return redirect('/jadwal')->with("success","Jadwal has been Deleted!");
    }
}
