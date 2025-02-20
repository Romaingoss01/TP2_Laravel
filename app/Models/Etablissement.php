<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    /** @use HasFactory<\Database\Factories\EtablissementFactory> */
    use HasFactory;

    protected $fillable = [
        'nomEtablissement',
    ];

    public function vinyle(){
        return $this->hasMany(Vinyle::class);
    }
}
