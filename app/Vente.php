<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    protected $fillable = ['quantiteVendre','produit_id'];

	public $timestamps = true;
    public function produit(){
        return $this->belongsTo('App\Produit');
    }
}
