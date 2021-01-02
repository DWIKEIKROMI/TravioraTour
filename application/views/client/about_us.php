<section>
    <div class="container" style="padding-left: 0px; padding-right: 0px;">
        <div class="" style="margin-top: 135px">
            <img class="img-fluid shadow" src="<?= base_url() ?>assets/img/elements/bannerTipis.jpg" alt="banner">
        </div>
    </div>
</section>
</div>
<section style="margin-top:-230px; margin-bottom:80px; font-family: Montserrat !important;">
    <div class="container">
        <div class="sections">
            <div class="section-title">
                <div class="custom-title-cont">
                    <div class="belakang" style="background: rgba(255, 255, 255, 0); border-color: white;"></div>
                    <div class="depan" style="background: rgba(255, 255, 255, 0); color: white; text-shadow: 2px 2px 5px #0000006e;">
                        <b>ABOUT US</b> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
foreach ($row->result() as $key => $data) { ?>
    <section style="font-family: Montserrat !important;">
        <div class="container">
            <hr style="margin-top:30px ;">
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-90">
                        <span class="wow lightSpeedIn" data-wow-duration="1s" data-wow-delay=".1s"></span>
                    </div>
                </div>
            </div>
            <div class="row text-center ">
                <div class="col-md-12">
                    <p class="jdlbsr"><?= $data->web_name; ?></p>
                </div>
                <div class="col-md-12">
                    <p class="jdlkcl">
                        < <?= $data->status_name; ?>&nbsp>
                    </p>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-8 mb-5">
                    <h3><?= $data->about; ?></h3>
                </div>
                <div class="col-md-2"></div>
            </div>
            <hr style="margin-top:30px ;">
            <div class="row text-center mt-5 mb-5">
                <div class="col-md-12">
                    <h1 class="jdlbsr">Why Use Us?</h1>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <h1 class="jdl" style="margin-bottom: 2px; margin-top: 5px;"><b>200+</b></h1>
                    <h2>
                        < products&nbsp>
                    </h2>
                </div>
                <div class="col">
                    <h1 class="jdl" style="margin-bottom: 2px; margin-top: 5px;"><b>Save</b></h1>
                    <h2>
                        < time & money&nbsp>
                    </h2>
                </div>
                <div class="col">
                    <h1 class="jdl" style="margin-bottom: 2px; margin-top: 5px;"><b>Operator</b></h1>
                    <h2>
                        < experienced&nbsp>
                    </h2>
                </div>
                <div class="col">
                    <h1 class="jdl" style="margin-bottom: 2px; margin-top: 5px;"><b>Tour</b></h1>
                    <h2>
                        < private & public&nbsp>
                    </h2>
                </div>
            </div><br><br><br>
            <div class="row mt-5 mb-5">
                <img class="img-fluid shadow" src="<?= base_url() ?>assets/img/gambarMaps.png">
            </div>
            <div class="row text-center mt-5 mb-5">
                <div class="col-md-12 mt-5">
                    <h1 class="jdlbsr" style="margin-bottom: 5px;">Our Offices</h1>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3"></div>
                <div class="col-md-3" style="text-align: right;">
                    <h1>OFFICE-1</h1>
                    <div class="row pr-4">
                        <h3><?= $data->address1; ?></h3>
                    </div>
                </div>
                <div class="col-md-3" style="text-align: left;">
                    <h1>OFFICE-2</h1>
                    <div class="row pl-4">
                        <h3><?= $data->address2; ?></h3>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3"></div>
                <div class="col-md-3 " style="text-align: right; color: orange;">
                    <h3><?= $data->phone; ?></h3>
                    <h3><?= $data->whatsapp; ?></h3>
                </div>
                <div class="col-md-3" style="text-align: left;  color: orange;">
                    <h3><?= $data->phone; ?></h3>
                    <h3><?= $data->whatsapp; ?></h3>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row text-center" style="color: orange;">
                <div class="col-md-12">
                    <h4 class="text-center">
                        < <?= $data->email1; ?>&nbsp>
                    </h4>
                </div>
                <div class="col-md-12">
                    <h4>
                        < <?= $data->email2; ?>&nbsp>
                    </h4>
                </div>
            </div>
            <div class="row mt-5 pt-5 mb-5"></div>
        </div>
    </section>
<?php } ?>