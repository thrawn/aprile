<!--<h3><span class="label label-default">{{ $vendor->vendor_id }}</span></h3>-->

	<!--<div class="jumbotron text-center">-->
        <div class="panel">
<div class="panel" style="margin:15px">
        <img src="{{ Identicon::getImageDataUri($vendor->vendor_id) }}" style="margin: 15px" alt="bar Identicon" />
<h3 class="text-left" style="margin: 15px">{{ $vendor->name }}</h3>
</div>

        <p>

                    <div class="panel panel-default" style="margin:15px">
                        <div class="panel-heading">Contact</div>
                        <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item" style ="font-size: 16px;"><strong>Vendor ID</strong> {{ $vendor->vendor_id }}</li>
                        <li class="list-group-item" style ="font-size: 16px;"><strong>Contact Name</strong> {{ $vendor->contact_name }}</li>
                        <li class="list-group-item" style ="font-size: 16px;"><strong>Phone</strong> {{ $vendor->contact_phone }}</li>
                        <li class="list-group-item" style ="font-size: 16px;"><strong>Email</strong> {{ $vendor->contact_email }}</li>
                    </ul>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">Address</div>
                        <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item" style ="font-size: 16px;"><strong>Address:</strong> {{ $vendor->address }}</li>
                        <li class="list-group-item text-capitalize" style ="font-size: 16px;"><strong>City:</strong> {{ $vendor->city }}</li>
                        <li class="list-group-item" style ="font-size: 16px;"><strong>State:</strong><span class="text-uppercase"> {{ $vendor->state }}</span></li>
                        <li class="list-group-item" style ="font-size: 16px;"><strong>Zipcode:</strong> {{ $vendor->zipcode }}</li>
                    </ul>
                        </div>


        </p>

                <p>
                    <div class="panel panel-default" style="margin-left: 15px; margin-right: 15px">
                        <div class="panel-heading text-left"><strong>Notes</strong></div>
                        <div class="panel-body text-left">{{ $vendor->note }}</div>
                    </div>
                </p>
                <p>
                    <ul class="list-inline">
                        <li><strong>Created by:</strong> {{ $vendor->created_by }}</li>
                        <li><strong>Created:</strong> {{ $vendor->created_at }}</li>
                        <li><strong>Updated:</strong> {{ $vendor->updated_at }}</li>
                    </ul>

                </p>
                <div class="btn-group">
                <a class="btn btn-success" href="{{ URL::to('/vendors/') }}">Done</a>
                <a class="btn btn-danger" href="{{ URL::to('/vendors/' . $vendor->id . '/edit') }}">Edit</a>
                </div>

</div>



