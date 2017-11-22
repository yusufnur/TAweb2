@extends('layouts.layoutawal')

@section('content')
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="/" class="w3-bar-item w3-button">HOME</a>
    <a href="/about" class="w3-bar-item w3-button w3-hide-small active">ABOUT</a>
    <a href="/gallery" class="w3-bar-item w3-button w3-hide-small">GALLERY</a>
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

<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT THIS EVENT</h3>
  <p class="w3-center"><em>name of the event</em></p>
  <p>We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
    qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <img src="{{ asset('assets/konser2.jpg') }}" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>Welcome to my website. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
