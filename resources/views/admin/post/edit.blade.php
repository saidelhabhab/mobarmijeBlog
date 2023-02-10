@extends('layouts.master')

@section('title','Edit Post')


@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
             <h4 class="">Edit Post</h4>
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
            <form action="{{route('update_post',$post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                @method('PUT')
                <div class="mb-3">
                    <label> Category </label>
                    <select name="category_id" id="" class="form-control">
                        <option value="">--Select Category--</option>
                        @foreach ($category as $Cateitem)
                        <option value="{{$Cateitem->id}}"  {{$post->category_id == $Cateitem->id ? 'selected' : ''  }}>
                            {{$Cateitem->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label> Post Name :</label>
                    <input type="text" name="name" value="{{$post->name}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label> Slug :</label>
                    <input type="text" name="slug" value="{{$post->slug}}"  class="form-control">
                </div>
                
                <div class="mb-3">
                    <label> Image :</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="mb-3">
                    <label> Description :</label>
                    <textarea name="description"  id="your_summernote"  rows="5" class="form-control">{!!$post->description!!} </textarea>
                </div>

                <div class="mb-3">
                    <label> yt Iframe :</label>
                    <input type="text" value="{{$post->yt_iframe}} " name="yt_iframe" class="form-control">
                </div>

                <h6> SEO tags</h6>

                <div class="mb-3">
                    <label> Meta Title :</label>
                    <input type="text" name="meta_title"  value="{{$post->meta_title}}"   class="form-control">
                </div>

                <div class="mb-3">
                    <label> Meta Description :</label>
                    <textarea name="meta_description"    rows="5" class="form-control"> {!!$post->meta_description!!}</textarea>
                </div>

                <div class="mb-3">
                    <label> Meta Keyword :</label>
                    <textarea name="meta_keyword"  rows="5" class="form-control">  {!!$post->meta_keyword!!}</textarea>
                </div>
                <h6> Status Mode </h6>
                <div class="row">

                    <div class="col-md-3 mb-3">
                        <label> Status :</label>
                        <input type="checkbox" name="status" {{$post->status =='1' ? 'checked' : ''}}  >
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary float-end"> Update Post </button>
                    </div>

                </div>



            </form>
        </div>

    </div>
</div>
@endsection
