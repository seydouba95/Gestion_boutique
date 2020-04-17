<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\Vente;

class VenteController extends Controller
{
    
   public function vente($id)
   {
          
    $produit = Produit::find($id);
    if( $_POST['quantiteVendre'] <= $produit->stock) {
        
      $res= "Achat effectuee";
      $stock = $produit->stock = ($produit->stock) - ($_POST['quantiteVendre']) ;
        echo $res . " ";
        echo ("le reste est : " . " " .$produit->stock);
        Produit::where('id',$id)->update(['stock'=> $stock]);
    } 
    
    else
       echo "le nombre de produit en stock est insuffisant pour cette commande";
       
  
     return redirect('/');
}
}
