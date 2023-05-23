@extends('frontend.master')
@section('main')

<div>
  <H1>Apply List</H1>
<table class="table table-white">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Job Tittle</th>
      <th scope="col">Name</th>
      <th scope="col">Father Name</th>
      <th scope="col">Mother Name</th>
      <th scope="col">Date</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Photo</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
        @foreach($lists as $list)
  
    <tr>
      <th scope="row">{{$list->id}}</th>
      <td>{{$list->tittle}}</td>
      <td>{{$list->name}}</td>
      <td>{{$list->fname}}</td>
      <td>{{$list->mname}}</td>
      <td>{{$list->date}}</td>
      <td>{{$list->email}}</td>
      <td>{{$list->phone}}</td>
      <td>{{$list->address}}</td>
      <td><img src="{{url('/uploads/'.$list->photo)}}" class="img-square" width="90" height="100" alt="apply image"></td>
      <td>{{$list->status}}</td>
     
    </tr>
    @endforeach
      
  </tbody>
</table>
</div>

@endsection