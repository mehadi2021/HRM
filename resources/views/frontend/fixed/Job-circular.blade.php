@extends('frontend.master')
@section('main')

<br><br><br>
<section class="contact-section bg-black"><br><br><br>
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">


                @foreach($jobs as $job)

                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                            <h4 class="text-uppercase m-0">Tittle:{{$job->tittle}}</h4>
                            <hr class="my-4 mx-auto" />
                                <h4 class="text-uppercase m-0">Salary: {{$job->salary}} BDT</h4><br>
                                <h4 class="text-uppercase m-0">Description: {{$job->description}}</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">Education: {{$job->requirement}}</div>
                            </div>
                            <a href="{{route('place.job',$job->id)}}" class="btn btn-success"> Job Apply</a>
                        </div>
                    </div>

                 @endforeach
                    
                   
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        @endsection