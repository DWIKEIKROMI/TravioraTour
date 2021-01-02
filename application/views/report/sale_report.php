<section class="content-header">
    <h1>Sales Report
        <small>Laporan Penjualan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i></a></li>
        <li><a href="">Report</a></li>
        <li class="active">Penjualan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Penjualan</h3>
            <div class="pull-right">
                <a href="<?= site_url('report/laporan_pdf'); ?>" class="btn btn-primary">
                    <i class="fa fa-print"></i> Print</a>
            </div>
        </div>

        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Invoice</th>
                        <th>Date</th>
                        <th>Customer</th>
                        <th class="text-center">Total</th>
                        <th class="text-center">Discount</th>
                        <th class="text-center">Grand Total</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($row->result() as $key => $data) : ?>
                        <tr>
                            <td style="width: 5%;"><?= $no++; ?>.</td>
                            <td>
                                <?= $data->invoice ?><br>
                                <button id="detail" data-target="#sr-detailcard" data-toggle="modal" class="btn btn-primary btn-xs" data-invoice="<?= $data->invoice; ?>" data-date="<?= indo_date($data->date) ?>" data-time="<?= substr($data->sale_created, 11, 5) ?>" data-customer="<?= $data->customer_id == null ? "Umum" : $data->customer_name; ?>" data-total="<?= indo_currency($data->total_price); ?>" data-discount="<?= $data->discount; ?>" data-grandtotal="<?= indo_currency($data->final_price); ?>" data-cash="<?= indo_currency($data->cash); ?>" data-remaining="<?= indo_currency($data->remaining); ?>" data-note="<?= $data->note; ?>" data-cashier="<?= ucfirst($data->user_name); ?>" data-saleid="<?= $data->sale_id; ?>"><i class="fa fa-eye"></i>Detail</button>
                            </td>
                            <td><?= indo_date($data->date) ?></td>
                            <td><?= $data->customer_id == null ? "Umum" : $data->customer_name ?></td>
                            <td class="text-right"><?= indo_currency($data->total_price) ?></td>
                            <td class="text-right"><?= indo_currency($data->discount) ?></td>
                            <td class="text-right"><?= indo_currency($data->final_price) ?></td>
                            <td style="width: 130px;">
                                <a href="<?= site_url('sale/cetak/' . $data->sale_id); ?>" target="_blank" class="btn btn-warning btn-xs">
                                    <i class="fa fa-print"></i> print
                                </a>
                                <form action="<?= site_url('customer/delete'); ?>" method="POST" class="pull-right">
                                    <input type="hidden" name="customer_id" value="<?= $data->sale_id ?>">
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

<div class="modal fade" id="sr-detailcard">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Sales Report Detail</h4>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered no-margin">
                    <tbody>
                        <tr>
                            <th style="width:20%">Invoice</th>
                            <td style="width:30%"><span id="dtinvoice"></span></td>
                            <th style="width:20%">Customer</th>
                            <td style="width:30%"><span id="dtcustomer"></span></td>
                        </tr>
                        <tr>
                            <th>Date Time</th>
                            <th><span id="dtdatetime"></span></th>
                            <th>Cashier</th>
                            <th><span id="dtcashier"></span></th>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <th><span id="dttotal"></span></th>
                            <th>Cash</th>
                            <th><span id="dtcash"></span></th>
                        </tr>
                        <tr>
                            <th>Discount</th>
                            <th><span id="dtdiscount"></span></th>
                            <th>Remaining</th>
                            <th><span id="dtremaining"></span></th>
                        </tr>
                        <tr>
                            <th>Grand Total</th>
                            <th><span id="dtgrandtotal"></span></th>
                            <th>Note</th>
                            <th><span id="dtnote"></span></th>
                        </tr>
                        <tr>
                            <th>Product</th>
                            <td colspan="3"><span id="dtproduct"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>