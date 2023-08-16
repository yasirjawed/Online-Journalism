<div class="golbal-navbar">

    <nav class="navbar navbar-expand-lg" style="background-color: #000000;width: 100%">


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

                @if (Auth::user()->role_as=='1')
                    <button type="button" class="btn  button-nav2" ><a href="{{url('admin/dashboard')}}" style="">Dashboard</a></button>
                @elseif(Auth::user()->role_as=='0')
                     @else
                    <button type="button" class="btn  button-nav2" ><a href="{{url('journalist/dashboard')}}" style="">Dashboard</a></button>
                @endif
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
              <li style=""><a  href="{{url('/')}}">Home<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>
              <li><a  href="{{url('/correspondents')}}">Correspondents<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>
              <li><a  href="{{url('/collections')}}">Collections<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>
              <li><a  href="{{url('/listen')}}">Listen<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>
              <li><a  href="{{url('/founding_principles')}}">Founding Principles<i class="fa-solid fa-chevron-right" style="color: #c62a2a;text-align:end;float: right "></i></a></li>
          </ul>
          <ul class="menu2">
              <li style=""><a href="{{url('/Contact_us')}}">Contact</a></li>
              <li><a href="{{url('/about_us')}}">About Us</a></li>
              <li><a href="{{url('/terms_condition')}}">Terms And Conditions</a></li>
              <li><a href="{{url('/privacy_policy')}}">Privacy Policy</a></li>
              <li><a href="{{url('/values_rules')}}">Values</a></li>
              <li style="border-bottom: 2px solid black"><a href="{{url('/faq_list')}}">Frequently Asked Questions</a></li>
              @if (Auth::check())

              <li><a href="/{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="">Logout</a></li>
              <form action="{{route('logout')}}" id="logout-form" class="d-none" method="post">
                  @csrf
              </form>

              @if (Auth::user()->role_as=='1')
              <li><a href="{{url('admin/dashboard')}}" style="">Dashboard</a></li>
              @elseif(Auth::user()->role_as=='0')
                   @else
                   <li><a href="{{url('journalist/dashboard')}}" style="">Dashboard</a></li>
              @endif
          @else
          <li ><a href="{{url('/login')}}" style="">Login / Signup</a></li>
          @endif

          </ul>
      </div>

</div>
