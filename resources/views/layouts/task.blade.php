

<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>

<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">





<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="ml-5 mt-4">Tasks</h5>
                        </div>
                        <div class="col-md-4">
                            <div class="breadcrumb-five pull-right">
                                <ul class="breadcrumb">
                                    <li class="mb-2"><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="active mb-2"><a href="#">Taks Management</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <a href="{{ route('tasks.create') }}" class="btn btn-primary ml-5">Add New</a>
                        </div>
                    </div>
                    <div class="table-responsive mb-2 mt-3 p-5">
                        <table  class="table table-hover table-bordered  yajra-datatable" style="width:100%">
                            <thead>
                                <tr>
                                   
                                    <th>Title</th>
                                    <th>Created By</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                   
                                    <th>Title</th>
                                    <th>Created By</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<!--  END CONTENT AREA  -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>



<script >
   $('.yajra-datatable').DataTable({
        
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('tasks.index') }}",
        },
        columns: [ {
            data: 'title',
        },  {data: 'created_at', name: 'created_at.timestamp',
                    data: {
                        _: 'created_at.display',
                        sort: 'created_at.timestamp'
                    }}, 
         {
            data: 'description',
        }, {
            data: 'status',
        }, {
            data: 'action',
            orderable: false
        }]

    });

</script>

<script>
    function deleteItem(id) {
        if (confirm('Are you sure to delete?')) {
            $("#frmDelete_" + id).submit();
        } else {
            return false;
        }
    }

<script/>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

