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
                <div class="col-md-9">
                    <?php $no = 1; ?>
                    <?php foreach ($row->result() as $key => $data) : ?>
                        <div class="card mb-3" style="max-width: 720px;">
                            <div class="no-gutters">
                                <div class="col-md-5">
                                    <img src="<?= base_url('assets/img/blog/' . $data->image) ?>" class="card-img" alt="gambar content">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $data->title ?></h5>
                                        <?php
                                        $fullContent = $data->content;
                                        $content = character_limiter($fullContent, 200);
                                        ?>
                                        <p class="card-text"><?= $content ?></p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <a href="<?= site_url('client/blog_detail/' . $data->blog_id); ?>" class="btn btn-primary btn-xs pl-4 pr-4">READ MORE
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>