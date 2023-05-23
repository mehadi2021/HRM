@extends('backend.partial.frontend.master')
@section('content')

<div>
  <H1>Result List</H1>
  @foreach ($lists as $list )
  @foreach ($results as $result )
  <h1>Applicant Name:{{ $result->user_name }}
    <hr>
      <h2>Question 1:{{ $list->qa }}
      <h2>Answer 1:{{ $result->ra }}
        <hr>
         <h2>Question 2:{{ $list->qb }}
      <h2>Answer 2:{{ $result->rb }}
        <hr>
         <h2>Question 3:{{ $list->qc }}
      <h2>Answer 3:{{ $result->rc }}
        <hr>
         <h2>Question 4:{{ $list->qd }}
      <h2>Answer 4:{{ $result->rd }} 
        <hr>
        <h2>Question 5:{{ $list->qe }}
      <h2>Answer 5:{{ $result->re }} 
        <hr>
        <h2>Question 6:{{ $list->qf }}
      <h2>Answer 6:{{ $result->rf }}
        <hr>
         <h2>Question 7:{{ $list->qg }}
      <h2>Answer 7:{{ $result->rg }}
        <hr>
         <h2>Question 8:{{ $list->qh }}
      <h2>Answer 8:{{ $result->rh }} 
        <hr>
        <h2>Question 9:{{ $list->qi }}
      <h2>Answer 9:{{ $result->ri }} 
        <hr>
        <h2>Question 10:{{ $list->qj }}
      <h2>Answer 10:{{ $result->rj }}
        <br>
        <br>
   
        
       

<a class="btn btn-success" href="{{ route('result.resultedit',$result->id) }}">Result Submit</a>

      
          @endforeach
      
  @endforeach

  @endsection