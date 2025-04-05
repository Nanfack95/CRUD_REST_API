<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Scategorie extends Model
{

    use HasFactory;
    protected $fillable = [
        'nomscategorie', 'imagescat', 'categorieID'
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorieID');
    }

    public function article()
    {
        return $this->hasMany(Article::class, "scategorieID");
    }
}
