@extends('layouts.master')

@section('title','Setting')


@section('content')

<div class="container-fluid px-4">

    <div class="row mt-4">

        <div class="col-md-12">
            @if (session('message'))
            <div class="alert alert-warning">
                {{ session('message') }}
            </div>
            @endif
            <div class="card">
                <div class="card">
                    <div class="card-header">
                        <h4>Wevsite Setting </h4>
                    </div>
                    <div class="card-body">

                        <form action="{{route('save_settings')}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label> Website Name :</label>
                                <input type="text" name="website_name" @if($setting) value="{{$setting->website_name}}"  @endif required class="form-control">
                            </div>

                            <div class="mb-3">
                                <label> Logo :</label>
                                <input type="file" name="logo"   class="form-control">
                                @if($setting)
                                    <img src="{{asset("Image/setting/".$setting->logo)}}"  width="100px" height="50px" hei alt="">
                                @endif
                            </div>

                            <div class="mb-3">
                                <label> Website favicon :</label>
                                <input type="file" name="favicon" class="form-control">
                                @if($setting)
                                <img src="{{asset("Image/setting/".$setting->favicon)}}"  width="40px" height="40px" hei alt="">
                            @endif
                            </div>

                            <div class="mb-3">
                                <label> Description :</label>
                                <textarea name="description"   rows="3" class="form-control">@if($setting) {!!$setting->description!!}  @endif</textarea>
                            </div>

                            <h6> SEO Meta-tags</h6>

                            <div class="mb-3">
                                <label> Meta Title :</label>
                                <input type="text" name="meta_title" @if($setting)   value="{{$setting->meta_title}}"  @endif class="form-control">
                            </div>

                            <div class="mb-3">
                                <label> Meta Description :</label>
                                <textarea name="meta_description"  rows="3" class="form-control"> @if($setting){!!$setting->meta_description!!}  @endif</textarea>
                            </div>

                            <div class="mb-3">
                                <label> Meta Keyword :</label>
                                <textarea name="meta_keyword"   rows="3" class="form-control">@if($setting){!!$setting->meta_keyword!!}  @endif</textarea>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary "> Save Setting </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection
