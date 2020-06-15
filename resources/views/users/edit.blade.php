@extends('layouts.app');

@section('content')
    <div class="card card-default">
        <div class="card-header">
            My Profile
        </div>
        <div class="card-body">
            @include('partials.errors')
            <form action="{{route('users.update-profile')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="about">About Me</label>
                    <textarea type="text" class="form-control" name="about" id="about" rows="5" cols="5">{{$user->about}}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Update Profile</button>
            </form>
            You are logged in!
         </div>
    </div>
@endsection
