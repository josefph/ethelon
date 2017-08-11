<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>ETHELON</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dashgumAssets/css/bootstrap.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('dashgumAssets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="{{ asset('dashgumAssets/css/style.css').'?'.rand() }}" rel="stylesheet">
    <link href="{{ asset('dashgumAssets/css/style-responsive.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('additional_styles')
  </head>

  <body>

  <section id="container" >
       @yield('sidebar');
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              @yield('content')
			
		</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('dashgumAssets/js/jquery.js') }}"></script>
    <script src="{{ asset('dashgumAssets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashgumAssets/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
    <script src="{{ asset('dashgumAssets/js/jquery.ui.touch-punch.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ asset('dashgumAssets/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('dashgumAssets/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('dashgumAssets/js/jquery.nicescroll.js') }}" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="{{ asset('dashgumAssets/js/common-scripts.js') }}"></script>

    <!--script for this page-->
    
    @yield('additional_scripts')

  </body>
</html>
