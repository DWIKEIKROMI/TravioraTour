<section class="content-header">
    <h1>contact
        <small>Table</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i></a></li>
        <li class="active">contact Table</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?= ucfirst($page); ?> contact</h3>
            <div class="pull-right">
                <a href="<?= site_url('contact'); ?>" class="btn btn-warning">
                    <i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="box box-info">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
                <i class="fa fa-envelope"></i>
                <form action="" method="post">
                <h3 class="box-title">Quick Email</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <div class="box-body">
            <?php echo validation_errors(); ?>
                <form action="" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <div>
                        <ul class="wysihtml5-toolbar">
                            <li class="dropdown">
                                <a class="btn btn-default dropdown-toggle " data-toggle="dropdown">

                                    <span class="glyphicon glyphicon-font"></span>

                                    <span class="current-font">Normal text</span>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="p" tabindex="-1" href="javascript:;" unselectable="on" class="wysihtml5-command-active">Normal text</a></li>
                                    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" tabindex="-1" href="javascript:;" unselectable="on">Heading 1</a></li>
                                    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" tabindex="-1" href="javascript:;" unselectable="on">Heading 2</a></li>
                                    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h3" tabindex="-1" href="javascript:;" unselectable="on">Heading 3</a></li>
                                    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h4" tabindex="-1" href="javascript:;" unselectable="on">Heading 4</a></li>
                                    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h5" tabindex="-1" href="javascript:;" unselectable="on">Heading 5</a></li>
                                    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h6" tabindex="-1" href="javascript:;" unselectable="on">Heading 6</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="btn-group">
                                    <a class="btn btn-default" data-wysihtml5-command="bold" title="CTRL+B" tabindex="-1" href="javascript:;" unselectable="on">Bold</a>
                                    <a class="btn btn-default" data-wysihtml5-command="italic" title="CTRL+I" tabindex="-1" href="javascript:;" unselectable="on">Italic</a>
                                    <a class="btn btn-default" data-wysihtml5-command="underline" title="CTRL+U" tabindex="-1" href="javascript:;" unselectable="on">Underline</a>

                                    <a class="btn btn-default" data-wysihtml5-command="small" title="CTRL+S" tabindex="-1" href="javascript:;" unselectable="on">Small</a>

                                </div>
                            </li>
                            <li>
                                <a class="btn btn-default" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="blockquote" data-wysihtml5-display-format-name="false" tabindex="-1" href="javascript:;" unselectable="on">

                                    <span class="glyphicon glyphicon-quote"></span>

                                </a>
                            </li>
                            <li>
                                <div class="btn-group">
                                    <a class="btn btn-default" data-wysihtml5-command="insertUnorderedList" title="Unordered list" tabindex="-1" href="javascript:;" unselectable="on">

                                        <span class="glyphicon glyphicon-list"></span>

                                    </a>
                                    <a class="btn btn-default" data-wysihtml5-command="insertOrderedList" title="Ordered list" tabindex="-1" href="javascript:;" unselectable="on">

                                        <span class="glyphicon glyphicon-th-list"></span>

                                    </a>
                                    <a class="btn btn-default" data-wysihtml5-command="Outdent" title="Outdent" tabindex="-1" href="javascript:;" unselectable="on">

                                        <span class="glyphicon glyphicon-indent-right"></span>

                                    </a>
                                    <a class="btn btn-default" data-wysihtml5-command="Indent" title="Indent" tabindex="-1" href="javascript:;" unselectable="on">

                                        <span class="glyphicon glyphicon-indent-left"></span>

                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="bootstrap-wysihtml5-insert-link-modal modal fade" data-wysihtml5-dialog="createLink">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <a class="close" data-dismiss="modal">×</a>
                                                <h3>Insert link</h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input value="http://" class="bootstrap-wysihtml5-insert-link-url form-control" data-wysihtml5-dialog-field="href">
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="bootstrap-wysihtml5-insert-link-target" checked="">Open link in new window
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="btn btn-default" data-dismiss="modal" data-wysihtml5-dialog-action="cancel" href="#">Cancel</a>
                                                <a href="#" class="btn btn-primary" data-dismiss="modal" data-wysihtml5-dialog-action="save">Insert link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-default" data-wysihtml5-command="createLink" title="Insert link" tabindex="-1" href="javascript:;" unselectable="on">

                                    <span class="glyphicon glyphicon-share"></span>

                                </a>
                            </li>
                            <li>
                                <div class="bootstrap-wysihtml5-insert-image-modal modal fade" data-wysihtml5-dialog="insertImage">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <a class="close" data-dismiss="modal">×</a>
                                                <h3>Insert image</h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input value="http://" class="bootstrap-wysihtml5-insert-image-url form-control" data-wysihtml5-dialog-field="src">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="btn btn-default" data-dismiss="modal" data-wysihtml5-dialog-action="cancel" href="#">Cancel</a>
                                                <a class="btn btn-primary" data-dismiss="modal" data-wysihtml5-dialog-action="save" href="#">Insert image</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-default" data-wysihtml5-command="insertImage" title="Insert image" tabindex="-1" href="javascript:;" unselectable="on">

                                    <span class="glyphicon glyphicon-picture"></span>

                                </a>
                            </li>
                        </ul><textarea class="textarea" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;" placeholder="Message"></textarea><input type="hidden" name="_wysihtml5_mode" value="1"><iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" frameborder="0" width="0" height="0" marginwidth="0" marginheight="0" __idm_frm__="1199" style="display: inline-block; background-color: rgb(255, 255, 255); border-collapse: separate; border-color: rgb(221, 221, 221); border-style: solid; border-width: 1px; clear: none; float: none; margin: 0px; outline: rgb(51, 51, 51) none 0px; outline-offset: 0px; padding: 10px; position: static; inset: auto; z-index: auto; vertical-align: baseline; text-align: start; box-sizing: border-box; box-shadow: none; border-radius: 0px; width: 100%; height: 125px;"></iframe>
                    </div>
                </form>
            </div>
            <div class="box-footer clearfix">
                <button type="button" type="submit" class="btn btn-success btn-flat" id="sendEmail"><i class="fa fa-paper-plane"> </i>Send</button>
                <button type="button" type="reset" class="btn btn-flat" >Reset</button>
                    <i class="fa fa-arrow-circle-right"></i></button>
            </div>
        </div>
    </div>
</section>