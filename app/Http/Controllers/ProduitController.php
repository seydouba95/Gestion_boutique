<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;
use App\Http\Requests\VenteRequest;
use App\Vente;
use  Gate;
class ProduitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index1()
    {
        return view('home');
    }
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *  @return \Illuminate\Contracts\Support\Renderable
     */
    public function search()
    {            $produit = request()->input('produit');
        if($produit == ""){
            return redirect('/');        

        }else{

            $produits= Produit::where('nom','like',"%$produit%")
             ->orwhere('id','like',"%$produit%")
             ->orwhere('prixUnitaire','like',"%$produit%")
             ->orwhere('stock','like',"%$produit%")
             ->paginate(2);
       
     
            return view('index',['produits'=>$produits,'layout'=>'index']);  
        }
      
           
      


      

    }


       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *  @return \Illuminate\Contracts\Support\Renderable
     */
    public function produitSelected(){
        $produits = Produit::where('isSelected','=',true)->get();
        return view('index',['produits'=>$produits,'layout'=>'produitSelected']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *  @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $produits = Produit::where('stock','>',0)->paginate(3);
        return view('index',['produits'=>$produits,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           if(!Gate::allows('isAdmin')){
               abort(404,"Autorisation interdite");
           }
        $produits = Produit::where('stock','>',0)->paginate(2);
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
        $produit->stock = $request->input('stock');

      
        $produit->save();
      
       
        
      

        return redirect('/')->with('success','Produit ajouté avec succès');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!Gate::allows('isAdmin')){
            abort(404,"Autorisation interdite");
        }
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
        if(!Gate::allows('isAdmin')){
            abort(404,"Autorisation interdite");
        }
        $produit = Produit::find($id);
        $produits = Produit::where('stock','>',0)->get();
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
        if(!Gate::allows('isAdmin')){
            abort(404,"Autorisation interdite");
        }
        $produit = Produit::find($id);
        $produit->nom = $request->input('nom');
        $produit->prixUnitaire = $request->input('prixUnitaire');
        $produit->stock = $request->input('stock');
        $produit->save();
        return redirect('/')->with('success','Produit ID:' .$produit->id . " " .'modifié ' . " " .'avec succès');      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { if(!Gate::allows('isAdmin')){
        abort(404,"Autorisation interdite");
    }
        $produit = Produit::find($id);
        $produit->delete();

        return redirect('/')->with('success','Produit ID:' .$produit->id . " " .'supprimé' . " " .'avec succès');      

    }
}
