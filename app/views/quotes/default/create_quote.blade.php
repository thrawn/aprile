      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
          </div>
        </div>




<!-- if there are creation errors, they will show here -->

@if ( HTML::ul($errors))
<div class="alert alert-dismissable alert-danger">                                                                                                        <button type="button" class="close" data-dismiss="alert">×</button>
{{ HTML::ul($errors->all()) }}
</div>
@endif


        <div class="row">
          <div class="col-lg-12">
            <div class="well bs-component">
{{ Form::open(array('route' => 'quotes.store','class'=> 'form-horizontal')) }}
<fieldset>
<legend>{{ $quote_id }}</legend>

    <div class="form-group">
        {{ Form::label('vendor_id', 'Vendor') }}
        {{ Form::select('vendor_id', $vendors , Input::old('vendor_id'), array('class' => 'form-control')) }}
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
        {{ Form::textarea('cargo', Input::old('cargo'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('note', 'Notes') }}
        {{ Form::textarea('note', Input::old('note'), array('class' => 'form-control')) }}
    </div>
<input class="form-control" name="quote_id" type="hidden" value="{{ $quote_id }}">

                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      {{ link_to(URL::previous(), 'Cancel', ['class' => 'btn btn-default']) }}
                      <button type="submit" class="btn btn-primary">Create Quote</button>
                    </div>
                  </div>

</fieldset>
{{ Form::close() }}
</div>
</div>
</div>
