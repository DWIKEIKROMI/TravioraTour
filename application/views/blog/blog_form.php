<section class="content-header">
  <h1>Blog
    <small>Table</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href=""><i class="fa fa-dashboard"></i></a></li>
    <li class="active">Blog Table</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?= ucfirst($page); ?> Blog</h3>
      <div class="pull-right">
        <a href="<?= site_url('blog'); ?>" class="btn btn-warning">
          <i class="fa fa-arrow-left"></i> Back</a>
      </div>
    </div>

    <div class="box-body table-responsive">
      <?php echo form_open_multipart('blog/proses') ?>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="">Blog Title *</label>
            <input type="hidden" name="id" value="<?= $row->blog_id; ?>">
            <input type="text" name="title" class="form-control" value="<?= $row->title; ?>" required>
          </div>
          <div class="form-group">
            <label for="">Blog Writer *</label>
            <input type="text" name="writer" class="form-control" value="<?= $row->writer; ?>" required>
          </div>
          <div class="from-group">
            <button type="submit" name="<?= $page; ?>" class="btn btn-success"><i class="fa fa-paper-plane"></i> Save</button>
            <button type="reset" class="btn" style="margin-left: 10px"><i class="fa fa-undo"></i> Reset</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="">Image</label>
            <?php if ($page == 'edit') {
              if ($row->image != null) { ?>
                <div style="margin-bottom:5px">
                  <img src="<?= base_url('assets/img/blog/' . $row->image) ?>" style="width:50%">
                  <input type="hidden" name="oldImage" value="<?= $row->image ?>">
                </div>
            <?php
              }
            } ?>
            <input type="file" name="image" class="form-control">
            <small>(Leave blank if not <?= $page == 'edit' ? 'change' : 'available' ?>)</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="">Blog Content *</label>
            <textarea name="content" id="content" class="form-control" required><?= $row->content; ?></textarea>
          </div>
        </div>
      </div>
      <?php echo form_close() ?>
    </div>
  </div>
</section>
<script>
  CKEDITOR.replace('content', {
    filebrowserUploadUrl: '<?= base_url('assets/vendor/ckeditor/ckeditor/ck_upload.php') ?>',
    filebrowserUploadMethod: 'form'
  });
</script>