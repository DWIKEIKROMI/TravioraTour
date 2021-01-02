<section class="content-header">
    <h1>Customer
        <small>Table</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Customer Table</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?= ucfirst($page); ?> Customer</h3>
            <div class="pull-right">
                <a href="<?= site_url('customer'); ?>" class="btn btn-warning">
                    <i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>

        <div class="box-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <form action="<?= site_url('customer/proses'); ?>" method="POST">
                        <div class="form-group">
                            <label for="">Customer Name *</label>
                            <input type="hidden" name="id" value="<?= $row->customer_id; ?>">
                            <input type="text" name="customer_name" class="form-control" value="<?= $row->name; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Customer Gender *</label>
                            <select name="gender" class="form-control" id="" required>
                                <option value="">- Pilih -</option>
                                <option value="L" <?= $row->gender == 'L' ? 'selected' : '' ?>>Male</option>
                                <option value="P" <?= $row->gender == 'P' ? 'selected' : '' ?>>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Customer Phone *</label>
                            <input type="text" name="phone" class="form-control" value="<?= $row->phone; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Customer Address *</label>
                            <textarea name="addr" id="" class="form-control" required><?= $row->address; ?></textarea>
                        </div>
                        <div class="from-group">
                            <button type="submit" name="<?= $page; ?>" class="btn btn-success"><i class="fa fa-paper-plane"></i> Save</button>
                            <button type="reset" class="btn" style="margin-left: 10px"><i class="fa fa-undo"></i> Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>