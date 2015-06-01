<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    {!! HTML::style('assets/css/kd/bootstrap.min.css') !!}
    {!! HTML::style('assets/css/kd/style.css') !!}
</head>
<body>
<?php

?>
<div class="container">
    <p><br /><br /></p>
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <img class="img" src="assets/images/saarc_logo.png" alt="" />
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="jumbotron page-header text-center" style="margin-top:0px">
                        <h4><b>Login to check report</b></h4>
                    </div>

                    {!! Form::open(array('class' => 'form-horizontal', 'role' => 'form', 'url' => 'login/check-user')) !!}
                    <form class="form-horizontal" role="form" action="index.html" method="post">
                        @if(Session::has('flashError'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>{!! Session::get('flashError') !!}!</strong>
                        </div>
                        @endif
                            @if(Session::has('flashSuccess'))
                                <div class="alert alert-success alert-dismissible" role="success">
                                    <button type="button" class="close" data-dismiss="success" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>{!! Session::get('flashSuccess') !!}!</strong>
                                </div>
                            @endif

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label" style="color:#967E7E">Email</label>
                            <div class="col-sm-10">
                                <input required="" type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email address" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" style="color:#967E7E" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input required="" type="password" name="password" class="form-control" placeholder="Password" />
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <label for="inputPassword3" style="color:#967E7E" class="col-sm-2 control-label">Country</label>
                            <div class="col-sm-10">
                                <select class="form-control">
                                    <option value="afganistan">Afghanistan</option>
                                    <option value="bangladesh">Bangladesh</option>
                                    <option value="bhutan">Bhutan</option>
                                    <option value="india">India</option>
                                    <option value="maldives">Maldives</option>
                                    <option value="nepal">Nepal</option>
                                    <option value="pakistan">Pakistan</option>
                                    <option value="srilanka">Sri Lanka</option>


                                </select>
                            </div>
                        </div>-->

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Sign in</button>
                                <button type="button" class="btn btn-link">Forgot Password?</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-md-3">

        </div>
    </div>
</div>

{!! HTML::script('assets/css/kd/js/bootstrap.min.js') !!}
{!! HTML::script('assets/css/kd/js/main.js') !!}
</body>
</html>