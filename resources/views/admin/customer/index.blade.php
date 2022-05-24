@extends('layouts.app')
<style>
    .my-card
{
    position:absolute;
    left:40%;
    top:-20px;
    border-radius:50%;
}
.card:hover{
            transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
        }

td, th {
    padding: 6px;
    border: 1px solid black;
}

th {
    background-color: #f0eae2;
    font-weight: bold;
}

table {
    border: 1px solid black;
}

</style>

              
<style>
                .container1 {
  display:initial;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 17px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container1 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container1 input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container1 input:checked ~ .checkmark:after {
  display: inline-block;
}

/* Style the checkmark/indicator */
.container1 .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>

@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

        <div class="container bg-dark p-5">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    @extends('layouts.nav')
                    
                </div>
            
                <div class="col-md-10 ">
                    <div class="card mt-2">
                        <div id="content" class="main-content p-5">
                            <div class="layout-px-spacing">
                                <div class="row layout-top-spacing" id="cancel-row">
                                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                <div class="widget-content widget-content-area br-6">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h5>Customer Users</h5>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="breadcrumb-five pull-right">
                                                                <ul class="breadcrumb">
                                                                    <li class="mb-2"><a href="{{ route('home') }}">Home</a>
                                                                    </li>&nbsp;&nbsp;
                                                                    <li class="active mb-2"><a href="#">Manage Customers</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-md-6">
                                                            <a href="{{ route('customer.create') }}" class="btn btn-primary">Add New</a>
                                                        </div>
                                                    </div>

                                        <div class="toggle-list">
                                            <h6><strong>Show/Hide Columns</strong></h6>
                                            <p>
                                                        
                                        <label class="container1" style="color:green">
                                            Name 
                                            <input type="checkbox" name="name" checked="checked" class=""> 
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="container1" style="color:green">
                                            
                                        shop Name
                                            <input type="checkbox" name="shop_name">
                                            <span class="checkmark"></span>
                                        </label>

                                        
                                        <label class="container1" style="color:green">Email
                                            <input type="checkbox" name="email" checked="checked"> 
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="container1" style="color:green">Phone Number
                                            <input type="checkbox" name="phone_number" checked="checked"> 
                                            <span class="checkmark"></span>
                                        </label>

                                        
                                        <label class="container1" style="color:green">
                                            superior
                                            <input type="checkbox" name="superior" checked="checked" class=""> 
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="container1" style="color:green">
                                            
                                            Employee
                                            <input type="checkbox" name="employee">
                                            <span class="checkmark"></span>
                                        </label>

                                        
                                        <label class="container1" style="color:green">Package
                                            <input type="checkbox" name="package" checked="checked"> 
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="container1" style="color:green;">Phone Number
                                            <input type="checkbox" name="phone_number" checked="checked"> 
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                        <div class="mb-2 mt-3 table-responsive p-5">
                                            <table id="show-hide-col" id="report" class="table table-hover table-bordered yajra-datatable" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>Name</th>
                                                            <th>Shop Name</th>
                                                            <th>Email</th>
                                                            <th>Phone Number</th>
                                                            <th>Superior</th>
                                                            <th>Employee</th>
                                                            <th>Package</th>
                                                            <th>Payment Method</th>
                                                            <th>Payment</th>
                                                            <th>Verification</th>
                                                            <th>Created At</th>
                                                            <th>Action</th>
                                                                
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>Name</th>
                                                            <th>Shop Name</th>
                                                            <th>Email</th>
                                                            <th>Phone Number</th>
                                                            <th>Superior</th>
                                                            <th>Employee</th>
                                                            <th>Package</th>
                                                            <th>Payment Method</th>
                                                            <th>Payment</th>
                                                            <th>Verification</th>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    
    $( document ).ready(function() {
         
                $("input:checkbox:not(:checked)").each(function() {
                    var column = "table ." + $(this).attr("name");
                    $(column).hide();
                });

                $("input:checkbox").click(function(){
                    var column = "table ." + $(this).attr("name");
                    $(column).toggle();
                });
    });

    $( document ).ready(function() {

    $("#hide").click(function(){
  $(".name").hide();
});

$("#show").click(function(){
  $("a").show();
});
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">

$(function () {

var table = $('.yajra-datatable').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ route('customer.index') }}",
    columns: [{
            "data": 'DT_RowIndex',
            orderable: false,
            searchable: false
        }, {
            data: 'name',
        },  {data: 'store_name'},
         {
            data: 'email',
        }, {
            data: 'number',
            name: 'number'
        }, {
            data: 'superior',
        }, {
            data: 'employee',
        }, {
            data: 'package',
        }, {
            data: 'payment_method',
        }, {
            data: 'payment_status',
        }, {
            data: 'verification',
        },  {data: 'created_at', name: 'created_at.timestamp',
                    data: {
                        _: 'created_at.display',
                        sort: 'created_at.timestamp'
                    }}, {
            data: 'action',
            orderable: false
        }]
});
});
</script>








