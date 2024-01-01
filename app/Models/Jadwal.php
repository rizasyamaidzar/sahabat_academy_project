<?php

namespace App\Models;

use App\Models\Program;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = ['hari', 'jam_mulai','jam_selesai','lokasi','program_id'];
    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
    public function getRouteKeyName(){
        return('hari');
    }
}
