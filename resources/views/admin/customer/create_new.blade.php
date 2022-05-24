

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



<div id="content" class="main-contentn col-md-8 offset-md-3">
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
                         

                                <form method="post" action="/games" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label for="titleid" class="col-sm-3 col-form-label">Game Title</label>
                                        <div class="col-sm-9">
                                            <input name="title" type="text" class="form-control" id="titleid" placeholder="Game Title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="publisherid" class="col-sm-3 col-form-label">Game Publisher</label>
                                        <div class="col-sm-9">
                                            <input name="publisher" type="text" class="form-control" id="publisherid"
                                                   placeholder="Game Publisher">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="releasedateid" class="col-sm-3 col-form-label">Release Date</label>
                                        <div class="col-sm-9">
                                            <input name="releasedate" type="text" class="form-control" id="releasedateid"
                                                   placeholder="Release Date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gameimageid" class="col-sm-3 col-form-label">Game Image</label>
                                        <div class="col-sm-9">
                                            <input name="image" type="file" id="gameimageid" class="custom-file-input">
                                            <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-primary">Submit Game</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                     </div>
                </div>
              </div>
          </div>
