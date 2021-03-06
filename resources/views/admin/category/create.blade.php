
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">


<link href="{{ asset('admin_assets/css/elements/miscellaneous.css') }}"" rel=" stylesheet" type="text/css" />
<link href="{{ asset('admin_assets/css/elements/breadcrumb.css') }}"" rel=" stylesheet" type="text/css" />

     <div class="container bg-dark p-5">
          <div class="row justify-content-center">
                <div class="col-md-4">
                    @extends('layouts.nav')
                </div>
            
                <div class="col-md-10 p-3">
                    <div class="card mt-2">

                       <div id="content" class="main-content p-5">
                            <div class="layout-px-spacing">

                                <div class="row layout-top-spacing" id="cancel-row">
                                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                        <div class="widget-content widget-content-area br-6">

                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h5>Create Category</h5>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="breadcrumb-five pull-right">
                                                        <ul class="breadcrumb">
                                                            <li class="mb-2"><a href="{{ route('home') }}">Home</a>
                                                            </li>
                                                            <li class="mb-2"><a href="{{ route('category.index') }}">Manage Category</a></li>
                                                            <li class="active mb-2"><a href="#">Create Categories</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-12">
                                                    <form method="POST" action="{{ route('category.store') }}">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Title</label>
                                                                    <input type="text" name="title" value="{{ old('title') }}"
                                                                        class="form-control" id="title" placeholder="Enter Title" required>
                                                                    @error('title')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Parent Category</label>
                                                                    <select name="parent_id" class="form-control" id="parent_id">
                                                                        <option value="">None</option>
                                                                        @foreach ($main_categories as $category)
                                                                        <option {{ old('parent_id') == $category->id ? "selected" : "" }}
                                                                            value="{{ $category->id }}">{{ $category->title }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('parent_id')
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

