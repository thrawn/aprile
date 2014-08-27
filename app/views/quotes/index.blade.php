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
     <!--   {{ HTML::style('bootstrap/css/jumbotron-narrow.css') }} -->
</head>


<!--    <body role="document"> -->
<body>
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
<h2>Quotes</h2>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-4">
<div class="bs-component">
<div class="container-fluid">
<table class="table-condensed table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Vendor ID</td>
            <td>Origin></td>
            <td>Destination</td>
            <td>Buy</td>
            <td>Sell</td>
            <td>Cargo</td>
            <td>Note</td>
            <td>Parent ID</td>
            <td>Quote ID</td>
            <td>Created</td>
            <td>Updated</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($quotes as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->vendor_id }}</td>
            <td>{{ $value->origin }}</td>
            <td>{{ $value->destination }}</td>
           <td>{{ $value->buy }}</td>
           <td>{{ $value->sell }}</td>
           <td>{{ $value->cargo }}</td>
           <td>{{ $value->note }}</td> 
           <td>{{ $value->parent_id }}</td> 
           <td>{{ $value->quote_id }}</td> 
           <td>{{ $value->created_at }}</td> 
           <td>{{ $value->updated_at }}</td> 


            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the quote (uses the destroy method DESTROY /quotes/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the quote (uses the show method found at GET /quotes/{id} -->
                <a class="btn btn-xs btn-success" href="{{ URL::to('quotes/' . $value->id) }}">Show this Quote</a>
                

                <!-- edit this quote (uses the edit method found at GET /quotes/{id}/edit -->
                <a class="btn btn-xs btn-info" href="{{ URL::to('quotes/' . $value->id . '/edit') }}">Edit this Quote</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>


</div>
</div>
</div>
</div>





            


        <!-- Scripts are placed here -->
        {{ HTML::script('bootstrap/js/jquery-2.1.1.min.js') }}
        {{ HTML::script('bootstrap/js/bootstrap.min.js') }}

</div>

</body>
</html>
