@extends('backend.partial.frontend.master')
@section('content')
<h1>Exam Paper</h1>

<form action="{{route('exam.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="">Question no-1</label>
    <input type="text" name="qa" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Question No-2</label>
    <input type="text" name="qb" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Question No-3</label>
    <input type="text" name="qc" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Question No-4</label>
    <input type="text" name="qd" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Question No-5</label>
    <input type="text" name="qe" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Question No-6</label>
    <input type="text" name="qf" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Question No-7</label>
    <input type="text" name="qg" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Question-8 <No-8></No-8></label>
    <input type="text" name="qh" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Question No-9</label>
    <input type="text" name="qi" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Question No-10</label>
    <input type="text" name="qj" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">start Exam time  </label>
    <input type="time" name="to_time" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">End Exam time  </label>
    <input type="time" name="end_time" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">How Many Hour Exam</label>
    <input type="number" name="exam_time" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter minutes time">
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
