@extends('Layout.main')

@section('container')
    <div class="container">
        <div class="site-section">
            <div class="site-section block-3 site-blocks-2 bg-light"data-aos="fade-up">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7 site-section-heading text-center pt-4">
                            <h2>INVEST PRODUCT</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="nonloop-block-3 owl-carousel">
                                @foreach ($barang as $data)
                                    {{-- dari sini ba looping --}}
                                    <div class="item">
                                        <a href="/detail/{{ $data->id }}">
                                            <div class="block-4 text-center">

                                                <figure class="block-4-image">
                                                    <img src="images/{{ $data->gambar }}" alt="Image placeholder"
                                                        class="img-fluid">
                                                </figure>

                                                <div class="block-4-text p-4">
                                                    <h3><a href="/detail/{{ $data->id }}">{{ $data->nama_barang }}</a>
                                                    </h3>
                                                    <p class="mb-0">Invest Price</p>
                                                    <p class="text-primary font-weight-bold">{{ $data->profit }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    {{-- End Di sini --}}
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
