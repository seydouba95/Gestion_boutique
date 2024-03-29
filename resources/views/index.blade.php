
<?php echo
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: text/html');?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Foutanke Shop</title>
</head>
<body>
@include("navbar")
<div class="row header-container justify-content-center">
   

</div>

  @if($layout=='index')
      <div class="container-fluid mt-4">
          <div class="container-fluid mt-4">
          <div class="row justify-content-center">
              <section class="col-md-7">
                
                  @include("produitsList")
                 
                 

              </section>
          </div>

          </div>


      </div>
      @elseif($layout== 'produitSelected')
      <div class="container-fluid mt-4">
          <div class="container-fluid mt-4">
          <div class="row justify-content-center">
              <section class="col-md-7">
                
                  @include("rapportVente")
                 
                 

              </section>
          </div>

          </div>


      </div>
      
     
@elseif($layout== 'create')
      <div class="container-fluid mt-4">
          <div class="row">
              <section class="col-md-7">
                  @include("produitsList")
                 
              </section>
              
              <section class="col">

                      <img src="data:image/jpeg;base64,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" class="card-img-top" alt="..." style="height: 300px">
                      <div class="card-body">
                          <h5 class="card-title">Entrez les informations sur le nouveau produit</h5>
                          <form action="{{url('/store')}}" method="post"  enctype="multipart/form-data">
                              @csrf
                              <div class="form-group {!! $errors->has('nom') ? 'is-invalid' : '' !!}">
                                  <label>Nom</label>
                                  <input  name="nom"  type="text" class="form-control"  placeholder="Entrer le nom du produit" value="{{ old('nom') }}">
                                  {!! $errors->first('nom', '<small  style = "color: red "  class="help-block">:message</small>') !!}
                              
                              </div>
                              <div  class="form-group {!! $errors->has('prixUnitaire') ? 'is-invalid' : '' !!}">
                                  <label>Prix Unitaire</label>
                                  <input value="{{ old('prixUnitaire') }}"name="prixUnitaire" type="number" min="0"  class="form-control"  placeholder="Entrer le prix  unitaire du produit">
                                  {!! $errors->first('prixUnitaire', '<small  style = "color: red " class="help-block">:message</small>') !!}
                              </div>
                              
                              <div  class="form-group {!! $errors->has('stock') ? 'is-invalid' : '' !!}">
                                  <label>Stock</label>
                                  <input  name="stock" type="number" class="form-control"  min="0" placeholder="Entrer le stock du produit" value="{{ old('stock') }}">
                                  {!! $errors->first('stock', '<small style = "color: red " class="help-block">:message</small>') !!}
                              </div>

                              <div class="form-group {!! $errors->has('nom') ? 'is-invalid' : '' !!}">
                                <label>Image</label>
                                <input  name="image" type="file" class="form-control" >
                                {!! $errors->first('nom', '<small  style = "color: red "  class="help-block">:message</small>') !!}
                            
                            </div>

                              <input type="submit" class="btn btn-info" value="Enregistrer">


                              <input type="reset" class="btn btn-danger" value="Effacer">


                          </form>

                      </div>


              </section>
          </div>


      </div>
  @elseif($layout== 'show')
      <div class="container-fluid mt-4">
          <div class="row">
              <section class="col-md-7">
                  @include("produitsList")
              </section>
              <section class="col-md-5">
                  <img src="data:image/jpeg;base64,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" class="card-img-top" alt="..." style="height: 300px">
                  <div class="card-body">
                      <h5 class="card-title"> Voici le detail du  produit {{$produit->nom}}</h5>
                      <form action="{{url('/show/'.$produit->id)}}" method="post">
                          @csrf
                          <div class="form-group">
                              <label>Nom</label>
                              <input  disabled value="{{$produit->nom}}" name="nom" type="text" class="form-control"  placeholder="Entrer le nom du produit">
                          </div>
                          <div class="form-group">
                              <label>Prix Unitaire</label>
                              <input disabled value="{{$produit->prixUnitaire}}" name="prixUnitaire" type="text" class="form-control"  placeholder="Entrer le prix  unitaire du produit">
                          </div>
                        
                          <div class="form-group">
                              <label>Stock</label>
                              <input disabled value="{{$produit->stock}}" name="stock" type="text" class="form-control"  placeholder="Entrer le stock du produit">
                          </div>
                          <a href="{{url('/')}}" class="btn btn-sm btn-info">Retour</a>




                      </form>

                  </div>


              </section>
          </div>


      </div>
  @elseif($layout== 'edit')
      <div class="container-fluid mt-4">
          <div class="row">
              <section class="col-md-7">
                  @include("produitsList")
              </section>
              <section class="col-md-5">
                  <img src="data:image/jpeg;base64,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" class="card-img-top" alt="..." style="height: 300px">
                  <div class="card-body">
                      <h5 class="card-title"> Update du produit {{$produit->nom}}</h5>
                      <form action="{{url('/update/'.$produit->id)}}" method="post" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          <div class="form-group">
                              <label>Nom</label>
                              <input  value="{{$produit->nom}}" name="nom" type="text" class="form-control"  placeholder="Entrer le nom du produit">
                          </div>
                          <div class="form-group">
                              <label>Prix Unitaire</label>
                              <input  value="{{$produit->prixUnitaire}}" name="prixUnitaire" type="text" class="form-control"  placeholder="Entrer le prix  unitaire du produit">
                          </div>
                        
                          <div class="form-group">
                              <label>Stock</label>
                              <input value="{{$produit->stock}}" name="stock" type="text" class="form-control"  placeholder="Entrer le stock du produit">
                          </div>

                          <div class="form-group">
                            <label>Image</label>
                            <input name="image" type="file" class="form-control" placeholder="Image">
                            <img src="/Image/{{ $produit->image }}" width="80px">
                        </div>


                          <input type="submit" class="btn btn-info" value="Editer">
                          <a  href="{{url('/')}}" class="btn  btn-info">Retour</a> 


                      </form>

                  </div>


              </section>
          </div>


      </div>
      @endif
   
 
<footer>

</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.10.0/feather.js"></script>              


</body>
</html>
<script>
    window.onload = function () {
        if (typeof history.pushState === "function") {
            history.pushState("jibberish", null, null);
            window.onpopstate = function () {
                history.pushState('newjibberish', null, null);
            };
        } else {
            var ignoreHashChange = true;
            window.onhashchange = function () {
                if (!ignoreHashChange) {
                    ignoreHashChange = true;
                    window.location.hash = Math.random();
                } else {
                    ignoreHashChange = false;   
                }
            };
        }
    }
 </script>