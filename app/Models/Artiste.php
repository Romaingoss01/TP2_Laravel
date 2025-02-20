<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    /** @use HasFactory<\Database\Factories\ArtisteFactory> */
    use HasFactory;

    protected $fillable =[
        'name',
        'country',
        'created_at',

    ];

    public function vinyle(){
        return $this->hasMany(Vinyle::class);
    }

}
