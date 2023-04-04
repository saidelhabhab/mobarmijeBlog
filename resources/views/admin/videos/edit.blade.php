@extends('layouts.master')

@section('title','Edit Video')


@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
             <h4 class="">Edit Video</h4>
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
            <form action="{{route('update_video',$video->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                @method('PUT')

                <div class="mb-3">
                    <label> Post Name :</label>
                    <input type="text" name="name" value="{{$video->name}}" class="form-control">
                </div>


                <div class="mb-3">
                    <label> yt Iframe :</label>
                    <input type="text" value="{{$video->yt_iframe}} " name="yt_iframe" class="form-control">
                </div>

                <div class="mb-3">
                    <label> Image :</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="mb-3">
                    <label> Description :</label>
                    <textarea name="description"    rows="2" class="form-control">{!!$video->description!!} </textarea>
                </div>



                <div class="row">

                    <div class="col-md-3 mb-3">
                        <label> Status :</label>
                        <input type="checkbox" name="status" {{$video->status =='1' ? 'checked' : ''}}  >
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary float-end"> Update Video </button>
                    </div>

                </div>



            </form>
        </div>

    </div>
</div>
@endsection
