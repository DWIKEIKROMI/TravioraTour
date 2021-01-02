<section class="content-header">
  <h1>Users
    <small>Table</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href=""><i class="fa fa-dashboard"></i></a></li>
    <li class="active">User Table</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?= ucfirst($page); ?> User</h3>
      <div class="pull-right">
        <a href="<?= site_url('user'); ?>" class="btn btn-warning">
          <i class="fa fa-arrow-left"></i> Back</a>
      </div>
    </div>

    <div class="box-body table-responsive">
      <div class="row">
        <div class="col-md-6">
          <?php echo form_open_multipart('user/proses') ?>
          <?php if ($page == 'edit') : ?>
            <input type="hidden" name="user_id" value="<?= $row->user_id; ?>">
          <?php endif ?>
          <div class="form-group">
            <label for="">Image</label>
            <?php if ($page == 'edit') {
              if ($row->avatar != null) { ?>
                <div style="margin-bottom:5px">
                  <img src="<?= base_url('assets/img/user/' . $row->avatar) ?>" style="width:50%">
                  <input type="hidden" name="oldImage" value="<?= $row->avatar ?>">
                </div>
            <?php
              }
            } ?>
            <input type="file" name="image" class="form-control">
            <small>(Leave blank if not <?= $page == 'edit' ? 'change' : 'available' ?>)</small>
          </div>
          <div class="form-group <?= form_error('fullname') ? 'has-error' : null; ?>">
            <label for="">Name *</label>
            <input type="text" name="fullname" class="form-control" value="<?= $row->name; ?>">
            <span class="help-block"><?= form_error('fullname'); ?></span>
          </div>
          <div class="form-group <?= form_error('gender') ? 'has-error' : null; ?>">
            <label for="">Customer Gender *</label>
            <select name="gender" class="form-control" required>
              <option value="">- Pilih -</option>
              <option value="L" <?= $row->gender == 'L' ? 'selected' : '' ?>>Male</option>
              <option value="P" <?= $row->gender == 'P' ? 'selected' : '' ?>>female</option>
            </select>
            <span class="help-block"><?= form_error('gender'); ?></span>
          </div>
          <div class="form-group <?= form_error('username') ? 'has-error' : null; ?>">
            <label for="">Username *</label>
            <input type="text" name="username" class="form-control" value="<?= $row->username; ?>">
            <span class="help-block"><?= form_error('username'); ?></span>
          </div>
          <div class="form-group <?= form_error('email') ? 'has-error' : null; ?>">
            <label for="">Email *</label>
            <input type="email" name="email" class="form-control" value="<?= $row->email; ?>">
            <span class="help-block"><?= form_error('email'); ?></span>
          </div>
          <div class="form-group <?= form_error('password') ? 'has-error' : null; ?>">
            <label for="">Password *</label>
            <input type="password" name="password" class="form-control" value="<?= $this->input->post('password') ?>">
            <span class="help-block"><?= form_error('password'); ?></span>
          </div>
          <div class="form-group <?= form_error('passconf') ? 'has-error' : null; ?>">
            <label for="">Password Confirmation *</label>
            <input type="password" name="passconf" class="form-control" value="<?= $this->input->post('passconf') ?>">
            <span class="help-block"><?= form_error('passconf'); ?></span>
          </div>
          <div class="form-group <?= form_error('address') ? 'has-error' : null; ?>">
            <label for="">Address *</label>
            <textarea name="address" class="form-control"><?= $row->address; ?></textarea>
            <span class="help-block"><?= form_error('address'); ?></span>
          </div>
          <div class="form-group <?= form_error('level') ? 'has-error' : null; ?>">
            <label for="">Level *</label>
            <select name="level" class="form-control" required>
              <option value="">- Pilih -</option>
              <option value="1" <?= $row->level == 1 ? 'selected' : '' ?>>Super Admin</option>
              <option value="2" <?= $row->level == 2 ? 'selected' : '' ?>>Admin</option>
              <option value="3" <?= $row->level == 3 ? 'selected' : '' ?>>User</option>
            </select>
            <span class="help-block"><?= form_error('level'); ?></span>
          </div>
          <div class="from-group">
            <button type="submit" name="<?= $page; ?>" class="btn btn-success"><i class="fa fa-paper-plane"></i> Save</button>
            <button type="reset" class="btn" style="margin-left: 10px"><i class="fa fa-undo"></i> Reset</button>
          </div>
          <?php echo form_close() ?>
        </div>
      </div>
    </div>
  </div>
</section>