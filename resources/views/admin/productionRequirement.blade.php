@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="sec-box">
            <a class="closethis">Close</a>
            <header>
                <h2 class="heading">Production and Requirement Data</h2>
            </header>
            <div class="contents">
                <a class="togglethis">Toggle</a>
                <div class="table-box">
                    <table class="table" style="border: 0 !important;">
                        <thead>
                        <tr>
                            <th class="col-md-4">Data Type</th>
                            <td class="col-md-8">
                                <select class="form-control2">
                                    <option>Select Data Type...</option>
                                    @foreach($dataType as $data)
                                    <option value="{!! $data->id !!}">{!! $data->name !!}</option>
                                    @endforeach
                                </select>&nbsp; <label class="redtext">*</label>
                            </td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th class="col-md-4">Food or Grain</th>
                            <td class="col-md-8">
                                <select class="form-control2">
                                    @foreach($foodList as $food)
                                    <option value="{!! $food->id !!}">{!! $food->name !!}</option>
                                    @endforeach
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <th class="col-md-4">Quantity</th>
                            <td class="col-md-8"><input type="text" placeholder="Input Value" class="form-control3">
                                <select class="form-control4">
                                    @foreach($unitList as $unit)
                                    <option value="{!! $unit->id !!}">{!! $unit->name !!}</option>
                                    @endforeach
                                </select>&nbsp; <label class="redtext">*</label>
                            </td>
                        </tr>

                        <tr>
                            <th class="col-md-4">Storage Location</th>
                            <td class="col-md-8">
                                <select class="form-control2">
                                    <option>Location 1</option>
                                    <option>Location 2</option>
                                    <option>Location 3</option>
                                    <option>Location 4</option>
                                    <option>Location 5</option>
                                    <option>Location 6</option>
                                </select>

                            </td>
                        </tr>

                        </tbody></table><br><br><div style="text-align: right; padding-right: 20px;"><button type="button" class="btn btn-success style2">Submit</button></div><div class="clearfix"></div><table>







                        <!-- Row End -->


                        <!-- Content Section End -->

                        <!-- Right Section End -->


                        <!-- Wrapper End -->




                    </table></div></div></div></div></div>

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