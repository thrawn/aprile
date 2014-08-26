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
        {{ HTML::style('bootstrap/css/jumbotron-narrow.css') }} 
</head>


    <body role="document">

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

            @yield('content')


        <!-- Scripts are placed here -->
        {{ HTML::script('bootstrap/js/jquery-2.1.1.min.js') }}
        {{ HTML::script('bootstrap/js/bootstrap.min.js') }}

</div>

</body>
</html>
