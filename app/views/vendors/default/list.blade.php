
<a href="/vendors/create" class="btn btn-info">Create a Vendor</a>

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Vendor ID</th>
      <th>Name</th>
      <th>Type</th>
      <th>Contact Name</th>

      <th>Contact Phone</th>

      <th>Email</th>
      <th>Notes</th>
      <th>Created</th>
    </tr>
  </thead>
  <tbody>
@foreach($vendors as $key => $value)
    <tr>
      <td nowrap><img src="{{ Identicon::getImageDataUri($value->vendor_id, 25) }}" alt="bar Identicon" /> <a href="/vendors/{{ $value->id }}" class="btn btn-default" role="buttom">{{ $value->vendor_id }}</a></td>
      <td>{{ $value->name }}</td>
      <td>{{ $value->vendor_type }}</td>
      <td>{{ $value->contact_name }}</td>

      <td>{{ $value->contact_phone }}</td>
 
      <td>{{ $value->contact_email }}</td>
      <td>{{ str_limit($value->note, $limit = 20, $end = ' ...') }}</td>
      <td>{{ $value->created_at }}</td>
    </tr>
@endforeach
  </tbody>
</table>
