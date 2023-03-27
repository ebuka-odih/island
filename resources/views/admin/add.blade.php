@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Add Product</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Elements -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Add Product</h3>
                </div>
                <div class="block-content">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- Form Inline - Default Style -->
                    <form action="{{ route('admin.product.store') }}" method="POST" >
                        @csrf

                        <div class="row mb-3">
                            <div class="col-6">
                                <label class="" for="example-if-name">Receiver Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="example-if-name" value="{{ old('rec_name') }}" name="rec_name">
                            </div>
                            <div class="col-6">
                                <label class="" for="example-if-password">Receiver Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="example-if-password" value="{{ old('rec_email') }}" name="rec_email" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label class="" for="example-if-phone">Receiver Phone</label>
                                <input type="text" class="form-control" id="example-if-phone" value="{{ old('rec_phone') }}" name="rec_phone" >
                            </div>
                            <div class="col-6">
                                <label class="" for="example-if-address">Receiver Address</label>
                                <input type="text" class="form-control" id="example-if-address" value="{{ old('rec_address') }}" name="rec_address" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label class="" for="example-if-phone">Product Name</label>
                                <input type="text" class="form-control" id="example-if-phone" value="{{ old('name') }}" name="name" >
                            </div>
                            <div class="col-6">
                                <label class="" for="example-if-address">Product quantity</label>
                                <input type="text" class="form-control" id="example-if-address" value="{{ old('quantity') }}" name="quantity" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label class="" for="example-if-phone">Unit</label>
                                <input type="text" class="form-control" id="example-if-phone" value="{{ old('unit') }}" name="unit" >
                            </div>
                            <div class="col-6">
                                <label class="" for="example-if-address">Amount</label>
                                <input type="text" class="form-control" id="example-if-address" value="{{ old('amount') }}" name="amount" >
                            </div>
                        </div>
                        <hr>

                        <div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                    <!-- END Form Inline - Default Style -->
                    <br>
                </div>

            </div>
            <!-- END Elements -->
        </div>
        <!-- END Page Content -->
    </main>

@endsection
