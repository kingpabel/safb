@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="sec-box">
                <a class="closethis">Close</a>
                <header>
                    <h2 class="heading">Update A Damage</h2>
                </header>
                <div class="contents">
                    <a class="togglethis">Toggle</a>
                    {!! Form::open(array('url' => "admin/damage/$damage->id/edit", 'id' => 'damage', 'enctype' => 'multipart/form-data')) !!}
                    <div class="table-box">

                        <table class="table" style="border: 0 !important;">
                            <thead>
                            <tr>
                                <th class="col-md-4">Start Date</th>
                                <td class="col-md-8"><input readonly required="" type="text" placeholder="Start Date" name="start_date" class="form-control3" id="from" value="{{ $damage->start_date }}">
                                    &nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">End Date</th>
                                <td class="col-md-8"><input readonly required="" type="text" placeholder="End Date" name="end_date" class="form-control3" id="to" value="{{ $damage->end_date }}">
                                    &nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Food or Grains</th>
                                <td class="col-md-8">
                                    <select class="form-control2" name="food_id" required="">
                                        @foreach($foodList as $food)
                                            <option value="{!! $food->id !!}" @if($damage->food_id == $food->id) selected @endif>{!! $food->name !!}</option>
                                        @endforeach
                                    </select>&nbsp; <label class="redtext">*</label>

                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Quantity</th>
                                <td class="col-md-8">
                                    <input class="form-control2" name="quantity" required="" value="{{ $damage->quantity }}">&nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="col-md-4">Storage Location</th>
                                <td class="col-md-8">
                                    <select class="form-control2" required="" name="location_id">
                                        @foreach($locationList as $location)
                                            <option value="{!! $location->id !!}" @if($damage->location_id == $location->id) selected @endif>{!! $location->name !!}</option>
                                        @endforeach
                                    </select>&nbsp; <label class="redtext">*</label>

                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Damage Type </th>
                                <td class="col-md-8">
                                    <select class="form-control2" required="" name="damage_type_id">
                                        @foreach($damageList as $damaged)
                                            <option value="{!! $damaged->id !!}" @if($damage->damage_type_id == $damaged->id) selected @endif>{!! $damaged->name !!}</option>
                                        @endforeach
                                    </select>&nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Damage Level </th>
                                <td class="col-md-8">

                                    <select class="form-control2" required="" name="damage_level_id">
                                        @foreach($damageLevelList as $damageLevel)
                                            <option value="{!! $damageLevel->id !!}" @if($damage->damage_level_id == $damageLevel->id) selected @endif>{!! $damageLevel->name !!}</option>
                                        @endforeach
                                    </select>&nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Report in details
                                </th><td class="col-md-8"><textarea rows="6" class="form-control" required="" name="details" placeholder="Enter your text here...">{!! $damage->details !!}</textarea></td>
                            </tr>

                            <tr>
                                <th class="col-md-4">Upload File </th>
                                <td class="col-md-8"><input type="file" name="file"> {!! $damage->file !!}</td>
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