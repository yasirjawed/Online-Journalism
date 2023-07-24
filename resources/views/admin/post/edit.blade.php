@extends('layouts.master')
@section('title','Admin Edit Post')
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

           <h4>Edit Post</h4>
        </div>
        <div class="card-body">

            <form action="{{url('admin/update-post/'.$posts->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Category</label>
                    <select name="category_id" id="" required class="form-control">
                        <option value="">-- SELECT CATEGORY --</option>
                        @foreach ($category as $item)
                            @if($item->id==$posts->category_id)
                                <option value="{{$item->id}}" selected>{{$item->name}}</option>
                            @else
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endif
                        @endforeach


                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Post Name</label>
                    <input type="text" name="name" value="{{$posts->name}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" class="form-control" value="{{$posts->slug}}">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="5" id="MySummerNote" class="form-control">{!! $posts->description !!}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">Youtube Iframe Link</label>
                    <input type="text" name="yt_iframe" class="form-control" value="{{$posts->yt_iframe}}">
                </div>
                <h6>SEO TAGS</h6>
                <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" value="{{$posts->meta_title}}">
                </div>
                <div class="mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-control">{!! $posts->meta_description !!}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea name="meta_keyword" rows="3" class="form-control">{!! $posts->meta_keyword !!}</textarea>
                </div>
                <h6>STATUS MODE</h6>
                <div class="row">

                    <div class="col-md-3 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" {{$posts->status=='1' ? 'checked':''}}>
                    </div>
                    <div class="col-md-">
                        <button class="btn btn-primary" type="submit">Save Category</button>
                    </div>
                </div>







            </form>
        </div>
    </div>
</div>
@endsection

