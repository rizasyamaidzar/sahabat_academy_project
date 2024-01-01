<?php

namespace App\Models;

use App\Models\Dokumentasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Galery extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'deskripsi'];

    // // Specify the attributes that should be cast to native types.
    // protected $casts = [
        
    //     'img' => 'json'
    // ];
    public function dokumentasi()
    {
        return $this->hasMany(Dokumentasi::class);
    }

    public function getRouteKeyName(){
        return 'nama';
    }
}
