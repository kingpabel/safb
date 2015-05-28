@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="sec-box">
                <a class="closethis">Close</a>
                <header>
                    <h2 class="heading">Import of Food Grains</h2>
                    <a class="btn style2 btn-primary pull-right" style="margin-top: -3%;" href='{!! URL::to("admin/import/$import->id/edit") !!}'>Update</a>
                </header>
                <div class="contents">
                    <a class="togglethis">Toggle</a>
                    <div class="table-box">
                        <table class="table" style="border: 0 !important;">
                            <thead>
                            <tr>
                                <th class="col-md-4">Start Date</th>
                                <td class="col-md-8">{{ $import->start_date }}
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">End Date</th>
                                <td class="col-md-8">{{ $import->end_date }}
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Food or Grains</th>
                                <td class="col-md-8">
                                {{ $import->Food->name  }}
                                </td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="col-md-4">Import from SAARC Country</th>
                                <td class="col-md-8">
                                    @if($import->import_saarc == 0) <label class="label label-warning">No</label>
                                        @else($import->import_saarc == 1) <label class="label label-success"> Yes</label>
                                        @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Country</th>
                                <td class="col-md-8">
                                    {{ $import->Country->name }}
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Quantity</th>
                                <td class="col-md-8">
                                    {{ $import->quantity }} {{ $import->Unit->name }}
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Price</th>
                                <td class="col-md-8">{{ $import->price }}
                                </td>
                            </tr>

                            <tr>
                                <th class="col-md-4">Storage Location</th>
                                <td class="col-md-8">
                                   {{ $import->Location->name }}
                                </td>
                            </tr>
                            </tbody></table><br><br>
                        <table>
                        </table></div>
                </div></div></div></div>
@endsection
@section('extraCss')
    <style>
        table, th, th {
            border: 1px solid #ccc;
            border-collapse: collapse;

        }
        th{
            text-align: center;}
        th {
            padding: 5px;
            text-align: center;
        }
    </style>


    </head>
@endsection
