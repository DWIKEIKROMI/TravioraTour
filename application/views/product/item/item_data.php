<section class="content-header">
    <h1>Items
        <small>Tabel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Item</li>
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
            <h3 class="box-title">Data Item</h3>
            <div class="pull-right">
                <a href="<?= site_url('item/add'); ?>" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Add</a>
                <a href="<?= site_url('item/laporan_pdf'); ?>" class="btn btn-primary">
                    <i class="fa fa-print"></i> Print</a>
            </div>
        </div>

        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="dtable">
                <thead>
                    <tr>
                        <th style="width: 5%;">#</th>
                        <th>Barcode</th>
                        <th style="width:140px">Name / Title</th>
                        <th>Image</th>
                        <th style="width:140px">Address</th>
                        <th>Tour Category</th>
                        <th>Stock</th>
                        <th>Price</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($row->result() as $key => $data) : ?>
                        <tr>
                            <td style="width: 5%;"><?= $no++; ?>.</td>
                            <td>
                                <?= $data->barcode ?> <br>
                                <a href="<?= site_url('item/barcode_qrcode/' . $data->item_id); ?>" class="btn btn-default btn-xs" target="_blank">
                                    Generate<i class="fa fa-barcode"></i>
                                </a>
                            </td>
                            <td style="width:140px"><?= $data->name ?><br>
                                <a id="item_detail" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#itm-detail" data-duration="<?= $data->duration ?>" data-groupsize="<?= $data->groupsize ?>" data-language="<?= $data->language ?>" data-tourtype="<?= $data->type_name ?>" data-tourunit="<?= $data->unit_name ?>" data-overview="<?= $data->overview ?>">
                                    <i class="fa fa-eye"></i> Detail
                                </a></td>
                            <td>
                                <?php if ($data->image != null) { ?>
                                    <img src="<?= base_url('assets/img/item/' . $data->image) ?>" style="width:100px">
                                <?php } ?>
                            </td>
                            <td style="width:140px"><?= $data->address ?></td>
                            <td><?= $data->category_name ?></td>
                            <td><?= $data->stock ?></td>
                            <td><?= indo_currency($data->price); ?></td>
                            <td class="text-center" width="80px">
                                <a href="<?= site_url('item/edit/' . $data->item_id); ?>" class="btn btn-block btn-warning btn-xs">
                                    <i class="fa fa-pencil"></i> Edit
                                </a> <br>
                                <a href="<?= site_url('item/delete/' . $data->item_id); ?>" id="btnSA-delete" class="pull-right btn btn-block btn-danger btn-xs">
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

<div class="modal fade" id="itm-detail">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Item Details</h4>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered no-margin">
                    <tbody>
                        <tr>
                            <td>Duration</td>
                            <td><span id="duration"></span></td>
                        </tr>
                        <tr>
                            <td>Group Size</td>
                            <td><span id="groupsize"></span></td>
                        </tr>
                        <tr>
                            <td>Language</td>
                            <td><span id="language"></span></td>
                        </tr>
                        <tr>
                            <td>Tour Type</td>
                            <td><span id="tour_type"></span></td>
                        </tr>
                        <tr>
                            <td>Tour Unit</td>
                            <td><span id="tour_unit"></span></td>
                        </tr>
                        <tr>
                            <td>Overview</td>
                            <td><span id="overview"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>