<!DOCTYPE html>
<html>
<head>
    <title>Create a Quote</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('nerds') }}">AprileUSA</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('quotes') }}">View All Quotes</a></li>
        <li><a href="{{ URL::to('quotes/create') }}">Create a Quote</a>
    </ul>
</nav>

<h1>Create a Quote</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'quotes')) }}

    <div class="form-group">
        {{ Form::label('vendor_id', 'Vendor ID') }}
        {{ Form::text('vendor_id', Input::old('vendor_id'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('origin', 'Origin') }}
        {{ Form::email('origin', Input::old('origin'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('destination', 'Destination') }}
        {{ Form::destination('destination', Input::old('destination'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">                                                                                                                                                         
        {{ Form::label('buy', 'Buy') }}                                                                                                                              
        {{ Form::buy('buy', Input::old('buy'), array('class' => 'form-control')) }}                                                                          
    </div>

    <div class="form-group">                                                                                                                                                         
        {{ Form::label('sell', 'Sell') }}                                                                                                                              
        {{ Form::sell('sell', Input::old('sell'), array('class' => 'form-control')) }}                                                                          
    </div> 

    <div class="form-group">                                                                                                                                                         
        {{ Form::label('cargo', 'Cargo') }}                                                                                                                              
        {{ Form::cargo('cargo', Input::old('cargo'), array('class' => 'form-control')) }}                                                                          
    </div> 

    <div class="form-group">                                                                                                                                                         
        {{ Form::label('note', 'Notes') }}                                                                                                                              
        {{ Form::note('note', Input::old('note'), array('class' => 'form-control')) }}                                                                          
    </div> 

    <div class="form-group">                                                                                                                                                         
        {{ Form::label('quote_id', 'Quote ID') }}                                                                                                                              
        {{ Form::quote_id('quote_id', Input::old('quote_id'), array('class' => 'form-control')) }}                                                                          
    </div> 

    {{ Form::submit('Create the Quote', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
