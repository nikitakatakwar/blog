
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">




                            <button type="button" class="btn btn-primary" id="target-btn">
                                Add Task
                            </button>

                     

                    <div class="mb-2 mt-3 table-responsive">

                        <table id="show-hide-col" class="table table-hover table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th> <input type="checkbox" value=' . $data->id . ' id="multi-select"> </th>
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
                                    <th><input type="checkbox" value=' . $data->id . ' id="multi-select"></th>
                                    <th>Sr. No.</th>
                                    <th>Name</th>
                                    <th>Shop Name</th>
                                    <th>Phone Number</th>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
                </div>
                <div class="modal-body">
                    <form id="target-form" action="{{ route('assign-tasks.submit') }}" method="POST">
                        @csrf
                        <div id="selected-customers-div"></div>

                        <div class="form-group">
                            <label for="name">Select Employee</label>
                            <select name="employee_id" id="employee_id" class="form-control">
                                <option value="">--Select Employee--</option>
                                @foreach ($employees as $employee)
                                <option {{ old('employee_id') == $employee->id ? "selected" : ""  }}
                                    value="{{ $employee->id }}">{{ $employee->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Select Task</label>
                            <select name="task_id" id="task_id" class="form-control">
                                <option value="">--Select Task--</option>
                                @foreach ($tasks as $task)
                                <option {{ old('task_id') == $task->id ? "selected" : ""  }} value="{{ $task->id }}">
                                    {{ $task->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="date" name="start_date" value="{{ old('start_date') }}" class="form-control"
                                id="start_date" placeholder="ENTER START DATE FROM" required>
                            @error('start_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="end_date">End Date</label>
                            <input type="date" name="end_date" value="{{ old('end_date') }}" class="form-control"
                                id="end_date" placeholder="ENTER END DATE" required>
                            @error('end_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
               
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                <button type="button" class="btn btn-primary" onclick="$('#target-form').submit();">Save</button>
            </div>
        </div>
    </div>
</div>


</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>


<script>
    $(document).ready(function () {
        var c1 = $('#show-hide-col').DataTable({
           
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('assign-tasks') }}",
            },
            columns: [
               
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                 {data:'checkbox'},
                {data: 'name', name:'name'},
                {data: 'store_name'},
                {data: 'number'},
                {data:'move_status'},
                {data: 'created_at'} ,
                {data: 'action', name: 'action', orderable: false, searchable: false},
                  ],

        });

        $("#multi-select").click(function () {
            $('.selected-customer').each(function () {
                this.click();
            });
        });

        $("#target-btn").on('click', function () {
            var yourArray = [];
            var html = '';
            if ($(".selected-customer:checked").length < 1) {
                alert("Please select Customer First!");
                return false;
            }
            $(".selected-customer:checked").each(function (i) {
                html += '<input type="hidden" name="selected_customer[' + i + ']" value="' + $(
                        this)
                    .val() +
                    '">'
            });
            $("#selected-customers-div").html(html);
            $("#exampleModal").modal('show');
        });
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

