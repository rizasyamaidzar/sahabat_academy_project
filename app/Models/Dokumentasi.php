<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Dokumentasi extends Model
{
    use HasFactory;

    protected $fillable = ['galery_id', 'foto'];

    // Specify the attributes that should be cast to native types.
    protected $casts = [
        'foto' => 'json'
    ];
    public function galery()
    {
        return $this->belongsTo(Galery::class);
    }
}
