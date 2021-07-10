@extends('user.user.layout.master')
@section('titleKey','Index')
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="card mb-3 mt-5">
                                    <div class="row no-gutters">


                                        <img  height='300' width='150'  src="{{asset('frontend/assets/images/beard-man.jpg')}}" class="card-img" alt="...">


                                        <div class="card-body">
                                            <h5 class="card-title">Name: </h5>
                                            <h5 class="card-text">Email: </h5>
                                            <h5 class="card-text">Phone: </h5>
                                            <h5 class="card-text">Blood Group: </h5>
                                            <button class="btn btn-primary">
                                                <a href="" class="edit text-white" data-toggle="modal">Edit</a>
                                            </button>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
