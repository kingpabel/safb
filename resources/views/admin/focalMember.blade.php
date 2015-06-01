@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="sec-box">
                <a class="closethis">Close</a>
                <header>
                    <h2 class="heading">Focal Member List</h2>
                </header>
                <div class="contents" >
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <td>Name</td>
                            <td>Country</td>
                            <td>Membership Code</td>
                            <td>Action</td>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allMember as $data)
                            <tr>

                                <td>{{ $data->name }}</td>
                                <td>{{ $data->Country->name }}</td>
                                <td>{{ $data->code }}</td>
                                <td>
                                    <a href='{!! URL::to("admin/member/$data->id/edit") !!}' class="btn-primary">Update</a>
                                    <a onclick="return confirm('Are you sure you want to delete this item?');" href='{!! URL::to("admin/member-delete-focal/$data->id") !!}' class="btn-primary">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div></div></div></div>
@endsection
@section('extraJs')
    {!! HTML::script('assets/js/jquery.dataTables.js') !!}
    {!! HTML::script('assets/js/dataTables.tableTools.js') !!}
    {!! HTML::style('assets/css/jquery.dataTables.css') !!}
    {!! HTML::style('assets/css/dataTables.tableTools.css') !!}
    <script type="text/javascript" language="javascript" class="init">
        $(document).ready( function () {
            $('#example').dataTable( {
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