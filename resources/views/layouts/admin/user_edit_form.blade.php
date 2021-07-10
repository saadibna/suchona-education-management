@extends('layouts.admin.layout.master')
@section('titleKey','Index')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in! As USER') }}
                    <!--MM-->
                    <h2>User Form</h2>
                    <form action="{{route('admin.form.update',$application->id)}}" method="POST">
                        @csrf
                        <label for="fname">First name:</label><br>
                        <input type="text" id="fname" name="fname" value="{{$application->first_name}}"  placeholder="Enter First Name"><br>
                        <label for="lname">Last name:</label><br>
                        <input type="text" id="lname" name="lname" value="{{$application->last_name}}" placeholder="Enter Last Name"><br><br>
                        <input type="submit" value="Submit">
                    </form> 
                   



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
