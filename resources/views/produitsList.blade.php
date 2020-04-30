

<div class="card mb-3 ">
    <br><br>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ66I-5W3XAFBYbTW3Bs5_MoOV__BFGEuJsWJsmLV5LUmI1a9K2&usqp=CAU" class="card-img-top"   style="height:280px"  alt="..." >
    <div class="card-body">
        <h5 class="card-title">Liste des produits</h5>
        <p class="card-text">
            Vous pouvez trouver ici tous les informations  sur tous nos produits en stock
         
            
        </p>
     
        <form action="{{url('/search')}}" method="get" style="float:right" class="form-inline my-1 my-lg-0">
      <input class="form-control mr-sm" type="text" name="produit" placeholder="Search...." aria-label="Search">
        
       
 <button class="btn btn-outline-info" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
</button>
            
         
    </form>
    
        
  
        @include("messages")
        <div class="table-responsive">
        &nbsp;
        <table class="table table-bordered table-dark">
            <thead class="thead-light">
    
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prix Unitaire</th>
                <th scope="col">stock</th>
                <th style="text-decoration:center" scope="col">Actions</th>

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
                        <a href="{{url('/show/'.$produit->id)}}"  style="margin:3px"  class="btn btn-info">Detail</a>
                        <a href="{{url('/edit/'.$produit->id)}}"  style="margin:3px"  class="btn  btn-warning">Editer</a>
                        @include('modalDelete')
                       @endcan
                        @include('venteProduit')


                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
      
                {{$produits->render()}}
         
        </div>
     

      
    </div>
</div>




