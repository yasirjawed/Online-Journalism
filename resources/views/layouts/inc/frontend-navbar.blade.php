<div class="golbal-navbar">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('assets/images/logonew.png')}}" class="w-100" alt="IMG" srcset="">
            </div>
            <div class="col-md-9 my-auto">
                <div class="border text-center p-2">
                    <H4>ADVERTISE HERE</H4>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-green">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>

                @php
                    $categories = App\Models\Category::where('navbar_status','0')->where('status','0')->get();
                @endphp
                @foreach ($categories as $cateitem)
                    <li class="nav-item">
                        <a href="{{ url('tutorial/'.$cateitem->slug)}}" class="nav-link">{{ $cateitem->name }}</a>
                    </li>
                @endforeach
            </ul>

            </div>
        </div>
    </nav>
</div>
