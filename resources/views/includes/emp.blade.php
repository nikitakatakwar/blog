<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="col-md-8">
    <h5 class="mt-5">Create Employee</h5>
    <a href="{{ route('employee.create') }}" class="btn btn-primary mb-5 mt-3">Add New</a>
</div>


    <h2>Laravel DataTables Tutorial Example</h2>
 <table class="table table-bordered" id="table">
    <thead>
       <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
         
          <th>Role</th>
          <th>employee_id</th>
       </tr>
       
    </thead>
 </table>
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
    ajax: '{{ route("employee.index") }}',
    "columns": [
        { "data": "id", "defaultContent": "" },
        { "data": "name", "defaultContent": "" },
        { "data": "employee_id", "defaultContent": "" },
        { "data": "role", "defaultContent": ""},
        { "data": "status", "defaultContent": ""},
    ],
    "columnDefs": [{
        "targets": 'no-sort',
        "orderable": false,
    },
    
    
    </script>