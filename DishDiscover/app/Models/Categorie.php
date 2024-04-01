<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomcategorie'
    ];

    public function sousCategorie()
    {
        return $this->hasMany(SousCategorie::class ,"categorieID");
    }
}
