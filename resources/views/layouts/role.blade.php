@include('sweetalert::alert')
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
 
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
   
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

<body>
            <div class="row">
  
                <div class="col-md-10 mt-5 ml-5 ">
                        <a href="{{ route('role.create') }}" class="btn btn-primary mb-5">Add New</a>
                            <table class="table table-bordered yajra-datatable mt-5" id="">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                    
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                </div>
            </div>

            
<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Confirmation</h2>
            </div>
            <div class="modal-body">
                <h4  style="margin:0;">Are you sure you want to remove this data?</h4>
            </div>
            <div class="modal-footer">
             <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
{{-- 
<button class="first">Title Only</button>
<button class="second">Title and Text</button>
<button class="third">Title, Text and Icon</button> --}}
   
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<script src="{{asset('assets/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script type="text/javascript">
   $(function () {
    
    var table = $('.yajra-datatable').DataTable({
          processing  : true,
          serverSide : true,
          ajax :"{{route('role.index')}}",  
          columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name:'name'},
             
                {data: 'action', name: 'action', orderable: false, searchable: false},
                  ],
        });
    } );

    
    

  
</script>


<script>
  $( document ).ready(function() {
    document.querySelector(".first").addEventListener('click', function(){
        Swal.fire("Our First Alert");
      });
      
      document.querySelector(".second").addEventListener('click', function(){
        Swal.fire("Our First Alert", "With some body text!");
      });
      
      document.querySelector(".third").addEventListener('click', function(){
        Swal.fire("Our First Alert", "With some body text and success icon!", "success");
      });
    
});

</script>









</html>