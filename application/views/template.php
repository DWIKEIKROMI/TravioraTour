<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php if ($this->fungsi->user_login()->level == 1) { ?>
        <title>Admin | Traviora</title>
    <?php } else { ?>
        <title>Traviora</title>
    <?php } ?>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/SweetAlert2/sweetalert2.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
        .swal2-popup {
            font-size: 1.6rem !important;
        }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini <?= $this->uri->segment(1) == 'sale' ? 'sidebar-collapse' : null ?>">
    <!-- Site wrapper -->

    <script src="<?= base_url('assets/vendor/ckeditor/ckeditor/ckeditor.js'); ?>"></script>
    <div class="wrapper">

        <header class="main-header">
            <a href="<?= site_url('dashboard') ?>" class="logo" style="background-color: #1a2226">
                <span class="logo-mini"><b>Tr</b></span>
                <img src="<?= base_url() ?>assets/img/Logo.png" alt="Logo Traviora" height="50%">
                <?php if ($this->fungsi->user_login()->level == 1) { ?>
                    <span class="logo-lg"><b>Admin</b>Traviora</span>
                <?php } else { ?>
                    <span class="logo-lg">Traviora</span>
                <?php } ?>
                <span class="logo-lg"><b>Admin</b>Traviora</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">3</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 3 tasks</li>
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url() ?>assets/img/user/<?= $this->fungsi->user_login()->avatar ?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?= $this->fungsi->user_login()->username ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">

                                    <img src="<?= base_url() ?>assets/img/user/<?= $this->fungsi->user_login()->avatar ?>" class="img-circle" alt="User Image">
                                    <p>
                                        <?= ucfirst($this->fungsi->user_login()->name) ?>
                                        <small><?= $this->fungsi->user_login()->address ?></small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?= site_url('auth/logout'); ?>" class="btn btn-flat bg-red">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column -->
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= base_url() ?>assets/img/user/<?= $this->fungsi->user_login()->avatar ?>" style="width:45px; height: 45px; border-radius:50%; overflow:hidden" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?= $this->fungsi->user_login()->username ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <!-- sidebar menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li <?= $this->uri->segment(1) == 'dashboard' ||  $this->uri->segment(1) == '' ? 'class="active"' : ''; ?>>
                        <a href="<?= site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                    </li>
                    <li <?= $this->uri->segment(1) == 'customer' ? 'class="active"' : ''; ?>>
                        <a href="<?= site_url('customer'); ?>"><i class="fa fa-user"></i><span>Customers</span></a>
                    </li>
                    <li <?= $this->uri->segment(1) == 'armada' ? 'class="active"' : ''; ?>>
                        <a href="<?= site_url('armada'); ?>"><i class="fa fa-truck"></i><span>Armada</span></a>
                    </li>
                    <li class="treeview <?= $this->uri->segment(1) == 'category' ||
                                            $this->uri->segment(1) == 'item' ||
                                            $this->uri->segment(1) == 'unit' ||
                                            $this->uri->segment(1) == 'type' ? 'active' : ''; ?>">
                        <a href="#">
                            <i class="fa fa-archive"></i> <span>Tour Products</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?= $this->uri->segment(1) == 'item' ? 'class="active"' : ''; ?>>
                                <a href="<?= site_url('item'); ?>"><i class="fa fa-circle-o"></i> Items</a>
                            </li>
                            <li <?= $this->uri->segment(1) == 'category' ? 'class="active"' : ''; ?>>
                                <a href="<?= site_url('category'); ?>"><i class="fa fa-circle-o"></i> Categories</a>
                            </li>
                            <li <?= $this->uri->segment(1) == 'type' ? 'class="active"' : ''; ?>>
                                <a href="<?= site_url('type'); ?>"><i class="fa fa-circle-o"></i> Tour Type</a>
                            </li>
                            <li <?= $this->uri->segment(1) == 'unit' ? 'class="active"' : ''; ?>>
                                <a href="<?= site_url('unit'); ?>"><i class="fa fa-circle-o"></i> Units</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview <?= $this->uri->segment(1) == 'sale' ? 'active' : '' ||
                                            $this->uri->segment(1) == 'stock' && $this->uri->segment(2) == 'in' ||
                                            $this->uri->segment(1) == 'stock'  && $this->uri->segment(2) == 'out' ? 'active' : ''; ?>">
                        <a href="#">
                            <i class="fa fa-money"></i> <span>Transaction</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?= $this->uri->segment(1) == 'sale' ? 'class="active"' : ''; ?>>
                                <a href="<?= site_url('sale'); ?>"><i class="fa fa-circle-o"></i> Sales</a>
                            </li>
                            <li <?= $this->uri->segment(1) == 'stock' && $this->uri->segment(2) == 'in' ? 'class="active"' : ''; ?>>
                                <a href="<?= site_url('stock/in'); ?>"><i class="fa fa-circle-o"></i> Stock In</a>
                            </li>
                            <li <?= $this->uri->segment(1) == 'stock' && $this->uri->segment(2) == 'out' ? 'class="active"' : ''; ?>>
                                <a href="<?= site_url('stock/out'); ?>"><i class="fa fa-circle-o"></i> Stock Out</a>
                            </li>
                        </ul>
                    </li>
                    <li <?= $this->uri->segment(1) == 'contact' ? 'class="active"' : ''; ?>>
                        <a href="<?= site_url('contact'); ?>"><i class="fa fa-comments"></i><span>Contact</span></a>
                    </li>
                    <li <?= $this->uri->segment(1) == 'blog' ? 'class="active"' : ''; ?>>
                        <a href="<?= site_url('blog'); ?>"><i class="fa fa-globe"></i><span>Blog</span></a>
                    </li>
                    <li class="treeview <?= $this->uri->segment(1) == 'report' ? 'active' : ''; ?>">
                        <a href="#">
                            <i class="fa fa-pie-chart"></i> <span>Reports</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?= $this->uri->segment(1) == 'report' && $this->uri->segment(2) == 'sale' ? 'class="active"' : ''; ?>>
                                <a href="<?= site_url('report/sale'); ?>"><i class="fa fa-circle-o"></i> Sales</a>
                            </li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Stock</a></li>
                        </ul>
                    </li>
                    <?php if ($this->fungsi->user_login()->level == 1) : ?>
                        <li class="header">SETTING</li>
                        <li class="treeview <?= $this->uri->segment(1) == 'user' ||
                                                $this->uri->segment(1) == 'userNonAktif' ? 'active' : ''; ?>">
                            <a href="#">
                                <i class="fa fa-user"></i> <span>User</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li <?= $this->uri->segment(1) == 'user' ? 'class="active"' : ''; ?>>
                                    <a href="<?= site_url('user'); ?>"><i class="fa fa-check"></i> User Active</a>
                                </li>
                                <li <?= $this->uri->segment(1) == 'userNonAktif' ? 'class="active"' : ''; ?>>
                                    <a href="<?= site_url('userNonAktif'); ?>"><i class="fa fa-close"></i> User Non Active</a>
                                </li>
                            </ul>
                        </li>
                        <li <?= $this->uri->segment(1) == 'profile' ? 'class="active"' : ''; ?>>
                            <a href="<?= site_url('profile'); ?>"><i class="fa fa-object-group"></i><span>Profile Website</span></a>
                        </li>
                    <?php endif; ?>
            </section>
        </aside>
        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <?php echo $contents ?>
        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2020 <a href="<?= site_url('dashboard'); ?>">Traviora</a>.</strong> All rights reserved.
        </footer>
    </div>

    <script src="<?= base_url() ?>assets/plugins/SweetAlert2/sweetalert2.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <!-- Sweet Alert -->
    <script>
        var flash = $('#flash').data('flash');
        if (flash) {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: flash
            })
        }
        $(document).on('click', '#btnSA-delete', function(e) {
            e.preventDefault();
            var link = $(this).attr('href');
            Swal.fire({
                title: 'Are you sure?',
                text: "Data Will be deleted",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                }
            })
        })
    </script>
    <!-- Data Table -->
    <script>
        $(document).ready(function() {
            $('#dtable').DataTable()
        })
    </script>
    <!-- ini untuk tombol search pada tambah stock in -->
    <script>
        $(document).ready(function() {
            $('#dtable').DataTable()
            $(".btn-modal").click(function(e) {
                e.preventDefault();
                console.log("aa");
                var item_id = $(this).data('id');
                var barcode = $(this).data('barcode');
                var name = $(this).data('name');
                var type_name = $(this).data('type');
                var category_name = $(this).data('category');
                var stock = $(this).data('stock');
                var price = $(this).data('price');
                $('#item_id').val(item_id);
                $('#barcode').val(barcode);
                $('#item_name').val(name);
                $('#type_name').val(type_name);
                $('#category_name').val(category_name);
                $('#stock').val(stock);
                $('#price').val(price);
                $('#modal-item').modal('hide');
            });
        })
    </script>
    <!-- item detail -->
    <script>
        $(document).ready(function() {
            $(document).on('click', '#item_detail', function() {
                var duration = $(this).data('duration');
                var groupsize = $(this).data('groupsize');
                var language = $(this).data('language');
                var tourtype = $(this).data('tourtype');
                var tourunit = $(this).data('tourunit');
                var overview = $(this).data('overview');
                $('#duration').text(duration);
                $('#groupsize').text(groupsize);
                $('#language').text(language);
                $('#tour_type').text(tourtype);
                $('#tour_unit').text(tourunit);
                $('#overview').text(overview);
            })
        })
    </script>
    <!-- detail pada stock in dan stock out -->
    <script>
        $(document).ready(function() {
            $(document).on('click', '#set_dtl', function() {
                var barcode = $(this).data('barcode');
                var itemname = $(this).data('itemname');
                var detail = $(this).data('detail');
                var suppliername = $(this).data('suppliername');
                var qty = $(this).data('qty');
                var date = $(this).data('date');
                $('#barcode').text(barcode);
                $('#item_name').text(itemname);
                $('#detail').text(detail);
                $('#supplier_name').text(suppliername);
                $('#qty').text(qty);
                $('#date').text(date);
            })
        })
    </script>

    <!-- masukkan data ke inputan cart hasil search -->
    <script>
        $(document).on('click', '#select', function() {
            $('#item_id').val($(this).data('id'));
            $('#barcode').val($(this).data('barcode'));
            $('#price').val($(this).data('price'));
            $('#stock').val($(this).data('stock'));
            $('#modal-item').modal('hide');
        })
        // memasukkan data pada cart di halaman sale. 
        $(document).on('click', '#add_cart', function() {
            var item_id = $('#item_id').val()
            var price = $('#price').val()
            var stock = $('#stock').val()
            var qty = $('#qty').val()
            if (item_id == '') {
                alert('Product not selected!!')
                $('#barcode').focus()
            } else if (stock < 1) {
                alert('Insufficient stock!!')
                $('#item_id').val('')
                $('#barcode').val('')
                $('#barcode').focus()
            } else {
                $.ajax({
                    type: 'POST',
                    url: '<?= site_url('sale/process') ?>',
                    data: {
                        'add_cart': true,
                        'item_id': item_id,
                        'price': price,
                        'qty': qty
                    },
                    dataType: 'json',
                    success: function(result) {
                        if (result.success == true) {
                            $('#cart_table').load('<?= site_url('sale/cart_data') ?>', function() {
                                calculate()
                            })
                            $('#item_id').val('')
                            $('#barcode').val('')
                            $('#qty').val(1)
                            $('#barcode').focus()
                        } else {
                            alert('Failed to add item cart!!')
                        }
                    }
                })
            }
        })
        // delete chart list
        $(document).on('click', '#del_cart', function() {
            if (confirm('Are you sure you want to delete this data??')) {
                var cart_id = $(this).data('cartid')
                $.ajax({
                    type: 'POST',
                    url: '<?= site_url('sale/cart_del') ?>',
                    dataType: 'json',
                    data: {
                        'cart_id': cart_id
                    },
                    success: function(result) {
                        if (result.success == true) {
                            $('#cart_table').load('<?= site_url('sale/cart_data') ?>', function() {
                                calculate()
                            })
                        } else {
                            alert('Failed to delete item cart!!');
                        }
                    }
                })
            }
        })

        $(document).on('click', '#update_cart', function() {
            $('#cartid_item').val($(this).data('cartid'));
            $('#barcode_item').val($(this).data('barcode'));
            $('#product_item').val($(this).data('product'));
            $('#price_item').val($(this).data('price'));
            $('#qty_item').val($(this).data('qty'));
            $('#total_before').val($(this).data('price') * $(this).data('qty'));
            $('#discount_item').val($(this).data('discount'));
            $('#total_item').val($(this).data('total'));
        })

        //fungsi count
        function count_edit_modal() {
            var price = $('#price_item').val()
            var qty = $('#qty_item').val()
            var discount = $('#discount_item').val()

            total_before = price * qty
            $('#total_before').val(total_before)

            total = (price - discount) * qty
            $('#total_item').val(total)

            if (discount == '') {
                $('#discount_item').val(0)
            }
        }

        $(document).on('keyup mouseup', '#price_item, #qty_item, #discount_item', function() {
            count_edit_modal()
        })
        // merubah data yang sudah masuk pada list cart
        $(document).on('click', '#edit_cart', function() {
            var cart_id = $('#cartid_item').val()
            var price = $('#price_item').val()
            var qty = $('#qty_item').val()
            var discount = $('#discount_item').val()
            var total = $('#total_item').val()
            if (price == '' || price < 1) {
                alert('Price cannot be empty!!')
                $('#price_item').focus()
            } else if (qty == '' || qty < 1) {
                alert('Qty cannot be empty!!')
                $('#qty_item').focus()
            } else {
                $.ajax({
                    type: 'POST',
                    url: '<?= site_url('sale/process') ?>',
                    data: {
                        'edit_cart': true,
                        'cart_id': cart_id,
                        'price': price,
                        'qty': qty,
                        'discount': discount,
                        'total': total
                    },
                    dataType: 'json',
                    success: function(result) {
                        if (result.success == true) {
                            $('#cart_table').load('<?= site_url('sale/cart_data') ?>', function() {
                                calculate()
                            })
                            alert('Item cart successfully updated!!')
                            $('#modal-item-edit').modal('hide')
                        } else {
                            alert('Item cart data is not updated!!')
                        }
                    }
                })
            }
        })

        // Kalkulasi
        function calculate() {
            var subtotal = 0;
            $('#cart_table tr').each(function() {
                subtotal += parseInt($(this).find('#total').text())
            })
            isNaN(subtotal) ? $('#sub_total').val(0) : $('#sub_total').val(subtotal)

            var discount = $('#discount').val()
            var grand_total = subtotal - discount
            if (isNaN(grand_total)) {
                $('#grand_total').val(0)
                $('#grand_total2').text(0)
            } else {
                $('#grand_total').val(grand_total)
                $('#grand_total2').text(grand_total)
            }
            var cash = $('#cash').val()
            cash != 0 ? $('#change').val(cash - grand_total) : $('#change').val(0)

            if (discount == '') {
                $('#discount').val(0)
            }
        }
        $(document).on('keyup mouse', '#discount, #cash', function() {
            calculate()
        })
        $(document).ready(function() {
            calculate()
        })

        //proses payment
        $(document).on('click', '#process_payment', function() {
            var customer_id = $('#customer').val()
            var subtotal = $('#sub_total').val()
            var discount = $('#discount').val()
            var grandtotal = $('#grand_total').val()
            var cash = $('#cash').val()
            var change = $('#change').val()
            var note = $('#note').val()
            var date = $('#date').val()
            if (subtotal < 1) {
                alert('No Products selected!!')
                $('#barcode').focus()
            } else if (cash < 1) {
                alert('The amount of cash have not been inputted!!')
                $('#cash').focus()
            } else {
                if (confirm('Are you sure about this transaction proces??')) {
                    $.ajax({
                        type: 'POST',
                        url: '<?= site_url('sale/process') ?>',
                        data: {
                            'process_payment': true,
                            'customer_id': customer_id,
                            'subtotal': subtotal,
                            'discount': discount,
                            'grandtotal': grandtotal,
                            'cash': cash,
                            'change': change,
                            'note': note,
                            'date': date
                        },
                        dataType: 'json',
                        success: function(result) {
                            if (result.success) {
                                alert('Transaction success!!');
                                window.open('<?= site_url('sale/cetak/') ?>' + result.sale_id, '_blank');
                            } else {
                                alert('Transaction failed!!');
                            }
                            location.href = '<?= site_url('sale') ?>'
                        }
                    })
                }
            }
        })
        $(document).on('click', '#cancel_payment', function() {
            if (confirm('Are you sure want to cancel this transaction?')) {
                $.ajax({
                    type: 'POST',
                    url: '<?= site_url('sale/cart_del') ?>',
                    dataType: 'json',
                    data: {
                        'cancel_payment': true
                    },
                    success: function(result) {
                        if (result.success == true) {
                            $('#cart_table').load('<?= site_url('sale/cart_data') ?>', function() {
                                calculate()
                            })
                        }
                    }
                })
                $('#discount').val(0)
                $('#cash').val(0)
                $('#customer').val(0)
                $('#barcode').val('')
                $('#barcode').focus()
            }
        })
    </script>

    <!-- detail konten pada blog -->
    <script>
        $(document).ready(function() {
            $(document).on('click', '#blog_content', function() {
                var content = $(this).data('content');
                $('#content').text(content);
            })
        })
    </script>

    <!-- detail sale report data -->
    <script>
        $(document).on('click', '#detail', function() {
            $('#dtinvoice').text($(this).data('invoice'));
            $('#dtcustomer').text($(this).data('customer'));
            $('#dtdatetime').text($(this).data('date') + ' ' + $(this).data('time'));
            $('#dttotal').text($(this).data('total'));
            $('#dtdiscount').text($(this).data('discount'));
            $('#dtcash').text($(this).data('cash'));
            $('#dtremaining').text($(this).data('remaining'));
            $('#dtgrandtotal').text($(this).data('grandtotal'));
            $('#dtnote').text($(this).data('note'));
            $('#dtcashier').text($(this).data('cashier'));

            function rubah(angka) {
                var reverse = angka.toString().split('').reverse().join(''),
                    ribuan = reverse.match(/\d{1,3}/g);
                ribuan = ribuan.join('.').split('').reverse().join('');
                return ribuan;
            }

            var product = '<table class="table no-margin">'
            product += '<tr><th>Item</th><th>Price</th><th>Qty</th><th>Discount</th><th>Total</th></tr>'
            $.getJSON('<?= site_url('report/sale_product/') ?>' + $(this).data('saleid'), function(data) {
                $.each(data, function(key, val) {
                    product += '<tr><td>' + val.name + '</td><td> Rp.' + rubah(val.price) + '</td><td>' + val.qty + '</td><td>' + val.discount_item + '</td><td> Rp.' + rubah(val.total) + '</td></tr>'
                })
                product += '</table>'
                $('#dtproduct').html(product)
            })
        })
    </script>

</body>

</html>