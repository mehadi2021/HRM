@extends('backend.partial.frontend.master')
@section('content')


<form action="{{route('notice.notice_update',$notice->id)}}" method="post">
  @method('PUT')
<div class="modal-body">
      
      @csrf
    
          <div class="form-group">
           <label for="exampleFormControlInput1">Date</label>
          <input value="{{$notice->date}}"type="date" class="form-control"  name="date" placeholder="Date">
          </div>

          <div class="form-group">
          <label for="exampleFormControlInput1">tittle</label>
            <select class="form-control"  name="tittle">
                <option>open</option>
                <option>closed</option>
              
            </select> 
          </div>
   
          <div class="form-group">
            <label for="exampleFormControlInput1">Notice</label>
            <input value="{{$notice->notice}}"type="text" class="form-control" name="notice" placeholder="Notice">
          </div>
  </div>
 

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
          
      </div>
</form>
@endsection