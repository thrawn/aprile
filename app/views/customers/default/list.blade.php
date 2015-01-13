
<a href="/customers/create" class="btn btn-info">Create a Customer</a>

<table class="table table-hover ">
  <thead>
    <tr>
      <th>Name</th>
      <th>Account Number</th>
      <th>Contact Phone</th>
      <th>Email</th>
      <th>Notes</th>
      <th>Created</th>
    </tr>
  </thead>
  <tbody>
@foreach($customers as $key => $value)
    <tr>
      <td nowrap><img src="{{ Identicon::getImageDataUri($value->account_number, 25) }}" alt="bar Identicon" /> <a href="/customers/{{ $value->id }}" class="btn btn-default" role="buttom">{{ $value->name }}</a>
      </td>
      <td>{{ $value->account_number }}</td>
      <td>{{ $value->contact }}</td>
      <td>{{ $value->notes }}</td>
      <td>{{ $value->created_at }}</td>
    </tr>
@endforeach
  </tbody>
</table>
