{{--************************* start links ************************* --}}

@extends('layout.layout')

{{--**************** page name  **************** --}}

@section('title_page')
  <title>Home Page</title>
@endsection


{{--**************** count items **************** --}}
@section('count')
  <div class="row">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class=" d-block " src="https://www12.0zz0.com/2023/04/22/22/729884486.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class=" d-block " src="https://www12.0zz0.com/2023/04/22/22/729884486.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class=" d-block " src="https://www12.0zz0.com/2023/04/22/22/729884486.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon arrow " aria-hidden="true"></span>
        <span class="sr-only ">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon arrow" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
@endsection
@section('content')
<div class="row p-2 content_page ">
  <div class="col-lg-4 col-sm-6">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://w.forfun.com/fetch/83/83faab89c9f0987d965797470b078c54.jpeg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up.</p>
        <a href="#" class="btn btn-primary col-12">اشتراك</a>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://w.forfun.com/fetch/83/83faab89c9f0987d965797470b078c54.jpeg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up.</p>
        <a href="#" class="btn btn-primary col-12">اشتراك</a>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://w.forfun.com/fetch/83/83faab89c9f0987d965797470b078c54.jpeg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up.</p>
        <a href="#" class="btn btn-primary col-12">اشتراك</a>
      </div>
    </div>
  </div>
</div>
@endsection
