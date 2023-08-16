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
            @if(count($Latest_Posts)>0)
                @foreach ($Latest_Posts as $Latest_Posts_per)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 pt-3">
                        <a href="{{url('tutorial/'.$Latest_Posts_per->category->slug.'/'.$Latest_Posts_per->slug)}}" class="text-decoration-none">
                            <div class="card">
                                @if($Latest_Posts_per->image==null)
                                <img class="card-img-top card-img " src="{{ asset('uploads/posts/corres.jpg') }}" alt="Card image cap"  class="image-fluid" style="min-height:200px;height:200px;">
                                @else
                                <img class="card-img-top" src="{{ asset('uploads/posts/'.$Latest_Posts_per->image) }}" alt="Card image cap" style="min-height:200px;height:200px;">
                                @endif
                                    @php
                                        $description = $Latest_Posts_per->description;
                                        $str = strip_tags($description);
                                    @endphp
                                <div class="card-body blogs">
                                    <div class="col-md-12">
                                        <p class="card-title" class="top-name">{{ \Illuminate\Support\Str::limit($str, 150, $end='...') }}</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" style="margin:auto 0;color:red">
                                            <p style="font-size:15px">Created On:{{$Latest_Posts_per->created_at->format('d-m-y')}}</p>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="row">
                                                <div class="col-md-12 text-center" style="margin:auto 0">
                                                    <img src="{{url('images/persons.png')}}" class="person" alt="" class="person-img">
                                                </div>
                                                <div class="col-md-12 text-center" style="margin:auto 0">
                                                    <p class="card-title" >- {{$Latest_Posts_per->user->name}}</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            @else
                <h1>NO POSTS ARE AVAILABLE</h1>
            @endif

        </div>



        {{-- </div> --}}
    </div>
</div>



@endsection
