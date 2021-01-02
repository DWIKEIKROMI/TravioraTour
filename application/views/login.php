<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Traviora | Log in</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css"> -->
    <style>
        a {
            color: whitesmoke;
        }

        a:hover {
            color: orange;
            text-decoration: underline;
        }
    </style>
</head>

<body class="hold-transition login-page" style="background-color: darkslateblue">
    <div class="login-box">
        <div class="login-logo">
            <a style="color :white"><b>Login</b>Traviora</a>
        </div>
        <div class="login-box-body" style="background-color: #0075DB; color: white; border-radius : 4px;">
            <h5 class="login-box-msg">Sign in to start your session</h5>

            <form action="<?= site_url('auth/proses') ?>" method="post">
                <div class="form-group has-feedback">
                    <input type="text" name="username" class="form-control" style="border-radius : 4px;" placeholder="Name">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" style="border-radius : 4px;" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <button type="submit" name="login" class="btn btn-warning btn-block">Login</button>
            </form>
            <hr>
            <div class="text-center">
                <h5 style="color :white">Don't have an account?</h5>
                <a class="medium" href="<?php echo base_url('Registrasi') ?>"> - Register Here -</a> <br><br>
                <a class="medium" href="<?php echo base_url('ForgotPs') ?>"> Forgot Password?</a> </p>
            </div>
            </form>
        </div>
    </div>
</body>

</html>