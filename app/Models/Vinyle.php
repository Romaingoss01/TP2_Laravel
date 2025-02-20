<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vinyle extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'release_year',
        'label',
        'description',
    ];


    //public function etablissement(){
    //    return $this->belongTo(Etablissement::class);
    //}

    public function artiste(){
        return $this->belongsTo(Artiste::class);
    }


}


