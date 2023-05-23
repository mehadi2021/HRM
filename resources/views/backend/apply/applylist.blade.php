@extends('backend.partial.frontend.master')
@section('content')

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
      <th scope="col">Date of Birth</th>
      {{-- <th scope="col">Email</th>
      <th scope="col">Phone</th> --}}
      <th scope="col">Photo</th>
      <th scope="col">CV Download</th>
      <th scope="col">Address</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($applys as $apply)
    <tr>
      <th scope="row">{{$apply->id}}</th>
      <td>{{$apply->tittle}}</td>
      <td>{{$apply->name}}</td>
      <td>{{$apply->fname}}</td>
      <td>{{$apply->mname}}</td>
      <td>{{$apply->date}}</td>
      {{-- <td>{{$apply->email}}</td>
      <td>{{$apply->phone}}</td> --}}
      <td><img src="{{url('/uploads/'.$apply->photo)}}" class="img-square" width="90" height="100" alt="apply image"></td>
      <td><a href="{{route('circular.download',$apply->cv) }}">Download</a></td>
      <td>{{$apply->address}}</td>
      <td>{{$apply->status}}</td>
      <td>

        <a class="btn btn-success" href="{{ route('circular.edit',$apply->id) }}">Approve</a>
  {{-- <a class="btn btn-danger" href="">Reject</a> --}}
      </td>


    </tr>
    @endforeach

  </tbody>
</table>
</div>

@endsection
