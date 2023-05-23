@extends('backend.partial.frontend.master')
@section('content')
<a href="{{route('payroll.create')}}" class="btn btn-primary">
  Add salary
</a>
<table class="table">
  <thead>
  <tr>
      <th scope="col">serial</th>
      <th scope="col">Name</th>
      
      <th scope="col">Month</th>
      <th scope="col">Status</th>
      <th scope="col">Amount</th>
     
    </tr>
  </thead>
  <tbody>
    
    @foreach($payrolls as $data)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{optional($data->user)->name}}</td>
     
      <td>{{$data->month}}</td>
      <td>{{$data->status}}</td>
      <td>{{$data->salarystructure->basic_allowence+$data->salarystructure->home_allowence+$data->salarystructure->medical_allowence}}</td>
    </tr>
    @endforeach
    
    
  </tbody>
</table>


@endsection