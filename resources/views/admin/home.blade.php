@extends('admin.layout')
@section('content')
<div class="row">

    <div class="col-xs-12">
        <div class="sec-box">
            <a class="closethis">Close</a>
            <header>
                <h2 class="heading">Production Requirement Data</h2>
            </header>
            <table id="example" class="display example" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <td>Type</td>
                    <td>Start Date</td>
                    <td>End Date</td>
                    <td>Data Type</td>
                    <td>Food</td>
                    <td>Quantity</td>
                    <td>Location</td>
                    <td>Action</td>

                </tr>
                </thead>
                <tbody>
                @foreach($productionRequirement as $data)
                    <tr>
                        <td>
                            @if($data->data_type_id == 1)
                                Requirement
                            @else
                                Production
                            @endif</td>
                        <td>{{ $data->start_date }}</td>
                        <td>{{ $data->end_date }}</td>
                        <td>{{ $data->DataType->name }}</td>
                        <td>{{ $data->Food->name }}</td>
                        <td>{{ $data->quantity }} {{ $data->Unit->name }}</td>
                        <td>{{ $data->Location->name }}</td>
                        <td>
                            <a href='{!! URL::to("admin/production-requirements/$data->id") !!}' class="btn-primary">View</a>
                            <a href='{!! URL::to("admin/production-requirements/$data->id/edit") !!}' class="btn-primary">Update</a>
                            <a onclick="return confirm('Are you sure you want to delete this item?');" href='{!! URL::to("admin/production-requirements/$data->id/delete") !!}' class="btn-primary">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>



    <!-- Content Section End -->
</div>

<div class="row">

    <div class="col-xs-12">
        <div class="sec-box">
            <a class="closethis">Close</a>
            <header>
                <h2 class="heading">Damage Data</h2>
            </header>
            <table id="example" class="display example" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <td>Start Date</td>
                    <td>End Date</td>
                    <td>Food</td>
                    <td>Quantity</td>
                    <td>Location</td>
                    <td>Damage Type</td>
                    <td>Damage Level</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                @foreach($damageAll as $damage)
                    <tr>
                        <td>{{ $damage->start_date }}</td>
                        <td>{{ $damage->end_date }}</td>
                        <td>{{ $damage->Food->name }}</td>
                        <td>{{ $damage->quantity }}</td>
                        <td>{{ $damage->Location->name }}</td>
                        <td>{{ $damage->DamageType->name }}</td>
                        <td>{{ $damage->DamageLevel->name }}</td>
                        <td>
                            <a href='{!! URL::to("admin/damage/$damage->id") !!}' class="btn-primary">View</a>
                            <a href='{!! URL::to("admin/damage/$damage->id/edit") !!}' class="btn-primary">Update</a>
                            <a onclick="return confirm('Are you sure you want to delete this item?');" href='{!! URL::to("admin/damage/$damage->id/delete") !!}' class="btn-primary">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>



    <!-- Content Section End -->
</div>
@endsection
@section('extraJs')
    {!! HTML::script('assets/js/jquery.dataTables.js') !!}
    {!! HTML::script('assets/js/dataTables.tableTools.js') !!}
    {!! HTML::style('assets/css/jquery.dataTables.css') !!}
    {!! HTML::style('assets/css/dataTables.tableTools.css') !!}
    <script type="text/javascript" language="javascript" class="init">
        $(document).ready( function () {
            $('.example').dataTable( {
                "sDom": 'T<"clear">lfrtip',
                /*"oTableTools": {
                    "aButtons": [
                        {
                            "sExtends": "print",
                            "sMessage": "<span>Generated by DataTables</span>"
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
                }*/
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