
@extends('backend.partial.frontend.master')
@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
Add notice
</button>
<table class="table">
  <thead>
  
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Employee Id</th>
      <th scope="col">Movement Date</th>
      <th scope="col">Movement Type</th>
      <th scope="col">Movement Time</th>
    </tr>
  </thead>
  <tbody>
  
    
  @foreach($request as $data)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$data->employee_id}}</td>
      <td>{{$data->movement_date}}</td>
      <td>{{$data->movement_type}}</td>
      <td>{{$data->movement_time}}</td>

      <td>
      <a href="#" class="btn btn-info" role="button">Edit</a>
      <a href="{{route('movement.movement_delete',$loop->iteration)}}" class="btn btn-success" role="button">Delete</a>
      </td>
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
<form action="{{route('_movement')}}" method="post">
<div class="modal-body">
      
      @csrf
    
          <div class="form-group">
           <label for="exampleFormControlInput1">ID</label>
          <input type="number" class="form-control"  name="employee_id" placeholder="ID">
          </div>

          <div class="form-group">
           <label for="exampleFormControlInput1">Date</label>
          <input type="date" class="form-control"  name="movement_date" placeholder="Date">
          </div>
          <div class="form-group">
        <label for="exampleFormControlInput1">Type</label>
            <select class="form-control"  name="movement_type">
                <option>Banking purpose</option>
                <option>others</option>
            </select>

        
          
   
          <div class="form-group">
            <label for="exampleFormControlInput1">Time</label>
            <input type="time" class="form-control" name="movement_time" placeholder="Time">
          </div>
  </div>
 

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
          
      </div>
</form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>




  
@endsection
