<section class="content-header">
    <h1>Items
        <small>Table</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Item Table</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <?php $this->view('messages'); ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?= ucfirst($page); ?> Item</h3>
            <div class="pull-right">
                <a href="<?= site_url('item'); ?>" class="btn btn-warning">
                    <i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <?php echo form_open_multipart('item/proses') ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Barcode *</label>
                        <input type="hidden" name="id" value="<?= $row->item_id; ?>">
                        <input type="text" name="barcode" value="<?= $row->barcode; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Item Name *</label>
                        <input type="text" name="item_name" class="form-control" value="<?= $row->name; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Item Address *</label>
                        <input type="text" name="item_address" class="form-control" value="<?= $row->address; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Stock *</label>
                        <input type="number" name="stock" value="<?= $row->stock; ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Item Duration *</label>
                                <input type="text" name="item_duration" class="form-control" value="<?= $row->duration; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Item Grup Size *</label>
                                <input type="text" name="item_grupsize" class="form-control" value="<?= $row->groupsize; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Item Type *</label>
                                <?php echo form_dropdown(
                                    'type',
                                    $type,
                                    $selectedtype,
                                    ['class' => 'form-control', 'required' => 'required']
                                ); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>item Categori *</label>
                                <select name="category" class="form-control" required>
                                    <option value="">- Choose -</option>
                                    <?php foreach ($category->result() as $key => $data) { ?>
                                        <option value="<?= $data->category_id ?>" <?= $data->category_id == $row->category_id ? "selected" : null ?>> <?= $data->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>item Unit *</label>
                                <select name="unit" class="form-control" required>
                                    <option value="">- Choose -</option>
                                    <?php foreach ($unit->result() as $key => $data) { ?>
                                        <option value="<?= $data->unit_id ?>" <?= $data->unit_id == $row->unit_id ? "selected" : null ?>> <?= $data->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-grup">
                                <label for="">Item Language *</label>
                                <input type="text" name="item_language" class="form-control" value="<?= $row->language; ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Price *</label>
                                <input type="number" name="price" value="<?= $row->price; ?>" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Image</label>
                        <?php if ($page == 'edit') {
                            if ($row->image != null) { ?>
                                <div style="margin-bottom:5px">
                                    <img src="<?= base_url('assets/img/item/' . $row->image) ?>" style="width:50%">
                                </div>
                        <?php
                            }
                        } ?>
                        <input type="file" name="image" class="form-control">
                        <small>(Leave blank if not <?= $page == 'edit' ? 'change' : 'available' ?>)</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Image 2</label>
                        <?php if ($page == 'edit') {
                            if ($row->image2 != null) { ?>
                                <div style="margin-bottom:5px">
                                    <img src="<?= base_url('assets/img/item/' . $row->image2) ?>" style="width:50%">
                                </div>
                        <?php
                            }
                        } ?>
                        <input type="file" name="image2" class="form-control">
                        <small>(Leave blank if not <?= $page == 'edit' ? 'change' : 'available' ?>)</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Image 3</label>
                        <?php if ($page == 'edit') {
                            if ($row->image3 != null) { ?>
                                <div style="margin-bottom:5px">
                                    <img src="<?= base_url('assets/img/item/' . $row->image3) ?>" style="width:50%">
                                </div>
                        <?php
                            }
                        } ?>
                        <input type="file" name="image3" class="form-control">
                        <small>(Leave blank if not <?= $page == 'edit' ? 'change' : 'available' ?>)</small>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Item Overview *</label>
                        <textarea name="item_overview" class="form-control" id="overview1" required><?= $row->overview; ?></textarea>
                    </div>
                </div>
                <div class="from-group col-md-12">
                    <button type="submit" name="<?= $page; ?>" class="btn btn-success"><i class="fa fa-paper-plane"></i> Save</button>
                    <button type="reset" class="btn" style="margin-left: 10px"><i class="fa fa-undo"></i> Reset</button>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</section>
<script>
    CKEDITOR.replace('item_overview', {
        filebrowserUploadUrl: '<?= base_url('assets/vendor/ckeditor/ckeditor/ck_upload.php') ?>',
        filebrowserUploadMethod: 'form'
    });
</script>