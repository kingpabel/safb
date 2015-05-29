@extends('admin.layout')
@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="sec-box">
                <a class="closethis">Close</a>
                <header>
                    <h2 class="heading">SAARC Agri Food Bank Reports From {{ $start_date }} to {{ $end_date }}</h2>
                </header>
                <div class="contents">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <td>Food</td>
                                <td>Total Quantity</td>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($requirements as $data)
                                <tr>
                                    <td>{{ $data->Food->name }}</td>
                                    <td>{{ $data->total_quantity }} {{ $data->Unit->name }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('extraJs')
    {!! HTML::script('assets/js/jquery.dataTables.js') !!}
    {!! HTML::script('assets/js/dataTables.tableTools.js') !!}
    {!! HTML::style('assets/css/jquery.dataTables.css') !!}
    {!! HTML::style('assets/css/dataTables.tableTools.css') !!}
    <script type="text/javascript" language="javascript" class="init">
        $(document).ready( function () {
            $('#example').dataTable( {
                "sDom": 'T<"clear">lfrtip',
                "oTableTools": {
                    "aButtons": [
                        {
                            "sExtends": "print",
                            "sMessage": "<span>SAARC Agri Food Bank Reports From {{ $start_date }} to {{ $end_date }}</span>"
                        },
                        {

                            "sExtends": "csv",
                            "sMessage": "<span>Generated by DataTables</span>"
                        },
                        {
                            "sExtends": "xls",
                            "sMessage": "<span>Generated by DataTables</span>"
                        },

                        {
                            "sExtends": "copy",
                            "sMessage": "<span>Generated by DataTables</span>"
                        },

                        {
                            "sExtends": "pdf",
                            "sMessage": "<span>Generated by DataTables</span>"
                        },
                    ]
                }
            } );
        } );
    </script>
@endsection
@section('extraCss')
    <style>
        #example_wrapper{
            margin-top: 2%;
        }
    </style>
@endsection
