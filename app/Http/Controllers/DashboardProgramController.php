<?php

namespace App\Http\Controllers;


use App\Models\Jadwal;
use App\Models\Program;
use Illuminate\Http\Request;
class DashboardProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menghitung Jumlah Program Elite Cowo
        $jumlahjadwal = Jadwal::all()->count();
        $jumlahProgram = Program::all()->count();
        
        // Menghitung Jumlah Program Elite Cewe
        $program = Program::with('jadwal')->get();
        $jadwal = Jadwal::with('program')->get();

        //Mendapatkan Data Player Program Cowo Jenis kelamin Cowok
        return view('admin.program.index',[
            // Menentukan Judul Pada Program
            'title' => 'Program',
            // Mengatur Link untuk menampilkan view detail
            'link' => 'elite',
            "jumlahProgram"=>$jumlahProgram,
            "jumlahjadwal"=>$jumlahjadwal,
            "program" => $program,
            "jadwal" => $jadwal,


        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.program.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validateDate = $request->validate([
            "nama"=> "required",
            "deskripsi" =>"required",
            "tujuan" =>"required",
            "cover" => "image|file",
        ]);
        // if($request->file('cover')){
        //     $validateDate['cover']  = $request->file("cover")->store("program-cover");
        // }
        // if($request->file('img')){
        //     $validateDate['img']  = $request->file("img")->store("program-image");
        // }
        // $validateDate['tujuan'] = (strip_tags($validateDate['tujuan']));
       
        if($request->file('cover')){
            $namacover = "$request->nama".".".$validateDate['cover']->getClientOriginalExtension();
            $validateDate['cover']  = $validateDate['cover']->storeAs("program-cover",$namacover);
        }
        // if($request->file('img')){
        //     $validateDate['img']  = $request->file("img")->store("program-image");
        // }
         // $validateDate['cover']->move(public_path().'program-cover',$namacover);
        // Handle the "img" files upload
    if ($request->hasFile('img')) {
        $imgFiles = $request->file('img');
        $imgPaths = [];

        foreach ($imgFiles as $imgFile) {
            $imgName = uniqid() . '.' . $imgFile->getClientOriginalExtension();
            $imgPath = $imgFile->storeAs("program-image", $imgName);
            $imgPaths[] = $imgPath;
        }

        $validateDate['img'] = $imgPaths;
    }
        Program::create($validateDate);
        return redirect('/programAdmin')->with("success","New Program has been added!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $programAdmin)
    {
        $id = $programAdmin->id;
        $jadwal = Jadwal::where("program_id",$id)->get();
        return view('admin.program.show',[
            'program' => $programAdmin,
            'jadwal' => $jadwal
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $programAdmin)
    {
        return view('admin.program.edit',[
            'program' => $programAdmin,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $programAdmin)
    {
        
        $validateDate = $request->validate([
            "nama"=> "required",
            "deskripsi" =>"required",
            "tujuan" =>"required",
            "cover" => "image|file|max:1024",
        ]);
        
        if($request->file('cover')){
            $namacover = "$request->nama".".".$validateDate['cover']->getClientOriginalExtension();
            $validateDate['cover']  = $validateDate['cover']->storeAs("program-cover",$namacover);
        }
       
    if ($request->hasFile('img')) {
        $imgFiles = $request->file('img');
        $imgPaths = [];

        foreach ($imgFiles as $imgFile) {
            $imgName = uniqid() . '.' . $imgFile->getClientOriginalExtension();
            $imgPath = $imgFile->storeAs("program-image", $imgName);
            $imgPaths[] = $imgPath;
        }

        $validateDate['img'] = $imgPaths;
    }
        Program::where("id",$programAdmin->id)->update($validateDate);
        return redirect('/programAdmin')->with("success","Program has been Updated!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $programAdmin)
    {
        Program::destroy($programAdmin->id);
        return redirect('/programAdmin')->with("success","Category has been Deleted!");
    }
}
