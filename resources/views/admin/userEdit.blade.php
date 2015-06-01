@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="sec-box">
                <a class="closethis">Close</a>
                <header>
                    <h2 class="heading">User Info Update</h2>
                </header>
                <div class="contents">
                    <a class="togglethis">Toggle</a>
                    {!! Form::open(array('url' => "admin/user/$user->id/edit/username", 'id' => 'user')) !!}
                    <div class="table-box">

                        <table class="table" style="border: 0 !important;">
                            <thead>
                            <tr>
                                <th class="col-md-4">User Email</th>
                                <td class="col-md-8">
                                    <input required="" type="email" placeholder="User Email" name="user_email" class="form-control3"  value="{{ $user->user_email }}">
                                    &nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Country Name</th>
                                <td class="col-md-8">
                                    <select required="" name="country_id" class="form-control3">
                                        <option value="">Please Select a Country</option>
                                        @foreach($allCountry as $country)
                                            <option value="{!! $country->id !!}" @if($user->country_id == $country->id) selected @endif>{{ $country->name }}</option>
                                            @endforeach
                                    </select>
                                    &nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>
                            </thead>
                            </table>

                        <br><br>

                        <div style="text-align: right; padding-right: 20px;" class="col-md-11 ">
                            <button type="submit" class="btn btn-success style2">Update</button>
                        </div>
                        <div class="clearfix"></div><table>

                        </table></div>
                    {!! Form::close() !!}
                </div></div></div></div>


    <div class="row">
        <div class="col-xs-12">
            <div class="sec-box">
                <a class="closethis">Close</a>
                <header>
                    <h2 class="heading">User Password Change</h2>
                </header>
                <div class="contents">
                    <a class="togglethis">Toggle</a>
                    {!! Form::open(array('url' => "admin/user/$user->id/edit/password", 'id' => 'password')) !!}
                    <div class="table-box">

                        <table class="table" style="border: 0 !important;">
                            <thead>
                            <tr>
                                <th class="col-md-4">Password</th>
                                <td class="col-md-8">
                                    <input required="" type="password" placeholder="Password" name="password" class="form-control3">
                                    &nbsp; <label class="redtext">*</label>
                                </td>
                            </tr>
                            </thead>
                        </table>

                        <br><br>
                        <div class="col-md-1 pull-left">
                        <div  id="loader" class="" style="margin: 0px">

                        </div>
                        </div>
                        <div style="text-align: right; padding-right: 10%;" class="col-md-11 ">
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
            $("#user").submit(function(event) {
                event.preventDefault();
                var values = $("#user").serialize();
                $.ajax({
                    url: '{!! URL::to("admin/user/$user->id/edit/username") !!}',
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


            $("#password").submit(function(event) {
                event.preventDefault();
                var values = $("#password").serialize();
                $.ajax({
                    url: '{!! URL::to("admin/user/$user->id/edit/password") !!}',
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