<a  type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal{{$produit->id}}">Vendre</a>


<div class="modal fade" id="exampleModal{{$produit->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal{{$produit->id}}">Information sur  le produit </h5>

            </div>
            <div class="modal-body">
                <form action="" method="post">

                    <div class="form-group">
                        <label for="nom" class="col-form-label">Produit:</label>
                        <input disabled VALUE="{{$produit->nom}}" type="text" class="form-control" id="nom">
                    </div>
                    <div class="form-group">
                        <label for="prixVente" class="col-form-label">Prix de Vente:</label>
                        <input disabled VALUE="{{$produit->prixVente}}" type="text" class="form-control" id="prixVente">
                    </div>
                    <div class="form-group">
                        <label for="stock" class="col-form-label">Stock:</label>
                        <input  disabled value="{{$produit->stock}}" type="text" class="form-control" id="stock">
                    </div>
                    <div class="form-group">
                        <label for="quantite" class="col-form-label">Quantite:</label>
                        <input   type="number"  min="1" class="form-control" id="quantite">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Acheter</button>
            </div>
        </div>
    </div>
</div>

