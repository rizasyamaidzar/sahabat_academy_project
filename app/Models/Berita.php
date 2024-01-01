<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;
    
    protected $fillable = ['judul', 'tanggal', 'cover','deskripsi', 'foto','isi_artikel', ];

    // Specify the attributes that should be cast to native types.
    protected $casts = [
        'foto' => 'json',
        'isi_artikel' => 'json'
    ];

    public function scopeFilter($query, array $filter){
        // if(request(['search']) ? $filter['search'] : false){
        //     return $query->where('judul','like', '%'. request('search') . '%')->
        //     orWhere('deskripsi','like', '%'. request('search') . '%');
        // }

        // cara ringkasnya
        // filter by keyword search
        $query->when($filter['search'] ?? false, function($query, $search){
            return $query->where('judul','like', '%'. $search . '%')->
            orWhere('judul','like', '%'. $search . '%');
        });

        // filter by category
        $query->when($filter['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('nama', $category);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function getRouteKeyName(){
        return('id');
    }
}
