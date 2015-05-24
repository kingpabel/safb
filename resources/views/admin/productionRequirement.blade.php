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
                {!! Form::open(array('url' => 'admin/production-requirement', 'id' => 'productionRequirement')) !!}
                <div class="table-box">

                    <table class="table" style="border: 0 !important;">
                        <thead>
                        <tr>
                            <th class="col-md-4">Data Type</th>
                            <td class="col-md-8">
                                <select class="form-control2" name="data_type_id">
                                    <option value="">Select Data Type...</option>
                                    @foreach($dataType as $data)
                                    <option value="{!! $data->id !!}">{!! $data->name !!}</option>
                                    @endforeach
                                </select>&nbsp; <label class="redtext">*</label>
                            </td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th class="col-md-4">Start Date</th>
                            <td class="col-md-8"><input type="text" placeholder="Start Date" name="start_date" class="form-control3" id="from">
                               &nbsp; <label class="redtext">*</label>
                            </td>
                        </tr>
                        <tr>
                            <th class="col-md-4">End Date</th>
                            <td class="col-md-8"><input type="text" placeholder="End Date" name="end_date" class="form-control3" id="to">
                                &nbsp; <label class="redtext">*</label>
                            </td>
                        </tr>
                        <tr>
                            <th class="col-md-4">Food or Grain</th>
                            <td class="col-md-8">
                                <select class="form-control2" name="food_id">
                                    @foreach($foodList as $food)
                                    <option value="{!! $food->id !!}">{!! $food->name !!}</option>
                                    @endforeach
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <th class="col-md-4">Quantity</th>
                            <td class="col-md-8"><input type="text" placeholder="Quantity" name="quantity" class="form-control3">
                                <select class="form-control4" name="unit_id">
                                    @foreach($unitList as $unit)
                                    <option value="{!! $unit->id !!}">{!! $unit->name !!}</option>
                                    @endforeach
                                </select>&nbsp; <label class="redtext">*</label>
                            </td>
                        </tr>

                        <tr>
                            <th class="col-md-4">Storage Location</th>
                            <td class="col-md-8">
                                <select class="form-control2" name="location_id">
                                    @foreach($locationList as $location)
                                    <option value="{!! $location->id !!}">{!! $location->name !!}</option>
                                    @endforeach
                                </select>

                            </td>
                        </tr>

                        </tbody></table>

                    <br><br><div style="text-align: right; padding-right: 20px;">
                        <button type="submit" class="btn btn-success style2">Submit</button>
                    </div><div class="clearfix"></div><table>

                    </table></div>
                {!! Form::close() !!}
            </div></div></div></div>

@endsection
@section('extraJs')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#productionRequirement").submit(function(event) {
                event.preventDefault();
                var values = $("#productionRequirement").serialize();
                $.ajax({
                    url: "{!! URL::to('admin/production-requirement') !!}",
                    type: "POST",
                    data: values,
                    cache: false,
                    success: function(data) {
//                        $('#loader').hide();
//                        $.pnotify.defaults.styling = "bootstrap3";
                        if(data=='true') {
                            new PNotify({
                                title: 'Regular Notice',
                                text: 'Check me out! I\'m a notice.'
                            });
                        }else{
                            new PNotify({
                                title: 'ERROR',
                                text: data,
                                type: 'error',
                                delay: 3000
                            });
                        }
                    }
                });
            });
        });
    </script>
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