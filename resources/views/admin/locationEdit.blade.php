@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="sec-box">
                <a class="closethis">Close</a>
                <header>
                    <h2 class="heading">Location</h2>
                </header>
                <div class="contents">
                    <a class="togglethis">Toggle</a>
                    {!! Form::open(array('url' => "admin/location/$location->id/edit", 'id' => 'location')) !!}
                    <div class="table-box">

                        <table class="table" style="border: 0 !important;">
                            <thead>
                            <tr>
                                <th class="col-md-4">Location</th>
                                <td class="col-md-8">
                                    <input class="form-control2" name="name" value="{{ $location->name }}" required="">
                                        &nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>
                            </thead>
                        </table>

                        <br><br>
                        <div  id="loader" class="col-md-1 pull-left" style="margin: 0px">

                        </div>
                        <div style="text-align: right; padding-right: 20px;" class="col-md-11 ">
                            <button type="submit" class="btn btn-success style2">Update</button>
                        </div>
                        <div class="clearfix"></div><table>

                        </table></div>
                    {!! Form::close() !!}
                </div></div></div></div>

@endsection
@section('extraJs')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#location").submit(function(event) {
                event.preventDefault();
                var values = $("#location").serialize();
                $.ajax({
                    url: '{!! URL::to("admin/location/$location->id/edit") !!}',
                    type: "POST",
                    data: values,
                    cache: false,
                    beforeSend: function(){
                        $('#loader').html('<img src="{{ URL::to('assets/images/loader_gif.gif') }}" style="height: 100px;">');
                    },
                    success: function(data) {
                        $('#loader').hide();
                        if(data=='true') {
                            window.location.href = "{!! URL::to('admin/location') !!}";
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