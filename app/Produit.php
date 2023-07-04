<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['nom','prixUnitaire','prixVente','stock','image'];

    public $timestamps = true;

    public function vente(){
        return $this->hasMany('App\Vente');
    }


}
