
<!--<h3><span class="label label-default">{{ $quote->quote_id }}</span></h3>-->

	<!--<div class="jumbotron text-center">-->
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

                <div class="btn-group">
                <a class="btn btn-success" href="{{ URL::to('/quotes/') }}">Done</a>
                <a class="btn btn-danger" href="{{ URL::to('/quotes/' . $quote->id . '/edit') }}">Edit</a>
                </div>
	</div>



