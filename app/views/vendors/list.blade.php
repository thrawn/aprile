
<a href="/vendors/create" class="btn btn-info">Create a Vendor</a>

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Vendor</th>
      <th>Vendor ID</th>
      <th>Vendor Type</th>
      <th>Contact Name</th>
      <th>Address</th>
      <th>City</th>
      <th>State</th>
      <th>Contact Phone</th>
      <th>Contact Alternate Phone</th>
      <th>Email</th>
      <th>Notes</th>
      <th>Created</th>
    </tr>
  </thead>
  <tbody>
@foreach($vendors as $key => $value)
    <tr>
      <td>{{ $value->name }}</td>
      <td>{{ $value->vendor_id }}</td> 
      <td>{{ $value->vendor_type }}</td>
      <td>{{ $value->contact_name }}</td>
      <td>{{ $value->address }}</td>
      <td>{{ $value->city }}</td>
      <td>{{ $value->state }}</td>
      <td>{{ $value->contact_phone }}</td>
      <td>{{ $value->contact_alternate_phone }}</td>
      <td>{{ $value->contact_email }}</td>
      <td>{{ str_limit($value->note, $limit = 20, $end = ' ...') }}</td> 
      <td>{{ $value->created_at }}</td> 
    </tr>
@endforeach
  </tbody>
</table> 
