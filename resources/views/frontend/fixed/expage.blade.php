

  @extends('frontend.master')
@section('main')
<br>
<div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
         
<h3>Fill Up this form</h3>

<form action="{{ route('exampage.exstore') }}" method="post" enctype="multipart/form-data" >
@csrf
@foreach($lists as $list)
   @if($list->to_time<= now()->toTimeString())
<h3 style="text-align:center">Exam Hour({{ $list->exam_time }}min)</h3>
<div>
    <input type="hidden" name="user_name" >
</div>
  <div class="form-group">
    <label for="">{{ $list->qa }}</label>
    <input type="text" name="ra" class="form-control" id="" aria-describedby="emailHelp" placeholder="Please Written Your Answer">
  </div>

   <div class="form-group">
    <label for="">{{ $list->qb }}</label>
    <input type="text" name="rb" class="form-control" id="" aria-describedby="emailHelp" placeholder="Please Written Your Answer">
  </div>

   <div class="form-group">
    <label for="">{{ $list->qc }}</label>
    <input type="text" name="rc" class="form-control" id="" aria-describedby="emailHelp" placeholder="Please Written Your Answer">
  </div>

   <div class="form-group">
    <label for="">{{ $list->qd }}</label>
    <input type="text" name="rd" class="form-control" id="" aria-describedby="emailHelp" placeholder="Please Written Your Answer">
  </div>

  <div class="form-group">
    <label for="">{{ $list->qe }}</label>
    <input type="text" name="re" class="form-control" id="" aria-describedby="emailHelp" placeholder="Please Written Your Answer">
  </div>

  <div class="form-group">
    <label for="">{{ $list->qf }}</label>
    <input type="text" name="rf" class="form-control" id="" aria-describedby="emailHelp" placeholder="Please Written Your Answer">
  </div>

  <div class="form-group">
    <label for="">{{ $list->qg }}</label>
    <input type="text" name="rg" class="form-control" id="" aria-describedby="emailHelp" placeholder="Please Written Your Answer">
  </div>

  <div class="form-group">
    <label for="">{{ $list->qh }}</label>
    <input type="text" name="rh" class="form-control" id="" aria-describedby="emailHelp" placeholder="Please Written Your Answer">
  </div>

  <div class="form-group">
    <label for="">{{ $list->qi }}</label>
    <input type="text" name="ri" class="form-control" id="" aria-describedby="emailHelp" placeholder="Please Written Your Answer">
  </div>

  <div class="form-group">
    <label for="">{{ $list->qj }}</label>
    <input type="text" class="form-control" name="rj" id="" aria-describedby="emailHelp" placeholder="Please Written Your Answer">
  </div>
   <div>
    <input type="hidden" name="result">
  </div>
  <br><br>
   @if(now()->diffInMinutes($list->to_time)<=$list->exam_time)
  <button type="submit" class="btn btn-primary">Submit</button>
  @else
  <h1>Sorry!Exam Time Over</h1>
  @endif
</form>

@else
<h1>Exam Time not going on</h1>
<h2>Please Wait!</h2>
@endif
@endforeach

<br>
</div>
</div>
@endsection 