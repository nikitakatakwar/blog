@extends('layouts.app')



@section('style')
<link href="{{ asset('admin_assets/css/elements/miscellaneous.css') }}"rel=" stylesheet" type="text/css" />
<link href="{{ asset('admin_assets/css/elements/breadcrumb.css') }}" rel=" stylesheet" type="text/css" />
@endsection

@section('content')
<div class="container bg-dark p-5">
    <div class="row justify-content-center">
          <div class="col-md-4">
              @extends('layouts.nav')
          </div>
      
          <div class="col-md-10 p-3">
              <div class="card mt-2">
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">

                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="mt-4 ml-5">Create Package</h5>
                        </div>
                        <div class="col-md-4 mt-5 ">
                            <div class="breadcrumb-five pull-right">
                                <ul class="breadcrumb">
                                    <li class="mb-2"><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="mb-2"><a href="{{ route('package.index') }}">Manage Packages</a></li>
                                    <li class="active mb-2 "><a href="#">Create Packages</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12 p-5">
                            <form method="POST" action="{{ route('package.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Package Title</label>
                                            <input type="text" name="title" value="{{ old('title') }}"
                                                class="form-control" id="title" placeholder="Enter Package Title"
                                                required>
                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Price</label>
                                            <input type="text" name="price" value="{{ old('price') }}"
                                                class="form-control" id="price" placeholder="Enter Price" required>
                                            @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Description</label>
                                            <textarea name="description" class="form-control" rows="4"  id="description"
                                                placeholder="Enter description" required>{{ old('description') }}</textarea>
                                            @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Status</label>
                                            <select name="status" class="form-control" id="status" required>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                            @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pt-2">
                                        <input type="submit" name="txt" class="btn btn-primary">
                                        <a href="{{ route('admin.index') }}" class="btn btn-warning">Back</a>
                                    </div>
                                </div>
                            </form>
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
<!--  END CONTENT AREA  -->

@endsection
