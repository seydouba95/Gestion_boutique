

<div class="card mb-3 ">
    <br><br>
   <!--<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ66I-5W3XAFBYbTW3Bs5_MoOV__BFGEuJsWJsmLV5LUmI1a9K2&usqp=CAU" class="card-img-top"   style="height:280px"  alt="..." >--> 
    <div class="card-body">
        <h5 class="card-title">Liste des produits</h5>
        <p class="card-text">
            Vous pouvez trouver ici tous les informations  sur tous nos produits en stock
         
            
        </p>
     
        <form id="form" action="{{url('/search')}}" method="get" style="float:right" class="form-inline my-1 my-lg-0">
 
      <input   class="form-control mr-sm" type="text"  id="produit" name="produit" placeholder="Search...." aria-label="Search">
        
       
    <button   id="button" class="btn btn-outline-info" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
    </button>

     

    </form>
 

  

  
        <div class="table-responsive">
        &nbsp;
     

        <div class="container">
           
        
            <div class="row">
                <!-- Product-->
                @foreach($produits as $produit)
                <div class="col-lg-4 col-sm-6 mb-30">
                    <div class="product-card mx-auto mb-3">
                        <div class="product-head d-flex justify-content-between align-items-center"><span class="badge badge-success">{{$produit->stock}}</span>
                            
                        </div>
                        <a class="product-thumb" href="{{url('/show/'.$produit->id)}}"><img src="/Image/{{ $produit->image }}" alt="Product Thumbnail"></a>
                        <div class="product-card-body">
                            <h5 class="product-title"><a href="{{url('/show/'.$produit->id)}}">{{$produit->nom}}</a></h5><span class="product-price">
                                {{$produit->prixUnitaire}} Fcfa</span>
                        </div>
                        <div class="product-buttons-wrap">
                            <div class="product-buttons">
                                <div class="product-button"><a href="{{url('/edit/'.$produit->id)}}" ><i class="fa fa-edit"></i></a></div>
                                @include('venteProduit')                                
                                @include('modalDelete')
                            </div>
                        </div>
                     
                    </div>
                </div>
                @endforeach
            </div>
           
        </div>
   
        <br>
                {{$produits->render()}}
         
        </div>
     

      
    </div>
</div>



