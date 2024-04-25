@extends('layout/nonav')

@section('container')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 order-2 mb-md-5" data-aos="fade-up">
                <div class="card text-center mb-3">
                    <div class="card-body bg-secondary">
                        <h4 class="text-light">Tambah Barang</h4>
                        <h5 class="text-light">(5)</h5>
                        <a href="/tambahbarang" class="btn btn-light">
                            <i class="fa-duotone fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 order-2 mb-md-5" data-aos="fade-up">
                <div class="card text-center mb-3">
                    <div class="card-body bg-secondary">
                        <h4 class="text-light">Transaction</h4>
                        <h5 class="text-light">(5)</h5>
                        <a href="/acc" class="btn btn-light">
                            <i class="fa-solid fa-dollar-sign"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
