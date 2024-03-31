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
        'album_order',
        'release_date',
        'album_id',
        'artist_id',
    ];
    public function album()
    {
        $this->belongsTo(Album::class);
    }
}
