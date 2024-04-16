@extends('Layout/nonav')
@section('container')
    <div class="container">
        <div class="col-md-6 order-2 mt-5 mb-md-5 mx-auto" data-aos="fade-up">
            <div class="border p-4 rounded mb-4">
                <div class="col-md-12 site-section-heading text-center pt-4">
                    <h2>WITHDRAW</h2>
                </div>
                <form method="post" action="">
                    <div class="form-group mb-3">
                        <label for="accountName" class="form-label">Account Name:</label>
                        <input type="text" class="form-control" id="accountName" name="accountName"
                            placeholder="Enter your account name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="numberaccountName" class="form-label">Account Name:</label>
                        <input type="text" class="form-control" id="numberaccountName" name="number account"
                            placeholder="Enter your  number account " required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="withdrawAmount" class="form-label">Withdrawal Amount:</label>
                        <input type="number" class="form-control" id="withdrawAmount" name="withdrawAmount" min="0"
                            step="1000" placeholder="Enter amount to withdraw" required>
                    </div>
                    <button type="submit" class="btn btn-seccondary d-block mx-auto">Withdraw</button>
                </form>
            </div>
        </div>
    </div>
@endsection
