    <!-- banner -->
    <section>
        <div class="container" style="padding-left: 0px; padding-right: 0px;">
            <div class="" style="margin-top: 135px">
                <img class="img-fluid shadow" src="<?= base_url() ?>assets/img/elements/banner.jpg" alt="banner">
            </div>
        </div>
    </section>
    </div>
    <section>
        <div class="container" style="padding-left: 0px; padding-right: 0px;">
            <div class="sections">
                <div class="section-title">
                    <div class="custom-title-cont">
                        <div class="belakang"></div>
                        <div class="depan">
                            OUR PACKETS </div>
                    </div>
                </div>
                <div class="section-subtitle">
                    Find your own favorite destination. Let’s get it!</div>
            </div>
        </div>
    </section>
    <!-- minim categori -->
    <section>
        <div class="row justify-content-center">
            <div class="card bg-white text-white col-lg-3 my-2 py-3 mx-4 shadow">
                <a href="<?= site_url('client/java'); ?>">
                    <img style="margin-top: 5px; margin-bottom:5px;" src="<?= base_url() ?>assets/img/brands/java.jpg" class="card-img-top" alt="...">
                    <div class="card-img-overlay">
                        <h1 class="card-title text-center " style="color: white; font-size: 45px; margin-top: 130px; text-shadow: 2px 2px 5px #0000006e;">Java</h1>
                    </div>
                </a>
            </div>
            <div class="card bg-white text-white col-lg-3 my-2 py-3 mx-4 shadow">
                <a href="<?= site_url('client/bali'); ?>">
                    <img style="margin-top: 5px; margin-bottom:5px;" src="<?= base_url() ?>assets/img/brands/bali.jpg" class="card-img-top" alt="...">
                    <div class="card-img-overlay">
                        <h1 class="card-title text-center " style="color: white; font-size: 45px; margin-top: 130px; text-shadow: 2px 2px 5px #0000006e;">Bali</h1>
                    </div>
                </a>
            </div>
            <div class="card bg-white text-white col-lg-3 my-2 py-3 mx-4 shadow">
                <a href="<?= site_url('client/lombok'); ?>">
                    <img style="margin-top: 5px; margin-bottom:5px;" src="<?= base_url() ?>assets/img/brands/lombok.jpg" class="card-img-top" alt="...">
                    <div class="card-img-overlay">
                        <h1 class="card-title text-center " style="color: white; font-size: 45px; margin-top: 130px; text-shadow: 2px 2px 5px #0000006e;">Lombok</h1>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container" style="padding-left: 0px; padding-right: 0px;">
            <h1 style="padding-top: 30px;">JAVA TOUR</h1>
        </div>
        <div class="row justify-content-center">
            <?php $no = 1; ?>
            <?php foreach ($row->result() as $key => $data) :
                if ($data->category_id == 1) { ?>
                    <div class="col-lg-2 my-3 mx-2 shadow">
                        <div class="contents pt-3 pb-3 ">
                            <?php if ($data->image != null) { ?>
                                <img style="margin-top: 5px;" src="<?= base_url('assets/img/item/' . $data->image) ?>" class="card-img-top" alt="...">
                            <?php } ?>
                            <p style="margin-top: 10px;"><i class="fa fa-map-marker" style="size: 15px; margin-right: 5px;"></i><?= $data->address; ?></p>
                            <h6 class="text-primary">
                                <a href="<?= site_url('client/item_detail/' . $data->item_id); ?>"> <?= $data->name ?> </a>
                            </h6>
                            <?php
                            $fullOverview = $data->overview;
                            $overview = character_limiter($fullOverview, 50);
                            ?>
                            <p><?= $overview ?></p>
                            <span style="font-size: 12px;" class="pull-left"><i class="fa fa-clock" style="margin-right: 5px; color: #A2A2A2;"></i><?= $data->duration ?></span>
                            <span style="font-size: 16px;" class="text-primary pull-right">
                                <b><?= "Rp " . number_format(($data->price), 0, ',', '.') ?></b>
                            </span><br><br>
                        </div>
                    </div>
            <?php
                }
            endforeach; ?>
        </div>
        <div class="container" style="padding-left: 0px; padding-right: 0px;">
            <h1 style="padding-top: 30px;">BALI TOUR</h1>
        </div>
        <div class="row justify-content-center">
            <?php $no = 1; ?>
            <?php foreach ($row->result() as $key => $data) :
                if ($data->category_id == 2) { ?>
                    <div class="col-lg-2 my-3 mx-2 shadow">
                        <div class="contents pt-3 pb-3 ">
                            <?php if ($data->image != null) { ?>
                                <img style="margin-top: 5px;" src="<?= base_url('assets/img/item/' . $data->image) ?>" class="card-img-top" alt="...">
                            <?php } ?>
                            <p style="margin-top: 10px;"><i class="fa fa-map-marker" style="size: 15px; margin-right: 5px;"></i><?= $data->address; ?></p>
                            <h6 class="text-primary">
                                <a href="<?= site_url('client/item_detail/' . $data->item_id); ?>"> <?= $data->name ?> </a>
                            </h6>
                            <?php
                            $fullOverview = $data->overview;
                            $overview = character_limiter($fullOverview, 50);
                            ?>
                            <p><?= $overview ?></p>
                            <span style="font-size: 12px;" class="pull-left"><i class="fa fa-clock" style="margin-right: 5px; color: #A2A2A2;"></i><?= $data->duration ?></span>
                            <span style="font-size: 16px;" class="text-primary pull-right">
                                <b><?= "Rp " . number_format(($data->price), 0, ',', '.') ?></b>
                            </span><br><br>
                        </div>
                    </div>
            <?php
                }
            endforeach; ?>
        </div>
        <div class="container" style="padding-left: 0px; padding-right: 0px;">
            <h1 class="" style="padding-top: 30px;">LOMBOK TOUR</h1>
        </div>
        <div class="row justify-content-center">
            <?php $no = 1; ?>
            <?php foreach ($row->result() as $key => $data) :
                if ($data->category_id == 3) { ?>
                    <div class="col-lg-2 my-3 mx-2 shadow">
                        <div class="contents pt-3 pb-3 ">
                            <?php if ($data->image != null) { ?>
                                <img style="margin-top: 5px;" src="<?= base_url('assets/img/item/' . $data->image) ?>" class="card-img-top" alt="...">
                            <?php } ?>
                            <p style="margin-top: 10px;"><i class="fa fa-map-marker" style="size: 15px; margin-right: 5px;"></i><?= $data->address; ?></p>
                            <h6 class="text-primary">
                                <a href="<?= site_url('client/item_detail/' . $data->item_id); ?>"> <?= $data->name ?> </a>
                            </h6>
                            <?php
                            $fullOverview = $data->overview;
                            $overview = character_limiter($fullOverview, 50);
                            ?>
                            <p><?= $overview ?></p>
                            <span style="font-size: 12px;" class="pull-left"><i class="fa fa-clock" style="margin-right: 5px; color: #A2A2A2;"></i><?= $data->duration ?></span>
                            <span style="font-size: 16px;" class="text-primary pull-right">
                                <b><?= "Rp " . number_format(($data->price), 0, ',', '.') ?></b>
                            </span><br><br>
                        </div>
                    </div>
            <?php
                }
            endforeach; ?>
        </div>
    </section>