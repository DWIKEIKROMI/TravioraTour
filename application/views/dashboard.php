<section class="content-header">
  <h1>Dashboard
    <small>Control Panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>
    <?php if ($this->fungsi->user_login()->level == 1) : ?>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3><?= $this->fungsi->count_user() ?></h3>

            <p>User Activ</p>
          </div>
          <div class="icon">
            <i class="ion ion-person" style="color: #ffffffcb;"></i>
          </div>
          <a href="<?= site_url('user'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3><?= $this->fungsi->count_user2() ?></h3>

            <p>User Non Activ</p>
          </div>
          <div class="icon">
            <i class="ion ion-person" style="color: #ffffffcb;"></i>
          </div>
          <a href="<?= site_url('userNonAktif'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    <?php endif; ?>
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?= $this->fungsi->count_customer() ?></h3>

          <p>Customers</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-stalker" style="color: #ffffffcb;"></i>
        </div>
        <a href="<?= site_url('customer'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?= $this->fungsi->count_sale_new() ?></h3>

          <p>New Orders</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag" style="color: #ffffffcb;"></i>
        </div>
        <a href="<?= site_url('report/sale'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-orange">
        <div class="inner">
          <h3><?= $this->fungsi->count_item() ?></h3>

          <p>Tour Items</p>
        </div>
        <div class="icon">
          <i class="ion ion-grid" style="color: #ffffffcb;"></i>
        </div>
        <a href="<?= site_url('item'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?= $this->fungsi->count_sale() ?></h3>

          <p>Tour Sales</p>
        </div>
        <div class="icon">
          <i class="fa fa-pie-chart" style="color: #ffffffcb;"></i>
        </div>
        <a href="<?= site_url('report/sale'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-blue">
        <div class="inner">
          <h3><?= $this->fungsi->count_armada() ?></h3>

          <p>Armada</p>
        </div>
        <div class="icon">
          <i class="fa fa-truck" style="color: #ffffffcb;"></i>
        </div>
        <a href="<?= site_url('armada'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <?php
    foreach ($row->result() as $key => $data) {
      $nama_produk[]  = $data->name;
      $stock_produk[] = intval($data->stock);
    }
    ?>
    <div class="col-lg-12">
      <figure class="highcharts-figure">
        <div id="data-produk-item"></div>
      </figure>
    </div>
  </div>
  <!-- /.row -->
  <script src="<?= base_url() ?>assets/HightCharts/highcharts.js"></script>
  <script src="<?= base_url() ?>assets/HightCharts/exporting.js"></script>
  <script src="<?= base_url() ?>assets/HightCharts/export-data.js"></script>
  <script src="<?= base_url() ?>assets/HightCharts/accessibility.js"></script>
  <script type="text/javascript">
    Highcharts.chart('data-produk-item', {
      chart: {
        type: 'area'
      },
      title: {
        text: 'Data Stock Produk Item'
      },
      subtitle: {
        text: 'www.traviora.com'
      },
      xAxis: {
        categories: <?= json_encode($nama_produk); ?>,
        tickmarkPlacement: 'on',
        title: {
          enabled: false
        }
      },
      yAxis: {
        title: {
          text: 'QTY'
        },
        labels: {
          formatter: function() {
            return this.value;
          }
        }
      },
      tooltip: {
        split: false,
        valueSuffix: ''
      },
      plotOptions: {
        area: {
          stacking: 'normal',
          lineColor: '#666666',
          lineWidth: 1,
          marker: {
            lineWidth: 1,
            lineColor: '#666666'
          }
        }
      },
      series: [{
        name: 'Stock',
        data: <?= json_encode($stock_produk); ?>
      }]

    });
  </script>
</section>