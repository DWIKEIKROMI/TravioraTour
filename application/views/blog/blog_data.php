<section class="content-header">
    <h1>Blogs
        <small>Tabel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Blog</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php
    // $this->view('messages');
    ?>
    <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>"></div>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Blogs</h3>
            <div class="pull-right">
                <a href="<?= site_url('Blog/add'); ?>" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Add</a>
            </div>
        </div>

        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="dtable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th style="width:170px">Title</th>
                        <th>Content</th>
                        <th>Writer</th>
                        <th style="width:60px">Created</th>
                        <th style="width:60px">Updated</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($row->result() as $key => $data) : ?>
                        <tr>
                            <td style="width: 5%;"><?= $no++; ?>.</td>
                            <td>
                                <?php if ($data->image != null) { ?>
                                    <img src="<?= base_url('assets/img/blog/' . $data->image) ?>" style="width:100px;">
                                <?php } else {
                                    echo "No Image";
                                } ?>
                            </td>
                            <td style="width:170px"><?= $data->title ?></td>
                            <td>
                                <a id="blog_content" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#content-detail" data-content="<?= $data->content ?>">
                                    <i class="fa fa-eye"></i> Detail Content
                                </a>
                            </td>
                            <td><?= $data->writer ?></td>
                            <td style="width:60px"><?= $data->created ?></td>
                            <td style="width:60px"><?= $data->updated ?></td>
                            <td class="text-center" width="160px">
                                <a href="<?= site_url('blog/edit/' . $data->blog_id); ?>" class="btn btn-warning btn-xs">
                                    <i class="fa fa-pencil"></i> Update
                                </a>
                                <form action="<?= site_url('blog/delete'); ?>" method="POST" class="pull-right">
                                    <input type="hidden" name="blog_id" value="<?= $data->blog_id ?>">
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

<div class="modal fade" id="content-detail">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Content Details</h4>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered no-margin">
                    <tbody>
                        <tr>
                            <td><span id="content"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>