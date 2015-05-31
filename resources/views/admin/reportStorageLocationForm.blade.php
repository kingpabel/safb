@extends('admin.layout')
@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="sec-box">
                <a class="closethis">Close</a>
                <header>
                    <h2 class="heading">SAARC Agri Food Bank Reports</h2>
                </header>
                <div class="contents">
                    <div class="content_header" style="margin-bottom: 2%">
                        {!! Form::open(array('class' => 'form-horizontal', 'url' => 'admin/report-storage-location')) !!}
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Start Date</label>
                            <div class="col-sm-3">
                                <input required="" type="text" name="start_date" class="form-control" id="from" placeholder="Start Date" value="{!! date('Y-m-d') !!}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">End Date</label>
                            <div class="col-sm-3">
                                <input required="" type="text" name="end_date" class="form-control" id="to" placeholder="End Date" value="{!! date('Y-m-d') !!}">
                            </div>
                        </div>
                        <div class="form-group" id="foodList">
                            <label for="inputEmail3" class="col-sm-2 control-label">Location</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="location_id" >
                                    <option value="">Please select a food</option>
                                    @foreach($allLocation as $location)
                                        <option value="{!! $location->id !!}">{!! $location->name !!}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{--<div class="form-group" id="allDiv">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input id="all" type="checkbox" name="report_all"> Report For All Product
                                    </label>
                                </div>
                            </div>
                        </div>--}}
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn style2 btn-default">Report</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('extraJs')
    <script type="text/javascript" language="javascript">
        $(document).ready(function(){
            $("#all").click(function(event) {
                $("#foodList").toggle();
            });
            $("#foodList").change(function(event) {
                $("#allDiv").hide();
            });
        });
    </script>
@endsection

@section('extraCss')
    <style>
        .control-label{
            margin-top: 3% !important;
            font-size: 142%;
        }

    </style>

@endsection