

  @extends('frontend.master')
@section('main')
<br>
<div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
<h3>Fill Up this form</h3>

<form action="{{route('applyForm.job.store')}}" method="post" enctype="multipart/form-data" >
@csrf

<div>
    <input type="hidden" name="apply_id" >
</div>
  <div class="form-group">
    <label for="">Job Tittle</label>
    <input type="text" name="tittle" class="form-control" id="" aria-describedby="emailHelp" placeholder="{{ $jobs->tittle }}">
  </div>

   <div class="form-group">
    <label for="">Enter Your Name</label>
    <input type="text" name="name" class="form-control" id="" aria-describedby="emailHelp" placeholder="{{ auth()->user()->name }}">
  </div>

   <div class="form-group">
    <label for="">Enter Your Father Name</label>
    <input type="text" name="fname" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>

   <div class="form-group">
    <label for="">Enter Your Mother Name</label>
    <input type="text" name="mname" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Date of Birth</label>
    <input type="date" name="date" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Enter Your Email address</label>
    <input type="email" name="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Enter Your Phone</label>
    <input type="tel" name="phone" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Enter Your Photo</label>
    <input type="file" name="photo" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Enter Your CV (pdf file)</label>
    <input type="file" name="cv" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  {{-- <div class="form-group">
    <label for="">Enter Your CV (pdf file)</label>
    <input type="text" name="cv" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div> --}}

  <div class="form-group">
    <label for="">Enter Your Address</label>
    <input type="text" class="form-control" name="address" id="" aria-describedby="emailHelp" placeholder="">
  </div>
   <div>
    <input type="hidden" name="status">
  </div>
  <br><br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form><br>
</div>
</div>
@endsection 