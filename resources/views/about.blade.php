{{--************************* start links ************************* --}}

@extends('layout.layout')

{{--**************** page name  **************** --}}

@section('title_page')
  <title>About Us</title>
@endsection

{{--**************** title in page **************** --}}

@section('title_home')
  Home page
@endsection

@section('count')
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center p-2 m-auto">
        <h3 class="font_2  p-3">
          About Simple House
        </h3>
      </div>
      <div class="font_4 text-center col-md-9 col-lg-7 p-3 m-auto col-12 font_larg">
        <h5>
          This is a bout page of simple house template . You can modify and use this HTML template for
          your website . Total 3 HYML pages included in this template header image has aparallax effect .
        </h5>
      </div>
    </div>
  </div>
  <div class="imgs_title_slider p-3">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-6 p-2">
          <div class="row">
            <div class="image_card col-8 m-auto text-center p-1 col-sm-6 col-lg-6 col-xl-6 col-md-6">
              <img class="w-50 h-100" src="https://www2.0zz0.com/2023/04/22/15/347852584.jpg"
                   alt="Sorry, the image cannot be loaded">
            </div>
            <div class="col-12 text-center text-sm-start col-sm-6 col-lg-6 col-xl-6 col-md-6 title-img">
              <h4 class="font_1 c-blue mt-3">jennifer soft</h4>
              <h4 class="font_3 c-orange">founder and CEO</h4>
              <p class="font_4 fw-light">Praesent non vulputate elit. Orci varius natoque et magnis
                dis parturient, nascetur ridiculus mus.</p>
              <div class="link_slider m-auto w-50 d-flex justify-content-between">
                <a class="c-gray fs-4" href="#"><i class="fab fa-facebook"></i></a>
                <a class="c-gray fs-4" href="#"><i class="fab fa-twitter"></i></a>
                <a class="c-gray fs-4" href="#"><i class="fab fa-instagram-square"></i></a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-12 col-md-12 col-lg-6 p-2">
          <div class="row">
            <div class="image_card col-8 m-auto text-center p-1 col-sm-6 col-lg-6 col-xl-6 col-md-6">
              <img class="w-50 h-100" src="https://www2.0zz0.com/2023/04/22/15/405200966.jpg"
                   alt="Sorry, the image cannot be loaded">
              <div class="overlay">
                <div class="read font_3 text-center">
                  <h6><a class="text-decoration-none c-black" href="#">Read More</a></h6>
                </div>
              </div>
            </div>
            <div class="col-12 text-center text-sm-start col-sm-6 col-lg-6 col-xl-6 col-md-6 title-img">
              <h4 class="font_1 c-blue mt-3">Daisy Walker</h4>
              <h4 class="font_3 c-orange">Executive Chef</h4>
              <p class="font_4 fw-light">Aenean sapien sem, ultricies sed vulputate et, auctor vel
                mauris. Integer sit amet diam eget est facilisis lacinia vitae.</p>
              <div class="link_slider m-auto w-50 d-flex justify-content-between">
                <a class="c-gray fs-4" href="#"><i class="fab fa-facebook"></i></a>
                <a class="c-gray fs-4" href="#"><i class="fab fa-twitter"></i></a>
                <a class="c-gray fs-4" href="#"><i class="fab fa-instagram-square"></i></a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-12 col-md-12 col-lg-6 p-2">
          <div class="row">
            <div class="image_card col-8 m-auto text-center p-1 col-sm-6 col-lg-6 col-xl-6 col-md-6">
              <img class="w-50 h-100" src="https://www2.0zz0.com/2023/04/22/15/530809098.jpg"
                   alt="Sorry, the image cannot be loaded">
              <div class="overlay">
                <div class="read font_3 text-center">
                  <h6><a class="text-decoration-none c-black" href="#">Read More</a></h6>
                </div>
              </div>
            </div>
            <div class="col-12 text-center text-sm-start col-sm-6 col-lg-6 col-xl-6 col-md-6 title-img">
              <h4 class="font_1 c-blue mt-3">Florence Nelson</h4>
              <h4 class="font_3 c-orange">Kitchen Manager</h4>
              <p class="font_4 fw-light">Praesent non vulputate elit. Orci varius natoque et magnis
                dis parturient, nascetur ridiculus mus.</p>
              <div class="link_slider m-auto w-50 d-flex justify-content-between">
                <a class="c-gray fs-4" href="#"><i class="fab fa-facebook"></i></a>
                <a class="c-gray fs-4" href="#"><i class="fab fa-twitter"></i></a>
                <a class="c-gray fs-4" href="#"><i class="fab fa-instagram-square"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-6 p-2">
          <div class="row">
            <div class="image_card col-8 m-auto text-center p-1 col-sm-6 col-lg-6 col-xl-6 col-md-6">
              <img class="w-50 h-100" src="https://www2.0zz0.com/2023/04/22/15/817559466.jpg"
                   alt="Sorry, the image cannot be loaded">
              <div class="overlay">
                <div class="read font_3 text-center">
                  <h6><a class="text-decoration-none c-black" href="#">Read More</a></h6>
                </div>
              </div>
            </div>
            <div class="col-12 text-center text-sm-start col-sm-6 col-lg-6 col-xl-6 col-md-6 title-img">
              <h4 class="font_1 c-blue mt-3">Valentina Martin</h4>
              <h4 class="font_3 c-orange">Culinary Director</h4>
              <p class="font_4 fw-light">Vivamus cursus leo nec sem feugiat sagittis. Duis ut feugiat
                odio, sit amet accumsan odio</p>
              <div class="link_slider m-auto w-50 d-flex justify-content-between">
                <a class="c-gray fs-4" href="#"><i class="fab fa-facebook"></i></a>
                <a class="c-gray fs-4" href="#"><i class="fab fa-twitter"></i></a>
                <a class="c-gray fs-4" href="#"><i class="fab fa-instagram-square"></i></a>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
  <div class="image_separator w-100 overflow-hidden">
    <img src="https://www12.0zz0.com/2023/04/22/16/639688405.jpg">
  </div>
  <div class="container p-3">
    <div class="row">
      <div class="col-md-4 text-center p-4 icone_1">
        <h3 class="c-gray fs-1"><i class=" fas fa-pepper-hot"></i></h3>
        <p class="font_4">Donec sed orci fermentum, convallis
          lacus id, tempus elit. Sed eu neque
          accumsan, porttitor arcu a, interdum
          est. Donec in risus eu ante.</p>
        <button type="button" class="btn btn-primary  button">Read More</button>
      </div>
      <div class="col-md-4 text-center p-4 icone_2">
        <h3 class="c-gray  fs-1"><i class=" fas fa-seedling"></i></h3>
        <p class="font_4">Maecenas pretium rutrum molestie.
          Duis dignissim egestas turpis sit
          sed suscipit odio. Morbi in dolor finibus, ,
          consequat nisl eget</p>
        <button type="button" class="btn btn-success  button">Read More</button>
      </div>
      <div class="col-md-4 text-center p-4 icone_3">
        <h3 class="c-gray  fs-1"><i class=" fas fa-cocktail"></i></h3>
        <p class="font_4">Morbi in dolor finibus, consequat nisl
          eget, pretium nunc. Maecenas pretium
          rutrum molestie. Duis dignissim egestas
          turpis sit.</p>
        <button type="button" class="btn btn-danger button">Read More</button>
      </div>
    </div>
  </div>
  <div class="container ">
    <div class="row p-3  ">
      <div class="col-md-6 img-footer">
        <img class="w-100 h-100" src="https://www2.0zz0.com/2023/04/22/15/425600841.jpg"
             alt="Sorry, the image cannot be loaded">
      </div>
      <div class="col-md-6 paragraph_slider">
        <h4 class="font_2 py-3 c-blue text-center text-sm-start">History of our restaurant</h4>
        <h4 class="font_4 c-gray text-center">Sed ligula risus, interdum aliquet imperdiet sit amet, auctor
          sit amet justo. Maecenas posuere lorem id augue interdum
          vehicula. Praesent sed leo eget libero ultricies congue.
          Redistributing this template as a downloadable ZIP file on
          any template collection site is strictly prohibited. You will
          need to <span class="c-xblue text-decoration-underline"> contact TemplateMo</span> for
          additional permissions
          about our templates. Thank you.</h4>
      </div>
    </div>
  </div>
@endsection
