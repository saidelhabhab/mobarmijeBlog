@extends('layouts.master')

@section('title','Add Post')


@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card">
            <div class="card-header">
                <h4>Add Video
                    <a href="{{route('add-video')}}" class="btn btn-primary float-end"> Add Video</a>
                </h4>
            </div>
            <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form action="{{url('admin/add-video')}}" method="POST" enctype="multipart/form-data">
                    @csrf



                    <div class="mb-3">
                        <label> Video Name :</label>
                        <input type="text" name="name" class="form-control">
                    </div>


                    <div class="mb-3">
                        <label> Youtube Iframe Link :</label>
                        <input type="text" name="yt_iframe" class="form-control">
                    </div>


                    <div class="mb-3">
                        <label> Image :</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label> Description :</label>
                        <textarea name="description"   rows="2" class="form-control"></textarea>
                    </div>



                    <h6> Status Mode </h6>
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label> Status :</label>
                            <input type="checkbox" name="status" >
                        </div>

                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary float-end"> Save Video </button>
                        </div>

                    </div>



                </form>
            </div>

        </div>
    </div>

</div>
@endsection

