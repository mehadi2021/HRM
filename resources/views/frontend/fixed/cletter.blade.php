
   @extends('frontend.master')
@section('main')
 @foreach($apply as $list)
 <div style="text-align: center;">
 <h1>Confirmation Letter<h1>
<h2>Name:{{ $list->user_name }}</h2>

<h2>Phone:{{ auth()->user()->mobile}}</h2>
<h2>Address:{{ auth()->user()->Address}}</h2>
<h2>Job Status:{{ $list->result }}</h2>
 </div>
@endforeach
@endsection