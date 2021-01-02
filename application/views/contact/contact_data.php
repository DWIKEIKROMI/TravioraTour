<section class="content-header">
    <h1>Contacts
        <small>Tabel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Contact</li>
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
            <h3 class="box-title">Data Contacts</h3>
            <div class="pull-right">
                <a href="<?= site_url('contact/add'); ?>" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Add</a>
                <a href="<?= site_url('contact/laporan_pdf'); ?>" class="btn btn-primary">
                    <i class="fa fa-print"></i> Print</a>
            </div>
        </div>

        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="dtable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Sender</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Pesan</th>
                        <th>Setatus</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($row->result() as $key => $data) : ?>
                        <tr>
                            <td style="width: 5%;"><?= $no++; ?>.</td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->email ?></td>
                            <td><?= $data->subject ?></td>
                            <td><?= $data->pesan ?></td>
                            <td><?= $data->answer == null ? 'Belum dibalas' : 'Sudah dibalas' ?></td>
                            <form action ="<?= site_url('contact/del/')?>" method="post">
                            <td class="text-center" width="160px">
                                <a href="<?= site_url('contact/edit/' . $data->contact_id); ?>" class="btn btn-warning btn-xs">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <input type = "hidden" name="contact_id"  value="<?=$data->contact_id?>">
                                <button onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete
                                </a>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>