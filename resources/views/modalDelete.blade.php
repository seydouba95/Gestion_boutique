<a  type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$produit->id}}">Supprimer</a>


<div class="modal  modal-fade"   id="delete{{$produit->id}}" tabindex="-1" role="dialog" aria-labelledby="MyModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="MyModalLabel{{$produit->id}}">Confirmation Suppression</h5>


            </div>
            <div class="modal-body">
                <form action="{{url('/destroy/'.$produit->id)}}" method="get">

                    <div class="form-group">
                       <p class="text-center">
                         Etes-vous sur de vouloir supprimer ceci ?
                       </p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non,Annuler</button>
                        <button type="submit" class="btn btn-danger">Oui,Supprimer</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

