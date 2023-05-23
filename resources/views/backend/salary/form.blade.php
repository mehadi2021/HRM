@extends('backend.partial.frontend.master')
@section('content')
<form action="{{route('submit.salary')}}" method="post">
      @csrf
    
  <div class="form-group">
    <label for="exampleFormControlInput1">Names</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
  </div>


  <div class="form-group">
    <label for="exampleFormControlInput1">Basic Allowence</label>
    <input type="number" class="form-control" id="amount" name="basic_allowence" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Home Allowence</label>
    <input type="number" class="form-control" id="amount" name="home_allowence">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Medical Allowence</label>
    <input type="number" class="form-control" id="amount" name="medical_allowence" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">status</label>
    <input type="string" class="form-control" id="amount" name="status" >
  </div>
 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
@endsection