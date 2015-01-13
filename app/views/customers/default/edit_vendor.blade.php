<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($vendor, array('route' => array('vendors.update', $vendor->id), 'method' => 'put')) }}

        <div class="panel">
            <img src="{{ Identicon::getImageDataUri($vendor->vendor_id) }}" alt="bar Identicon" />
            <h4 class="text-left" style="margin: 15px">{{ $vendor->vendor_id }}</h4>
            <hr class="divider" role="presentation"></hr>
		<p>
                    <ul class="list-inline">
                        <li style ="font-size: 16px;">
                            <div class="form-group">
                                <strong>Vendor ID:</strong> {{ $vendor->vendor_id }}

                            </div>
                        </li>
                        <li style ="font-size: 16px;">
                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', null, array('class' => 'form-control')) }}
                            </div>
                        </li>
                        <li style ="font-size: 16px;">
                            <div class="form-group">
        {{ Form::label('vendor_type', 'Vendor Type') }}
        {{ Form::select('vendor_type', array('air' => 'Air', 'ocean' => 'Ocean', 'rail' => 'Rail', 'truck' => 'Truck')) }}
    </div>
                        </li>
                        <li style ="font-size: 16px;">
                            <div class="form-group">
                                {{ Form::label('address', 'Address') }}
                                {{ Form::text('address', null, array('class' => 'form-control')) }}
                            </div>

                        </li>
                        <li style ="font-size: 16px;">
                             <div class="form-group">
                                {{ Form::label('city', 'City') }}
                                {{ Form::text('city', null, array('class' => 'form-control')) }}
                            </div>
                        </li>
                        <li style ="font-size: 16px;">
                            <div class="form-group">
                                {{ Form::label('state', 'State') }}
                                {{ Form::text('state', null, array('class' => 'form-control')) }}
                            </div>
                        </li>
                        <li style ="font-size: 16px;">
                            <div class="form-group">
                                {{ Form::label('zipcode', 'Zipcode') }}
                                {{ Form::text('zipcode', null, array('class' => 'form-control')) }}
                            </div>
                        </li>
                        <li style ="font-size: 16px;">
                            <div class="form-group">
                                {{ Form::label('contact_name', 'Contact Name') }}
                                {{ Form::text('contact_name', null, array('class' => 'form-control')) }}
                            </div>
                        </li>
                        <li style ="font-size: 16px;">
                            <div class="form-group">
                                {{ Form::label('contact_phone', 'Contact Phone') }}
                                {{ Form::text('contact_phone', null, array('class' => 'form-control')) }}
                            </div>
                        </li>
                        <li style ="font-size: 16px;">
                            <div class="form-group">
                                {{ Form::label('contact_email', 'Contact Email') }}
                                {{ Form::text('contact_email', null, array('class' => 'form-control')) }}
                            </div>
                        </li>
                    </ul>
		</p>
                <p>
                    <div class="panel panel-default" style="margin-left: 15px; margin-right: 15px">
                        <div class="panel-heading text-left"><strong>Notes</strong></div>
                        <div class="panel-body text-left">
                                <div class="form-group">
                                    {{ Form::textarea('note', null, array('class' => 'form-control')) }}
                                </div>
                        </div>
                    </div>
                </p>
                <p>
                    <ul class="list-inline">
                        <li><strong>Created By:</strong> {{ $vendor->created_by }}</li>
                        <li><strong>Created:</strong> {{ $vendor->created_at }}</li>
                        <li><strong>Updated:</strong> {{ $vendor->updated_at }}</li>
                    </ul>

                </p>
                <p>    {{ Form::submit('Update', array('class' => 'btn btn-success')) }}{{ Form::close() }}
                {{ link_to(URL::previous(), 'Cancel', ['class' => 'btn btn-danger']) }}</p>
	</div>


