<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'caracteristiques',
        'designation',
        'marque',
        'reference',
        'qtestock',
        'prixAchat',
        'prixVente',
        'prixSolde',
        'imageartpetitf',
        'imageartgrandf',
        'categorieID',
        'scategorieID'
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorieID');
    }

    public function scategorie()
    {
        return $this->belongsTo(Scategorie::class, 'scategorieID');
    }

    
}
