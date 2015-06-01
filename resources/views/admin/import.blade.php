@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="sec-box">
                <a class="closethis">Close</a>
                <header>
                    <h2 class="heading">Import of Food Grains</h2>
                </header>
                <div class="contents">
                    <a class="togglethis">Toggle</a>
                    {!! Form::open(array('url' => 'admin/import', 'id' => 'import')) !!}
                    <div class="table-box">
                        <table class="table" style="border: 0 !important;">
                            <thead>
                            <tr>
                                <th class="col-md-4">Start Date</th>
                                <td class="col-md-8"><input readonly required="" type="text" placeholder="Start Date" name="start_date" class="form-control3" id="from" value="{{ date('Y-m-d') }}">
                                    &nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">End Date</th>
                                <td class="col-md-8"><input readonly required="" type="text" placeholder="End Date" name="end_date" class="form-control3" id="to" value="{{ date('Y-m-d') }}">
                                    &nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Food or Grains</th>
                                <td class="col-md-8">
                                    <select class="form-control2" required="" name="food_id">
                                        @foreach($foodList as $food)
                                        <option value="{!! $food->id !!}">{!! $food->name !!}</option>
                                        @endforeach
                                    </select>&nbsp; <label class="redtext">*</label>

                                </td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="col-md-4">Import from SAARC Country</th>
                                <td class="col-md-8">
                                    <span class="btn-default form-control4">
                                      <input type="checkbox" name="import_saarc" value="1">
                                    </span>


                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Country</th>
                                <td class="col-md-8">

                                    <select class="form-control2" required="" name="country_id" >
                                        @if(Auth::user()->user_level > 1)
                                            <option value="{!! Auth::user()->country_id !!}">{{ Auth::user()->Country->name }}</option>
                                        @else
                                        @foreach($countryList as $country)
                                        <option value="{!! $country->id !!}" <?php if(Auth::user()->user_level > 1 && Auth::user()->country_id == $country->id){?> selected <?php } ?>>{!! $country->name !!}</option>
                                    @endforeach
                                            @endif
                                    </select>&nbsp; <label class="redtext">*</label>


                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Quantity</th>
                                <td class="col-md-8"><input type="text" placeholder="Quantity" required="" class="form-control3 number" name="quantity">
                                    <select class="form-control4" required="" name="unit_id">
                                        @foreach($unitList as $unit)
                                        <option value="{!! $unit->id !!}">{!! $unit->name !!}</option>
                                        @endforeach
                                    </select>&nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Price</th>
                                <td class="col-md-8"><input type="text" placeholder="(USD $)" name="price" required="" class="form-control2 number">
                                    &nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>

                            <tr>
                                <th class="col-md-4">Storage Location</th>
                                <td class="col-md-8">
                                    <select class="form-control2" required="" name="location_id">
                                        @foreach($locationList as $local)
                                        <option value="{!! $local->id !!}">{!! $local->name !!}</option>
                                        @endforeach
                                    </select>&nbsp; <label class="redtext">*</label>

                                </td>
                            </tr>
                            </tbody></table><br><br>
                        <div  id="loader" class="col-md-1 pull-left" style="margin: 0px">

                        </div>
                        <div style="text-align: right; padding-right: 20px;" class="col-md-11 ">
                            <button type="submit" class="btn btn-success style2">Submit</button>
                        </div>
                        <div class="clearfix"></div><table>
                        </table></div>
                    {!! Form::close() !!}</div></div></div></div>
@endsection
@section('extraJs')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#import").submit(function(event) {
                event.preventDefault();
                var values = $("#import").serialize();
                $.ajax({
                    url: "{!! URL::to('admin/import') !!}",
                    type: "POST",
                    data: values,
                    cache: false,
                    beforeSend: function(){
                        $('#loader').html('<img src="{{ URL::to('assets/images/loader_gif.gif') }}" style="height: 100px;">');
                    },
                    success: function(data) {
                        $('#loader').hide();
                        if(data=='true') {
                            window.location.href = "{!! URL::to('admin/import') !!}";
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
