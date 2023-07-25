<div class="golbal-navbar">

    <nav class="navbar navbar-expand-lg" style="background-color: #000000;">


        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav navbar-center mr-auto hiding-case-class" style="">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/correspondents')}}">Correspondents</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/collections')}}">Collections</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/listen')}}">Listen</a>
            </li>

          </ul>

          <a class="navbar-brand navbar-logo-class" href="#"><img src="{{url('images/logo-nav.png')}}" id="logo-navbar" class="image-fluid" style="display:none"></a>
          @if (Auth::check())
            <button type="button" class="btn  button-nav" ><a href="/{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="">Logout</a></button>
            <form action="{{route('logout')}}" id="logout-form" class="d-none" method="post">
                @csrf
            </form>
          @else
          <button type="button" class="btn  button-nav" ><a href="{{url('/login')}}" style="">Login / Signup</a></button>
            @endif



        </div>
      </nav>
      <input type="checkbox" id="openSidebarMenu">
      <label for="openSidebarMenu" class="sidebarIconToggle" style="position:fixed">
          <div class="spinner top"></div>
          <div class="spinner middle"></div>
          <div class="spinner bottom"></div>
      </label>
      <div id="sidebarMenu">
          <ul class="menu">
              <li style=""><a href="#">Home<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>
              <li><a href="#">Correspondents<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>
              <li><a href="#">Collections<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>
              <li><a href="#">Listen<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>
              <li><a href="#">Videos<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>
              <li><a href="#">Founding Principles<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>
          </ul>
          <ul class="menu2">
              <li style=""><a href="#">Contact</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Frequently Asked Questions</a></li>
              <li><a href="#">Terms And Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
          </ul>
      </div>

</div>
