<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use illuminate\Suppport\Facades\Hash;
use App\Models\Player;
use App\Models\User;
use Illuminate\Http\Request;
class MultiStepForm extends Component
{   
    use WithFileUploads;

    public $nama;
    public $jenis_kelamin;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $no;
    public $nama_ortu;
    public $no_ortu;
    public $asal_sekolah;
    public $ukuran_jersey;
    public $pengalaman;

    //Data Fisik
    public $berat_badan;
    public $tinggi_badan;
    public $golongan_darah;
    public $riwayat_penyakit;
    
    //BERKAS
    public $akta;
    public $kartu_keluarga;
    public $foto;
    public $email;
    public $password;
    public $newUser;
    // public $no_wa;
    // public $nama_ortu;
    // public $no_ortu;
    // public $asal_sekolah;

    public $totalSteps = 4;
    public $currentStep = 1;
    public $terms;
    
    public function mount(){
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.multi-step-form');
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps){
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){
        // DATA DIRI
        if($this->currentStep == 1){
            $this->validate([
                'nama' => 'required|string',
                'jenis_kelamin' => 'required|string',
                'tempat_lahir' => 'required|string',
                'tanggal_lahir' => 'required',
                'no' => 'required',
                'nama_ortu' => 'required|string',
                'no_ortu' => 'required',
                'asal_sekolah' => 'required|string',
                'ukuran_jersey' => 'required|string',
                'pengalaman' => 'required|string',
                
            ]);
        }
        // DATA FISIK
        elseif($this->currentStep == 2){
            $this->validate([
                'berat_badan' => 'required',
                'tinggi_badan' => 'required',
                'golongan_darah' => 'required',
                'riwayat_penyakit' => 'required',
                // 'foto'=>'required|mimes:doc,docx,pdf|max:1024',
            ]);
        }
         // BERKAS
         elseif($this->currentStep == 3){
            $this->validate([
                'akta'=>"image|file",
                // 'akta'=>'required|mimes:doc,docx,pdf',
                'kartu_keluarga'=>"image",
                'foto'=>"image|file",
            ]);
        }
        // AKUN
        elseif($this->currentStep == 4){
            $this->validate([
                 'email' =>'required|email',
                 'password' => 'required|string|min:4'   
            ]);
        }
        
    }

    public function register(){
        $this->resetErrorBag();
        $this->validateData();

        $user = User::create([
            "email" => $this->email,
            "password" => $this->password,
            "role" => 1,
            "status" => 0,
        ]);
        $newUser = $user->id;
        
        $values = array(
            "nama"=>$this->nama,
            "jenis_kelamin"=>$this->jenis_kelamin,
            "tempat_lahir"=>$this->tempat_lahir,
            "tanggal_lahir"=>$this->tanggal_lahir,
            "no"=>$this->no,
            "nama_ortu"=>$this->nama_ortu,
            "no_ortu"=>$this->no_ortu,
            "asal_sekolah"=>$this->asal_sekolah,
            "ukuran_jersey"=>$this->ukuran_jersey,
            "pengalaman"=>$this->pengalaman,
            "berat_badan"=>$this->berat_badan,
            "tinggi_badan"=>$this->tinggi_badan,
            "golongan_darah"=>$this->golongan_darah,
            "riwayat_penyakit"=>$this->riwayat_penyakit,
            "akta"=>$this->akta,
            "kartu_keluarga"=>$this->kartu_keluarga,
            "foto"=>$this->foto,

            "user_id"=>$newUser,
            "program_id"=>1,
            // "no_ortu"=>$this->no_ortu,
            // // "frameworks"=>json_encode($this->frameworks),
            // "asal_sekolah"=>$this->asal_sekolah,
        );
        if($values['akta']){
            $namaAkta = "{$this->nama}.".$values['akta']->getClientOriginalExtension();
            $values['akta']  =  $this->akta->storeAs("akta_player",$namaAkta);
        }
        if($values['kartu_keluarga']){
            $namaKartukeluarga = "{$this->nama}.".$values['kartu_keluarga']->getClientOriginalExtension();
            $values['kartu_keluarga']  =  $this->kartu_keluarga->storeAs("kk_player",$namaKartukeluarga);
        }
        if($values['foto']){
            $namafoto = "{$this->nama}.".$values['foto']->getClientOriginalExtension();
            $values['foto']  =  $this->foto->storeAs("foto_player",$namafoto);
        }
        
        Player::create($values);
        // $cv_name = 'CV_'.time().$this->cv->getClientOriginalName();
        // $upload_cv = $this->cv->storeAs('students_cvs', $cv_name);
        $data = [
            'name'=>$this->nama,
            'title'=> 'Registration Success'
        ];
        // return redirect()->route('registration.success', $data)->with('title', 'Success');   
        return redirect()->route('registration.success', $data);
    
    
    
        // return redirect()->route('registration.success')->with(['data' => $data, 'title' => 'Success']);
        // return request()->all();     
    }
}
