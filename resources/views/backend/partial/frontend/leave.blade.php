@extends('backend.partial.frontend.master')
@section('content')

<!-- Button trigger modal -->
<div>
  <col-md-3></col-md-3>
  <col-md-6></col-md-6>
  <col-md-3>
 
        
</col-md-3>

</div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
leave list
</button>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">title</th>
      <th scope="col">from_date</th>
      <th scope="col">tO_date</th>
      <th scope="col">emergency_contact</th>
      <th scope="col">leave_type</th>
    </tr>
  </thead>
  @foreach($leaveApplications as $data)

  <tbody>
    <tr>
      <th scope="row">{{$data->title}}</th>
      <td>{{$data->from_date}}</td>
      <td>{{$data->to_date}}</td>
      <td>{{$data->status}}</td>
      <td>{{$data->leave_type}}</td>
      @if(auth()->user()->role=='admin')
      <td>
      <a class="btn btn-success" href="{{route('leave.approve', $data->id)}}">Approve</a>
  <a class="btn btn-danger" href="{{route('leave.reject',$data->id)}}">Reject</a>
      </td>
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
      <form action="{{route('_leave')}}" method="post">
      @csrf
 <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="Title" class="form-control" name="title"  placeholder="Title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">From_Date</label>
    <input type="Date" class="form-control" name="from_Date"  placeholder="From Date">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">To_Date</label>
    <input type="Date" class="form-control" name="to_date"  placeholder="To Date">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Emergency_contact</label>
    <input type="number" class="form-control" name="emergency_contact" placeholder="Emergency Contact">
  </div>
  <div class="form-group">
        <label for="exampleFormControlInput1">Type</label>
            <select class="form-control"  name="leave_type">
                <option value="anual">Annual</option>
                <option value="sick">Sick</option>
                <option value="casual">Causal</option>
            </select>
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