<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('img/community.ico') }}">

    <title>OrgApp</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/offcanvas.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{ asset('js/ie-emulation-modes-warning.js') }}"></script>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- NAVIGASI ATAS -->
    <nav class="navbar navbar-fixed-top navbar-inverse ">
      @include('layout.header')
    </nav><!-- /.navbar -->
    <!-- TUTUP NAVIGASI ATAS -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-left">
        
        <!-- MENU SAMPING -->
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          @include('layout.sidenav')
        </div><!--/.sidebar-offcanvas-->
        <!-- TUTUP MENU SAMPING -->

        <!-- CONTENT WEB -->
        <div class="col-xs-12 col-sm-9">
          
            
            @if(Session::has('message'))
              <div class="flash alert-info">
                <p>{{ Session::get('message') }}</p>
              </div>
            @endif

            @if($errors->any())
              <div class="flash alert-danger">
                @foreach($errors->all() as $error)
                  <p>{{ $error }}</p>
                @endforeach
              </div>
            @endif

          @yield('content')
        </div><!--/.col-xs-12.col-sm-9-->
        <!-- TUTUP CONTENT -->
        
      </div><!--/row-->

      <hr>

      <footer>
        @include('layout.footer')
      </footer>

    </div><!--/.container-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>

    <script src="{{ asset('js/offcanvas.js') }}"></script>
</body></html>