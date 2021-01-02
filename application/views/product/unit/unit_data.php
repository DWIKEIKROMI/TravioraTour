<section class="content-header">
    <h1>Units
        <small>Tabel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Units</li>
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
            <h3 class="box-title">Data Units</h3>
            <div class="pull-right">
                <a href="<?= site_url('unit/add'); ?>" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Add</a>
                <a href="<?= site_url('unit/laporan_pdf'); ?>" class="btn btn-primary">
                    <i class="fa fa-print"></i> Print</a>
            </div>
        </div>

        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="dtable">
                <thead>
                    <tr>
                        <th style="width: 5%;">#</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
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
                                <a href="<?= site_url('unit/edit/' . $data->unit_id); ?>" class="btn btn-warning btn-xs">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <a href="<?= site_url('unit/delete/' . $data->unit_id); ?>" id="btnSA-delete" class="pull-right btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>