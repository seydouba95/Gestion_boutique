
  <style>
     

     body{
    margin-top:20px;
    background:#eee;
}

.invoice {
    background: #fff;
    padding: 20px
}

.invoice-company {
    font-size: 20px
}

.invoice-header {
    margin: 0 -20px;
    background: #f0f3f4;
    padding: 20px
}

.invoice-date,
.invoice-from,
.invoice-to {
    display: table-cell;
    width: 1%
}

.invoice-from,
.invoice-to {
    padding-right: 20px
}

.invoice-date .date,
.invoice-from strong,
.invoice-to strong {
    font-size: 16px;
    font-weight: 600
}

.invoice-date {
    text-align: right;
    padding-left: 20px
}

.invoice-price {
    background: #f0f3f4;
    display: table;
    width: 100%
}

.invoice-price .invoice-price-left,
.invoice-price .invoice-price-right {
    display: table-cell;
    padding: 20px;
    font-size: 20px;
    font-weight: 600;
    width: 75%;
    position: relative;
    vertical-align: middle
}

.invoice-price .invoice-price-left .sub-price {
    display: table-cell;
    vertical-align: middle;
    padding: 0 20px
}

.invoice-price small {
    font-size: 12px;
    font-weight: 400;
    display: block
}

.invoice-price .invoice-price-row {
    display: table;
    float: left
}

.invoice-price .invoice-price-right {
    width: 25%;
    background: #2d353c;
    color: #fff;
    font-size: 28px;
    text-align: right;
    vertical-align: bottom;
    font-weight: 300
}

.invoice-price .invoice-price-right small {
    display: block;
    opacity: .6;
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 12px
}

.invoice-footer {
    border-top: 1px solid #ddd;
    padding-top: 10px;
    font-size: 10px
}

.invoice-note {
    color: #999;
    margin-top: 80px;
    font-size: 85%
}

.invoice>div:not(.invoice-footer) {
    margin-bottom: 20px
}

.btn.btn-white, .btn.btn-white.disabled, .btn.btn-white.disabled:focus, .btn.btn-white.disabled:hover, .btn.btn-white[disabled], .btn.btn-white[disabled]:focus, .btn.btn-white[disabled]:hover {
    color: #2d353c;
    background: #fff;
    border-color: #d9dfe3;
}
        
    </style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
   <div class="col-md-13">
      <div class="invoice">
         <!-- begin invoice-company -->
         <div class="invoice-company text-inverse f-w-600">
            <span class="pull-right hidden-print">
            <a href="javascript:;" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-file t-plus-1 text-danger fa-fw fa-lg"></i> Export as PDF</a>
           <!-- <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>-->
            </span>
           Foutanke Shop
         </div>
         <!-- end invoice-company -->
         <!-- begin invoice-header -->
        
         <!-- end invoice-header -->
         <!-- begin invoice-content -->
         <div class="invoice-content">
            <!-- begin table-responsive -->
            <div class="table-responsive">
                @php
  $subTotal = 0; // Initialize the subtotal variable
  $benefice = 0;
  $beneficeTotal = 0; // Initialize the total profit variable
  $total = 0 ;

@endphp
               <table class="table table-invoice">
              
                  <thead>
                     <tr>
                        <th class="text-center" width="10%">Nom</th>
                        <th class="text-center" width="10%">Stock</th>
                        <th class="text-center" width="10%">Produits Vendus</th>
                        <th class="text-center" width="10%">Prix Achat</th>
                        <th class="text-center" width="10%">Prix Vente</th>
                        <th class="text-right" width="20%">SubTotal</th>
                        <th class="text-right" width="20%">Benefices</th>

                     </tr>
                  </thead>
                  <tbody>
                    @foreach($produits as $produit)

                     <tr>
                      <!--<td><span class="text-inverse">  <img src="/Image/
                        / width="80px"></span></td>-->  
                        <td><span class="text-inverse">{{$produit->nom}}</span></td>
                        <td class="text-center">{{$produit->stock}}</td>
                        <td class="text-center">{{$produit->quantiteVendre}}</td>
                        <td class="text-center">{{$produit->prixUnitaire}}</td>
                        <td class="text-right">{{$produit->prixVente}}</td>
                        <td class="text-right">{{$produit->quantiteVendre * $produit->prixVente}}</td>
                        <td class="text-right">
                            @if($produit->stock == 0)
                           {{$produit->quantiteVendre * $produit->prixVente - $produit->quantiteVendre  * $produit->prixUnitaire}}</td>
        
        @else
                     
                     @if ($produit->quantiteVendre * $produit->prixVente -  $produit->stock * $produit->prixUnitaire < 0)
                     <span class="text-danger">{{$produit->quantiteVendre * $produit->prixVente -  $produit->stock * $produit->prixUnitaire}} </span> </td>
                     @else
                     {{$produit->quantiteVendre * $produit->prixVente -  $produit->stock * $produit->prixUnitaire}}  </td>

                     @endif

        @endif




                     </tr>
                     
                    
                  </tbody>
                 
                  @php
      $subTotal += $produit->quantiteVendre * $produit->prixVente; // Add each product's total to the subtotal
    
        if ($produit->stock == 0 ) {

            
          $total = $produit->quantiteVendre * $produit->prixVente;
          $benefice = $total - ($produit->quantiteVendre * $produit->prixUnitaire);
        
         
            
         
        }else{
            $total1 = $produit->quantiteVendre * $produit->prixVente;

            $benefice  = $total1 -  ($produit->stock * $produit->prixUnitaire);
           
           
        }

        if ($benefice >=  0 ) {
            $beneficeTotal += $benefice; // Initialize the total profit variable

        }else{
            $beneficeTotal = 0;
        }
       
        
   @endphp
                  @endforeach
               </table>
            </div>
            <!-- end table-responsive -->
            <!-- begin invoice-price -->
            <div class="invoice-price">
               <div class="invoice-price-left">
                  <div class="invoice-price-row">
                     <div class="sub-price">
                        <small>SUBTOTAL</small>
                        <span class="text-inverse">
                            ${{$subTotal}}
                            
                </span>
                     </div>
                     <div class="sub-price">
                        <i class="fa fa-plus text-muted"></i>
                     </div>
                     <div class="sub-price">
                        <small>BENEFICES</small>
                        <span class="text-inverse">
                           
                         ${{$beneficeTotal}}

                
                
                        
                           
                           </span>
                     </div>
                  </div>
               </div>
               <div class="invoice-price-right">
                  <small>TOTAL REVENU</small> <span class="f-w-600">${{$subTotal + $beneficeTotal}}</span>
               </div>
            </div>
            <!-- end invoice-price -->
         </div>
        
        
      </div>
   </div>
</div>


