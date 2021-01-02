<section class="content-header">
    <h1>Profile WEB
        <small>Pengaturan Profile dan Atribut Web</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Profile</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?= ucfirst($page); ?> Profile Web</h3>
            <div class="pull-right">
                <a href="<?= site_url('profile'); ?>" class="btn btn-warning">
                    <i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <div class="row">
                <div>
                    <?php echo form_open_multipart('profile/proses') ?>
                    <div class="col-md-6">
                        <?php if ($page == 'edit') : ?>
                            <input type="hidden" name="profile_id" value="<?= $row->profile_id; ?>">
                        <?php endif ?>
                        <div class="form-group">
                            <label for="">Logo</label>
                            <?php if ($page == 'edit') {
                                if ($row->logo != null) { ?>
                                    <div style="margin-bottom:5px">
                                        <img src="<?= base_url('assets/img/profile/' . $row->logo) ?>" style="width:50%">
                                        <input type="hidden" name="oldLogo" value="<?= $row->logo ?>">
                                    </div>
                            <?php
                                }
                            } ?>
                            <input type="file" name="logo" class="form-control">
                            <small>(Leave blank if not <?= $page == 'edit' ? 'change' : 'available' ?>)</small>
                        </div>
                        <div class="form-group">
                            <label for="">Banner Utama</label>
                            <?php if ($page == 'edit') {
                                if ($row->banner_utama != null) { ?>
                                    <div style="margin-bottom:5px">
                                        <img src="<?= base_url('assets/img/profile/' . $row->banner_utama) ?>" style="width:50%">
                                        <input type="hidden" name="oldBUT" value="<?= $row->banner_utama ?>">
                                    </div>
                            <?php
                                }
                            } ?>
                            <input type="file" name="bannerutama" class="form-control">
                            <small>(Leave blank if not <?= $page == 'edit' ? 'change' : 'available' ?>)</small>
                        </div>
                        <div class="form-group">
                            <label for="">Banner Umum</label>
                            <?php if ($page == 'edit') {
                                if ($row->banner_umum != null) { ?>
                                    <div style="margin-bottom:5px">
                                        <img src="<?= base_url('assets/img/profile/' . $row->banner_umum) ?>" style="width:50%">
                                        <input type="hidden" name="oldBUM" value="<?= $row->banner_umum ?>">
                                    </div>
                            <?php
                                }
                            } ?>
                            <input type="file" name="bannerumum" class="form-control">
                            <small>(Leave blank if not <?= $page == 'edit' ? 'change' : 'available' ?>)</small>
                        </div>
                        <div class="form-group <?= form_error('about') ? 'has-error' : null; ?>">
                            <label for="">About *</label>
                            <textarea name="about" class="form-control"><?= $row->about; ?></textarea>
                            <span class="help-block"><?= form_error('about'); ?></span>
                        </div>
                        <div class="form-group<?= form_error('webversion') ? 'has-error' : null; ?>">
                            <label for="">Web Version *</label>
                            <input type="text" name="webversion" class="form-control" value="<?= $row->web_version; ?>">
                            <span class="help-block"><?= form_error('webversion'); ?></span>
                        </div>
                    </div>
                    <div class="form-group col-md-3<?= form_error('webname') ? 'has-error' : null; ?>">
                        <label for="">Web Name *</label>
                        <input type="text" name="webname" class="form-control" value="<?= $row->web_name; ?>">
                        <span class="help-block"><?= form_error('webname'); ?></span>
                    </div>
                    <div class="form-group col-md-3<?= form_error('statusname') ? 'has-error' : null; ?>">
                        <label for="">Status Perusahaan *</label>
                        <input type="text" name="statusname" class="form-control" value="<?= $row->status_name; ?>">
                        <span class="help-block"><?= form_error('statusname'); ?></span>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group<?= form_error('address1') ? 'has-error' : null; ?>">
                            <label for="">Address1 *</label>
                            <textarea name="address1" class="form-control"><?= $row->address1; ?></textarea>
                            <span class="help-block"><?= form_error('address1'); ?></span>
                        </div>
                        <div class="form-group<?= form_error('address2') ? 'has-error' : null; ?>">
                            <label for="">Address2 *</label>
                            <textarea name="address2" class="form-control"><?= $row->address2; ?></textarea>
                            <span class="help-block"><?= form_error('address2'); ?></span>
                        </div>
                    </div>
                    <div class="form-group col-md-3<?= form_error('email1') ? 'has-error' : null; ?>">
                        <label for="">Email 1 *</label>
                        <input type="email" name="email1" class="form-control" value="<?= $row->email1; ?>">
                        <span class="help-block"><?= form_error('email1'); ?></span>
                    </div>
                    <div class="form-group col-md-3<?= form_error('email2') ? 'has-error' : null; ?>">
                        <label for="">Email 2 *</label>
                        <input type="email" name="email2" class="form-control" value="<?= $row->email2; ?>">
                        <span class="help-block"><?= form_error('email2'); ?></span>
                    </div>
                    <div class="form-group col-md-3<?= form_error('phone') ? 'has-error' : null; ?>">
                        <label for="">Phone *</label>
                        <input type="text" name="phone" class="form-control" value="<?= $row->phone; ?>">
                        <span class="help-block"><?= form_error('phone'); ?></span>
                    </div>
                    <div class="form-group col-md-3<?= form_error('email2') ? 'has-error' : null; ?>">
                        <label for="">Whatsapp *</label>
                        <input type="text" name="whatsapp" class="form-control" value="<?= $row->whatsapp; ?>">
                        <span class="help-block"><?= form_error('whatsapp'); ?></span>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group<?= form_error('facebook') ? 'has-error' : null; ?>">
                            <label for="">Link Facebook *</label>
                            <textarea name="facebook" class="form-control"><?= $row->facebook; ?></textarea>
                            <span class="help-block"><?= form_error('facebook'); ?></span>
                        </div>
                        <div class="form-group<?= form_error('instagram') ? 'has-error' : null; ?>">
                            <label for="">Link Instagram *</label>
                            <textarea name="instagram" class="form-control"><?= $row->instagram; ?></textarea>
                            <span class="help-block"><?= form_error('instagram'); ?></span>
                        </div>
                        <div class="form-group<?= form_error('twitter') ? 'has-error' : null; ?>">
                            <label for="">Link Twitter *</label>
                            <textarea name="twitter" class="form-control"><?= $row->twitter; ?></textarea>
                            <span class="help-block"><?= form_error('twitter'); ?></span>
                        </div>
                        <div class="form-group<?= form_error('youtube') ? 'has-error' : null; ?>">
                            <label for="">Link Youtube *</label>
                            <textarea name="youtube" class="form-control"><?= $row->youtube; ?></textarea>
                            <span class="help-block"><?= form_error('youtube'); ?></span>
                        </div>
                    </div>
                    <div class="from-group col-md-6">
                        <button type="submit" name="<?= $page; ?>" class="btn btn-success"><i class="fa fa-paper-plane"></i> Save</button>
                        <button type="reset" class="btn" style="margin-left: 10px"><i class="fa fa-undo"></i> Reset</button>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</section>