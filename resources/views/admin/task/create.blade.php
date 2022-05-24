


<div class="container bg-dark p-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            @extends('layouts.nav')
        </div>

        <div class="col-md-10 ">
            <div class="card mt-2">


<div id="content" class="main-content p-5">
    <div class="layout-px-spacing p-5">

        <div class="row layout-top-spacing" id="cancel-row p-5">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">

                    <div class="row">
                        <div class="col-md-8 mt-5">
                            <h5>Create Tasks</h5>
                        </div>
                        <div class="col-md-4">
                            <div class="breadcrumb-five pull-right">
                                <ul class="breadcrumb">
                                    <li class="mb-2"><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="mb-2"><a href="{{ route('tasks.index') }}">Manage Tasks</a></li>
                                    <li class="active mb-2"><a href="#">Create Task</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <form method="POST" action="{{ route('tasks.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Title
                                            </label>
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

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea name="description" class="form-control" id="description" rows="5"
                                                required></textarea>

                                            @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" name="txt" class="btn btn-primary">
                                        <a href="{{ route('tasks.index') }}" class="btn btn-warning">Back</a>
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


<script>
    function deleteItem(id) {
        if (confirm('Are you sure to delete?')) {
            $("#frmDelete_" + id).submit();
        } else {
            return false;
        }
    }

</script>



<!--  END CONTENT AREA  -->

