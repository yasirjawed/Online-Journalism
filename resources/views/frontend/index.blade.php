@extends('layouts.app')
@section('title',"Online Journalism")
@section('meta_description',"Online Journalism")
@section('meta_keyword',"Online Journalism")
@section('content')
<div class="container">



    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="display:grid;justify-content: center;">
                    <img src="{{url('images/logo-nav-new.png')}}" id="main-img-display2" class="image-fluid">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="display:grid;justify-content: center;">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                
                </div>
            </div>
        </div>
    </div>
    <div id="app" class="container-fluid">
        {{-- <div class="grid"> --}}
        <div class="row">
            <div class="col-md-12">
                <h4>Latest Posts</h4>
                <div class="underline"></div>
            </div>
            @foreach ($Latest_Posts as $Latest_Posts_per)
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 pt-3">
                    <a href="{{url('tutorial/'.$Latest_Posts_per->category->slug.'/'.$Latest_Posts_per->slug)}}" class="text-decoration-none">
                        <div class="card">
                            <img class="card-img-top" src="{{url('images/blogs.jpg')}}" alt="Card image cap">
                            <div class="card-body blogs">
                                <h5 class="card-title" class="top-name">{{$Latest_Posts_per->name}}</h5>
                                <div class="bottom-container">
                                    <p class="card-title" >{{$Latest_Posts_per->user->name}}</p>
                                    <img src="{{url('images/persons.png')}}" class="person" alt="" class="person-img">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>



        {{-- </div> --}}
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Online Journalism Categories</h4>
                <div class="underline"></div>
            </div>
            @foreach ($allCategories as $allcate_items)
                <div class="col-md-3">
                    <div class="card card-body mb-3" style="background-color:rgb(141, 3, 3);color:white">
                        <a href="{{url('tutorial/'.$allcate_items->slug)}}" class="text-decoration-none">
                            <h4 class="text-white mb-0">
                                {{$allcate_items->name}}
                            </h4>
                        </a>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</div>

@endsection
