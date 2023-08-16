
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
                    <h1>Frequently Asked Questions (FAQ)</h1>
            </div>

        </div>
    </div>
    <div class="container-fluid info" style="background-color:white;margin-top:-80px;padding:150px;max-width:900px;  font-style: italic;font-size:18px">
        <h6 style="font-weight:bold;text-align:center">Frequently Asked Questions (FAQ) - Online Journalism Pakistan</h6>
        <h6 style="font-weight:bold;" class="mt-5">1- What is Online Journalism Pakistan?</h6>
        <p>Online Journalism Pakistan is a pioneering platform dedicated to promoting sustainable journalism and empowering vulnerable sections of society through media entrepreneurship. Our mission is to bridge the gap between media and society, fostering understanding, dialogue, and positive change. </p>
        <h6 style="font-weight:bold;" class="mt-5">2- Who is behind Online Journalism Pakistan?</h6>
        <p>Online Journalism Pakistan was founded by veteran journalist Arsalan Siddiqui. With over twenty years of experience in electronic and digital media, Arsalan Siddiqui has been a driving force in pioneering online journalism in Pakistan. </p>
        <h6 style="font-weight:bold;" class="mt-5">3- What kind of content does Online Journalism Pakistan provide?</h6>
        <p>We offer a diverse range of content, including news stories, opinion pieces, features, interviews, and more. Our content focuses on issues that matter, aligned with the United Nations Sustainable Development Goals, to create a positive societal impact. </p>
        <h6 style="font-weight:bold;" class="mt-5">4- How can I contribute to Online Journalism Pakistan?</h6>
        <p>We welcome contributions from individuals passionate about sustainable journalism and social impact. You can contribute by submitting articles, participating in discussions, or becoming part of our media entrepreneurship initiatives. Reach out to us through our contact page to learn more. </p>
        <h6 style="font-weight:bold;" class="mt-5">5- Can I become a media entrepreneur through Online Journalism Pakistan?</h6>
        <p>Absolutely! Our platform is dedicated to empowering aspiring media entrepreneurs. We provide training, mentorship, and resources to help you build a career in journalism and media entrepreneurship. </p>
        <h6 style="font-weight:bold;" class="mt-5">6- How can I stay updated with the latest content from Online Journalism Pakistan?</h6>
        <p>You can stay updated by subscribing to our newsletter, following us on social media platforms, or visiting our website regularly. Our content is designed to inform, inspire, and engage our readers. </p>
        <h6 style="font-weight:bold;" class="mt-5">7- Is the content on Online Journalism Pakistan credible and reliable?</h6>
        <p>Yes, we are committed to upholding the highest ethical and professional standards in our content creation. Our team of experienced journalists and experts ensures that the content is accurate, credible, and aligned with our mission. </p>
        <h6 style="font-weight:bold;" class="mt-5">8- How can I advertise or collaborate with Online Journalism Pakistan?</h6>
        <p>For advertising opportunities or collaborations, please reach out to us through our contact page. We are open to partnerships that align with our mission and values. </p>
        <h6 style="font-weight:bold;" class="mt-5">9- How does Online Journalism Pakistan support sustainable development?</h6>
        <p>We advocate for issues aligned with the United Nations Sustainable Development Goals, using our platform to raise awareness, promote positive change, and drive societal impact. </p>
        <h6 style="font-weight:bold;" class="mt-5">10- How do I get in touch with Online Journalism Pakistan?</h6>
        <p>You can contact us through our website's contact page or by emailing us at [insert email address]. We welcome your inquiries, feedback, and contributions. </p>

        <p class="mt-5" style="font-weight: bold">If you have any more questions or need further assistance, please don't hesitate to reach out to us. We are here to engage, educate, and empower through sustainable journalism. </p>

    </div>


@endsection
@section('scripting')
    <script>

    </script>
@endsection





