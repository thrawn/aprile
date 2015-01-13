
<!-- if there are creation errors, they will show here -->

@if ( HTML::ul($errors))

<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</                                                            button>
{{ HTML::ul($errors->all()) }}
</div>
@endif


{{ Form::open(array('route' => 'customers.store','class'=> 'form-horizontal')) }}
{{ View::make('includes.default.states') }}
<fieldset>
<legend>Create Vendor</legend>

    <div class="form-group">
        {{ Form::label('name', 'Customer Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control','placeholder' => 'Customer Name like "ATALANTA CORP"')) }}
    </div>

    <div class="form-group">
        {{ Form::label('account_number', 'Account Number') }}
        {{ Form::text('account_number', Input::old('account_number'), array('class' => 'form-control','placeholder' => '100100')) }}
    </div>

    <div class="form-group">
        {{ Form::label('contact', 'Contact Name') }}
        {{ Form::text('contact', Input::old('contact'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('phone', 'Contact Phone') }}
        {{ Form::text('phone', Input::old('phone'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
    </div>


    <div class="form-group">
        {{ Form::label('address', 'Address') }}
        {{ Form::text('address', Input::old('address'), array('class' => 'form-control')) }}
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
        {{ Form::label('zipcode', 'Zipcode') }}
        {{ Form::text('zipcode', Input::old('zipcode'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('note', 'Notes') }}
        {{ Form::textarea('note', Input::old('note'), array('class' => 'form-control')) }}
    </div>

                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      {{ link_to(URL::previous(), 'Cancel', ['class' => 'btn btn-default']) }}
                      <button type="submit" class="btn btn-primary">Create Customer</button>
                    </div>
                  </div>

</fieldset>
{{ Form::close() }}

