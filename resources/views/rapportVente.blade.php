

<div class="card mb-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQUs4AMlgLKe0uNk0TnLbYYTBHk7kqvocu0mj1-j6Mqu7n5GyZR&usqp=CAU" class="card-img-top" alt="..." >
    <div class="card-body">
        <h5 class="card-title">Liste des produits <strong>vendus</strong></h5>
        <p class="card-text">
            Vous pouvez trouver ici tous les informations  sur tous nos produits vendus
        </p>
        <div class="table-responsive">
        
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom </th>
                <th scope="col">Prix Unitaire</th>
                <th scope="col">Prix De  Vente</th>
                <th scope="col">Quantité Vendu</th>
                <th scope="col">Stock restant</th>
                <th scope="col">Total De Vente</th>
                <th scope="col">Chiffre D'affaires</th>
             
               

             

            </tr>
            </thead>
            <tbody>

            @foreach($produits as $produit)
                <tr>

                    <td>{{$produit->id}}</td>
                    <td>{{$produit->nom}}</td>
                    <td>{{$produit->prixUnitaire}} Fcfa</td>
                    <td>{{$produit->prixVente}} Fcfa</td>
                    <td>{{$produit->quantiteVendre}}</td>
                    <td>{{$produit->stock}}</td>
                    <td>{{$produit->quantiteVendre * $produit->prixVente}} Fcfa</td>
                    <td>{{$produit->quantiteVendre * $produit->prixVente - $produit->prixUnitaire}} Fcfa</td>
                 
                  

                </tr>
            @endforeach
            </tbody>
        </table>

        
        
        </div>
      
    </div>
</div>


