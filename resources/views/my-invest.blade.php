@extends('Layout.nonav')
@section('container')
    <div class="container mt-5" data-aos="fade-up">
        <div class="col-md-12  mb-5 site-section-heading text-center pt-4">
            <h2>MY INVEST</h2>
        </div>
        <div class="site-section block-3 site-blocks-2 bg-light">
            <h1 class="text-center">NO DATA</h1>

            <div class="container">
                <div class="row justify-content-center">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="nonloop-block-3 owl-carousel">
                            {{-- dari sini ba looping --}}
                            <div class="item">
                                <div class="block-4 text-center">
                                    <a href="">
                                        <figure class="block-4-image">
                                            <img src="images/cloth_1.jpg" alt="Image placeholder" class="img-fluid">
                                        </figure>
                                    </a>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#">Tank Top</a></h3>
                                        <p class="mb-0">Invest Price</p>
                                        <p class="text-primary font-weight-bold">RP 500.000</p>
                                    </div>
                                </div>
                            </div>
                            {{-- End Di sini --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
