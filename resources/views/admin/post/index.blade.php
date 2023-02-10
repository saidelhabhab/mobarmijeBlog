@extends('layouts.master')

@section('title','Post')


@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card">
            <div class="card-header">
                <h4>View Post
                    <a href="{{route('add-post')}}" class="btn btn-primary float-end"> Add Post</a>
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
                                <th> Category </th>
                                <th> Post Name  </th>
                                <th> Image </th>
                                <th> Status </th>
                                <th> Edit </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $postitem )
                            <tr>
                                <td>{{$postitem-> id}}</td>
                                <td>{{$postitem->category->name}}</td>
                                <td>{{$postitem-> name}}</td>
                                <td><img src="{{asset('Image/post/'.$postitem->image)}}" width="50px" height="50px" alt=""></td>
                                <td>{{$postitem-> status == '1' ?'Hidden' : 'Show'}}</td>
                                <td>
                                    <a href="{{route('edit_post',$postitem-> id)}}" class="btn btn-success"> Edit</a>
                                </td>
                                <td>
                                    <a href="{{route('delete_post',$postitem-> id)}}" class="btn btn-danger"> Delete</a>
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

