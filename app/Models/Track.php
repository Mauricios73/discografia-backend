<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'duration',
        'album_id',
        'artista',
    ];
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
