
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
    @media only screen and (min-width: 300px) and (max-width: 600px) {
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
                    <h1>About Us</h1>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="justify-content: center;">
                <p style="text-align:center;padding-left: 450px;padding-right:450px;" class="heda">Have a look at <span style="color: red">ONLINE JOURNALISM PAKISTAN</span></p>
            </div>
        </div>
    </div>
    <div class="container-fluid info" style="background-color:white;margin-top:-80px;padding:150px;max-width:900px;  font-style: italic;font-size:18px">
        <h2 style="font-weight:bold;text-align:center">Online Journalism Pakistan</h2>
        <p class="mt-3">Welcome to Online Journalism Pakistan, a pioneering platform dedicated to empowering individuals and communities through the transformative power of sustainable journalism. Our mission is to bridge the gap between media and society, promoting dialogue, understanding, and positive change. </p>
        <h4 style="font-weight:bold;" class="mt-5">Our Story:</h4>
        <p>Founded in 2011 by veteran journalist Arsalan Siddiqui, Online Journalism Pakistan emerged as a response to the evolving digital landscape and the growing need for responsible, impactful, and accessible journalism. Arsalan Siddiqui's vision was to create a space where information, education, and empowerment converge, fostering a community of informed citizens and media entrepreneurs. </span></p>
        <h4 style="font-weight:bold;">Our Mission:</h4>
        <p>At Online Journalism Pakistan, our mission is twofold: to promote sustainable journalism that contributes to societal well-being and to empower vulnerable sections of society through media entrepreneurship. We believe in the power of communication as a tool for positive change and aim to amplify voices that may otherwise go unheard. </p>
        <h4 style="font-weight:bold;">What We Do:</h4>
        <p>Through our dedicated team of content creators, journalists, and media experts, we deliver a wide range of informative and engaging content. From news stories and features to opinion pieces and in-depth analyses, our content is meticulously curated to provide our readers with accurate, credible, and thought-provoking information. </p>
        <h4 style="font-weight:bold;">Empowering Media Entrepreneurs:</h4>
        <p>Central to our ethos is the empowerment of media entrepreneurs. We provide mentorship, training, and resources to aspiring journalists, enabling them to become changemakers in their communities. Our commitment to fostering the next generation of media leaders drives us to create opportunities that pave the way for meaningful careers.</p>
        <h4 style="font-weight:bold;">Advocating Sustainable Development:</h4>
        <p>Aligned with the United Nations Sustainable Development Goals, we advocate for issues that matter. Through our journalism, we aim to highlight social, environmental, and economic challenges, while also showcasing stories of resilience, progress, and positive impact.</p>
        <h4 style="font-weight:bold;">Join the Conversation:</h4>
        <p>We invite you to be a part of our journey. Engage with our content, contribute your insights, and become a catalyst for change. Together, we can harness the power of communication to build a more informed, connected, and equitable world.</p>
        <p>At Online Journalism Pakistan, we are not just storytellers; we are agents of transformation. Join us in shaping the narrative and driving meaningful change.</p>
        <p>Stay informed. Stay empowered. Stay connected. </p>
        <p>Welcome to Online Journalism Pakistan. </p>
    </div>

@endsection
@section('scripting')
    <script>

    </script>
@endsection





