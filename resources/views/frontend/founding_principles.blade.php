
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
                    <h1>General terms and conditions</h1>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="justify-content: center;">
                <p style="text-align:center;padding-left: 450px;padding-right:450px;" class="heda">Please find set out below all the rights, reservations and statements. If you have any further questions, please feel free to send an email to <span style="color: red">hello@onlinejournalism.com.</span></p>
            </div>
        </div>
    </div>
    <div class="container-fluid info" style="background-color:white;margin-top:-80px;padding:150px;max-width:900px;  font-style: italic;font-size:18px">
        <h4 style="font-weight:bold;">Founding Principles of Online Journalism Pakistan: </h4>
        <p class="mt-3">1- Empowerment through Communication:1 We believe in the transformative power of communication. Our primary principle is to empower individuals and communities through journalism, giving a voice to the voiceless and creating opportunities for all to engage, learn, and contribute. </p>
        <p>2- Sustainable Journalism:1 Our commitment to sustainable journalism drives our actions. We strive to create content that not only informs but also contributes positively to society, fostering understanding, empathy, and actionable change. </p>
        <p>3- Inclusivity and Diversity:1 We champion inclusivity and diversity in all aspects of our journalism. We are dedicated to providing a platform where the voices of all individuals, regardless of their background, are heard and respected. </p>
        <p>4- Uncompromising Integrity:1 Integrity is the foundation of our work. We uphold the highest ethical standards in reporting, ensuring accuracy, fairness, and transparency in every piece of content we produce. </p>
        <p>5- Innovation and Adaptability:1 We embrace innovation and continuously adapt to the evolving digital landscape. We strive to pioneer new methods of storytelling and content delivery while remaining rooted in our mission. </p>
        <p>6- Community Building:1 We are committed to building communities around our journalism. We aim to foster dialogue, collaboration, and shared experiences that strengthen the bonds among our readers and contributors. </p>
        <p>7- Education and Empowerment:1 We view education as a catalyst for positive change. We are dedicated to providing educational resources and mentorship opportunities that empower aspiring journalists and media entrepreneurs. </p>
        <p>8- Advocacy for Sustainable Development:1 We recognize the critical role media plays in achieving sustainable development. We advocate for issues aligned with the United Nations Sustainable Development Goals, aiming to drive positive societal impact. </p>
        <p>9- Transparency and Accountability:1 We hold ourselves accountable to our readers and contributors. Our content decisions are transparent, and we actively engage with feedback to continuously improve and enhance our offerings. </p>
        <p>10- Positive Social Impact:1 Our ultimate goal is to create a positive social impact through our journalism. We measure our success not only by metrics but by the tangible change and improvements our content brings to individuals and communities. </p>
        <p style="font-weight: bold">These founding principles guide Online Journalism Pakistan in its mission to promote sustainable journalism, empower marginalized sections of society, and contribute to a more informed, connected, and equitable world. </p>
    </div>

@endsection
@section('scripting')
    <script>

    </script>
@endsection





