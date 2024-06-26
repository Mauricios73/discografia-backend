<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'artist_id',
        'name',
        'Artista',
        'Ano',
        'LinkImagemCapa',
    ];
    
    public function artist()
    {
       return $this->belongsTo(Artist::class);
    }
    public function tracks()
    {
        return $this->hasMany(Track::class);
    }
}
