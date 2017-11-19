@extends('layouts.layoutawal')

@section('content')
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="/" class="w3-bar-item w3-button">HOME</a>
    <a href="/about" class="w3-bar-item w3-button w3-hide-small">ABOUT</a>
    <a href="/gallery" class="w3-bar-item w3-button w3-hide-small">GALLERY</a>
    <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small">REGISTER EVENT</a>
    <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small">E-TICKET</a>
    <a href="/contact" class="w3-bar-item w3-button w3-hide-small active">CONTACT</a>
    <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small w3-right ">LOGIN</a>

  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#gallery" class="w3-bar-item w3-button" onclick="toggleFunction()">GALLERY</a>
    <a href="{{ route('login') }}" class="w3-bar-item w3-button" onclick="toggleFunction()">REGISTER EVENT</a>
    <a href="{{ route('login') }}" class="w3-bar-item w3-button" onclick="toggleFunction()">E-TICKET</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="{{ route('login') }}" class="w3-bar-item w3-button">LOGIN</a>
  </div>
</div>

<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">CONTACT PERSON</h3>
  <p class="w3-center"><em>ready 24 hours</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Chicago, US<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: mail@mail.com<br>
      </div>
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Chicago, US<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: mail@mail.com<br>
      </div>
	  </div>
  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.296760415863!2d111.4923107139914!3d-7.863980994334117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79a0345df75e61%3A0xa37e110d8fda998a!2sSMA+Negeri+1+Ponorogo!5e0!3m2!1sid!2sid!4v1511112411841" width="800" height="450" frameborder="0" style="border:0"  allowfullscreen ></iframe>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-32 w3-opacity w3-hover-opacity-off">
  <a href="/" class="w3-button w3-light-grey">HOME</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Copyright © 2017</p>
</footer>
@endsection
