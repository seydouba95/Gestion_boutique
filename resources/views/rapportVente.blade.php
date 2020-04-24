
  <style>
     

        tfoot {
          font-weight: bold;
        }
    </style>
<div class="card mb-3">
<img src="https://img.chefdentreprise.com/Img/BREVE/2014/10/246254/Bilan-comptable-quelles-informations-retirer--F.jpg" class="card-img-top" alt="..." >
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
                <th scope="col">Prix Vente</th>
                <th scope="col">Quantité Vendu</th>
                <th scope="col">Stock restant</th>
                <th scope="col">Total  Vente</th>
                <th scope="col">Bénéfices</th>
             
               

             

            </tr>
            </thead>
            </thead>

            <tfoot >
          <tr>
          
            <td   style="color:red" colspan="6"><strong>Total :</strong></td>
            <td  style="color:green">
           
           <?php
             $priceTotal = 0;
             
            foreach($produits as $produit){
              
                $price = $produit->quantiteVendre * $produit->prixVente;
                $priceTotal = $priceTotal + $price;
               
            }
             
            echo ($priceTotal . " "  . "FCFA");
            
            

           ?>
           
         
          
            </td>
            <td  style="color:blue">
           
           <?php
             $priceTotal = 0;
            foreach($produits as $produit){
              
                $price = $produit->quantiteVendre * $produit->prixVente - $produit->prixUnitaire;
                $priceTotal = $priceTotal + $price;
               
            }
          
            echo ($priceTotal . " "  . "FCFA");
                
                 
            

           ?>
         
          
            </td>
          </tr>
          
        </tfoot>

            <tbody>

            @foreach($produits as $produit)
          
                <tr>

                    <td>{{$produit->id}}</td>
                    <td>{{$produit->nom}}</td>
                    <td>{{$produit->prixUnitaire}} <strong>FCFA </strong></td>
                    <td>{{$produit->prixVente}}  <strong>FCFA </strong></td>
                    <td>{{$produit->quantiteVendre}}</td>
                    <td>{{$produit->stock}}</td>
                    <td>{{$produit->quantiteVendre * $produit->prixVente}}  <strong>FCFA </strong></td>
                    <td>{{$produit->quantiteVendre * $produit->prixVente - $produit->prixUnitaire}}  <strong>FCFA </strong></td>
                 
                  

                </tr>
            @endforeach
            </tbody>
          
        </table>

        
        
        </div>
      
    </div>
</div>


