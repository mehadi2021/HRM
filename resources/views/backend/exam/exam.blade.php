@extends('backend.partial.frontend.master')
@section('content')

<a class="btn btn-success" href="{{ route('exam.create') }}">Exam Create</a>
<br>
    <a class="btn btn-success" href="{{ route('result.resultpage') }}">Exam Result</a>

  <H1>Exam List</H1>
<table class="table table-white">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Action</th>
      <th scope="col">End Time</th>
      <th scope="col">Question</th>
      <th scope="col">Question</th>
      <th scope="col">Question</th>
      <th scope="col">Question</th>
      <th scope="col">Question</th>
      <th scope="col">Question</th>
      <th scope="col">Question</th>
      <th scope="col">Question</th>
      <th scope="col">Question</th>
      <th scope="col">Question</th>
    </tr>
  </thead>
  <tbody>


  @foreach($lists as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td><a class="btn btn-success" href="{{ route('exam.delete',$data->id) }}">Delete</a></td>
       <td>{{$data->to_time}}</td>
      <td>{{$data->qa}}</td>
      <td>{{$data->qb}}</td>
      <td>{{$data->qc}}</td>
      <td>{{$data->qd}}</td>
      <td>{{$data->qe}}</td>
      <td>{{$data->qf}}</td>
      <td>{{$data->qg}}</td>
      <td>{{$data->qh}}</td>
      <td>{{$data->qi}}</td>
      <td>{{$data->qj}}</td>
     
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
