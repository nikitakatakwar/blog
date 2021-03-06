@extends('layouts.app')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">


@section('content')
        <div class="container bg-dark">
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
                                                    <h5 class="mt-4 ml-5">Unassigned Customer Users</h5>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="breadcrumb-five pull-right">
                                                        <ul class="breadcrumb">
                                                            <li class="mb-2"><a href="{{ route('home') }}">Home</a>
                                                            </li>
                                                            <li class="mb-2"><a href="{{ route('employee.index') }}">Employees</a>
                                                            </li>
                                                            <li class="active mb-2 "><a href="#">Assign Customers</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                     
                        
                                    <div class="mb-2 mt-3 table-responsive p-5">
                        
                                        <table id="show-hide-col" class="table table-hover table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Name</th>
                                                    <th>Shop Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Superior</th>
                                                    <th>Employee</th>
                                                    <th>Moving Status</th>
                                                    <th>Created At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Name</th>
                                                    <th>Shop Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Superior</th>
                                                    <th>Employee</th>
                                                    <th>Moving Status</th>
                                                    <th>Created At</th>
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
                       
                    </div>
                </div>
            </div>
        </div>
@endsection

<!--  END CONTENT AREA  -->



<script src="{{ asset('admin_assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/app.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/plugins/table/datatable/dt-global_style.css') }}">
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{ asset('admin_assets/plugins/table/datatable/datatables.js') }}"></script>

<script>
    var table = $('#show-hide-col').DataTable({
        responsive: true,
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
        "lengthMenu": [10, 20, 50],
        "order": [
            [4, "desc"]
        ],
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('employee.customers',"
            $id ") }}",
        },
        columns: [{
            "data": 'DT_RowIndex',
            orderable: false,
            searchable: false
        }, {
            data: 'name',
        }, {
            data: 'store_name',
            name: 'customers.store_name'
        }, {
            data: 'phone_number',
            name: 'phone_number.number'
        }, {
            data: 'superior',
        }, {
            data: 'employee',
        }, {
            data: 'move_status',
        }, {
            data: 'created_at',
            render: function (data, type, full, meta) {
                return data;
            }
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

</script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

