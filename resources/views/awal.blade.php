@extends('layouts.layoutawal')

@section('content')
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="/" class="w3-bar-item w3-button active">HOME</a>
    <a href="/about" class="w3-bar-item w3-button w3-hide-small">ABOUT</a>
    <a href="/gallery" class="w3-bar-item w3-button w3-hide-small">GALLERY</a>
    <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small">REGISTER EVENT</a>
    <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small">E-TICKET</a>
    <a href="/contact" class="w3-bar-item w3-button w3-hide-small">CONTACT</a>
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

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">LOGO <span class="w3-hide-small">EVENT</span></span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">ABOUT WE</h3>
  <p class="w3-center"><em>we love photography</em></p>
  <p>We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
    qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <div class="w3-row">
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min w3-black">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">PHOTOS</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">GALLERY FOTO</h3>
  <p class="w3-center"><em>Here are some of my latest lorem work ipsum tipsum.<br> Click on the images to make them bigger</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="{{ asset('assets/tiket1.jpg') }}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist over the mountains">
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('assets/tiket2.jpg') }}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans">
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('assets/tiket3.jpg') }}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Mencari jodoh">
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('assets/tiket5.png') }}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="{{ asset('assets/contoh1.jpg') }}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('assets/contoh2.jpg') }}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My beloved typewriter">
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('assets/contoh3.jpg') }}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train">
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('assets/contoh4.jpg') }}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
    </div>
    <a href="/gallery" class="w3-button w3-light-grey w3-button w3-padding-large w3-light-grey w3-opacity" style="margin-top:64px">MORE PHOTOS IN GALLERY</a>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min w3-black">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">PARTNER</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-32" >
  <h3 class="w3-center">SPONSORED BY</h3>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="{{ asset('assets/tiket1.jpg') }}" style="width:100%" >
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('assets/tiket2.jpg') }}" style="width:100%" >
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('assets/tiket3.jpg') }}" style="width:100%" >
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('assets/tiket5.png') }}" style="width:100%" >
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="{{ asset('assets/contoh1.jpg') }}" style="width:100%" >
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('assets/contoh2.jpg') }}" style="width:100%" >
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('assets/contoh3.jpg') }}" style="width:100%" >
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('assets/contoh4.jpg') }}" style="width:100%" >
    </div>
  </div>
</div>

<div class="w3-content w3-container w3-padding-32" >
  <h3 class="w3-center">MEDIA PARTNER</h3>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="{{ asset('assets/tiket1.jpg') }}" style="width:100%" >
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('assets/tiket2.jpg') }}" style="width:100%" >
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('assets/tiket3.jpg') }}" style="width:100%" >
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('assets/tiket5.png') }}" style="width:100%" >
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="{{ asset('assets/contoh1.jpg') }}" style="width:100%" >
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('assets/contoh2.jpg') }}" style="width:100%" >
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('assets/contoh3.jpg') }}" style="width:100%" >
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('assets/contoh4.jpg') }}" style="width:100%" >
    </div>
  </div>
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
