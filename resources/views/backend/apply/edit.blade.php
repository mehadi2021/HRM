@extends('backend.partial.frontend.master')
@section('content')
<br><br><br><br><br>
<h3>Fill Up this form</h3>

<form action="{{ route('circular.update',$apply->id) }}" method="post">
 @csrf
      @method('put')
  <div class="form-group">
    <label for="">Confirm Status</label>
    <input type="text" name="status" class="form-control" id="" aria-describedby="emailHelp" placeholder="{{ $apply->status }}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection