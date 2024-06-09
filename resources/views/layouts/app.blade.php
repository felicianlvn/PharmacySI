<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Login', 'Register') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">

</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>  --}}
        <div class="site-navbar py-2">

      

            <div class="container">
              <div class="d-flex align-items-center justify-content-between">
                <div class="logo">
                  <div class="site-logo">
                    <a href="index.html" class="js-logo-clone">Medika Pharma</a>
                  </div>
                </div>
                <div class="main-nav d-none d-lg-block">
                  <nav class="site-navigation text-right text-md-center" role="navigation">
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <!-- <li class="active"><a href="index.html">Home</a></li>
                      <li><a href="shop.html">Store</a></li>
                      <li class="has-children">
                        <a href="#">Dropdown</a>
                        <ul class="dropdown">
                          <li><a href="#">Supplements</a></li>
                          <li class="has-children">
                            <a href="#">Vitamins</a>
                            <ul class="dropdown">
                              <li><a href="#">Supplements</a></li>
                              <li><a href="#">Vitamins</a></li>
                              <li><a href="#">Diet &amp; Nutrition</a></li>
                              <li><a href="#">Tea &amp; Coffee</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Diet &amp; Nutrition</a></li>
                          <li><a href="#">Tea &amp; Coffee</a></li>
                          
                        </ul>
                      </li>
                      <li><a href="about.html">About</a></li>
                      <li><a href="contact.html">Contact</a></li> -->
                      
                      <li><a href="/login"><button type="button" class="btn btn-outline-danger px-4 py-1">Login</button></a></li>
                      <li><a href="/register1"><button type="button" class="btn btn-outline-success px-4 py-1">Register</button></a></li>
                    </ul>
                  </nav>
                </div>
                
              </div>
            </div>
          </div>

        <main class="py-4">
            @yield('content')
        </main>
        @include('sweetalert::alert')

    </div>
</body>
</html>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script>
  $(function(){
      $.ajaxSetup({
          headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
      });

      $(function(){
          $('#provinsi').on('change',function(){
              let id_provinsi = $('#provinsi').val(); 

              $.ajax({
                  type : 'POST',
                  url : "{{ route ('getkabupaten')}}",
                  data : {id_provinsi:id_provinsi},       //route
                  cache : false,

                  success: function(msg){
                      $('#kabupaten').html(msg);
                      $('#kecamatan').html('');
                      $('#desa').html('');

                  },
                  error: function(data){
                      console.log('error:',data)
                  },
              })
          })

          $('#kabupaten').on('change',function(){
              let id_kabupaten = $('#kabupaten').val(); 

              $.ajax({
                  type : 'POST',
                  url : "{{ route ('getkecamatan')}}",
                  data : {id_kabupaten:id_kabupaten},       //route
                  cache : false,

                  success: function(msg){
                      $('#kecamatan').html(msg);
                      $('#desa').html('');
                  },
                  error: function(data){
                      console.log('error:',data)
                  },
              })
          })

          $('#kecamatan').on('change',function(){
              let id_kecamatan = $('#kecamatan').val(); 

              $.ajax({
                  type : 'POST',
                  url : "{{ route ('getdesa')}}",
                  data : {id_kecamatan:id_kecamatan},       //route
                  cache : false,

                  success: function(msg){
                      $('#desa').html(msg);
                    
                  },
                  error: function(data){
                      console.log('error:',data)
                  },
              })
          })
      })
  });
  </script>
