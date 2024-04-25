@extends('Layout/nonav')
@section('container')
    <div class="container">
        <div class="col-md-6 order-2 mt-5 mb-md-5 mx-auto" data-aos="fade-up">
            <div class="border p-4 rounded mb-4">
                <div class="col-md-12 site-section-heading text-center pt-4">
                    <h2>Tambah Barang</h2>
                </div>
                <form method="post" action="">
                    <div class="form-group mb-3">
                        <label for="accountName" class="form-label">Nama Barang:</label>
                        <input type="text" class="form-control" id="accountName" name="nama-barang"
                            placeholder="Enter Nama Barang" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="numberaccountName" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="numberaccountName" name="harga"
                            placeholder="Enter Harga " required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="withdrawAmount" class="form-label">Profit</label>
                        <input type="number" class="form-control" id="withdrawAmount" name="profit" min="0"
                            step="1000" placeholder="Enter Profit">
                        <div class="form-group mb-3">
                            <label for="withdrawAmount" class="form-label">Duration</label>
                            <input type="number" class="form-control" id="withdrawAmount" name="duration" min="0"
                                step="1000" placeholder="Enter Duration " required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="withdrawAmount" class="form-label">Ratio</label>
                            <input type="number" class="form-control" id="withdrawAmount" name="ratio" min="0"
                                step="1000" placeholder="Enter Ratio" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="withdrawAmount" class="form-label">Total Profit</label>
                            <input type="number" class="form-control" id="withdrawAmount" name="total_profit"
                                min="0" step="1000" placeholder="Enter Total Profit" required>
                        </div>
                        <button type="submit" class="btn btn-seccondary d-block mx-auto">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
