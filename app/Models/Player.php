<?php

namespace App\Models;

use App\Models\User;
use App\Models\Program;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Player extends Model implements Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'no',
        'nama_ortu',
        'no_ortu',
        'asal_sekolah',
        'ukuran_jersey',
        'pengalaman',
        'berat_badan',
        'tinggi_badan',
        'golongan_darah',
        'riwayat_penyakit',
        'akta',
        'kartu_keluarga',
        'foto',
        'user_id',
        'program_id',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getRouteKeyName(){
        return('nama');
    }
    // Implement methods from Authenticatable
    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }
    // Implement the following method
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    // Implement the following method
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    // Implement the following method
    public function getRememberTokenName()
    {
        return 'remember_token';
    }
    // protected $guard = ['id'];
}
