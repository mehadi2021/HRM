

  @extends('frontend.master')
@section('main')
<br><br><br><br><br>
<h3>Fill Up this form</h3>

<form action="{{route('applyForm.job.store')}}" method="post">
    @method('PUT')
@csrf

<div>
    <input type="hidden" name="apply_id" >
</div>
  <div class="form-group">
    <label for="">Enter Name</label>
    <input type="text" name="name" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Email address</label>
    <input type="email" name="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Phone</label>
    <input type="tel" name="phone" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>

  <div>
    <input type="hidden" name="status">
  </div>


  <div class="form-group">
    <label for=""> Address</label>
    <input type="text" class="form-control" name="address" id="" aria-describedby="emailHelp" placeholder="">
  </div><br><br>


  <button type="submit" class="btn btn-primary">Submit</button>
</form><br><br><br> 

@endsection 