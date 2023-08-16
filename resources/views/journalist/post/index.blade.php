@extends('layouts.masters')
@section('title','View Posts')
@section('content')
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{url('journalist/delete-post')}}" method="POST">
            @csrf
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Post</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="category_delete_id" class="category_delete_id" id="category_id">
                    <h5>Are you sure you want to delete this post?</h5>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Delete</button>
                </div>
        </form>

      </div>
    </div>
  </div>
    <div class="container-fluid px-4">
        <div class="card mt-4">

            <div class="card-header">
                <h4>View Posts
                <a href="{{ url('journalist/add-post') }}" class="btn btn-primary btn-sm float-end">Add Posts</a></h4>
            </div>
            <div class="card-body">
                @if(session('message'))
                    <div class="alert alert-success">{{session('message') }}</div>
                @endif
            <table class="table table-bordered" id="myDataTable">
                <thead>
                    <td style="width:10%">ID</td>
                    <td style="width:20%">Category</td>
                    <td style="width:40%">Post Name</td>

                    <td style="width:10%">Status</td>
                    <td style="width:10%">Edit</td>
                    <td style="width:10%">Delete</td>
                </thead>
                <tbody>
                    @foreach ($posts as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->category->name}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->active_status=='0'? 'Pending':($item->active_status=='1'?'Accepted':'Rejected')}}</td>
                            <td><a href="{{url('journalist/post/'.$item->id)}}" class="btn btn-success">Edit</a></td>
                            {{-- <td><a href="{{url('journalist/delete-post/'.$item->id)}}" class="btn btn-danger">Delete</a></td> --}}
                            <td><button class="btn btn-danger deletecategoryBtn" type="button" value="{{$item->id}}">Delete</button></td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
<script>
    $(document).ready(function (){
        // $('.deletecategoryBtn').click(function(e){
            $(document).on('click','.deletecategoryBtn',function(e){

            // });
            e.preventDefault();
            var category_id = $(this).val();
            $('#category_id').val(category_id);
            $('#deletemodal').modal('show');
        });
    });
</script>
@endsection
