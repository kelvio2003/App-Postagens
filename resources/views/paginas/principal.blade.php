
<!DOCTYPE html>
<html>
<head>
  <title>@yield('titolo')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <link rel="stylesheet" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css.map')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css.map')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-grid.rtl.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-grid.rtl.css.map')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-grid.rtl.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-grid.rtl.min.css.map')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.css.map')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.min.css.map')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.rtl.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.css.map')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.min.css.map')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.min.css.map')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.rtl.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.rtl.css.map')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.rtl.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-utilities.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-utilities.css.map')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-utilities.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-utilities.min.css.map')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-utilities.rtl.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-utilities.rtl.css.map')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-utilities.rtl.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-utilities.rtl.min.css.map')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css.map')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css.map')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css.map')}}">
        <link rel="stylesheet" href="{{asset('css/ bootstrap.rtl.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css.map')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.min.css.map')}}">

  <style>
    .card {
      margin-bottom: 20px;
    }
    
    .navbar-contact {
      background-color: #f8f9fa;
    }
    
    .navbar-contact ul {
      margin-bottom: 0;
    }
    
    .navbar-contact li {
      padding: 10px;
      display: inline-block;
    }
    
    .footer {
      background-color: #000;
      color: #fff;
      padding: 10px;
      text-align: center;
     position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Meu Site de Eventos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Página Inicial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/criar">Criar Evento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/email">Enviar E-mail</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
      </ul>
    </div>
   
  </nav>

  <div class="container mt-4">
   


      @yield('conteudo')
      <br>

  <div class="footer">
    <p style="margin-bottom: 0;">&copy; 2024 Meu Site de Eventos. Todos os direitos reservados.</p>
  </div>

  

  
  <script src="js/bootsrap.bundle.js"></script>
  <script src="js/bootsrap.bundle.js.map"></script>
  
  <script src="js/bootsrap.bundle.min.js"></script>
  
  <script src="js/bootsrap.bundle.min.js.map "></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>