<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AprileUSA</title>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

        <!-- CSS are placed here -->
        {{ HTML::style('bootstrap/css/bootstrap.css') }}
        {{ HTML::style('bootstrap/css/bootstrap-theme.css') }}
        {{ HTML::style('bootstrap/css/background.css') }}
     <!--   {{ HTML::style('bootstrap/css/jumbotron-narrow.css') }} -->


 <script type="text/javascript">
      $(document).ready(function() {
        $('.carousel').carousel({interval: 2000});
      });
    </script>

</head>


<!--    <body role="document"> -->
<body>


<!-- for background rotation -->
<div id="myCarousel" class="carousel container slide" data-interval="3000">
  <div class="carousel-inner">
            <div class="active item one"></div>
            <div class="item two"></div>
            <div class="item three"></div>
  </div>
</div>
        @include('nav')

        <div class="container" role="main">

           <div class="jumbotron">


            <!-- Success-Messages -->                                                                                                                     
            @if ($message = Session::get('success'))                                                                                                      
                <div class="alert alert-success alert-block">                                                                                             
                    <button type="button" class="close" data-dismiss="alert">&times;</button>                                                             
                    <h4>Success</h4>                                                                                                                      
                    {{{ $message }}}                                                                                                                      
                </div>                                                                                                                                    
            @endif  

<div class="bs-docs-section">
<div class="row">
<div class="col-lg-12">
<div class="page-header">
<h2>Vendors</h2>
</div>
</div>
</div>

@include('vendors.list')

            
</div>

        <!-- Scripts are placed here -->
        {{ HTML::script('bootstrap/js/jquery-2.1.1.min.js') }}
        {{ HTML::script('bootstrap/js/bootstrap.min.js') }}

</div>

</body>
</html>
