@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="sec-box">
                <a class="closethis">Close</a>
                <header>
                    <h2 class="heading">Add User</h2>
                </header>
                <div class="contents">
                    <a class="togglethis">Toggle</a>
                    {!! Form::open(array('url' => 'admin/add-user', 'id' => 'user')) !!}
                    <div class="table-box">
                        <table class="table" style="border: 0 !important;">
                            <tr>
                                <th class="col-md-4">User Email</th>
                                <td class="col-md-8"><input type="email" placeholder="User Email" name="user_email" required="" class="form-control2">
                                    &nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Country Name</th>
                                <td class="col-md-8">
                                    <select required="" name="country_id" class="form-control2">
                                        <option value="">Please Select a Country</option>
                                        @foreach($allCountry as $country)
                                        <option value="{!! $country->id !!}">{{ $country->name }}</option>
                                            @endforeach
                                    </select>
                                    &nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>

                            <tr>
                                <th class="col-md-4">User Password</th>
                                <td class="col-md-8"><input type="password" placeholder="User Password" name="password" required="" class="form-control2">
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
            $("#user").submit(function(event) {
                event.preventDefault();
                var values = $("#user").serialize();
                $.ajax({
                    url: "{!! URL::to('admin/add-user') !!}",
                    type: "POST",
                    data: values,
                    cache: false,
                    beforeSend: function(){
                        $('#loader').html('<img src="{{ URL::to('assets/images/loader_gif.gif') }}" style="height: 100px;">');
                    },
                    success: function(data) {
                        $('#loader').hide();
                        if(data=='true') {
                                window.location.href = "{!! URL::to('admin/user-list') !!}";
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
