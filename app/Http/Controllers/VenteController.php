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
        
     
      $stock = $produit->stock = ($produit->stock) - ($_POST['quantiteVendre']) ;

        Produit::where('id',$id)->update(['stock'=> $stock]);
        
        if($_POST['quantiteVendre'] >1 )
        return redirect('/')->with('success',  $_POST['quantiteVendre'] . " " .  'Produits ' .$produit->nom . " " .'vendus' . " " . 'avec succès');      
         else
         return redirect('/')->with('success',  $_POST['quantiteVendre'] . " " .  'Produit ' .$produit->nom . " " .'vendu' . " " . 'avec succès');      

    } 
    
    else
    return redirect('/')->with('success',' ce  stock du Produit ' .$produit->nom . " " .'n\'est pas disponible ' . " ");      
   
    
       
  
   }
  
}