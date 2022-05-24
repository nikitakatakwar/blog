



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="ml-5 mt-5">Create Role</h5>
                        </div>
                        <div class="col-md-4">
                         
                            <div class="breadcrumb-five pull-right">
                                <ul class="breadcrumb mr-2 mt-3">
                                    <li class="mb-2"><a href="{{ route('home') }}">Home</a>
                                    </li>&nbsp;&nbsp;
                                    <li class="mb-2"><a href="{{ route('role.index') }}">Manage Role</a></li>&nbsp;&nbsp;
                                    <li class="active mb-2"><a href="#">Create Role</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 ml-5">
                        <div class="col-md-12 ml-5">
                            <form method="POST" action="{{ route('role.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Name</label>
                                            <input type="text" name="name" value="{{ old('name') }}"
                                                class="form-control" id="name" placeholder="Enter Role Title" required>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5>Assign Permissions</h5>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            @foreach ($available_permissions as $permission)
                                            <div class="col-md-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="permissions[]" id="permission-{{ $permission->id }}"
                                                        value="{{ $permission->id }}">
                                                    <label class="custom-control-label"
                                                        for="permission-{{ $permission->id }}">
                                                        <strong>{{ ucwords($permission->name) }}</strong> </label>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pt-2">
                                        <input type="submit" name="txt" class="btn btn-primary">
                                        <a href="{{ route('role.index') }}" class="btn btn-warning">Back</a>
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
<!--  END CONTENT AREA  -->


