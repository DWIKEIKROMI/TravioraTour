<!--baner-->
<section>
    <div class="container" style="padding-left: 0px; padding-right: 0px;">
        <div class="" style="margin-top: 135px">
            <img class="img-fluid shadow" src="<?= base_url() ?>assets/img/elements/bannerTipis.jpg" alt="banner">
        </div>
    </div>
</section>
</div>
<section style="margin-top:-230px; margin-bottom:90px;">
    <div class="container">
        <div class="sections">
            <div class="section-title">
                <div class="custom-title-cont">
                    <div class="belakang" style="background: rgba(255, 255, 255, 0); border-color: white;"></div>
                    <div class="depan" style="background: rgba(255, 255, 255, 0); color: white; text-shadow: 2px 2px 5px #0000006e;">
                        <b>BLOG TRAVIORA</b> </div>
                </div>
            </div>
            <!-- <div class="section-subtitle">
                Find your own favorite destination. Let’s get it!</div> -->
        </div>
    </div>
</section>
<!-- content -->
<section>
    <div class="contain">
        <div class="container">
            <hr>
            <div class="row pt-3">
                <div class="col-md-9">
                    <img src="<?= base_url('assets/img/blog/' . $row->image) ?>" class="card-img" alt="gambar content">
                    <div class="mt-4">
                        <hr>
                    </div>
                    <h1><?= $row->title ?></h1>
                    <hr>
                    <h4 class="mb-5"><?= $row->created ?></h4>
                    <h4 class="pb-5"><?= $row->content ?></h4>
                    <div class="mt-5" style="border: 1px solid #D7DCE3; border-radius: 5px;">
                        <div class="row mt-4 mb-4 ml-3">
                            <div class="col-md-1"><i class="fa fa-user-circle" aria-hidden="true" style="height: 45px; width: 45px;"></i></div>
                            <div class="col-md-11 ">
                                <h5>Created by:</h5>
                                <h2><b><?= $row->writer ?></b></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class=" pt-3 mb-3">
                        <a class="navbar-brand" href="<?= site_url('client/home'); ?>">
                            <img src="<?= base_url() ?>assets/img/Logo.png" alt="Logo Traviora" height="70%">
                        </a>
                    </div> <br><br>
                    <div class="mt-5 mb-5">
                        <h4 style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Tour providers who have been in tourism since 2013 in Indonesian territory. We have hundreds of tours that can fill your vacation. We keep working to make tourists easier to book a tour.</h4>
                    </div>
                    <div>
                        <h3><b>Destinations</b>
                            <hr>
                        </h3>
                        <h4>
                            <ul>
                                <li class="mb-3">
                                    <a href="<?= site_url('client/bali'); ?>" style="color: orange;">All tour in Bali</a>
                                    <ul>
                                        <li><a style="color: orange;" href="#">Bali Island</a></li>
                                        <li><a style="color: orange;" href="#">Nusa Penida</a></li>
                                        <li><a style="color: orange;" href="#">Nusa Lembongan</a></li>
                                    </ul>
                                </li>
                                <li class="mb-3">
                                    <a href="<?= site_url('client/java'); ?>" style="color: orange;">All tour in Java</a>
                                    <ul>
                                        <li><a style="color: orange;" href="#">Mount Bromo</a></li>
                                        <li><a style="color: orange;" href="#">Banyuwangi</a></li>
                                        <li><a style="color: orange;" href="#">Malang</a></li>
                                        <li><a style="color: orange;" href="#">Yogyakarta</a></li>
                                    </ul>
                                </li>
                                <li class="mb-3">
                                    <a href="<?= site_url('client/lombok'); ?>" style="color: orange;">All tour in Lombok</a>
                                    <ul>
                                        <li><a style="color: orange;" href="#">Lombok Island</a></li>
                                        <li><a style="color: orange;" href="#">Gili Island</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>