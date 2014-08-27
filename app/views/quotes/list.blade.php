<!--
<form class="form-horizontal">
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        <div class="checkbox">
          <label>
            <input type="checkbox"> Checkbox
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Textarea</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Radios</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
            Option one is this
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Option two can be something else
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Selects</label>
      <div class="col-lg-10">
        <select class="form-control" id="select">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        <br>
        <select multiple="" class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>


-->



<!--
<div class="row">
<div class="col-lg-4">
<div class="bs-component">
<div class="container-fluid">
<table class="table-condensed table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Vendor ID</td>
            <td>Origin></td>
            <td>Destination</td>
            <td>Buy</td>
            <td>Sell</td>
            <td>Cargo</td>
            <td>Note</td>
            <td>Parent ID</td>
            <td>Quote ID</td>
            <td>Created</td>
            <td>Updated</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($quotes as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->vendor_id }}</td>
            <td>{{ $value->origin }}</td>
            <td>{{ $value->destination }}</td>
           <td>{{ $value->buy }}</td>
           <td>{{ $value->sell }}</td>
           <td>{{ $value->cargo }}</td>
           <td>{{ $value->note }}</td> 
           <td>{{ $value->parent_id }}</td> 
           <td>{{ $value->quote_id }}</td> 
           <td>{{ $value->created_at }}</td> 
           <td>{{ $value->updated_at }}</td> 



            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
-->
<!--
<form class="form-horizontal"> 
@foreach($quotes as $key => $value)
<div class="panel panel-default">
    <div class="panel-heading"><strong>{{ $value->quote_id }}</strong></div>
    <p class="panel-body">{{ $value->vendor_id }}</p>
    </div>
</div>
@endforeach
</form>
-->
<a href="/quotes/create" class="btn btn-info">Create a Quote</a>

<table class="table table-striped table-hover ">
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
      <td>{{ $value->quote_id }}</td>
      <td>{{ $value->vendor_id }}</td> 
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
