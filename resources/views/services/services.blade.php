@extends('layouts')
@section('content')

<h4 class="container mt-5 text-center">Essential Services Open Now</h4>
<div class="row m-5">
    <div class="col-4">
        @foreach($service as $ser)
        <div class="card" style="width: 18rem;">
  <img src="{{asset('storage/'. $ser->cover_img)}} " class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$ser->name}}</h5>
    <p class="card-text">{{$ser->description}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  @endforeach
</div>
</div>


@endsection()
