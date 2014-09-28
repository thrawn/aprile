
<div class="row">
  <div class="col-md-12">
      <div class="row">
        <div class="col-md-8">
<div class="panel">
    <div class="panel-heading text-left">
    <h4 class="text-left" style="margin: 15px">Quote: {{ $quote->quote_id }}</h4>
    <div class="panel-body text-left">
                    <ul class="list-inline">
                        <li style ="font-size: 16px;"><strong>Vendor:</strong> {{ $quote->vendor_id }} <img src="{{ Identicon::getImageDataUri($quote->vendor_id,25) }}" alt="bar Identicon" /> </li>

                        <button class="button" onclick="$('#vendor_info').toggle();">Show Vendor Info</button>
                        <br>
                        <br>

<div id="vendor_info" style="display: none">

@foreach (Vendors::where('vendor_id','=',$quote->vendor_id)->get() as $v)



                <div class="panel panel-success">
                    <div class="panel-heading">Vendor Information <a class="btn btn-xs btn-danger" href="{{ URL::to('/vendors/' . $v->id . '/edit') }}">Edit Vendor</a></div>
                    <div class="panel-body">

                    <address>
                        <strong>Vendor Name:</strong> {{ $v->name }}<br>
                        <strong>Vendor ID:</strong> {{ $v->vendor_id }}<br>
                        <strong>Vendor Type:</strong> {{ $v->vendor_type }}<br>
                        <br>
                      <strong>{{ $v->name }}</strong><br>
                      {{ $v->address }}<br>
                      {{ $v->city }}, {{ $v->state }} {{ $v->zipcode }}<br>
                      <abbr title="Phone">P:</abbr> {{ $v->contact_phone }}

                    </address>

                    <address>
                      <strong>{{ $v->contact_name }}</strong><br>
                      <a href="#">{{ $v->contact_email }}</a>
                    </address>
                </div>
@endforeach
</div>


                    </ul>
                    <ul class="list-inline">
                        <li style ="font-size: 16px;"><strong>Origin:</strong> {{ $quote->origin }}</li>
                        <li style ="font-size: 16px;"><strong>Destination:</strong> {{ $quote->destination }}</li>
                    </ul>
                    <ul class="list-inline">
                        <li style ="font-size: 16px;"><strong>Buy:</strong> $ {{ $quote->buy }}</li>
                        <li style ="font-size: 16px;"><strong>Sell:</strong> $ {{ $quote->sell }}</li>
                        <li style ="font-size: 16px;"><strong>Profit:</strong>

                                {{--*/ $profit = ($quote->sell - $quote->buy) /*--}}

                                 @if ($profit > 0)

                                <span class="label label-success" style ="font-size: 16px;"> $ {{ $profit }}.00</span>
                                 @else
                                <span class="label label-danger" style ="font-size: 16px;"> $ {{ $profit }}.00</span>

                                 @endif

                        </li>

                    </ul>
    </div>
    </div>
</div>

                <p>
                    <div class="panel panel-default" style="margin-left: 15px; margin-right: 15px">
                        <div class="panel-heading text-left"><strong>Cargo</strong></div>
                        <div class="panel-body text-left">{{ $quote->cargo }}</div>
                    </div>
                    <div class="panel panel-default" style="margin-left: 15px; margin-right: 15px">
                        <div class="panel-heading text-left"><strong>Notes</strong></div>
                        <div class="panel-body text-left">{{ $quote->note }}</div>
                    </div>
                </p>


        </div>
        <div class="col-md-4 container-fluid">

                <p>
                <h4>Attach a file</h4>
                <form action="/quotes/upload" class="dropzone" id="quote-dropzone">
                    {{ Form::hidden('quote', $quote->quote_id) }}
                    {{ Form::hidden('id', $quote->id) }}
                </form>
                </p>

                <p>
                <h4>Attached Files</h4>
                    <div class="row">
                    @foreach($quote_files as $key => $value)
                    @if($value->filemime === 'pdf')
                    <div class="col-md-10">
                        <i class="fa fa-file-pdf-o fa-1x btn btn-danger"></i>
                    <a href="/js/ViewerJS/#/uploads/{{ $value->filename }}">{{ $value->filetype }}</a>

                    </div>
                    @else
                    <div class="col-md-4">
                    <a href="/uploads/{{ $value->filename }}" data-lightbox="files" data-title="{{ $value->filetype }}"><div class="nailthumb-container square-thumb nailthumb-image-titles-bigger"><img src="/uploads/{{ $value->filename }}" title="{{ $value->filetype }}" /></div></a>
                    </div>
                    @endif
                    @endforeach
                    </div>
                </p>


                <div class="panel panel-info">
                    <div class="panel-heading">Quote Details</div>
                    <div class="panel-body">
                    <ul class="list-inline">
                        <li><strong>Created by:</strong> {{ $quote->created_by }}</li>
                        <li><strong>Created:</strong> {{ $quote->created_at }}</li>
                        <li><strong>Updated:</strong> {{ $quote->updated_at }}</li>
                    </ul>
                </div>

        </div>
      </div>

  </div>

</div>
<p>
                <div class="btn-group">
                <a class="btn btn-success" href="{{ URL::to('/quotes/') }}">Done</a>
                <a class="btn btn-danger" href="{{ URL::to('/quotes/' . $quote->id . '/edit') }}">Edit</a>
                </div>
</p>





<!--
<div class="panel">
  <div class="panel-heading text-left">
      <div class="row"></div>
      <div class="col-md-2">
          <img src="{{ Identicon::getImageDataUri($quote->vendor_id) }}" alt="bar Identicon" />
      </div>
      <div class="col-md-4">
          <h4 class="text-left" style="margin: 15px">{{ $quote->quote_id }}</h4>
      </div>

</div>
-->
	<!--<div class="jumbotron text-center">-->
        <!--
        <div class="panel">
            <img src="{{ Identicon::getImageDataUri($quote->vendor_id) }}" alt="bar Identicon" />
            <h4 class="text-left" style="margin: 15px">{{ $quote->quote_id }}</h4>
            <hr class="divider" role="presentation"></hr>
		<p>
                    <ul class="list-inline">
                        <li style ="font-size: 16px;"><strong>Vendor:</strong> {{ $quote->vendor_id }}</li>
                        <li style ="font-size: 16px;"><strong>Origin:</strong> {{ $quote->origin }}</li>
                        <li style ="font-size: 16px;"><strong>Destination:</strong> {{ $quote->destination }}</li>
                        <li style ="font-size: 16px;"><strong>Buy:</strong> {{ $quote->buy }}</li>
                        <li style ="font-size: 16px;"><strong>Sell:</strong> {{ $quote->sell }}</li>

                    </ul>
		</p>
                <p>
                    <div class="panel panel-default" style="margin-left: 15px; margin-right: 15px">
                        <div class="panel-heading text-left"><strong>Cargo</strong></div>
                        <div class="panel-body text-left">{{ $quote->cargo }}</div>
                    </div>
                <div class="panel panel-default" style="margin-left: 15px; margin-right: 15px">
                        <div class="panel-heading text-left"><strong>Notes</strong></div>
                        <div class="panel-body text-left">{{ $quote->note }}</div>
                </div>
                </p>
                <p>
                    <ul class="list-inline">
                        <li><strong>Created by:</strong> {{ $quote->created_by }}</li>
                        <li><strong>Created:</strong> {{ $quote->created_at }}</li>
                        <li><strong>Updated:</strong> {{ $quote->updated_at }}</li>
                    </ul>

                </p>
                <p>
                <h4>Attached Files</h4>
                    <ul>
                    @foreach($quote_files as $key => $value)
                    @if($value->filemime === 'pdf')
                    <li><strong><a href="/js/ViewerJS/#/uploads/{{ $value->filename }}">{{ $value->filetype }}</a></strong></li>
                    @else
                    <li><strong><a href="/uploads/{{ $value->filename }}" data-lightbox="files" data-title="{{ $value->filetype }}">{{ $value->filetype }}</a></strong></li>
                    @endif
                    @endforeach
                    </ul>
                </p>
                <p>
                <h4>Attach a file</h4>
                <form action="/quotes/upload" class="dropzone" id="quote-dropzone">
                    {{ Form::hidden('quote', $quote->quote_id) }}
                    {{ Form::hidden('id', $quote->id) }}
                </form>
                </p>

                <div class="btn-group">
                <a class="btn btn-success" href="{{ URL::to('/quotes/') }}">Done</a>
                <a class="btn btn-danger" href="{{ URL::to('/quotes/' . $quote->id . '/edit') }}">Edit</a>
                </div>
	</div>

-->
