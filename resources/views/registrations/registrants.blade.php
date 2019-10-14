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
                dom: "<'row'<'col s12 l12' f>><rt><'row'<'col s2 l1'l><'col s4 l5'i><'col s5 l5'p> <'col s1 l1'B>>",
                buttons: [
                    {
                        extend: 'excel', className: '', text: 'Export Excel',
                        filename: "Registrants List",
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7, 8]
                        }
                    },
                ],
                processing: true,
                serverSide: true,
                deferRender: true,
                colReorder: true,

                lengthMenu: [[10, 25, 50, 100, 200, 300, -1], [10, 25, 50, 100, 200, 300, "All"]],
                language: {
                    "lengthMenu": "Show _MENU_"
                },
                iDisplayLength: 10,
                order: [0, 'desc'],

                ajax: {
                    url: '{!! route('registrants-ajax-data') !!}',
                    type: "POST",
                },

                initComplete: function(settings, json) {
                    $('select').formSelect();
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




