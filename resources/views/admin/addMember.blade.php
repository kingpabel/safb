@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="sec-box">
                <a class="closethis">Close</a>
                <header>
                    <h2 class="heading">Add Member</h2>
                </header>
                <div class="contents">
                    <a class="togglethis">Toggle</a>
                    {!! Form::open(array('url' => 'admin/add-member', 'id' => 'member')) !!}
                    <div class="table-box">
                        <table class="table" style="border: 0 !important;">
                            <tr>
                                <th class="col-md-4">Member Type</th>
                                <td class="col-md-8">

                                    <select id="member_type" class="form-control2" required="" name="member_type">
                                        <option value="">Plese Select a Member Type</option>
                                        <option value="1">Governing Body</option>
                                        <option value="2">National Focal</option>
                                    </select>&nbsp; <label class="redtext">*</label>


                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Member Name</th>
                                <td class="col-md-8"><input type="text" placeholder="Member Name" name="name" required="" class="form-control2">
                                    &nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Country</th>
                                <td class="col-md-8">

                                    <select class="form-control2" required="" name="country_id">
                                        @foreach($countryList as $country)
                                            <option value="{!! $country->id !!}">{!! $country->name !!}</option>
                                        @endforeach
                                    </select>&nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>

                            <tr>
                                <th class="col-md-4">Membership Code</th>
                                <td class="col-md-8"><input type="text" placeholder="Membership Code" name="code" required="" class="form-control2 ">
                                    &nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>
                        </table><br><br>
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
            $("#member").submit(function(event) {
                event.preventDefault();
                var values = $("#member").serialize();
                $.ajax({
                    url: "{!! URL::to('admin/add-member') !!}",
                    type: "POST",
                    data: values,
                    cache: false,
                    beforeSend: function(){
                        $('#loader').html('<img src="{{ URL::to('assets/images/loader_gif.gif') }}" style="height: 100px;">');
                    },
                    success: function(data) {
                        $('#loader').hide();
                        if(data=='true') {
                            if($("#member_type").val() == 1 ){
                            window.location.href = "{!! URL::to('admin/member-governing') !!}";
                            }else{
                            window.location.href = "{!! URL::to('admin/member-focal') !!}";
                            }
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
