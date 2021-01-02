<section class="content-header">
    <h1>Users Activated
        <small>Tabel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i></a></li>
        <li class="active">User Activated</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Users</h3>
            <div class="pull-right">
                <a href="<?= site_url('user/add'); ?>" class="btn btn-primary">
                    <i class="fa fa-user-plus"></i> Create</a>
                <a href="<?= site_url('user/laporan_pdf'); ?>" class="btn btn-primary">
                    <i class="fa fa-print"></i> Print</a>
            </div>
        </div>

        <div class="row">
            <?php foreach ($row->result() as $key => $data) : ?>
                <div class="col-md-3" style="width : 300px; padding-left : 10px; margin-left:25px;">
                    <!-- Profile Image -->
                    <div class="box box-primary" style="padding-left : 10px; padding-right : 10px">
                        <div class="box-body box-profile">
                            <?php if ($data->avatar != null) { ?>
                                <img class="profile-user-img img-responsive img-circle" src="<?= base_url('assets/img/user/' . $data->avatar) ?>" alt="User profile picture">
                            <?php } else {
                                echo "No Image";
                            } ?>
                            <h3 class="profile-username text-center"><?= $data->name ?></h3>
                            <p class="text-muted text-center"><?= $data->level == 1 ? "Super Admin" : "Admin" ?></p>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Username</b> <a class="pull-right"><?= $data->username ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Gender</b> <a class="pull-right"><?= $data->gender == 'L' ? 'Male' : 'Female' ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="pull-right"><?= $data->email ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Address</b> <a class="pull-right"><?= $data->address ?></a>
                                </li>
                                <li class="list-group-item">
                                    <form action="<?= site_url('user/editStatus/'); ?>" method="POST" class="">
                                        <input type="hidden" name="user_id" value="<?= $data->user_id ?>">
                                        <b>Status</b>
                                        <a class="" style="margin-left: 80px;"><?= $data->status == "Y" ? "Active" : "Non Active" ?>
                                            <button class="btn btn-warning btn-xs pull-right" onclick="return confirm('Are you sure you want to make Non Activate this user?')">
                                                <i class="fa fa-close"></i> Decline</button>
                                    </form>

                                    </a>
                                </li>
                            </ul>
                            <a href="<?= site_url('user/edit/' . $data->user_id); ?>" class="btn btn-primary btn-block">
                                <i class="fa fa-pencil"></i> Edit</a>
                            <form action="<?= site_url('user/delete'); ?>" method="POST" class="">
                                <input type="hidden" name="user_id" value="<?= $data->user_id ?>">
                                <button class="btn btn-danger btn-block" onclick="return confirm('Are you sure you want to delete this data?')" style="margin-top: 10px;">
                                    <i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            <?php endforeach; ?>
        </div>
        <div>
            <h3 class="text-center"><b>Tampilan Tabel</b></h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="dtable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Avatar</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Level</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($row->result() as $key => $data) : ?>
                        <tr>
                            <td style="width: 5%;"><?= $no++; ?>.</td>
                            <td>
                                <?php if ($data->avatar != null) { ?>
                                    <img src="<?= base_url('assets/img/user/' . $data->avatar) ?>" style="width:50px; height: 50px; border-radius:50%; overflow:hidden">
                                <?php } else {
                                    echo "No Image";
                                } ?>
                            </td>
                            <td><?= $data->username ?></td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->gender == 'L' ? 'Male' : 'Female' ?></td>
                            <td><?= $data->email ?></td>
                            <td><?= $data->address ?></td>
                            <td><?= $data->level == 1 ? "Super Admin" : "Admin" ?></td>
                            <td><?= $data->status == "Y" ? "Active" : "Non Active" ?>
                                <br>
                                <form action="<?= site_url('user/editStatus/'); ?>" method="POST" class="">
                                    <input type="hidden" name="user_id" value="<?= $data->user_id ?>">
                                    <button class="btn btn-warning btn-xs" onclick="return confirm('Are you sure you want to make Non Activate this user?')">
                                        <i class="fa fa-close"></i> Decline</button>
                                </form>
                            </td>
                            <td class="text-center" width="160px">
                                <a href="<?= site_url('user/edit/' . $data->user_id); ?>" class="btn btn-warning btn-xs">
                                    <i class="fa fa-pencil"></i> Edit</a>
                                <form action="<?= site_url('user/delete'); ?>" method="POST" class="pull-right">
                                    <input type="hidden" name="user_id" value="<?= $data->user_id ?>">
                                    <button class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this data?')">
                                        <i class="fa fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>