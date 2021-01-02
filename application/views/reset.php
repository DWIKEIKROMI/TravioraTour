$email = $this->input->post('email');
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
        a {
            color: whitesmoke;
        }

        a:hover {
            color: grey;
            text-decoration: underline;
        }
    </style>
</head>

<body class="hold-transition login-page" style="background-color: darkslateblue">
    <div class="login-box">
        <div class="login-logo">
            <a style="color :white"><b>Reset</b>Password</a>
        </div>
        <div class="login-box-body" style="background-color: #0075DB; color: white; border-radius : 4px;">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="<?= site_url('auth/changePassword') ?>" method="post">
                <div class="form-group has-feedback">
					<input type="hidden" name="username" value="<?= $username ?>">
                    <input type="password" name="password" class="form-control" style="border-radius : 4px;" placeholder="Password">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="cpassword" class="form-control" style="border-radius : 4px;" placeholder="Konfirmasi Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <button type="submit" name="login" class="btn btn-warning btn-block">Reset Password</button>
            </form>
        </div>
    </div>
</body>

</html>
