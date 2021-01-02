<section class="content-header">
    <h1>Stock Out
        <small>Barang Keluar / Pengurangan Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i></a></li>
        <li>Transaction</li>
        <li class="active">Stock Out</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php $this->view('messages'); ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Stock Out</h3>
            <div class="pull-right">
                <a href="<?= site_url('stock/out/add'); ?>" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Add</a>
            </div>
        </div>

        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="dtable">
                <thead>
                    <tr>
                        <th style="width: 5%;">#</th>
                        <th>Barcode</th>
                        <th>Product Item</th>
                        <th>Qty</th>
                        <th>Date</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($row as $key => $data) : ?>
                        <tr>
                            <td style="width: 5%;"><?= $no++; ?>.</td>
                            <td><?= $data->barcode ?></td>
                            <td><?= $data->item_name ?></td>
                            <td><?= $data->qty ?></td>
                            <td><?= indo_date($data->date) ?></td>
                            <td class="text-center" width="160px">
                                <a id="set_dtl" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-detail" data-barcode="<?= $data->barcode ?>" data-itemname="<?= $data->item_name ?>" data-detail="<?= $data->detail ?>" data-suppliername="<?= $data->supplier_name ?>" data-qty="<?= $data->qty ?>" data-date="<?= indo_date($data->date) ?>">
                                    <i class="fa fa-eye"></i> Details
                                </a>
                                <a href="<?= site_url('stock/out/del/' . $data->stock_id . '/' . $data->item_id); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')">
                                    <i class="fa fa-Trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<div class="modal fade" id="modal-detail">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Stock Out Details</h4>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered no-margin">
                    <tbody>
                        <tr>
                            <td>Barcode</td>
                            <td><span id="barcode"></span></td>
                        </tr>
                        <tr>
                            <td>Item Name</td>
                            <td><span id="item_name"></span></td>
                        </tr>
                        <tr>
                            <td>Info</td>
                            <td><span id="detail"></span></td>
                        </tr>
                        <tr>
                            <td>Qty</td>
                            <td><span id="qty"></span></td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td><span id="date"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>