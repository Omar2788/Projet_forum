<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'user_id',
        'SousCategorieID'
        
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function sousCategorie()
    {
        return $this->belongsTo(SousCategorie::class,"SousCategorieID");
    }
    
}