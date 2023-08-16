@extends('layouts.app')
@section('title',"Online Journalism")
@section('meta_description',"Online Journalism")
@section('meta_keyword',"Online Journalism")
<style>
 #main-img-display{
        max-width: 100%;
        height: auto;
    }

.bottom-container .person{
    float: right;
    height: 70px;
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
            <div class="row" style="margin-top:-100px">
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-5">
                        <div class="card">
                            <img class="card-img-top" src="{{url('images/listen-pic.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text"  style="text-align:center;color:black;font-family: 'Montserrat', sans-serif;text-align:center">Mental illness isn’t just an affliction, but a very human condition that connects us all in a very human way. Tanmoy Goswami investigates the mind and the concept of sanity.</p>
                                <div class="bottom-container">
                                    <img src="{{url('images/persons.png')}}" class="person" alt="" ></div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <p class="corres-names" style="color: red">Nabeetah Shabbir</p>
                                        <p class="no-stories"><i class="fa-regular fa-clock" style="color: #000000;"></i>14 Mins</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
@section('scripting')
    <script>
        $(".card").hover(function(){
            $(this).css("cursor", "pointer");
            $(this).find("h5").css("color", "#df5b57");
            }, function(){
                $(this).find("h5").css("color", "white");
        });
    </script>
@endsection






