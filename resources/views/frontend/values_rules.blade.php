
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
                    <h1>Values Of Online Journalism Pakistan</h1>
            </div>

        </div>
    </div>
    <div class="container-fluid info" style="background-color:white;margin-top:-80px;padding:150px;max-width:900px;  font-style: italic;font-size:18px">
        <h2 style="font-weight:bold;text-align:center">Values of Online Journalism Pakistan: </h2>
      <p>1. **Promotion of Sustainable Journalism:** We are committed to promoting journalism that is responsible, impactful, and contributes positively to society. Our content is a catalyst for positive change, fostering understanding and actionable solutions. </p>
      <p>2. **Empowerment Through Education:** We believe in the power of education to empower individuals and communities. Our content aims to educate, inform, and raise awareness on diverse topics, enabling our readers to make informed decisions. </p>
      <p>3. **Inclusivity and Diversity:** We embrace and celebrate diversity in all its forms. Our content represents a wide spectrum of perspectives, voices, and experiences, promoting inclusivity and fostering dialogue among different communities. </p>
      <p>4. **Ethical Integrity:** We uphold the highest standards of ethical journalism. Our content is based on accurate and reliable sources, and we prioritize truthfulness, fairness, and transparency in our reporting. </p>
      <p>5. **Cultural Enrichment:** We recognize the richness of Urdu language and culture, as well as the Islamic and Eastern values that shape our society. Our content reflects and preserves these values while fostering an environment of mutual respect and understanding. </p>
      <p>6. **Community Engagement:** We are dedicated to building a vibrant and engaged community of readers, contributors, and media entrepreneurs. Our platform encourages meaningful interactions, discussions, and collaborations. </p>
      <p>7. **Social Impact:** We are driven by the desire to create a positive impact on society. Our content addresses social issues, advocates for sustainable development, and encourages actions that contribute to a better world. </p>
      <p>8. **Innovation and Creativity:** We embrace innovation and creativity in storytelling and content creation. Our platform provides a space for experimenting with new formats and approaches to engage and captivate our audience. </p>
      <p>9. **Media Entrepreneurship:** We believe in nurturing the next generation of media entrepreneurs. Our initiatives provide mentorship, training, and resources to aspiring journalists, empowering them to drive change and innovation. </p>
      <p>10. **Respect for Islamic and Eastern Values:** We hold a deep respect for Islamic and Eastern cultural values, seeking to uphold and promote these values through our content. We aim to highlight the positive aspects of these traditions while fostering dialogue and understanding. </p>
      <p style="font-weight: bold">At Online Journalism Pakistan, our values guide our actions and decisions, ensuring that our content and initiatives align with our mission of promoting sustainable journalism, empowering communities, and advocating for positive societal change. </p>
    </div>


@endsection
@section('scripting')
    <script>

    </script>
@endsection





