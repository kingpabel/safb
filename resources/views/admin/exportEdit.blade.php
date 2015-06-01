@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="sec-box">
                <a class="closethis">Close</a>
                <header>
                    <h2 class="heading">Export of Food Grains</h2>
                </header>
                <div class="contents">
                    <a class="togglethis">Toggle</a>
                    {!! Form::open(array('url' => "admin/export/$export->id/edit", 'id' => 'export')) !!}
                    <div class="table-box">
                        <table class="table" style="border: 0 !important;">
                            <thead>
                            <tr>
                                <th class="col-md-4">Start Date</th>
                                <td class="col-md-8"><input readonly required="" type="text" placeholder="Start Date" name="start_date" class="form-control3" id="from" value="{{ $export->start_date }}">
                                    &nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">End Date</th>
                                <td class="col-md-8"><input readonly required="" type="text" placeholder="End Date" name="end_date" class="form-control3" id="to" value="{{ $export->end_date }}">
                                    &nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Food or Grains</th>
                                <td class="col-md-8">
                                    <select class="form-control2" required="" name="food_id">
                                        @foreach($foodList as $food)
                                            <option value="{!! $food->id !!}" @if($export->food_id == $food->id) selected @endif>{!! $food->name !!}</option>
                                        @endforeach
                                    </select>&nbsp; <label class="redtext">*</label>

                                </td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="col-md-4">Country</th>
                                <td class="col-md-8">

                                    <select class="form-control2" required="" name="country_id" >
                                        @if(Auth::user()->user_level > 1)
                                            <option value="{!! Auth::user()->country_id !!}">{{ Auth::user()->Country->name }}</option>
                                        @else
                                        @foreach($countryList as $country)
                                            <option value="{!! $country->id !!}" @if($export->country_id == $country->id) selected @endif>{!! $country->name !!}</option>
                                        @endforeach
                                            @endif
                                    </select>&nbsp; <label class="redtext">*</label>


                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Quantity</th>
                                <td class="col-md-8"><input type="text" placeholder="Quantity" required="" class="form-control3 number" name="quantity" value="{{ $export->quantity }}">
                                    <select class="form-control4" required="" name="unit_id">
                                        @foreach($unitList as $unit)
                                            <option value="{!! $unit->id !!}" @if($export->unit_id == $unit->id) selected @endif>{!! $unit->name !!}</option>
                                        @endforeach
                                    </select>&nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Price</th>
                                <td class="col-md-8"><input type="text" placeholder="(USD $)" name="price" required="" class="form-control2 number" value="{{ $export->price }}">
                                    &nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>

                            <tr>
                                <th class="col-md-4">Storage Location</th>
                                <td class="col-md-8">
                                    <select class="form-control2" required="" name="location_id">
                                        @foreach($locationList as $local)
                                            <option value="{!! $local->id !!}" @if($export->location_id == $local->id) selected @endif>{!! $local->name !!}</option>
                                        @endforeach
                                    </select>&nbsp; <label class="redtext">*</label>

                                </td>
                            </tr>
                            </tbody></table><br><br>
                        <div  id="loader" class="col-md-1 pull-left" style="margin: 0px">

                        </div>
                        <div style="text-align: right; padding-right: 20px;" class="col-md-11 ">
                            <button type="submit" class="btn btn-success style2">Update</button>
                        </div>
                        <div class="clearfix"></div><table>
                        </table></div>
                    {!! Form::close() !!}</div></div></div></div>
@endsection
@section('extraJs')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#export").submit(function(event) {
                event.preventDefault();
                var values = $("#export").serialize();
                $.ajax({
                    url: '{!! URL::to("admin/export/$export->id/edit") !!}',
                    type: "POST",
                    data: values,
                    cache: false,
                    beforeSend: function(){
                        $('#loader').html('<img src="{{ URL::to('assets/images/loader_gif.gif') }}" style="height: 100px;">');
                    },
                    success: function(data) {
                        $('#loader').hide();
                        if(data=='true') {
                            window.location.href = "{!! URL::to('admin/export') !!}";
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
