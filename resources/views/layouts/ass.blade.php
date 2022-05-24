
<div class="row">
            <div class="col-md-10 mt-5 ml-5 ">
                    <a href="" class="btn btn-primary mb-5">Add New</a>
                        <table class="table table-bordered yajra-datatable mt-5">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>created_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
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
                        {{-- <div class="form-group">
                            <label for="target_value">Target</label>
                            <input type="number" name="target_value" value="{{ old('target_value') }}"
                        class="form-control" id="target_value" placeholder="Enter Target" required>
                        @error('target_value')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div> --}}
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
<!--  END CONTENT AREA  -->




<script type="text/javascript">
   $('.yajra-datatable').DataTable({
        
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('assign-tasks') }}",
        },
        columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
        {data: 'name', name: 'name'},
      
          {data: 'created_at', name: 'created_at'},
           {  data: 'store_name',}        
       
           {  data: 'moving_status',}        
       
        {
            data: 'action', 
            name: 'action', 
            orderable: true, 
            searchable: true
        },
    ]

    });

</script>




<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

