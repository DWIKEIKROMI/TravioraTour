<section class="content-header">
    <h1>User Non Active
        <small>Tabel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i></a></li>
        <li class="active">User Non Active</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Users</h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="dtable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Avatar</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
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
                            <td><?= $data->email ?></td>
                            <td><?= $data->gender == 'L' ? 'Male' : 'Female' ?></td>
                            <td><?= $data->status == "Y" ? "Active" : "Non Active" ?></td>
                            <td class="text-center" width="160px">
                                <form action="<?= site_url('userNonAktif/edit/'); ?>" method="POST" class="">
                                    <input type="hidden" name="user_id" value="<?= $data->user_id ?>">
                                    <button class="btn btn-warning btn-xs" onclick="return confirm('Are you sure you want to activate this user?')">
                                        <i class="fa fa-pencil"></i> Accept</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>