@extends('backend.partial.frontend.master')
@section('content')
<a href="{{route('add.salary')}}" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
  Add salary
</a>
<table class="table">
  <thead>
  <tr>
      <th scope="col">serial</th>
      <th scope="col">Name</th>
      <th scope="col">Basic Allowence</th>
      <th scope="col">Home Allowence</th>
      <th scope="col">Medical Allowence</th>
     
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($ing as $data)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->basic_allowence}}</td>
      <td>{{$data->home_allowence}}</td>
      <td>{{$data->medical_allowence}}</td>
      <td>{{$data->status}}</td>
    </tr>
    @endforeach
    
    
  </tbody>
</table>


@endsection