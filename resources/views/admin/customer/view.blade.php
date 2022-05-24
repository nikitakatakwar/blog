@extends('layouts.app')
@section('content')
        <div class="container bg-dark p-5">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    @extends('layouts.nav')
                </div>
                <div class="col-md-10 ">
                    <div class="card mt-2">
                        <div id="content" class="main-content p-5">
                           <div class="layout-px-spacing">
                            <div class="row layout-top-spacing" id="cancel-row">
                                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                    <div class="widget-content widget-content-area br-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>Create Customer User</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="breadcrumb-five pull-right">
                                                    <ul class="breadcrumb">
                                                        <li class="mb-2"><a href="{{ route('home') }}">Home</a>
                                                        </li>
                                                        <li class="mb-2"><a href="{{ route('customer.index') }}">Manage Customers</a></li>
                                                        <li class="active mb-2"><a href="#">Customer User Details</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-md-12">

                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <strong>Customer General Information</strong>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">Full Name</label> <br>
                                                            {{ $user->name }}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            {{ $user->email }}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phone_number">Phone Number</label> <br>

                                                            {{-- {{ $user->phone_numbers->first()->number }} --}}

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4 mb-2">
                                                    <div class="col-md-12">
                                                        <strong>Customer Other Information</strong>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="address">Address</label> <br>
                                                            {{ $user->customers->address }}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="address_opt">Address Optional</label> <br>
                                                            {{ $user->customers->address_opt }}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="business_category_id">Business Category</label> <br>

                                                            {{ $user->customers->business_category->title}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="product_category_id">Product Category</label> <br>
                                                            {{ $user->customers->product_category->title}}

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="requirements">Requirements</label> <br>
                                                            {{ $user->customers->requirements}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="services">Services</label> <br>
                                                            {{ $user->customers->services}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="store_name">Store Name</label> <br>
                                                            {{ $user->customers->store_name}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="state">State</label> <br>
                                                            {{ $user->customers->state}} </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="city">CIty</label> <br>
                                                            {{ $user->customers->city}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="pincode">Pincode / Postal Code</label> <br>
                                                            {{ $user->customers->pincode}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4 mb-2">
                                                    <div class="col-md-12">
                                                        <strong>Customer GST Information</strong>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="gstin">GSTIN</label> <br>
                                                            {{ $user->customers->gstin}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="pos">Place of Supply</label> <br>
                                                            {{ $user->customers->pos}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4 mb-2">
                                                    <div class="col-md-12">
                                                        <strong>Payment Information</strong>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="package_id">Select Package</label> <br>
                                                            {{ $user->customers->package->title ." (".$user->customers->package->price.")"}}
                                                        </div>
                                                    </div>
                                                </div>
                                                @if ($user->moving_status && $user->moving_status->move_status != 1 &&
                                                ($user->moving_status->employee_id == Auth::user()->id ||
                                                Auth::user()->hasPermissionTo('update moving status')))
                                                <div class="row mt-4 mb-2">
                                                    <div class="col-md-12">
                                                        <strong>Update Moving Status</strong>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <form method="POST" action="{{ route('move-customer.update') }}">
                                                            @csrf
                                                            <input type="hidden" name="customer_id" value="{{ $user->id }}">
                                                            <div class="form-group form-group-sm">
                                                                <label for="package_id">Moving Status</label> <br>

                                                                <select name="move_status" class="form-control" id="move_status" required>
                                                                    <option
                                                                        {{ $user->moving_status && $user->moving_status->move_status == 0 ? "Selected" : "" }}
                                                                        value="0">Pending</option>
                                                                    <option
                                                                        {{ $user->moving_status && $user->moving_status->move_status == 1 ? "Selected" : "" }}
                                                                        value="1">Moved</option>
                                                                    </select>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary ">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                @endif
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
    </div>
@endsection