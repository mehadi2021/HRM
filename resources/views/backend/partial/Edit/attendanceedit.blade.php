@extends('backend.partial.frontend.master')
@section('content')


<form action="{{route('attendance.update',$attendance->id)}}" method="post">
@method('PUT')
      @csrf

    <div class="form-group">
    <label for="exampleFormControlInput1">IDs</label>
    <input value="{{$attendance->employee_id}}" type="number" class="form-control"  name="employee_id" placeholder="ID">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlInput1">Date</label>
    <input value="{{$attendance->date}}" type="date" class="form-control"  name="date" placeholder="Date">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">In_time</label>
    <input value="{{$attendance->in_time}}" type="time" class="form-control"  name="in_time" placeholder="In_time">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Out_time</label>
    <input value="{{$attendance->out_time}}" type="time" class="form-control"  name="out_time" placeholder="Out_time">
  </div>

  <div class="form-group">

       
      
  </div>
 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
@endsection