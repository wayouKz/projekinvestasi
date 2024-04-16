@extends('Layout/main')
@section('container')
    <div class="col-md-6 order-2 mt-5 mb-md-5 mx-auto"data-aos="fade-up">
        <div class="border p-4 rounded mb-4">
            <h3 class="mb-3 h6 text-uppercase text-black d-block">Profile</h3>
            <div class="media mb-3">
                <img src="https://via.placeholder.com/150" alt="Profile Picture" class="mr-3 rounded-circle"
                    style="width: 100px;">
                <div class="media-body">
                    <h5 class="mt-0">{{ auth()->user()->name }}</h5>
                    <p>+62</p>
                    <div class="row">
                        <div class="col-3 mt-2">
                            <p>My Money: </p>
                        </div>
                        <div class="col-7 mt-2 mt-2 mx-auto">
                            <h5 class="  mb-3 text-uppercase text-black">
                                RP. {{ auth()->user()->saldo }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn btn-secondary btn-sm btn-block ">Edit Profile</a>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mt-4">
                    <a href="/invest" class="btn btn-secondary btn-sm btn-block ">My Invest</a>
                </div>
                <div class="col-6 mt-4">
                    <a href="/withdraw" class="btn btn-secondary btn-sm btn-block ">Balance Withdrawal</a>
                </div>
            </div>
        </div>
    </div>
@endsection
