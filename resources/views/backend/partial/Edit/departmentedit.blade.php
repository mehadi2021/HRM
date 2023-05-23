@extends('backend.partial.frontend.master')
@section('content')
<h2>Update your data<h2>

<!-- ---Modal -->

 <form action="{{route('department.department_update',$department->id)}}" method="post">
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
        <label for="exampleFormControlInput1">Departments</label>
            <select class="form-control"  name="department">
                <option>Database</option>
                <option>Frontend</option>
                <option>Backend</option>
                
            </select>
        </div>
      
  </div>
 

   
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
   


@endsection