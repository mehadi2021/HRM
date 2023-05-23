

  @extends('frontend.master')
@section('main')
<br><br><br><br><br>
<h3>Fill Up this form</h3>

<form action="{{ route('applyForm.job',$jobs->id) }}" method="post">
 @csrf
      @method('put')
  <div class="form-group">
    <label for="">Job Tittle</label>
    <input type="text" name="tittle" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Job Description</label>
    <input type="text" name="description" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Salary Range</label>
    <input type="number" name="salary" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Requirement</label>
    <input type="text" name="requirement" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Photo</label>
    <input type="text" name="photo" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection