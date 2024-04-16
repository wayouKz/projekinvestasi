@extends('Layout.main')
@section('container')
    <div class="card text-center mx-auto mt-4" style="width: 18rem;"data-aos="fade-up">
        <div class="card-header">
            <a href=""><i class="bi bi-whatsapp"></i></a>
            <p>WhatsApp</p>
        </div>
        <div class="card-body">
            <p class="card-text">My Invitation Link:</p>
            <input class="form-control" value="{{ auth()->user()->p_code }}" type="text" readonly>
            <a href="#" class="btn btn-secondary mt-1">Copy</a>
        </div>
    </div>

    <div class="card text-center mx-auto mt-3" style="width: 18rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);"
        data-aos="fade-up">
        <div class="card-header" style="background-color: #f8f9fa;">
            <div class="row">
                <div class="col-6">
                    <img src="https://via.placeholder.com/150" alt="Profile Picture" class="mr-3 rounded-circle mt-2 mb-2"
                        style="width: 100px; margin-top: 10px; margin-bottom: 10px;">
                </div>
                <div class="col-6">
                    <h5 class="mt-4 mb-0" style="font-family: Arial, sans-serif; color: #333;">{{ auth()->user()->name }}
                    </h5>
                </div>
            </div>
        </div>
    </div>
@endsection
