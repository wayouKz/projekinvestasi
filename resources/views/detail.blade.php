@extends('layout.nonav')
@section('container')
    <div class="container">

        <div class="mt-4 mb-4   site-section block-3 site-blocks-2 bg-light"data-aos="fade-up">
            <div class=" row justify-content-center align-items-centers">
                <div class="col-6 mx-auto">
                    <figure class="block-4-image">
                        <img src="{{ asset('images/' . $barang->gambar) }}" alt="Image placeholder" class="img-fluid">
                    </figure>
                    <div class="text-center">
                        <h2>
                            {{ $barang->nama_barang }}
                        </h2>
                        <p>Kutang Premium</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-4 text-center">
                    <h2>RP 50.000 </h2>
                    <h3>DAILY PROFIT </h3>
                </div>
                <div class="col-lg-4 text-center">
                    <h2>30</h2>
                    <h3>DURATION</h3>
                </div>
                <div class="col-lg-4 text-center">
                    <h2>300%</h2>
                    <h3>RATIO</h3>
                </div>
            </div>
        </div>
        <div class="mt-4 site-section block-2 site-blocks-2 bg-light"data-aos="fade-up">
            <div class="row justify-content-center align-items-center">
                <div class="col-6 text-center">
                    <h1 id="">{{ $barang->nama_barang }}</h1>
                    <h3>INVEST</h3>
                </div>
                <div class="col-6 text-center">
                    <h1 id="">RP 1.500.000</h1>
                    <h3>TOTALS PROFIT</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                    <input type="number" class="" placeholder="INVESTMENT AMOUNT">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-4 d-flex justify-content-center align-items-center">
                    <a href="/payment" class="btn btn-secondary   ">INVEST</a>
                </div>
            </div>



        </div>
    @endsection
