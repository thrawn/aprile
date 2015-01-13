
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
{{ View::make('includes.default.vendors') }}

<fieldset>
<legend>Create Quote</legend>

    <div class="form-group">
        {{ Form::label('vendor_id', 'Vendor') }}
        {{ Form::selectOpt(Vendors::all(), 'vendor_id', 'vendor_type', 'name', 'vendor_id') }}
        {{-- Form::select('vendor_id', $vendors , Input::old('vendor_id'), array('class' => 'form-control')) --}}
    </div>

    <div class="form-group">
        {{ Form::label('type', 'Type') }}
        {{ Form::select('type', array('air' => 'Air', 'ocean' => 'Ocean', 'rail' => 'Rail', 'truck' => 'Truck'),null,array('class' => 'form-control')) }}
    </div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#inco">
 Incoterms·
</button>

<!-- Modal -->
<div class="modal fade" id="inco" tabindex="-1" role="dialog" aria-labelledby="inco" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="inco">Incoterms 2010</h4>                                                                                         
      </div>
      <div class="modal-body">
       <img src="/img/incoterms.jpg"  width="90%" height="90%"/>·
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    <div class="form-group">
        {{ Form::label('incoterms', 'Incoterms') }}
        {{ Form::select('incoterms', array(
          'sea' => array('fas'=>'FAS (Free Alongside Ship)', 'fob'=>'FOB (Free on Board)', 'cfr'=>'CFR (Cost and Freight)', 'cif'=>'CIF (Cost, Insurance, and Freight)'),
          'all' => array('exw'=>'EXW (Ex Works)', 'fca'=>'FCA (Free Carrier)', 'cpt'=>'CPT (Carriage Paid To)', 'cip'=>'CIP (Carriage and Insurance Paid To)', 'dat'=>'DAT (Delivered at Terminal)', 'dap'=>'DAP (Delivered at Place)', 'ddp'=>'DDP (Delivered Duty Paid)')
        ),null,array('class' => 'form-control')); }}
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
