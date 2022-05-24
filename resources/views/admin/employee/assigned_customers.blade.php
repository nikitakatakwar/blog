@extends('layouts.app')

<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>




        <div class="container bg-dark p-5">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    @extends('layouts.nav')
                    
                </div>
            
                <div class="col-md-10 p-5">
                    <div class="card mt-2">
                        <div id="content" class="main-content p-5">
                            <div class="layout-px-spacing">
                        
                                <div class="row layout-top-spacing" id="cancel-row ">
                                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                        <div class="widget-content widget-content-area br-6">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h5>Assigned Customer Users</h5>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="breadcrumb-five pull-right">
                                                        <ul class="breadcrumb">
                                                            <li class="mb-2"><a href="{{ route('home') }}">Home</a>
                                                            </li>
                                                            <li class="mb-2"><a href="{{ route('employee.index') }}">Employees</a>
                                                            </li>
                                                            <li class="active mb-2"><a href="#">Assign Customers</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="mb-2 mt-3 table-responsive ">
                        
                                                <table id="show-hide-col" class="table table-hover table-bordered yajra-datatable" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>Name</th>
                                                            <th>Shop Name</th>
                                                            <th>Phone Number</th>
                                                            <th>Moving Status</th>
                                                            <th>Created At</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>Name</th>
                                                            <th>store_name</th>
                                                            <th> number</th>
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
                            {{-- @include('admin.includes.footer') --}}
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


<script type="text/javascript">
    $('.yajra-datatable').DataTable({
    
         
         processing: true,
         serverSide: true,
         ajax: {
             url: "{{ route('move-customer') }}",
         },
    

        columns: [


{data: 'DT_RowIndex', name: 'DT_RowIndex'},
{data: 'name', name: 'name' },
{data: 'store_name', name: 'store_name'},
{data: 'number', name: 'number'},
{ data: 'move_status'},
{data: 'created_at', name: 'created_at.timestamp',
data: {
    _: 'created_at.display',
    sort: 'created_at.timestamp'
}},

{
    data: 'action',
    orderable: false
},
]
 
     });
 
 </script>


