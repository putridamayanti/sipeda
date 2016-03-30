<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SIPEDA | Pengajuan Dana</title>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <link href="/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="/css/admin.css" rel="stylesheet" type="text/css" />
</head>
<body class="fixed_header left_nav_fixed">
<div class="wrapper">
    <!--\\\\\\\ wrapper Start \\\\\\-->

    <div class="login_page">
        <div class="login_content">
            <div class="panel-heading border login_heading">sign in now</div>
            <form role="form" class="form-horizontal" method="POST" action="{{ url('/login') }}">
                {!! csrf_field() !!}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                    <div class="col-sm-10">
                        <input type="email" placeholder="Email" name="email" class="form-control">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                    <div class="col-sm-10">
                        <input type="password" placeholder="Password" name="password" class="form-control">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class=" col-sm-10">
                        <div class="checkbox checkbox_margin">
                            <label class="lable_margin">
                                <input type="checkbox" name="remember"><p class="pull-left"> Remember me</p></label>
                            <a href="index.html">
                                <button class="btn btn-default pull-right" type="submit">Sign in</button>
                            </a></div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<!--\\\\\\\ wrapper end\\\\\\-->
<script src="/js/jquery-2.1.0.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/common-script.js"></script>
<script src="/js/jquery.slimscroll.min.js"></script>
</body>
</html>