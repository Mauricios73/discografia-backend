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
        'release_date',
        'artist_id',
    ];
    public function artist()
    {
        $this->belongsTo(Artist::class);
    }
    public function tracks()
    {
        $this->hasMany(Track::class);
    }
}
