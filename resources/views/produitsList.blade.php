

<div class="card mb-3 ">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQUs4AMlgLKe0uNk0TnLbYYTBHk7kqvocu0mj1-j6Mqu7n5GyZR&usqp=CAU" class="card-img-top" alt="..." >
    <div class="card-body">
        <h5 class="card-title">Liste des produits</h5>
        <p class="card-text">
            Vous pouvez trouver ici tous les informations  sur tous nos produits en stock
        </p>
        @include("messages")
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prix Unitaire</th>
                <th scope="col">stock</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>

            @foreach($produits as $produit)
                <tr>

                    <td>{{$produit->id}}</td>
                    <td>{{$produit->nom}}</td>
                    <td>{{$produit->prixUnitaire}} Fcfa</td>
                    <td>{{$produit->stock}}</td>

                    <td>
                        @can('isAdmin')
                        <a href="{{url('/show/'.$produit->id)}}" class="btn btn-sm btn-info">Detail</a>
                        <a href="{{url('/edit/'.$produit->id)}}" class="btn btn-sm btn-warning">Editer</a>
                        @include('modalDelete')
                       @endcan
                        @include('venteProduit')


                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>




