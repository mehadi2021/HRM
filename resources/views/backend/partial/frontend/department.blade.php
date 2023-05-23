@extends('backend.partial.frontend.master')
@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
  Add employee
</button>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Employee_name</th>
      <th scope="col">Employee_id</th>
      <th scope="col">Department_name</th>
      <th scope="col">Department_id</th>
      <th scope="col">Action</th>
      <td>

    </tr>
  </thead>
  @foreach($request as $data)

  <tbody>
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->employee_name}}</td>
      <td>{{$data->employee_id}}</td>
      <td>{{$data->department_name}}</td>
      <td>{{$data->department_id}}</td>
      <td>{{$data->action}}</td>
    
      <td>
        <a href="{{route('department.department_edit',$data->id)}}" class="btn btn-info" role="button">Edit</a>
        <a href="{{route('department.department_delete',$data->id)}}" class="btn btn-danger" role="button">Delete</a>
      </td>

    </tr>

    @if(session()->has('message'))
    <span class="alert alert-success">{{session()->get('message')}}</span>
    @endif

    </tr>
    @endforeach

  </tbody>
</table>



<!-- ---Modal -->

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('_department')}}" method="post">
          @csrf

          <div class="form-group">
            <label for="exampleFormControlInput1">Names</label>
            <input type="text" class="form-control" name="name" name="name" placeholder="Name">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">IDs</label>
            <input type="number" class="form-control" id="id" name="id" placeholder="ID">
          </div>


          <div class="form-group">
            <label for="exampleFormControlInput1">Departments</label>
            <select class="form-control" name="department">
              <option>Database</option>
              <option>Frontend</option>
              <option>Backend</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Department Id</label>
            <input type="number" class="form-control" id="id" name="department_id" placeholder="ID">
          </div>
      </div>



      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>



@endsection