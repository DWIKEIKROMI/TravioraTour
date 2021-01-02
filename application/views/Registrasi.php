<style>
    a {
        color: whitesmoke;
    }

    a:hover {
        color: grey;
        text-decoration: underline;
    }
</style>

<body style="background-color: darkslateblue">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg" style="background-color: #0075DB; color: white; border-radius : 4px;">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 mb-1" style="color:white"><b>Register </b>PT.Traviora</h1>
                                <p class="mb-4">Register your account for when login in to our website</p>
                            </div>
                            <form class="user" method="POST" action="<?php echo base_url('Registrasi') ?>">
                                <div class="form-group <?= form_error('fullname') ? 'has-error' : null; ?>">
                                    <label for="">Full Name</label>
                                    <input type="text" name="fullname" class="form-control" value="<?= set_value('fullname'); ?>" placeholder="Fullname">
                                    <span class="help-block"><?= form_error('fullname'); ?></span>
                                </div>
                                <div class="form-group <?= form_error('email') ? 'has-error' : null; ?>">
                                    <label for="">Email</label>
                                    <input type="text" name="email" class="form-control" value="<?= set_value('email'); ?>" placeholder="Email">
                                    <span class="help-block"><?= form_error('email'); ?></span>
                                </div>
                                <div class="form-group <?= form_error('gender') ? 'has-error' : null; ?>">
                                    <label for="">Gender</label>
                                    <select name="gender" class="form-control" id="">
                                        <?php $level = set_value('gender') ?>
                                        <option value="L" <?= $level == 'L' ? "selected" : null; ?>>Male</option>
                                        <option value="P" <?= $level == 'P' ? "selected" : null; ?>>Female</option>
                                    </select>
                                    <span class="help-block"><?= form_error('level'); ?></span>
                                </div>
                                <div class="form-group <?= form_error('username') ? 'has-error' : null; ?>">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-control" value="<?= set_value('username'); ?>" placeholder="Username">
                                    <span class="help-block"><?= form_error('username'); ?></span>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0 <?= form_error('password') ? 'has-error' : null; ?>">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control" value="<?= set_value('password'); ?>" placeholder="Password">
                                        <span class="help-block"><?= form_error('password'); ?></span>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0 <?= form_error('passconf') ? 'has-error' : null; ?>">
                                        <label for="">Password Confirm</label>
                                        <input type="password" name="passconf" class="form-control" value="<?= set_value('passconf'); ?>" placeholder="Password Confirmation">
                                        <span class="help-block"><?= form_error('passconf'); ?></span>
                                    </div>
                                </div>

                                <div class="mb-3 ">
                                    <div class="form-group">
                                        <label class="form-label">Role</label><br>
                                        <select class="form-control" name="level" required>
                                            <option value="2">Admin</option>
                                            <option value="3">User</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group <?= form_error('address') ? 'has-error' : null; ?>">
                                    <label for="">Address</label>
                                    <textarea name="address" class="form-control" placeholder="Address"><?= set_value('address'); ?></textarea>
                                    <span class="help-block"><?= form_error('address'); ?></span>
                                </div>
                                <button type="submit" name="login.php" class="btn btn-warning btn-block">Register</button>
                                <hr>
                            </form>
                            <div class="text-center">
                                Already have an account?
                                <a class="small" href="<?php echo base_url('Auth/login') ?>">Please Login!!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>