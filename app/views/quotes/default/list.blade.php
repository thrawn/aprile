
<a href="/quotes/create" class="btn btn-info">Create a Quote</a>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Quote</th>
      <th>Vendor</th>
      <th>Origin</th>
      <th>Dest</th>
      <th>Cargo</th>
      <th>Buy</th>
      <th>Sell</th>
      <th>Created</th>
    </tr>
  </thead>
  <tbody>
@foreach($quotes as $key => $value)
    <tr>
        <td nowrap>

<a href="/quotes/{{ $value->id }}" class="btn btn-default" role="buttom">{{ $value->quote_id }}</a>
        </td>
        <td nowrap><img src="{{ Identicon::getImageDataUri($value->vendor_id, 25) }}" alt="bar Identicon" /> <strong>{{ $value->vendor_id }}</strong></td>
      <td>{{ $value->origin }}</td>
      <td>{{ $value->destination }}</td>
      <td>{{ str_limit($value->cargo, $limit = 20, $end = ' ...') }}</td>
      <td>{{ $value->buy }}</td>
      <td>{{ $value->sell }}</td>
      <td>{{ $value->created_at }}</td>
    </tr>
@endforeach
  </tbody>
</table>
