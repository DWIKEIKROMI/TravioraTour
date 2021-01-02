<section class="content-header">
    <h1>Customers
        <small>Tabel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Customer</li>
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
            <h3 class="box-title">Data Customers</h3>
            <div class="pull-right">
                <a href="<?= site_url('customer/add'); ?>" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Add</a>
                <a href="<?= site_url('customer/laporan_pdf'); ?>" class="btn btn-primary">
                    <i class="fa fa-print"></i> Print</a>
            </div>
        </div>

        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="dtable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($row->result() as $key => $data) : ?>
                        <tr>
                            <td style="width: 5%;"><?= $no++; ?>.</td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->gender == 'L' ? 'Male' : 'Female' ?></td>
                            <td><?= $data->phone ?></td>
                            <td><?= $data->address ?></td>
                            <td class="text-center" width="160px">
                                <a href="<?= site_url('customer/edit/' . $data->customer_id); ?>" class="btn btn-warning btn-xs">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <form action="<?= site_url('customer/delete'); ?>" method="POST" class="pull-right">
                                    <input type="hidden" name="customer_id" value="<?= $data->customer_id ?>">
                                    <button class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')">
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