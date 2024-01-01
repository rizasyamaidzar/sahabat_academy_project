<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Program extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'deskripsi', 'tujuan','cover', 'img'];

    // Specify the attributes that should be cast to native types.
    protected $casts = [
        'tujuan' => 'json',
        'img' => 'json'
    ];
    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
    public function getRouteKeyName(){
        return('nama');
    }
}
