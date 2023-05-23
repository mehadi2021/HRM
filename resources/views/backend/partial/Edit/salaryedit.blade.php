@extends('backend.partial.frontend.master')
@section('content')
<div class="modal-body">
      <form action="" method="post">
      @csrf
      @method('PUT')
    
  <div class="form-group">
    <label for="exampleFormControlInput1">Names</label>
    <input value="{{$salary->name}}" type="text" class="form-control" name="name" placeholder="Name">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Amounts</label>
    <input value="{{$salary->amount}}"type="number" class="form-control" name="amount" placeholder="amount">
  </div>
  <div class="form-group">

        <div class="form-group">
        <label for="exampleFormControlInput1">Salary status</label>
            <select class="form-control"  id="status" name="status">
                <option>Paid</option>
                <option>Unpaid</option>
            </select>
        </div>
      
  </div>
 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>



@endsection