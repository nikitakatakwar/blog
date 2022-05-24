@extends('layouts.app')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    .my-card
{
    position:absolute;
    left:40%;
    top:-20px;
    border-radius:50%;
}

</style>


@section('content')
       <div class="container bg-dark p-5">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    @extends('layouts.nav')
                </div>
            
                <div class="col-md-10 ">
                    <div class="card mt-2">
                        <div id="content" class="main-content">
                                    <div class="layout-px-spacing">
                                        <div class="row layout-top-spacing" id="cancel-row">
                                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                <div class="widget-content widget-content-area br-6">

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <h5 class="mt-3 ml-3">Create Customer User</h5>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="breadcrumb-five pull-right mr-3 mt-3">
                                                                        <ul class="breadcrumb">
                                                                            <li class="mb-2"><a href="{{ route('home') }}">Home</a>
                                                                            </li>
                                                                            <li class="mb-2"><a href="{{ route('customer.index') }}">Manage Customers</a></li>
                                                                            <li class="active mb-2"><a href="#">Create Customer Users</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                    <div class="row mt-4">
                                                        <div class="col-md-12">
                                                            <style>
                                                                body {
                                                                    font-family: 'Lato', sans-serif
                                                                }

                                                                h1 {
                                                                    margin-bottom: 40px
                                                                }

                                                                label {
                                                                    color: #333
                                                                }

                                                                .btn-send {
                                                                    font-weight: 300;
                                                                    text-transform: uppercase;
                                                                    letter-spacing: 0.2em;
                                                                    width: 80%;
                                                                    margin-left: 3px
                                                                }

                                                                .help-block.with-errors {
                                                                    color: #ff5050;
                                                                    margin-top: 5px
                                                                }

                                                                .card {
                                                                    margin-left: 10px;
                                                                    margin-right: 10px
}
                                                            </style>

                                                            <div class=""> 
                                                               
                                                            <div class="row mb-5">
                                                                <div class="col-lg-10 mx-auto">
                                                                    <div class="card mt-2 mx-auto p-4 bg-light">
                                                                        <div class="card-body bg-light">
                                                                            <div class="container">
                                                                                 <form method="POST" action="{{route('customer.store')}}" class="p-5">
                                                                @csrf
                                                                                    <div class="controls">
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group"> <label for="form_name">Full Name *</label> <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required."> </div>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group"> <label for="form_lastname">Email *</label> <input id="form_lastname" type="text" name="email" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required."> </div>
                                                                                            </div>
                                                                                        </div>

                                                                                                <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group"> <label for="form_email">Password</label> <input id="form_email" type="text" name="password" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required."> </div>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group"> <label for="form_email">Confirm-Password</label> <input id="form_email" type="text"  name="password_confirmation" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required."> </div>
                                                                                            </div>
                                                                                        </div>

                                                                                                <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group"> <label for="form_message">Phone Number *</label> <input id="form_email" type="text" name="number" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required."> </div>
                                                                                            </div>
                                                                                           
                                                                                        </div>

                                                                                        <h6 class="bolder">Other Information</h6>

                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                   <div class="form-group"> <label>Address</label>
                                                                                                    <textarea class="form-control" rows="3" name="address" ></textarea> </div>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                               <div class="form-group"> <label>Optional Address</label>
                                                                                                    <textarea class="form-control" rows="3"  name="address_opt" ></textarea> </div>
                                                                                            </div>
                                                                                        </div>

                                                                                          <div class="row">

                                                                                             <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="requirements">Requirements</label>
                                            <textarea name="requirements" class="form-control" rows="4"
                                                id="requirements"
                                                placeholder="Enter Requirements">{{ old('requirements') }}</textarea>
                                            @error('requirements')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="services">Services</label>
                                            <textarea name="services" class="form-control" rows="4" id="services"
                                                placeholder="Enter Services">{{ old('services') }}</textarea>
                                            @error('services')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                                                                            
                                                                                          </div>


                                 
                                 <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <div class="form-group">
                                            <label for="state">State</label>
                                            <select name="state" class="form-control" id="state" required>
                                                <option value="">--Select State--</option>
                                                <option {{ old('state') == "Odisha" ? "selected" : "" }} value="Odisha">
                                                    Odisha</option>
                                            </select>
                                            @error('state')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                             
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <label for="city">CIty</label>
                                            <select name="city" class="form-control" id="city" required>
                                                <option value="">--Select City--</option>
                                                @foreach ($cities as $city)
                                                <option {{ old('city') == $city->name ? "selected" : "" }}
                                                    value="{{ $city->name }}">
                                                    {{ $city->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                                                                            
                                  </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                                <label for="business_category_id">Business Category</label>
                                            <select name="business_category_id" class="form-control"
                                                id="business_category_id" required>
                                                <option value="">--Select Category--</option>
                                                @foreach ($business_categories as $business_category)
                                                <option
                                                    {{ old('business_category_id') == $business_category->id ? "selected" : "" }}
                                                    value="{{ $business_category->id }}">{{ $business_category->title }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('business_category_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="product_category_id">Product Category</label>
                                            <select name="product_category_id" class="form-control"
                                                id="product_category_id" required>
                                                <option value="">--Select Category--</option>
                                                @foreach ($product_categories as $product_category)
                                                <option
                                                    {{ old('product_category_id') == $product_category->id ? "selected" : "" }}
                                                    value="{{ $product_category->id }}">{{ $product_category->title }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('product_category_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div  class="row">
                                                        <div class="col-md-6">
                                                                <label for="store_name">Store Name</label>
                                                                <input type="text" name="store_name" value="{{ old('store_name') }}"
                                                                    class="form-control" id="store_name" placeholder="Enter Store Name"
                                                                    required>
                                                                @error('store_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                        </div>
                                                        <div class="col-md-6">


                                                        <label for="pincode">Pincode / Postal Code</label>
                                    <input type="text" name="pincode" value="{{ old('pincode') }}"
                                        class="form-control" id="pincode" placeholder="Enter Pincode" required>
                                    @error('pincode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                       @enderror
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6"></div>
                                                            <div class="col-md-6"></div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="gstin">GSTIN</label>
                                                                <input type="text" name="gstin" value="{{ old('gstin') }}"
                                                                    class="form-control" id="gstin" placeholder="Customer's GSTIN" required>
                                                                @error('gstin')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                              </div>
                                                            <div class="col-md-6">
                                                                <label for="pos">Place of Supply</label>
                                                                    <input type="text" name="pos" value="{{ old('pos') }}" class="form-control"
                                                                        id="pos" placeholder="Enter Place of Supply" required>
                                                                    @error('pos')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                            <label for="package_id">Select Package</label>
                                        <select name="package_id" class="form-control" id="package_id" required>
                                            <option value="">--Select Package--</option>
                                            @foreach($packages as $package)
                                            <option value="{{ $package->id }}">{{ $package->title }}
                                                ( ₹{{ $package->price }} )</option>
                                            @endforeach
                                        </select>
                                        @error('package_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                            <label for="payment_type">Payment Type</label>
                                            <select name="payment_type" class="form-control" id="payment_type" required>
                                                <option value="">--Select Payment Type--</option>
                                                <option value="1">Payment Gateway</option>
                                                <option value="0">Cash</option>
                                            </select>
                                            @error('payment_type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                        </div>
                            </div>

               
                
                    <div class="row">
                      
                        <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block mt-4" value="Submit">
                            <a href="{{ route('customer.index') }}" class="btn btn-warning mt-4">Back</a> 
                        </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!-- /.8 -->
                                                                </div> <!-- /.row-->
                                                            </div>
                                                        </div>
                                                            
                                                                </div>
                                                            </div>
                                                      </div>
                                                  </div>
                                              </div>
                                           </div>
                                       </div>

                        
                        {{-- @include('layouts.admin.customer_create') --}}
                    </div>
                </div>
            </div>
        </div>

        
@endsection

