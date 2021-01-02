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
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Add Stock Out</h3>
            <div class="pull-right">
                <a href="<?= site_url('stock/out'); ?>" class="btn btn-warning">
                    <i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>

        <div class="box-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <form action="<?= site_url('stock/process'); ?>" method="POST">
                        <div class="form-group <?= form_error('date') ? 'has-error' : null; ?>">
                            <label for="date">Date *</label>
                            <input type="date" name="date" id="date" class="form-control" value="<?= date('Y-m-d') ?>" required>
                            <span class="help-block"><?= form_error('date'); ?></span>
                        </div>
                        <div>
                            <label for="barcode">Barcode</label>
                        </div>
                        <div class="form-group input-group">
                            <input name="item_id" id="item_id" class="form-control" type="hidden">
                            <input type="text" name="barcode" id="barcode" class="form-control" required autofocus>
                            <span class="input-group-btn">
                                <button type="button" name="" id="" class="btn btn-info btn" data-toggle="modal" data-target="#modal-item">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <div class="form-group <?= form_error('item_name') ? 'has-error' : null; ?>">
                            <label for="item_name">Item Name</label>
                            <input type="text" name="item_name" id="item_name" class="form-control" readonly>
                            <span class="help-block"><?= form_error('item_name'); ?></span>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="type_name">Item Type</label>
                                    <input type="text" name="type_name" id="type_name" class="form-control" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="category_name">Category Type</label>
                                    <input type="text" name="category_name" id="category_name" class="form-control" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="stock">Initial Stock *</label>
                                    <input type="text" name="stock" id="stock" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group <?= form_error('datail') ? 'has-error' : null; ?>">
                            <label for="detail">Info *</label>
                            <input type="text" name="detail" id="detail" class="form-control" placeholder="Tambahan stock produk" required>
                            <span class="help-block"><?= form_error('detail'); ?></span>
                        </div>
                        <div class="form-group <?= form_error('datail') ? 'has-error' : null; ?>">
                            <label for="qty">Qty</label>
                            <input type="text" name="qty" id="qty" class="form-control" required>
                            <span class="help-block"><?= form_error('qty'); ?></span>
                        </div>
                        <div class="from-group">
                            <button type="submit" name="out_add" class="btn btn-success"><i class="fa fa-paper-plane"></i> Save</button>
                            <button type="reset" class="btn" style="margin-left: 10px"><i class="fa fa-undo"></i> Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="modal-item">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Select Product Item</h4>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered table-striped" id="dtable">
                    <thead>
                        <tr>
                            <th>Barcode</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 11px">
                        <?php
                        foreach ($item as $i => $data) { ?>
                            <tr>
                                <td><?= $data->barcode; ?></td>
                                <td><?= $data->name; ?></td>
                                <td><?= $data->type_name; ?></td>
                                <td><?= $data->category_name; ?></td>
                                <td class="text-right"><?= indo_currency($data->price); ?></td>
                                <td class="text-right"><?= $data->stock ?></td>
                                <td class="text-right">
                                    <button class="btn btn-xs btn-info btn-modal" id="select" data-id="<?= $data->item_id; ?>" data-barcode="<?= $data->barcode; ?>" data-name="<?= $data->name; ?>" data-type="<?= $data->type_name; ?>" data-category="<?= $data->category_name; ?>" data-price="<?= $data->price; ?>" data-stock="<?= $data->stock; ?>">
                                        <i class="fa fa-check">Select</i>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>