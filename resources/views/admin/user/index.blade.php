@extends('layouts.master')

@section('title','Users')


@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card">
            <div class="card-header">
                <h4>View Users  </h4>
            </div>
            <div class="card-body">
                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordred">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> User Name </th>
                                <th> Email  </th>
                                <th> Role </th>
                                <th> Edit </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $useritem )
                            <tr>
                                <td>{{$useritem-> id}}</td>
                                <td>{{$useritem-> name}}</td>
                                <td>{{$useritem-> email}}</td>
                                <td>{{$useritem-> role_as == '1' ?'Admin' : 'User'}}</td>
                                <td>
                                    <a href="{{route('edit_user',$useritem-> id)}}" class="btn btn-success"> Edit</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-danger"> Delete</a>
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

