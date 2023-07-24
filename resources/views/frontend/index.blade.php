@extends('layouts.app')
@section('title',"Online Journalism")
@section('meta_description',"Online Journalism")
@section('meta_keyword',"Online Journalism")
@section('content')
<div class="bg-danger py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel category-carousel owl-theme">
                    @foreach ($allCategories as $allCategoriesitem)
                        <div class="item">
                                <a href="{{url('tutorial/'.$allCategoriesitem->slug)}}" class="text-decoration-none">
                                <div class="card">
                                    <img src="{{asset('uploads/category/'.$allCategoriesitem->image)}}" alt="image" srcset="">
                                    <div class="card-body text-center text-decoration-none">
                                        <h6 class="text-dark">
                                            {{$allCategoriesitem->name}}
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-1 bg-light">
    <div class="container">
        <div class="border text-center p-3">
            <h3>Advertise Here</h3>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Online Journalism</h4>
                <div class="underline"></div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti doloribus magnam illum.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti doloribus magnam illum.</p>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Online Journalism</h4>
                <div class="underline"></div>
            </div>
            @foreach ($allCategories as $allcate_items)
                <div class="col-md-3">
                    <div class="card card-body mb-3">
                        <a href="{{url('tutorial/'.$allcate_items->slug)}}" class="text-decoration-none">
                            <h4 class="text-dark mb-0">
                                {{$allcate_items->name}}
                            </h4>
                        </a>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</div>

<div class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Latest Posts</h4>
                <div class="underline"></div>
            </div>
           <div class="col-md-8">
                @foreach ($Latest_Posts as $Latest_Posts_items)

                        <div class="card card-body mb-3">
                            <a href="{{url('tutorial/'.$Latest_Posts_items->category->slug.'/'.$Latest_Posts_items->slug)}}" class="text-decoration-none">
                                <h5 class="text-dark mb-0">
                                    {{$Latest_Posts_items->name}}
                                </h5>
                                <h6  class="text-dark mb-0">Posted On: {{$Latest_Posts_items->created_at->format('d-m-Y')}}</h6>
                            </a>
                        </div>

                @endforeach
           </div>
           <div class="col-md-4">
                <div class="border text-center p-3">
                    <h3>Advertise Here</h3>
                </div>
           </div>
        </div>
    </div>
</div>

@endsection
