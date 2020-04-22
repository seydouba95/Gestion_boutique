
<a type="button" class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#exampleModal{{$produit->id}}">Vendre</a>


<div class="modal" id="exampleModal{{$produit->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal{{$produit->id}}">Vente <strong>{{$produit->nom}} </strong></h5>

            </div>
            <div class="modal-body">
                

            <form action="{{url('/vente/'.$produit->id)}}" method="post">    
                       
                               @csrf
                               <div class="form-group">
                        <label class="col-form-label">Quantité en stock :</label>
                        <input disabled value="{{$produit->stock}}"  type="text" name="stock"  id="stock"  class="form-control">
                    </div>
                    <div class="form-group">                        
                    <label class="col-form-label">Quantité à vendre:</label>
                        <input  type="number" min=1  name="quantiteVendre"  id="quantiteVendre"  class="form-control" value="{{ old('quantiteVendre') }}">
                        <small class="help-block"></small>
                    </div>
                    <div class="form-group">                        
                    <label class="col-form-label">Prix de Vente:</label>
                        <input  type="number" min=1  name="prixVente"  id="prixVente"  class="form-control" value="{{ old('prixVente') }}">
                        <small class="help-block"></small>
                    </div>

              
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
              
                <button  type="submit" class="btn btn-primary">Vendre</button>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>
