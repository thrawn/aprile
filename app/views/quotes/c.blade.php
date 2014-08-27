<!DOCTYPE html>
<html>
<head>
    <title>Create a Quote</title>
           <!-- CSS are placed here -->                                                                                                                                                 
        {{ HTML::style('bootstrap/css/bootstrap.css') }}                                                                                                                             
        {{ HTML::style('bootstrap/css/bootstrap-theme.css') }}                                                                                                                       
        {{ HTML::style('bootstrap/css/jumbotron-narrow.css') }}
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('') }}">AprileUSA</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('quotes') }}">View All Quotes</a></li>
        <li><a href="{{ URL::to('quotes/create') }}">Create a Quote</a>
    </ul>
</nav>

<h1>Create a Quote</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }} 

{{ Form::open(array('route' => 'quotes.store')) }}

    <div class="form-group">
        {{ Form::label('vendor_id', 'Vendor ID') }}
        {{ Form::text('vendor_id', Input::old('vendor_id'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('origin', 'Origin') }}
        {{ Form::text('origin', Input::old('origin'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('destination', 'Destination') }}
        {{ Form::text('destination', Input::old('destination'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">                                                                                                                                                         
        {{ Form::label('buy', 'Buy') }}                                                                                                                              
        {{ Form::text('buy', Input::old('buy'), array('class' => 'form-control')) }}                                                                          
    </div>

    <div class="form-group">                                                                                                                                                         
        {{ Form::label('sell', 'Sell') }}                                                                                                                              
        {{ Form::text('sell', Input::old('sell'), array('class' => 'form-control')) }}                                                                          
    </div> 

    <div class="form-group">                                                                                                                                                         
        {{ Form::label('cargo', 'Cargo') }}                                                                                                                              
        {{ Form::text('cargo', Input::old('cargo'), array('class' => 'form-control')) }}                                                                          
    </div> 

    <div class="form-group">                                                                                                                                                         
        {{ Form::label('note', 'Notes') }}                                                                                                                              
        {{ Form::text('note', Input::old('note'), array('class' => 'form-control')) }}                                                                          
    </div> 

    <div class="form-group">                                                                                                                                                         
        {{ Form::label('quote_id', 'Quote ID') }}                                                                                                                              
        <h4>{{ $quote_id }}</h4>
    </div> 

    <div>
        {{ $quote_id }}
    </div>

    {{ Form::submit('Create the Quote', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
