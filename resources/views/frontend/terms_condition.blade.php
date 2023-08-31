
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
                    <h1>Terms & Conditions</h1>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="justify-content: center;">
                <p style="text-align:center;padding-left: 450px;padding-right:450px;" class="heda">Have a look at our terms and conditions!</p>
            </div>
        </div>
    </div>
    <div class="container-fluid info" style="background-color:white;margin-top:-80px;padding:150px;max-width:900px;  font-style: italic;font-size:18px">
        <h2 style="font-weight:bold;text-align:center">Terms and Conditions - Online Journalism Pakistan </h2>
        <p class="mt-3">Welcome to Online Journalism Pakistan. These terms and conditions outline the rules and regulations for the use of our website. By accessing and using our website, you accept and agree to be bound by these terms. If you disagree with any part of these terms, please do not use our website. </p>
        <h4 style="font-weight:bold;" class="mt-5">The following terminology applies to these Terms and Conditions: </h4>
        <p>- "User," "You," and "Your" refer to the individual accessing or using our website. </p>
        <p>- "We," "Us," and "Our" refer to Online Journalism Pakistan. </p>
        <h4 style="font-weight:bold;" >Content Usage: </h4>
        <p>- The content on this website is for general information and educational purposes only. It does not constitute professional advice or an endorsement of any specific views or opinions. </p>
        <p>- We reserve the right to modify or remove any content without notice. </p>
        <h4 style="font-weight:bold;" >Intellectual Property: </h4>
        <p>- All content, including text, images, graphics, videos, and logos, is the property of Online Journalism Pakistan and protected by copyright laws. </p>
        <p>- Users are prohibited from using, reproducing, distributing, or modifying our content without explicit written permission. </p>
        <h4 style="font-weight:bold;" >User Accounts:</h4>
        <p>- To access certain features of our website, you may need to create a user account. </p>
        <p>- You are responsible for maintaining the confidentiality of your account information and ensuring that your account is used appropriately. </p>
        <p>- We reserve the right to suspend or terminate user accounts that violate our terms and guidelines. </p>
        <h4 style="font-weight:bold;" >User Conduct:</h4>
        <p>- You agree not to engage in any activity that may disrupt or interfere with the functioning of our website or compromise its security. </p>
        <p>- Any use of our website for illegal or unethical purposes is strictly prohibited. </p>
        <h4 style="font-weight:bold;">Links to Third-Party Websites: </h4>
        <p>- Our website may contain links to third-party websites. These links are provided for your convenience, and we do not endorse or have control over the content of these websites. </p>
        <p>- We are not responsible for the accuracy, legality, or appropriateness of any content on third-party websites. </p>
        <h4 style="font-weight:bold;">Disclaimer:</h4>
        <p>- The content on our website is provided "as is" and without warranties of any kind. We do not guarantee the accuracy, completeness, or reliability of the content. </p>
        <p>- We are not liable for any damages or losses arising from the use of our website. </p>
        <h4 style="font-weight:bold;">Changes to Terms and Conditions: </h4>
        <p>- We reserve the right to modify or update these terms and conditions at any time without prior notice. </p>
        <p>- It is your responsibility to review these terms periodically. </p>
        <h4 style="font-weight:bold;">Governing Law: </h4>
        <p>- These terms and conditions are governed by and construed in accordance with the laws of [Your Country/Region]. </p>
        <p>- Any disputes arising from the use of our website will be subject to the jurisdiction of the courts in [Your Jurisdiction]. </p>

        <p style="font-weight:bold;">By using Online Journalism Pakistan's website, you acknowledge that you have read, understood, and agreed to these terms and conditions. If you do not agree with any part of these terms, please refrain from using our website. For any questions or concerns regarding these terms, please contact us at [insert contact information]. </p>
    </div>

@endsection
@section('scripting')
    <script>

    </script>
@endsection





