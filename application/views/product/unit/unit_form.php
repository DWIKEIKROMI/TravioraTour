<section class="content-header">
    <h1>Units
        <small>Table</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Units Table</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php $this->view('messages'); ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?= ucfirst($page); ?> Units</h3>
            <div class="pull-right">
                <a href="<?= site_url('unit'); ?>" class="btn btn-warning">
                    <i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>

        <div class="box-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <form action="<?= site_url('unit/proses'); ?>" method="POST">
                        <div class="form-group <?= form_error('unit_name') ? 'has-error' : null; ?>">
                            <label for="">Unit Name *</label>
                            <input type="hidden" name="id" value="<?= $row->unit_id; ?>">
                            <input type="text" name="unit_name" class="form-control" value="<?= $row->name; ?>" required>
                            <span class="help-block"><?= form_error('unit_name'); ?></span>
                        </div>
                        <div class="form-group <?= form_error('unit_status') ? 'has-error' : null; ?>">
                            <label for="">Unit Status *</label>
                            <select name="unit_status" class="form-control" id="" required>
                                <option value="">- Pilih -</option>
                                <option value="E" <?= $row->status == 'E' ? 'selected' : '' ?>>Enable</option>
                                <option value="D" <?= $row->status == 'D' ? 'selected' : '' ?>>Disable</option>
                            </select>
                            <span class="help-block"><?= form_error('unit_status'); ?></span>
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