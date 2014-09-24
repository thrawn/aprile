
<!-- if there are creation errors, they will show here -->

@if ( HTML::ul($errors))

<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</                                                            button>
{{ HTML::ul($errors->all()) }}
</div>
@endif


{{ Form::open(array('route' => 'vendors.store','class'=> 'form-horizontal')) }}
{{ View::make('includes.default.states') }}
<fieldset>
<legend>Create Vendor</legend>

    <div class="form-group">
        {{ Form::label('name', 'Vendor Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('vendor_id', 'Vendor ID') }}
        {{ Form::text('vendor_id', Input::old('vendor_id'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('vendor_type', 'Vendor Type') }}
        {{ Form::select('vendor_type', array('air' => 'Air', 'ocean' => 'Ocean', 'rail' => 'Rail', 'truck' => 'Truck')) }}
    </div>

    <div class="form-group">
        {{ Form::label('contact_name', 'Contact Name') }}
        {{ Form::text('contact_name', Input::old('contact_name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('address', 'Address') }}
        {{ Form::textarea('address', Input::old('address'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('city', 'City') }}
        {{ Form::text('city', Input::old('city'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('state', 'State') }}
        {{ Form::stateSelect('state', Input::old('state'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('zip', 'Zipcode') }}
        {{ Form::text('zip', Input::old('zip'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('contact_phone', 'Contact Phone') }}
        {{ Form::textarea('contact_phone', Input::old('contact_phone'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group"                                                                                                                                                    group">
        {{ Form::label('contact_email', 'Email') }}
        {{ Form::text('contact_email', Input::old('contact_email'), array('class' => 'form-control')) }}
    </div>



    <div class="form-group">
        {{ Form::label('note', 'Notes') }}
        {{ Form::textarea('note', Input::old('note'), array('class' => 'form-control')) }}
    </div>


                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button class="btn btn-default">Cancel</button>
                      <button type="submit" class="btn btn-primary">Create Vendor</button>
                    </div>
                  </div>

</fieldset>
{{ Form::close() }}

