{{--************************* start links ************************* --}}

@extends('layout.layout')

{{--**************** page name  **************** --}}

@section('title_page')
  <title>Connect</title>
@endsection

{{--**************** title in page **************** --}}

@section('title_home')
  About Us
@endsection

@section('count')
  <!-- ! start slider -->
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center p-2 m-auto">
        <h3 class="font_2  p-3">
          Contact page
        </h3>
      </div>
      <div class="font_4 text-center col-md-9 col-lg-7 p-3 m-auto col-12 font_larg">
        <h5>
          You may use  <span class="c-xblue text-decoration-underline">Simple Contact Form</span> to send email to your inbox. You can modify and use this template for your website. Header image has a parallax effect. Total 3 HTML pages included in this template.
        </h5>
      </div>
    </div>
    <div class="row p-5">
      <div class="col-md-6 col-sm-9 m-auto ">
        <div class="p-3">
          <label class="font_1 fs-5 d-block" for="name">Name</label>
          <input class="font_1  c-xblue w-100 input " id="name" type="text" placeholder="Please write your Name">
        </div>
        <div class="p-3">
          <label class="font_1 fs-5 d-block" for="email">Email</label>
          <input class="font_1  c-xblue w-100 input " id="email" type="text" placeholder="Please write your Email">
        </div>
        <div class="p-3">
          <label class="font_1 fs-5 d-block" for="Meassge">Meassge</label>
          <textarea class="font_1  c-xblue input w-100" name="meassge_user" id="Meassge" cols="55" rows="4" placeholder="Please write your Meassge"></textarea>
        </div>
        <div class="button_slider p-3">
          <button type="button" class="btn btn-success">Send</button>
        </div>
      </div>
      <div class="col-md-6 col-sm-12  second_side m-auto">
        <div class="p-3 w-100">
          <h3 class="font_2 c-green p-2">Our Address</h3>
          <h6 class="font_4 paragraph  p-2 w-100">180 Orci varius natoque penatibus et
            magnis dis parturient montes, nascetur
            ridiculus mus 10550</h6>
        </div>
        <div class="p-2">
          <h5 class="font_3 py-2"><span class="c-green p-2"><i class="fas fa-phone"></i></span>080-090-0110</h5>
          <h5 class="font_3 py-2"> <span class="c-green p-2"><i class="fas fa-envelope"></i></span>
            info@company.co</h5>
        </div>
        <div class="link_slider paragraph text-center w-100 p-4">
          <a class="p-3 fs-5 c-gray" href="#"><i class="fab fa-facebook"></i></a>
          <a class="p-3 fs-5 c-gray" href="#"><i class="fab fa-twitter"></i></a>
          <a class="p-3 fs-5 c-gray" href="#"><i class="fab fa-instagram-square"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- ! end slider -->
  <!-- ! end body -->
  <!-- ! start footer -->
  <div class="container">
    <div class="row">
      <div class="col-12 ">
        <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.302059469003!2d31.244028114959054!3d30.085534381867408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458406eda5c1785%3A0x713dfc362ca7201!2sSt.%20St.%20Teresa%20Charitable%20Hospital!5e0!3m2!1sen!2seg!4v1614597717544!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
@endsection
