
@extends('layouts.app')
@section('title',"Online Journalism")
@section('meta_description',"Online Journalism")
@section('meta_keyword',"Online Journalism")
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
    @media only screen and (min-width: 400px) and (max-width: 600px) {
        .info{
            padding: 50px !important;
        }
    }
    @media only screen and (min-width: 400px) and (max-width: 1100px) {
        .heda{
            padding: 0px !important;
        }
    }

</style>
@section('content')

    <div class="container-fluid" style="background-color:#caddee;padding-bottom:150px">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="display:grid;justify-content: center;">
                    <img src="{{url('images/logo-nav-new.png')}}" id="main-img-display2" class="image-fluid">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="justify-content: center;margin-top:-96px">
                    <h1>Contact Us</h1>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="justify-content: center;">
                <p style="text-align:center;padding-left: 450px;padding-right:450px;" class="heda">We love hearing from you! <span style="color: red">hello@onlinejournalism.com.</span></p>
            </div>
        </div>
    </div>
    <div class="container-fluid info" style="background-color:white;margin-top:-80px;padding:150px;max-width:900px;  font-style: italic;font-size:18px">
        <p>If you can’t find what you’re looking for there, drop us a line and we’ll get back to you as quickly as we can. Email: onlinejournalism.pk@gmail.com</p>
        <h4 style="font-weight:bold;">Press</h4>
        <p>If you’re interested in covering The Correspondent, or inviting any of our team to your event, drop us a line at <span style="color: red">onlinejournalism.pk@gmail.com.</span></p>
        <h4 style="font-weight:bold;">Partnerships</h4>
        <p>We’re open and interested in journalistic partnerships and happy to consider syndication of our content. Send an email to <span style="color: red">onlinejournalism.pk@gmail.com.</span></p>
        <h4 style="font-weight:bold;">Pitch us</h4>
        <p>Would you like your work to be published by The Correspondent? Read our guidelines and pitch us your ideas.</p>

    </div>

@endsection
@section('scripting')
    <script>

    </script>
@endsection





