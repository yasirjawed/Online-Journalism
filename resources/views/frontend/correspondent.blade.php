
@extends('layouts.app')
@section('title',"Online Journalism")
@section('meta_description',"Online Journalism")
@section('meta_keyword',"Online Journalism")
<style>
    #main-img-display{
        max-width: 100%;
        height: auto;
    }
    .card-img{
        width: 150px;
        height: 150px;
    }
    .read-all-stories-btn{
        width: 100%;
        color: black;
        background-color: #fff;
        border: 1px solid black;
    }
    .read-all-stories-btn span:hover{
       color:red;
    }
    .cards-classes{
        margin: 0;
        padding: 0;
        width: 100%;
    }
    .card-boxes{
        margin-top:12px;
    }
    .main-topic-section{
        background-color: #9ececa;
        min-height: 250px;
        height: 100%;
    }
    .paragraph-main-hero-section{
        display: flex;
        justify-content: center;
        /* height: 100%; */
    }
    .story-div{
        cursor: pointer;
    }
    .newsroom-div{
        cursor: pointer;
    }
    .correspondent-div{
        cursor: pointer;
    }
</style>
@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="display:grid;justify-content: center;">
                    <img src="{{url('images/logo-nav-new.png')}}" id="main-img-display2" class="image-fluid">
            </div>
        </div>
        <div class="row" style="margin-top:-70px">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cards-classes p-0">
                <button type="button" class="btn btn-primary btn-lg corres-btn" style="width:100%;background-color: #9ececa;border:none;border-radius: 0 0 0 0;color:black;height:80px">Correspondents</button>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cards-classes p-0">
                <button type="button" class="btn btn-primary btn-lg news-btn" style="width:100%;background-color:#8bb5b1;border:none;border-radius: 0 0 0 0;color:black;height:80px">This Newsroom</button>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cards-classes p-0">
                <button type="button" class="btn btn-primary btn-lg story-btn" style="width:100%;background-color:#8bb5b1;border:none;border-radius: 0 0 0 0;color:black;height:80px">Guest Storytellers</button>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0"   id="corres-section-main">
                <div class="main-topic-section">
                    <div class="heading-main-hero-section">
                        <h1 style="color: white">Correspondents</h1>
                    </div>
                    <div class="paragraph-main-hero-section">
                        <p style="font-size:20px;width:100%;text-align:center;padding-left:120px;padding-right:120px" >All correspondents have their own beat and expertise. Follow your favourite correspondent, and you'll see all their stories and updates on your feed.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0" id="news-section-main" style="display: none">
                <div class="main-topic-section">
                    <div class="heading-main-hero-section">
                        <h1 style="color: white">The newsroom</h1>
                    </div>
                    <div class="paragraph-main-hero-section">
                        <p style="font-size:20px;width:50%;text-align:center;" >Meet the people who make The Correspondent’s journalism possible on a daily basis. Curious who else contributes to making The Correspondent happen? Take a look at thecorrespondent.com/people.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0" id="story-section-main" style="display: none">
                <div class="main-topic-section">
                    <div class="heading-main-hero-section">
                        <h1 style="color: white">Guests</h1>
                    </div>
                    <div class="paragraph-main-hero-section">
                        <p style="font-size:20px;width:50%;text-align:center;" >Correspondents regularly collaborate with guests who are invited to share their expertise on transnational topics, ranging from science and technology to pop culture and lived experience. Below you'll find an overview of all authors.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="correspondent-div"  style="">
            <div class="row">
                @foreach ($allUsers as $user)

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 pt-3">
                    <a href="{{url('profile/'.$user->id)}}" class="text-decoration-none text-dark">
                    <div class="card" >
                        @if($user->image==null)
                        <img class="card-img-top card-img " src="{{ asset('uploads/profile/corres.png') }}" alt="Card image cap"  class="image-fluid" style="height:200px;">
                        @else
                        <img class="card-img-top card-img " src="{{ asset('uploads/profile/'.$user->image) }}" alt="Card image cap"  class="image-fluid" style="height:200px;">
                        @endif
                        <div class="card-body" style="min-height: 217px">
                        <h5 class="card-title">{{$user->name}}</h5>
                        <h5 class="card-title"><b>Biography:</b></h5>
                        @if($user->biography)

                        <p class="card-text">{{\Illuminate\Support\Str::limit($user->biography, 150, $end='...') }}</p>
                        @else
                       <p class="card-text"> No biography is given by the journalist.</p>
                        @endif

                        <a href="{{url('profile/'.$user->id)}}" class="btn read-all-stories-btn" style="position:absolute;bottom:0;height:40px;margin-top:40px;"><span>All Stories &emsp;<i class="fa-solid fa-chevron-right" style="color: black"></i></span></a>
                        </div>
                    </div>
                     </a>
                </div>

                @endforeach
            </div>
        </div>
        <div class="newsroom-div" style="display:none">
            <div class="row">
                @foreach ($allUsers as $user)
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 pt-3">
                    <div class="card" >
                        <img class="card-img-top card-img " src="{{url('images/use-2.png')}}" alt="Card image cap" style="height:2 50px">
                        <div class="card-body">
                        <h5 class="card-title">{{$user->name}}</h5>
                        <h5 class="card-title"><b>Climate Correspondent</b></h5>
                        <p class="card-text">{{\Illuminate\Support\Str::limit($user->biography, 150, $end='...') }}</p>
                        <a href="{{url('profile/'.$user->id)}}" class="btn read-all-stories-btn"><span>All Stories &emsp;<i class="fa-solid fa-chevron-right" style="color: black"></i></span></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="story-div" style="display:none">
            <div class="row">
                @foreach ($allUsers as $user)
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 pt-3">
                    <div class="card" >
                        <img class="card-img-top card-img " src="{{url('images/use-3.png')}}" alt="Card image cap" style="height:2 50px">
                        <div class="card-body">
                        <h5 class="card-title">{{$user->name}}</h5>
                        <h5 class="card-title"><b>Climate Correspondent</b></h5>
                        <p class="card-text">{{\Illuminate\Support\Str::limit($user->biography, 150, $end='...') }}</p>
                        <a href="{{url('profile/'.$user->id)}}" class="btn read-all-stories-btn"><span>All Stories &emsp;<i class="fa-solid fa-chevron-right" style="color: black"></i></span></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>


@endsection
@section('scripting')
<script>
    $('.corres-btn').click(function(){
        console.log('hello');

        $('.corres-btn').css({
            'background-color':'#9ececa'
        });
        $('.news-btn').css({
            'background-color':'#8bb5b1'
        });
        $('.story-btn').css({
            'background-color':'#8bb5b1'
        });
        $('#corres-section-main').css({
            'display':''
        });
        $('#news-section-main').css({
            'display':'none'
        });
        $('#story-section-main').css({
            'display':'none'
        });
        $('.correspondent-div').css({
            'display':''
        });
        $('.newsroom-div').css({
            'display':'none'
        });
        $('.story-div').css({
            'display':'none'
        });
    });

    $('.news-btn').click(function(){
        console.log('hello');
        $('.news-btn').css({
            'background-color':'#9ececa'
        });
        $('.corres-btn').css({
            'background-color':'#8bb5b1'
        });
        $('.story-btn').css({
            'background-color':'#8bb5b1'
        });
        $('#news-section-main').css({
            'display':''
        });
        $('#corres-section-main').css({
            'display':'none'
        });
        $('#story-section-main').css({
            'display':'none'
        });
        $('.newsroom-div').css({
            'display':''
        });
        $('.correspondent-div').css({
            'display':'none'
        });
        $('.story-div').css({
            'display':'none'
        });
    });

    $('.story-btn').click(function(){
        console.log('hello');
        $('.story-btn').css({
            'background-color':'#9ececa'
        });
        $('.corres-btn').css({
            'background-color':'#8bb5b1'
        });
        $('.news-btn').css({
            'background-color':'#8bb5b1'
        });
        $('#story-section-main').css({
            'display':''
        });
        $('#corres-section-main').css({
            'display':'none'
        });
        $('#news-section-main').css({
            'display':'none'
        });
        $('.story-div').css({
            'display':''
        });
        $('.correspondent-div').css({
            'display':'none'
        });
        $('.newsroom-div').css({
            'display':'none'
        });
    });

</script>
@endsection

