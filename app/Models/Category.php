<?php

namespace App\Models;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'keterangan'];

    // Specify the attributes that should be cast to native types.
    public function berita()
    {
        return $this->hasMany(Berita::class);
    }
    public function getRouteKeyName(){
        return('nama');
    }
}
