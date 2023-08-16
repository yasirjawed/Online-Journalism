
@extends('layouts.app')
@section('title',"Online Journalism")
@section('meta_description',"Online Journalism")
@section('meta_keyword',"Online Journalism")
@section("script")
<style>
    #main-img-display{
        max-width: 100%;
        height: auto;
    }
    #main-img-display3{
        max-width: 100%;
        height: auto;
        margin-top: -65px
    }
    @media only screen and (min-width: 300px) and (max-width: 991px) {
        .info{
            padding: 50px !important;
        }

    }
    @media only screen and (min-width: 100px) and (max-width: 1100px) {
        .heda{
            padding: 0px !important;
        }


    }
    @media only screen and (min-width: 100px) and (max-width: 991px) {


        #posts-section{
            display:none;
            padding: 10px !important;
        }
       .btn-group{
            display:block !important;
        }
        .padd-cell{
            padding: 50px;
        }
        #miss_now{
            padding: 50px !important;
        }

    }


</style>
@section('content')

    <div class="container-fluid" style="">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="display:grid;justify-content: center;">
                    <img src="{{url('images/logo-nav-new.png')}}" id="main-img-display2" class="image-fluid">
            </div>
            <div class="row" style="justify-content: center;border-bottom:1px solid black;align-items:center">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <h1>{{strtoupper($user->name)}}</h1>
                    <h6 style="text-align: center">-correspondent</h6>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    @if ($user->image==null)
                    <center><img src="{{ asset('uploads/profile/corres.png') }}" id="" class="image-fluid" style="height:200px;"></center>
                    @else
                    <center><img src="{{ asset('uploads/profile/'.$user->image) }}" id="" class="image-fluid" style="height:200px;"></center>
                    @endif

                </div>
            </div>
            @if($user->mission || $user->now)
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5" id="miss_now" style="justify-content: center;padding-left:200px;padding-right:200px">

                    @if($user->mission && $user->now)
                    <p><b style="background-color: yellow">Mission:</b> {{$user->mission}}</p>
                    <p><b style="background-color: yellow">Now:</b> {{$user->now}}</p>
                    @elseif($user->mission)
                     <p><b style="background-color: yellow">Mission:</b> {{$user->mission}}</p>
                     @elseif($user->now)
                      <p><b style="background-color: yellow">Now:</b> {{$user->now}}</p>
                    @endif

            </div>
        @endif

            </div>


        </div>
    </div>
    <div class="container-fluid" style="background-color: rgb(194, 193, 193);border:none;width:100%">
        <div class="row " style="">
            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 btn-group"  style="background-color:black;color:white;text-align:center;padding:0;margin:0;display: none" >
                <button class="post-btn" style="width:100%;background: rgb(94, 6, 6);color: white;padding: 10px;"> Posts</button>
            </div>
            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 btn-group"  style="background-color:black;color:white;text-align:center;padding:0;margin:0;display: none">
                <button class="biography-btn" style="width:100%;background: rgb(94, 6, 6);color: white;padding: 10px;">Biography</button>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12" id="posts-section" style="padding:100px">

                @if(!$all_post->isEmpty())
                @foreach ($all_post as $Latest_Posts_per)
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-5 nopad">
                        <a href="{{url('tutorial/'.$Latest_Posts_per->category->slug.'/'.$Latest_Posts_per->slug)}}" class="text-decoration-none">
                            <div class="card">
                                @if($Latest_Posts_per->image==null)
                                <img class="card-img-top" src="{{ asset('uploads/posts/corres.jpg') }}" alt="Card image cap">
                                @else
                                <img class="card-img-top" src="{{ asset('uploads/posts/'.$Latest_Posts_per->image) }}" alt="Card image cap">
                                @endif

                                <div class="card-body blogs">
                                    @php
                                    $description = $Latest_Posts_per->description;
                                    $str = strip_tags($description);
                                    @endphp
                                    <div class="col-md-12">
                                        <h6 class="card-title" class="top-name" style="color: black">{{\Illuminate\Support\Str::limit($str, 150, $end='...') }}</h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" style="margin:auto 0;color:black !important">
                                            <h6 style="font-size:15px" style="color:black !important">Created On:{{$Latest_Posts_per->created_at->format('d-m-y')}}</h6>
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
                <h1>No posts to show</h1>
                @endif
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12" id="biorgraphy-sec" style="background-color:#A0AFB7;color:#4e4e51">
                <p  class="mt-4" style="position:sticky;top: 60;height:auto;line-height:2;text-align:center"><b>BIOGRAPHY:</b><br>@if($user->biography){{$user->biography}}@else No biography is given by the journalist. @endif

                </p>

            </div>
        </div>
    </div>


@endsection
@section('scripting')
    <script>
        $('.post-btn').click(function(){
           $("#biorgraphy-sec").css('display','none');
           $("#posts-section").css('display','block');
        });
        $('.biography-btn').click(function(){
           $("#posts-section").css('display','none');
           $("#biorgraphy-sec").css('display','block');
        });
    </script>
@endsection
