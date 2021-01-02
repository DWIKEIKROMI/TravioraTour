<section style="margin-top: 130px;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div id="carouselExampleIndicators" class="carousel slide shadow" data-ride="carousel"
					 style="background-color: white;">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" style="height: 450px;">
						<div class="carousel-item active">
							<img class="d-block w-100" src="<?php echo base_url('assets/img/item/' . $row->image) ?>"
								 alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?php echo base_url('assets/img/item/' . $row->image2) ?>"
								 alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?php echo base_url('assets/img/item/' . $row->image3) ?>"
								 alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<div class=" btn btn-dark" style="border-radius: 10px;">
							<span class="carousel-control-prev-icon mt-1" aria-hidden="true"></span>
						</div>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<div class=" btn btn-dark" style="border-radius: 10px;">
							<span class="carousel-control-next-icon mt-1" aria-hidden="true"></span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section style="margin-top: 20px;">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="mr-5">
					<p style="color: #0098c7; font-weight: 500; font-size: 30px; font-family: inherit; font-weight: bold; margin-top: 5px; margin-bottom: 1px;"><?= $row->name ?></p>
					<h4><i class="fa fa-map-marker" aria-hidden="true"
						   style="size: 15px; margin-right: 5px; color:darkgray"></i><?= $row->address ?></h4>
					<br>
					<hr>
					<div class="row text-center">
						<div class="col">
							<h4 style="font-weight: 500;font-family: inherit; margin-top: 13px; margin-bottom: 1px;"><b>Duration</b>
							</h4>
							<h5><?= $row->duration; ?></h5>
						</div>
						<div class="col">
							<h4 style="font-weight: 500;font-family: inherit; margin-top: 13px; margin-bottom: 1px;"><b>Tour
									Type</b></h4>
							<h5><?= $row->type_name; ?></h5>
						</div>
						<div class="col">
							<h4 style="font-weight: 500;font-family: inherit; margin-top: 13px; margin-bottom: 1px;"><b>Group
									Size</b></h4>
							<h5><?= $row->groupsize; ?></h5>
						</div>
						<div class="col">
							<h4 style="font-weight: 500;font-family: inherit; margin-top: 13px; margin-bottom: 1px;"><b>Language</b>
							</h4>
							<h5><?= $row->language; ?></h5>
						</div>
					</div>
					<hr>
					<p class="mt-3 mb-2" style="font-size: 22px; font-weight: bold;">Overview</p>
					<div style="font-size: 14px; text-align: justify;"><?= $row->overview ?></div>
				</div>
			</div>
			<div class="col-md-3 mt-4">
				<div class="card text-center" style="border-radius: 5px;">
					<div class="card-header" style="background-color: #0098c7; color: white;">
						<h4 class="pull-left pl-4" style="padding-top: 20px;">from </h4>
						<p class="pull-right pr-2 pt-3"
						   style="color: white; font-weight: 500; font-size: 25px; font-family: inherit; font-weight: bold;"><?= indo_currency($row->price); ?></p>
					</div>
					<form action="<?= base_url() ?>cart/proses" method="post">
						<div class="card-body">
							<h4 class="pull-left">Date</h4>
							<div class="form-group input-group input-group-lg mb-4">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"
																					aria-hidden="true"></i></span>
								<input type="date" name="date" id="date" class="form-control" placeholder="Date"
									   aria-label="Date" aria-describedby="basic-addon1">
								<input type="hidden" name="item_id" value="<?= $row->item_id; ?>">
								<input type="hidden" name="price" value="<?= $row->price; ?>">
							</div>
							<h4 class="pull-left">Person</h4>
							<div class="form-group input-group input-group-lg mb-4">
								<input type="number" id="qty" name="qty" value="1" min="1" class="form-control">
							</div>
							<h4 class="pull-left">Keterangan</h4><br>
							<div class="form-group input-group input-group-lg">
								<h5 class="pull-left">Not for infant</h5>
							</div>
						</div>
						<div class="card-footer text-muted">
							<button type="submit" class="btn btn-primary">Pesan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
