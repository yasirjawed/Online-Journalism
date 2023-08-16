@extends('layouts.masters')
@section('title','Admin Add Post')
@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
    @endif
        <div class="card-header">

           <h4>Add Post</h4>
        </div>


        <div class="card-body">


            <form action="{{url('journalist/update-profile')}}" method="POST" enctype="multipart/form-data">
                @if(session('message'))
                    <div class="alert alert-success">{{session('message') }}</div>
                @endif
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" required class="form-control" onchange="getImagePreview(event)" id="image-profile">
                </div>
                <div id="preview">
                    @if($userprofile->image==null)
                    <img src="{{ asset('uploads/profile/corres.png') }}" height="150px" alt="img">
                    @else
                    <img src="{{ asset('uploads/profile/'.$userprofile->image) }}" height="150px" alt="img">
                    @endif
                </div>
                <div class="mb-3">
                    <label for="">Biography</label>
                    <textarea name="Biography" id="" rows="5" class="form-control">{{$userprofile->biography}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">Mission</label>
                    <textarea name="Mission" id="" rows="2" class="form-control">{{$userprofile->mission}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">What am i doing now</label>
                    <textarea name="Now" id="" rows="2" class="form-control">{{$userprofile->now}}</textarea>
                </div>

                <div class="row">


                    <div class="col-md-12 mt-5">
                        <button class="btn btn-primary" type="submit">Update Profile</button>
                    </div>
                </div>







            </form>
        </div>
    </div>
</div>
<script>
     function getImagePreview(event){
        var image=URL.createObjectURL(event.target.files[0]);
        var imagediv= document.getElementById('preview');
        var newimg=document.createElement('img');
        imagediv.innerHTML='';
        newimg.src=image;
        newimg.width="300";
        imagediv.appendChild(newimg);
    }
</script>
@endsection

