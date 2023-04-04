@extends('layouts.master')

@section('title','Videos')


@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card">
            <div class="card-header">
                <h4>View Videos
                    <a href="{{route('add-video')}}" class="btn btn-primary float-end"> Add Video</a>
                </h4>
            </div>
            <div class="card-body">
                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif

                <div class="table-responsive">
                    <table  id="myTable" class="table table-bordred">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> Post Name </th>
                                <th>  Image </th>
                                <th> Description </th>
                                <th> Status </th>
                                <th> Edit </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($videos as $videotitem )
                            <tr>
                                <td>{{$videotitem-> id}}</td>
                                <td>{{$videotitem->name}}</td>
                                <td><img src="{{asset('Image/videos/'.$videotitem->image)}}" width="50px" height="50px" alt=""></td>
                                <td>{{$videotitem->description}}</td>
                                <td>{{$videotitem-> status == '1' ?'Hidden' : 'Show'}}</td>
                                <td>
                                    <a href="{{route('edit_video',$videotitem-> id)}}" class="btn btn-success"> Edit</a>
                                </td>
                                <td>
                                    <a href="{{route('delete_video',$videotitem-> id)}}" class="btn btn-danger"> Delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>

            </div>

        </div>
    </div>

</div>
@endsection

