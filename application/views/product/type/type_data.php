<section class="content-header">
    <h1>Types
        <small>Tabel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Type</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php
    // $this->view('messages');
    ?>
    <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>"></div>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Type</h3>
            <div class="pull-right">
                <a href="<?= site_url('type/add'); ?>" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Add</a>
                <a href="<?= site_url('type/laporan_pdf'); ?>" class="btn btn-primary">
                    <i class="fa fa-print"></i> Print</a>
            </div>
        </div>

        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="dtable">
                <thead>
                    <tr>
                        <th style="width: 5%;">#</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($row->result() as $key => $data) : ?>
                        <tr>
                            <td style="width: 5%;"><?= $no++; ?>.</td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->status == 'E' ? 'Enable' : 'Disable' ?></td>
                            <td class="text-center" width="160px">
                                <a href="<?= site_url('type/edit/' . $data->type_id); ?>" class="btn btn-warning btn-xs">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <form action="<?= site_url('type/delete'); ?>" method="POST" class="pull-right">
                                    <input type="hidden" name="type_id" value="<?= $data->type_id ?>">
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