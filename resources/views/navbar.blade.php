<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand text-black" href="{{url('/')}}">Foutanke Shop </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a  class="nav-link text-black" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>



            </li>
            <li class="nav-item active">

               @can('isAdmin')
                <a class="nav-link" href="{{url('/create')}}">Create</a>


            </li>
            @endcan
            @can('isAdmin')
            <li class="nav-item active">

            <a class="nav-link" href="{{url('/produitSelected')}}">Rapport Vente </a>


</li>
@endcan


        </ul>
      
               
        <ul class="navbar-nav mr-auto">

</ul>

<!-- Right Side Of Navbar -->
<ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              <span style="color:black" class="caret">  {{ Auth::user()->name }} </span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>
</nav>
