@extends('backend.partial.frontend.master')
@section('content')
<div class="col-5">
              <h4 class="page-title">Dashboard</h4>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
            </div>

 @if(auth()->user()->role=='admin')
            <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Total Apply :</h5><br>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <h5>Total Apply : {{$totalApply}}</h5>
    <p class="card-text"></p>
    <a href="{{route('circular.apply')}}" class="btn btn-info">View List</a>
  </div>
            </div>
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Total Leave :</h5><br>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <h5>Total Leave: {{$totalLeave}}</h5>
    <p class="card-text"></p>
    <a href="{{route('leave')}}" class="btn btn-info">View List</a>
  </div>
</div>
@else
 <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Total Apply :</h5><br>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <h5>Total Apply : {{$totalApply}}</h5>
    <p class="card-text"></p>
    </div>
            </div>
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Total Leave :</h5><br>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <h5>Total Leave: {{$totalLeave}}</h5>
    <p class="card-text"></p>
  </div>
</div>
@endif
<!-- <table class="table table-white">
  <thead>
    <tr>

      <th scope="col">Name</th>
      <th scope="col">phone</th>
    </tr>
  </thead>
  <tbody>


  @foreach($ApplyList as $apply)
    <tr>
      <td>{{$apply->name}}</td>
      <td>{{$apply->phone}}</td>
    </tr>
    @endforeach
  </tbody>
</table> -->
</div>
</div>


@endsection
