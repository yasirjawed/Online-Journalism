@extends('layouts.app')
@section('title',$post->meta_title)
@section('meta_description',$post->meta_description)
@section('meta_keyword',$post->meta_keyword)
@section('content')

<style>
@media only screen and (min-width: 100px) and (max-width: 991px) {
#post_desc{
padding: 0 !important;
}
#post_img{
padding: 0 !important;
}
#post_corres{
padding: 0 !important;
}
#post_name{
padding: 0 !important;
}

}
</style>
<div class="container">



    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="display:grid;justify-content: center;">
                    <img src="{{url('images/logo-nav-new.png')}}" id="main-img-display2" class="image-fluid">
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="display:grid;justify-content: center;">
            @if($post->image==null)
                <img src="{{url('images/blogs.jpg')}}" id="blog2" class="image-fluid" style="width:100%;">
            @else
                <img src="{{ asset('uploads/posts/'.$post->image) }}" id="blog2" class="image-fluid" style="width:100%;">
            @endif
        </div>




        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="display:grid;text-align:center;padding:0px 200px 0px 200px;margin-top:70px" id="post_name">
            <p style="font-family: 'Montserrat', sans-serif;font-size:25px"><b>{{ $post->name }}</b></p>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="display:grid;text-align:center;padding:0px 200px 0px 200px;font-weight:800;" id="post_corres">
            <h1 style="font-family: 'Montserrat', sans-serif;">The best of The Correspondent – recommended by the people who made the stories</h1>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="display:grid;justify-content:right;text-align:center;padding:0px 200px 0px 200px;font-weight:800;" id="post_img">
            @if ($post->user->image==null)
                <img src="{{url('images/persons.png')}}" id="blog2" class="image-fluid">
            @else
                <img src="{{ asset('uploads/profile/'.$post->user->image) }}" id="blog2" class="image-fluid" style="min-height: 100px;max-height:100px">
            @endif
        <button class="personbuttons" style="background-color:white;color:black;font-family: 'Montserrat', sans-serif;border:none;margin-top:8px;font-weight:bold">{{$post->user->name}}</button>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="display:grid;text-align:center;padding:0px 200px 0px 200px;font-weight:bold;margin-top:70px" id="post_desc">
        <p style="font-family: 'Montserrat', sans-serif;font-size:25px">{!! $post->description !!}</p>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>More From {{$post->user->name}}</h4>
                    <div class="underline"></div>
                </div>
                @foreach ($userPost as $userPost_per)
                   

                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 pt-3">
                        <a href="{{url('tutorial/'.$userPost_per->category->slug.'/'.$userPost_per->slug)}}" class="text-decoration-none">
                            <div class="card">
                                @if($userPost_per->image==null)
                                <img class="card-img-top card-img " src="{{ asset('uploads/posts/corres.jpg') }}" alt="Card image cap"  class="image-fluid" style="min-height:200px;height:200px;">
                                @else
                                <img class="card-img-top" src="{{ asset('uploads/posts/'.$userPost_per->image) }}" alt="Card image cap" style="min-height:200px;height:200px;">
                                @endif
                                    @php
                                        $description = $userPost_per->description;
                                        $str = strip_tags($description);
                                    @endphp
                                <div class="card-body blogs">
                                    <div class="col-md-12">
                                        <p class="card-title" class="top-name">{{ \Illuminate\Support\Str::limit($str, 150, $end='...') }}</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" style="margin:auto 0;color:red">
                                            <p style="font-size:15px">Created On:{{$userPost_per->created_at->format('d-m-y')}}</p>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="row">
                                                <div class="col-md-12 text-center" style="margin:auto 0">
                                                    <img src="{{url('images/persons.png')}}" class="person" alt="" class="person-img">
                                                </div>
                                                <div class="col-md-12 text-center" style="margin:auto 0">
                                                    <p class="card-title" >- {{$userPost_per->user->name}}</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>




@endsection
