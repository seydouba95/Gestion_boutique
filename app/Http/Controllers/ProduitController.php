<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;
use App\Http\Requests\VenteRequest;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $produits = Produit::where('stock','>',0)->get();
        return view('index',['produits'=>$produits,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $produits = Produit::where('stock','<>' ,0);
        return view('index',['produits'=>$produits,'layout'=>'create']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VenteRequest $request)
    {      

        $produit = new Produit();
        $produit->nom = $request->input('nom');
        $produit->prixUnitaire = $request->input('prixUnitaire');
        $produit->prixVente = $request->input('prixVente');
        $produit->stock = $request->input('stock');

      
        $produit->save();
      
       
        
      

        return redirect('/');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //montrer un produit par son id
        $produit = Produit::find($id);
        $produits = Produit::all();
        return view('index',['produits'=>$produits,'produit'=>$produit,'layout'=>'show']);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $produit = Produit::find($id);
        $produits = Produit::all();
        return view('index',['produits'=>$produits,'produit'=>$produit,'layout'=>'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produit = Produit::find($id);
        $produit->nom = $request->input('nom');
        $produit->prixUnitaire = $request->input('prixUnitaire');
        $produit->prixVente = $request->input('prixVente');
        $produit->stock = $request->input('stock');
        $produit->save();
        return redirect()->back();
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Produit::find($id);
        $produit->delete();

        return redirect()->back();

    }
}
