<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($quote, array('route' => array('quotes.update', $quote->id), 'method' => 'put')) }}

        <div class="panel">

            <h4 class="text-left" style="margin: 15px">{{ $quote->quote_id }}</h4>
            <hr class="divider" role="presentation"></hr>
		<p>
                    <ul class="list-inline">
                        <li style ="font-size: 16px;">
                            <div class="form-group">
                                {{ Form::label('vendor_id', 'Vendor') }}
                                {{ Form::text('vendor_id', null, array('class' => 'form-control')) }}
                            </div>
                        </li>
                        <li style ="font-size: 16px;">
                            <div class="form-group">
                                {{ Form::label('origin', 'Origin') }}
                                {{ Form::text('origin', null, array('class' => 'form-control')) }}
                            </div>
                        </li>
                        <li style ="font-size: 16px;">
                            <div class="form-group">
                                {{ Form::label('destination', 'Destination') }}
                                {{ Form::text('destination', null, array('class' => 'form-control')) }}
                            </div>

                        </li>
                        <li style ="font-size: 16px;">
                             <div class="form-group">
                                {{ Form::label('buy', 'Buy') }}
                                {{ Form::text('buy', null, array('class' => 'form-control')) }}
                            </div>
                        </li>
                        <li style ="font-size: 16px;">
                            <div class="form-group">
                                {{ Form::label('sell', 'Sell') }}
                                {{ Form::text('sell', null, array('class' => 'form-control')) }}
                            </div>
                        </li>

                    </ul>
		</p>
                <p>
                    <div class="panel panel-default" style="margin-left: 15px; margin-right: 15px">
                        <div class="panel-heading text-left"><strong>Cargo</strong></div>
                        <div class="panel-body text-left">
                                <div class="form-group">
                                    {{ Form::textarea('cargo', null, array('class' => 'form-control')) }}
                                </div>
                        </div>
                    </div>
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
                        <li><strong>Created:</strong> {{ $quote->created_at }}</li>
                        <li><strong>Updated:</strong> {{ $quote->updated_at }}</li>
                    </ul>

                </p>
                <p>    {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}{{ Form::close() }}
                {{ link_to(URL::previous(), 'Cancel', ['class' => 'btn btn-info']) }}</p>
	</div>

