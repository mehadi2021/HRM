@extends('backend.partial.frontend.master')
@section('content')
<a class="btn btn-success" href="{{route('backend.job.circular.create')}}">Circular Create</a>
<div>
  <H1>Circular List</H1>
<table class="table table-white">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Salary</th>
      <th scope="col">Requirement</th>
    </tr>
  </thead>
  <tbody>

       
  @foreach($circulars as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->tittle}}</td>
      <td>{{$data->description}}</td>
      <td>{{$data->salary}}</td>
      <td>{{$data->requirement}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection