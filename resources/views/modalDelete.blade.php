<!--<a  type="button" style="margin:3px" class="btn btn-sm-2 btn-danger" data-toggle="modal" href="#" data-target="#delet">Delete</a>-->
<div class="product-button"><a data-toggle="modal" href="#" data-target="#delete{{$produit->id}}"><i class="fa fa-trash"></i></a></div>



<div class="modal"   id="delete{{$produit->id}}" tabindex="-1" role="dialog" aria-labelledby="MyModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="MyModalLabel{{$produit->id}}">Confirmation Suppression {{$produit->nom}}</h5>


            </div>
            <div class="modal-body">
                <form action="{{url('/destroy/'.$produit->id)}}" method="get">

                    <div class="form-group">
                       <p class="text-center">
                       êtes-vous sûr de vouloir supprimer ce produit ?
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

