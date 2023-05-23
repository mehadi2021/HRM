@extends('backend.partial.frontend.master')
@section('content')
<form action="" method="post">
@method('PUT')
      @csrf
    
  <div class="form-group">
    <label for="exampleFormControlInput1">Names</label>
    <input value="{{$employee->name}}" type="text" class="form-control" name="name"  name="name"  placeholder="Name">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">IDs</label>
    <input value="{{$employee->id}}" type="number" class="form-control"  name="id"  placeholder="ID">
</div>

<div class="form-group">
    <label for="exampleFormControlInput1">Mobiles</label>
    <input value="{{$employee->mobile}}" type="number" class="form-control" name="mobile" name="mobile" placeholder="Mobile">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Emails</label>
    <input value="{{$employee->email}}" type="text" class="form-control "name="email" placeholder="Email">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Address</label>
    <input value="{{'$employee->address'}}" type="text" class="form-control" name="address" placeholder="Address">
  </div>
<div class="form-group">
    <label for="exampleFormControlInput1">Password</label>
    <input type="password" class="form-control" name="password"  placeholder="Password">
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
@endsection