@extends('backend.partial.frontend.master')
@section('content')

<!-- ---Modal -->
<form action="{{route('designation.designation_update',$department->id)}}" method="post">
     @method('PUT')
  <div class="modal-body">
      @csrf
    
  <div class="form-group">
    <label for="exampleFormControlInput1">Names</label>
    <input value="{{$department->name}}" type="text" class="form-control" name="name" name="name" placeholder="Name">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">IDs</label>
    <input value="{{$department->id}}" type="number" class="form-control" id="id" name="id" placeholder="ID">
  </div>
 

        
  <div class="form-group">
    <label for="exampleFormControlInput1">Designation_status</label>
    <input value="{{$department->designation}}" type="text" class="form-control"  name="designation" placeholder="Designation_status">
  </div>
      
  
 

   
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
@endsection