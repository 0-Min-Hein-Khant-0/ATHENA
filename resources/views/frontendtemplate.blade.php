<!DOCTYPE html>
<html lang="en">

<head>


  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('my_asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  {{-- CDN Fontawesome --}}

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom styles for this template -->
  <link href="{{asset('my_asset/css/shop-homepage.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{route('mainpage')}}">MyShop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('mainpage')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('cartpage')}}">Cart</a>
          </li>
          @auth
          <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{route('signinpage')}}">Signin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('signuppage')}}">Signup</a>
          </li>
          @endauth

        </ul>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 order-xl-3 order-lg-3 order-md-4 order-sm-4 order-4 text-right">
                <!-- Search ICON shopping cart -->

                <div class="d-xl-none d-lg-none d-md-none d-sm-inline d-inline searchiconBtn mr-2">
                    <i class="icofont-search"></i>
                </div>

                
                <!-- App Download -->

                

                {{-- <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fpngriver.com%2Fwp-content%2Fuploads%2F2018%2F04%2FDownload-Shopping-Cart-Logo-Png-Image-74545-For-Designing-Projects.png&f=1&nofb=1" class="img-fluid d-xl-inline d-lg-inline d-md-none d-sm-none d-none" style="width: 50px"> --}}

                <a href="" class="text-decoration-none d-xl-none d-lg-none d-md-none d-sm-inline-block d-inline-block shoppingcartLink"> 
                    <i class="icofont-shopping-cart"></i>
          <span class="badge badge-pill badge-light badge-notify cartNotistyle cartNoti"> 1 </span>
                </a>
                <a href="{{route('cartpage')}}" class="text-decoration-none d-xl-inline d-lg-inline d-md-inline d-sm-none d-none shoppingcartLink"> 
                    <i class="icofont-shopping-cart"></i>
                    <span class="badge badge-pill badge-light badge-notify cartNotistyle cartNoti"></span>
        
                    <span class="cartTotal"></span>
                </a>

                
            </div>
    </div>
  </nav>
  <!-- Page Content -->
 @yield('content')
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('my_asset/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('my_asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  @yield('script')

</body>

</html>
