
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
                    <h1>Privacy & cookie statement</h1>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="justify-content: center;">
                <p style="text-align:center;padding-left: 450px;padding-right:450px;" class="heda">Protecting your privacy and minimizing the personal data we collect about you is one of Online Journalism's 10 founding principles. Here, we’ll explain what happens to your data when you visit onlinejournalism.com and when you become a member.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid info" style="background-color:white;margin-top:-80px;padding:150px;max-width:900px;  font-style: italic;font-size:18px">
        <h3 style="font-weight:bold;text-align:center">Privacy Policy - Online Journalism Pakistan </h3>
        <p class="mt-3">This Privacy Policy outlines how Online Journalism Pakistan collects, uses, maintains, and discloses information collected from users of our website. We are committed to safeguarding your privacy and ensuring the security of your personal information. By accessing and using our website, you consent to the practices described in this policy. </p>
        <h4 style="font-weight:bold;" class="mt-5">Information We Collect:</h4>
        <p>- Personal Identification Information: We may collect personal identification information from users when they voluntarily submit information through forms, subscriptions, or other interactions on our website. This may include your name, email address, and other contact details. </p>
        <p>- Non-Personal Identification Information: We may collect non-personal identification information, such as browser type, device information, and usage data, to enhance user experience and improve our website.     </p>
        <h4 style="font-weight:bold;">How We Use Collected Information:</h4>
        <p>- To Personalize User Experience: Information you provide helps us respond to your individual needs and preferences. </p>
        <p>- To Improve Our Website: We continuously strive to enhance our website based on user feedback and interactions. </p>
        <p>- To Send Periodic Emails: If you choose to subscribe to our newsletter or receive updates, we may use your email address to send you relevant content and updates. </p>
        <h4 style="font-weight:bold;">How We Protect Your Information:</h4>
        <p>- We adopt appropriate data collection, storage, and processing practices and security measures to protect against unauthorized access, alteration, disclosure, or destruction of your personal information. </p>
        <p>- Sensitive and private data exchange between the website and its users happens over a secured communication channel and is encrypted and protected with digital signatures. </p>
        <h4 style="font-weight:bold;">Sharing Your Personal Information:</h4>
        <p>- We do not sell, trade, or rent users' personal identification information to others. </p>
        <p>- We may share generic aggregated demographic information not linked to any personal identification information regarding visitors and users with our business partners and trusted affiliates for the purposes outlined above. </p>
        <h4 style="font-weight:bold;">Third-Party Websites:</h4>
        <p>- Users may find content on our website that links to third-party websites. We do not control the content or links that appear on these sites and are not responsible for the practices employed by websites linked to or from our site. </p>
        <h4 style="font-weight:bold;">Changes to This Privacy Policy:</h4>
        <p>- We have the discretion to update this privacy policy at any time. We encourage users to frequently check this page for any changes. </p>
        <h4 style="font-weight:bold;">Your Acceptance of These Terms:</h4>
        <p>- By using this website, you signify your acceptance of this policy. If you do not agree with this policy, please do not use our website. </p>
        <h4 style="font-weight:bold;">Contact Us:</h4>
        <p>- If you have any questions about this Privacy Policy, the practices of this site, or your dealings with this site, please contact us at [insert contact information]. </p>
        <p>This Privacy Policy was last updated on 1 August 2023. </p>


    </div>


@endsection
@section('scripting')
    <script>

    </script>
@endsection





