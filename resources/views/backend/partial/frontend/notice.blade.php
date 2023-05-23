
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
      <th scope="col">Date</th>
      <th scope="col">Tittle</th>
      <th scope="col">Notice</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
    
  @foreach($ing as $data)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$data->date}}</td>
      <td>{{$data->tittle}}</td>
      <td>{{$data->notice}}</td>
      <td>
      <a href="{{route('notice.notice_edit',$data->id)}}" class="btn btn-info" role="button">Edit</a>
      <a href="{{route('notice.notice_delete',$data->id)}}" class="btn btn-success" role="button">Delete</a>
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
<form action="{{route('_notice')}}" method="post">
<div class="modal-body">
      
      @csrf
    
          <div class="form-group">
           <label for="exampleFormControlInput1">Date</label>
          <input type="date" class="form-control"  name="date" placeholder="Date">
          </div>

          <div class="form-group">
          <label for="exampleFormControlInput1">tittle</label>
            <select class="form-control"  name="tittle">
                <option>open</option>
                <option>closed</option>
              
            </select> 
          </div>
   
          <div class="form-group">
            <label for="exampleFormControlInput1">Notice</label>
            <input type="text" class="form-control" name="notice" placeholder="Notice">
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
