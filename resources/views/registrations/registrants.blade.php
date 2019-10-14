@extends('layouts/default_admin')

@section('content')

    {{--    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif--}}

        <h4 class="header center materialize-blue text-dark-5">Santa Dive Registration</h4>
        <div class="row center">
            <table id="table_registrants" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>Dive Center</th>
                        <th>Bank</th>
                        <th>Transaction Number</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                </tbody>

            </table>
        </div>

@stop


@section('js_custom_script')
    <script type="text/javascript">
        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
            });

/*            $('#table_registrants').on('click', '.confirm', function(){
                url = $(this).attr('url');
                bootbox.confirm("Are you sure want to delete ?", function (result) {
                    if (result == true) {
                        document.location=url;
                    }
                });
            });*/

            registrantsTable = $('#table_registrants').DataTable({
                dom: "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
                processing: true,
                serverSide: true,
                deferRender: true,
                colReorder: true,

                iDisplayLength: -1,
                order: [1, 'desc'],
                lengthMenu: [[10, 25, 50, 100, 200, 300, -1], [10, 25, 50, 100, 200, 300, "All"]],
                iDisplayLength: 50,
                order: [0, 'desc'],


                ajax: {
                    url: '{!! route('registrants-ajax-data') !!}',
                    type: "POST",
                },

                columns: [
                    {data: "id"},
                    {data: "first_name"},
                    {data: "last_name"},
                    {data: "email"},
                    {data: "mobile_number"},
                    {data: "dive_center"},
                    {data: "bank"},
                    {data: "transaction_number"},
                    {data: "status"},
                    {data: "action", orderable: false, searchable: false, className: 'text-center'},
                ],

            });

        });
    </script>
@stop




