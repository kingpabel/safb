@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="sec-box">
                <a class="closethis">Close</a>
                <header>
                    <h2 class="heading">Damage Data</h2>
                    <a class="btn style2 btn-primary pull-right" style="margin-top: -3%;" href='{!! URL::to("admin/damage/$damage->id/edit") !!}'>Update</a>
                </header>
                <div class="contents">
                    <a class="togglethis">Toggle</a>
                    <div class="table-box">
                        <table class="table" style="border: 0 !important;">
                            <thead>
                            <tr>
                                <th class="col-md-4">Start Date</th>
                                <td class="col-md-8">{{ $damage->start_date }}
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">End Date</th>
                                <td class="col-md-8">{{ $damage->end_date }}
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Food or Grains</th>
                                <td class="col-md-8">
                                    {{ $damage->Food->name }}
                                </td>
                            </tr>

                            <tr>
                                <th class="col-md-4">Quantity</th>
                                <td class="col-md-8">
                                    {{ $damage->quantity }}
                                </td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="col-md-4">Storage Location</th>
                                <td class="col-md-8">
                                    {{ $damage->Location->name }}

                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Damage Type</th>
                                <td class="col-md-8">
                                    {{ $damage->DamageType->name }}
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Damage Level</th>
                                <td class="col-md-8">
                                    {{ $damage->DamageLevel->name }}
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Report in details
                                </th><td class="col-md-8">
                                    {{ $damage->details }}
                                </td>
                            </tr>

                            <tr>
                                <th class="col-md-4">Upload File</th>
                                <td class="col-md-8">
                                    @if($damage->file)
                                        <a href="{!! URL::asset('assets/images/file.png') !!}" download="file.png">
                                    {!! HTML::image('assets/images/file.png', 'alt', array( 'width' => 70, 'height' => 70 )) !!}
                                    <span>{{ $damage->file }}</span>
                                    </a>    @endif
                                </td>
                            </tr>

                            </tbody></table><br><br>
                        <div  id="loader" class="col-md-1 pull-left" style="margin: 0px">

                        </div>
                        <table>
                        </table></div>
                    {!! Form::close() !!}</div></div></div></div>
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