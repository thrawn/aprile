
<!--<h3><span class="label label-default">{{ $vendor->vendor_id }}</span></h3>-->

	<!--<div class="jumbotron text-center">-->
        <div class="panel">

            <h4 class="text-left" style="margin: 15px">{{ $vendor->name }}</h4>
            <hr class="divider" role="presentation"></hr>

            <img src="{{ Identicon::getImageDataUri($vendor->vendor_id) }}" alt="bar Identicon" />
		<p>
                    <ul class="list-inline">
                        <li style ="font-size: 16px;"><strong>Vendor ID:</strong> {{ $vendor->vendor_id }}</li>
                        <li style ="font-size: 16px;"><strong>Contact Name:</strong> {{ $vendor->contact_name }}</li>
                        <li style ="font-size: 16px;"><strong>Address:</strong> {{ $vendor->address }}</li>
                        <li style ="font-size: 16px;"><strong>City:</strong> {{ $vendor->city }}</li>
                        <li style ="font-size: 16px;"><strong>State:</strong> {{ $vendor->state }}</li>
                        <li style ="font-size: 16px;"><strong>Zipcode:</strong> {{ $vendor->zipcode }}</li>
                        <li style ="font-size: 16px;"><strong>Phone:</strong> {{ $vendor->contact_phone }}</li>
                        <li style ="font-size: 16px;"><strong>Email:</strong> {{ $vendor->contact_email }}</li>
                    </ul>
		</p>
                <p>
                    <div class="panel panel-default" style="margin-left: 15px; margin-right: 15px">
                        <div class="panel-heading text-left"><strong>Notes</strong></div>
                        <div class="panel-body text-left">{{ $vendor->note }}</div>
                    </div>
                </p>
                <p>
                    <ul class="list-inline">
                        <li><strong>Created:</strong> {{ $vendor->created_at }}</li>
                        <li><strong>Updated:</strong> {{ $vendor->updated_at }}</li>
                    </ul>

                </p>
                <div class="btn-group">
                <a class="btn btn-success" href="{{ URL::to('/vendors/') }}">Done</a>
                <a class="btn btn-danger" href="{{ URL::to('/vendors/' . $vendor->id . '/edit') }}">Edit</a>
                </div>

</div>



