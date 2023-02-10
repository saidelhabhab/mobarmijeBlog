@extends('layouts.master')

@section('title','Edit user')


@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card">
            <div class="card-header">
                <h4>Edit  Users  <a href="{{route('users')}}" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif



                    <div class="mb-3">
                        <label> Full Name :</label>
                        <p class="form-control">{{$user->name}} </p>

                    </div>

                    <div class="mb-3">
                        <label> Email :</label>
                        <p class="form-control">{{$user->email}} </p>

                    </div>

                    <div class="mb-3">
                        <label> Create at :</label>
                        <p class="form-control">{{$user->created_at->format('d/m/Y')}} </p>

                    </div>

                <form action="{{route('update_user',$user->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label> Role as :</label>
                            <select name="role_as" id="" class="form-control">
                                <option value="1"{{$user->role_as == '1' ? 'selected' : ''  }}>Admin</option>
                                <option value="0"{{$user->role_as == '0' ? 'selected' : ''  }}>User</option>
                                <option value="2"{{$user->role_as == '2' ? 'selected' : ''  }}>Blogger</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary float-end"> Update role  </button>
                        </div>

                </form>

            </div>

        </div>
    </div>

</div>
@endsection

