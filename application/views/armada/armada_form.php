<section class="content-header">
    <h1>Armada
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Armada <?= ucfirst($page); ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?= ucfirst($page); ?> Armada</h3>
            <div class="pull-right">
                <a href="<?= site_url('armada'); ?>" class="btn btn-warning">
                    <i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>

        <div class="box-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <form action="<?= site_url('armada/proses'); ?>" method="POST">
                        <div class="form-group <?= form_error('armada_name') ? 'has-error' : null; ?>">
                            <label for="">Armada Name *</label>
                            <input type="hidden" name="id" value="<?= $row->armada_id; ?>">
                            <input type="text" name="armada_name" class="form-control" value="<?= $row->name; ?>" required>
                            <span class="help-block"><?= form_error('armada_name'); ?></span>
                        </div>
                        <div class="form-group <?= form_error('addr') ? 'has-error' : null; ?>">
                            <label for="">Address *</label>
                            <textarea name="addr" id="" class="form-control" required><?= $row->address; ?></textarea>
                            <span class="help-block"><?= form_error('addr'); ?></span>
                        </div>
                        <div class="form-group <?= form_error('phone') ? 'has-error' : null; ?>">
                            <label for="">Phone *</label>
                            <input type="text" name="phone" class="form-control" value="<?= $row->phone; ?>" required>
                            <span class="help-block"><?= form_error('phone'); ?></span>
                        </div>
                        <div class="form-group <?= form_error('email') ? 'has-error' : null; ?>">
                            <label for="">Email *</label>
                            <input type="email" name="email" class="form-control" value="<?= $row->email; ?>">
                            <span class="help-block"><?= form_error('email'); ?></span>
                        </div>
                        <div class="form-group <?= form_error('bus') ? 'has-error' : null; ?>">
                            <label for="">Jumlah Bus</label>
                            <input type="bus" name="bus" class="form-control" value="<?= $row->bus; ?>">
                            <span class="help-block"><?= form_error('bus'); ?></span>
                        </div>
                        <div class="form-group <?= form_error('minibus') ? 'has-error' : null; ?>">
                            <label for="">Jumlah Mini Bus</label>
                            <input type="minibus" name="minibus" class="form-control" value="<?= $row->minibus; ?>">
                            <span class="help-block"><?= form_error('minibus'); ?></span>
                        </div>
                        <div class="form-group <?= form_error('hiace') ? 'has-error' : null; ?>">
                            <label for="">Jumlah Hiace</label>
                            <input type="hiace" name="hiace" class="form-control" value="<?= $row->hiace; ?>">
                            <span class="help-block"><?= form_error('hiace'); ?></span>
                        </div>
                        <div class="form-group <?= form_error('note') ? 'has-error' : null; ?>">
                            <label for="">Note</label>
                            <textarea name="note" id="" class="form-control"><?= $row->note; ?></textarea>
                            <span class="help-block"><?= form_error('note'); ?></span>
                        </div>
                        <div class="from-group ">
                            <button type="submit" name="<?= $page; ?>" class="btn btn-success"><i class="fa fa-paper-plane"></i> Save</button>
                            <button type="reset" class="btn" style="margin-left: 10px"><i class="fa fa-undo"></i> Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>