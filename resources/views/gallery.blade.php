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
    <a href="/gallery" class="w3-bar-item w3-button w3-hide-small active">GALLERY</a>
    <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small">REGISTER EVENT</a>
    <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small">E-TICKET</a>
    <a href="/contact" class="w3-bar-item w3-button w3-hide-small">CONTACT</a>
    <ul>
        @if(Auth::guest())
            <li><a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small w3-right">LOGIN</a></li>
        @else
            <li>
              <a href="{{ route('user.logout') }}" class="w3-bar-item w3-button w3-hide-small w3-right"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ Auth::user()->name }} LOGOUT
                  <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </a>
            </li>
        @endif
    </ul>

  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="/about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="/gallery" class="w3-bar-item w3-button" onclick="toggleFunction()">GALLERY</a>
    <a href="{{ route('login') }}" class="w3-bar-item w3-button" onclick="toggleFunction()">REGISTER EVENT</a>
    <a href="{{ route('login') }}" class="w3-bar-item w3-button" onclick="toggleFunction()">E-TICKET</a>
    <a href="/contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <ul onclick="toggleFunction()">
      @if(Auth::guest())
          <li><a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small w3-right">LOGIN</a></li>
      @else
          <li>
            <a href="{{ route('user.logout') }}" class="w3-bar-item w3-button w3-hide-small w3-right"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ Auth::user()->name }} LOGOUT
                <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </a>
          </li>
      @endif
    </ul>
  </div>
</div>

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
