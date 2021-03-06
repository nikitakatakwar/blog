<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

     <div class="container bg-dark p-5">
          <div class="row justify-content-center">
                <div class="col-md-4">
                    @extends('layouts.nav')
                </div>
            
                <div class="col-md-10 p-3">
                    <div class="card mt-2">
                        
                        <div id="content" class="main-content ml-5">
                                <div class="layout-px-spacing">
                                    <div class="row layout-top-spacing" id="cancel-row">
                                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                            <div class="widget-content widget-content-area br-6">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h5>Packages</h5>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="breadcrumb-five pull-right">
                                                            <ul class="breadcrumb">
                                                                <li class="mb-2"><a href="{{ route('home') }}">Home</a>
                                                                </li>
                                                                <li class="active mb-2"><a href="#">Manage Packages</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-6">
                                                        <a href="{{ route('package.create') }}" class="btn btn-primary">Add New</a>
                                                    </div>
                                                </div>
                                                <div class="table-responsive mb-2 mt-3">
                                                    <table id="zero-config" class="table table-hover table-bordered" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Title</th>
                                                                <th>Price</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                                <th>Created At</th>
                                                            </tr>
                                                        </thead>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Title</th>
                                                                <th>Price</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                                <th>Created At</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
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




<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{ asset('admin_assets/plugins/table/datatable/datatables.js') }}"></script>
<script type="text/javascript">
    $('#zero-config').DataTable({
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],

        "lengthMenu": [10, 20, 50],
        "order": [
            [4, "desc"]
        ],
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('package.index') }}",
        },
        columns: [{
            data: 'title',
        }, {
            data: 'price',
        }, {
            data: 'status',
        }, {
            data: 'action',
            orderable: false
        }, {
            data: 'created_at',
            render: function (data, type, full, meta) {
                return data;
            }
        }, ]

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

</script>
