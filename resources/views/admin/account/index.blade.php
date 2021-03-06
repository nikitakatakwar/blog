@extends('admin.layouts.master')

@section('title')
{{ $page_title }}
@endsection

@section('style')

<link href="{{ asset('admin_assets/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('admin_assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/plugins/table/datatable/datatables.css') }}">
<link href="{{ asset('admin_assets/css/elements/miscellaneous.css') }}"" rel=" stylesheet" type="text/css" />
<link href="{{ asset('admin_assets/css/elements/breadcrumb.css') }}"" rel=" stylesheet" type="text/css" />
@endsection

@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="row">
                        <div class="col-md-8">
                            <h5>Customer Accounts</h5>
                        </div>
                        <div class="col-md-4">
                            <div class="breadcrumb-five pull-right">
                                <ul class="breadcrumb">
                                    <li class="mb-2"><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="active mb-2"><a href="#">Manage Accounts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <form action="{{ route('account.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="type">Select Account</label>
                                            <select class="form-control" name="type" id="type">
                                                <option value="Google Pay">Google Pay</option>
                                                <option value="PayTM">PayTM</option>
                                                <option value="Bank Account">Bank Account</option>
                                                <option value="UPI">UPI</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="number">Number</label>
                                            <input type="text" name="number" value="{{ old('number') }}"
                                                class="form-control" id="number" placeholder="Enter Number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <input type="text" name="description" value="{{ old('description') }}"
                                                class="form-control" id="description" placeholder="Enter Description"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group pt-4">
                                            <label for="">&nbsp;</label>
                                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive mb-2 mt-3">
                        <table id="zero-config" class="table table-hover table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Account</th>
                                    <th>Number</th>
                                    <th>Description</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accounts as $key => $account)
                                <tr>
                                    <td>
                                        {{ $account->type }}
                                    </td>
                                    <td>
                                        {{ $account->number }}
                                    </td>
                                    <td>
                                        {{ $account->description }}
                                    </td>
                                    <td>
                                        {{ $account->created_at }}
                                    </td>
                                    <td>
                                        <form action="{{ route('account.destroy', $account->id) }}" method="POST"
                                            style="display: inline">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-sm btn-danger">Delete Account</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6">
                                        <h4 class="text-center">No Accounts Found!</h4>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Account</th>
                                    <th>Number</th>
                                    <th>Description</th>
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
    @include('admin.includes.footer')
</div>
<!--  END CONTENT AREA  -->

@endsection

@section('scripts')
<script src="{{ asset('admin_assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/app.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/plugins/table/datatable/dt-global_style.css') }}">
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{ asset('admin_assets/plugins/table/datatable/datatables.js') }}"></script>
<script>
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
        serverSide: false,

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
@endsection
