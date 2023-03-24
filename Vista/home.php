<!DOCTYPE html>
<html lang="en">
<?php 
include 'pages/head.php';
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php
  include 'pages/nav.php';
  ?>

  <!-- Menu De navegacion izquierdo -->
  <?php
  include 'pages/sidebar.php';
  ?>

  <!--Tablero-->
  <div class="content-wrapper">
    <!-- Contenido del tablero -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tablero</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Acceso rapido 1</a></li>
              <li class="breadcrumb-item active"><a href="#">Acceso rapido 2</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Contenido Principal -->
    <section class="content">
      <div class="container-fluid">
        <!-- Cajas -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- Caja de ventas-->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Ventas</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="sales.php" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- Caja Clientes -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px"></sup></h3>

                <p>Total de clientes</p>
              </div>
              <div class="icon">
                <i class="ion ion ion-person"></i>
              </div>
              <a href="customers.php" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- Caja Inventario -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Total inventario</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="inventory.php" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- Ventas hoy -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>$ 6'500.000</h3>

                <p>Utilidad de hoy</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="report.php" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.Cajas -->

        <!-- Menu -->
        <div class="row">
          <!-- Grafico Ventas -->
          <section class="col-lg connectedSortable">
            <!-- Modificar Grafico-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Ventas
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="#">POS</a>.</strong>
    Todos los derechos reservador.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php
include 'pages/plugins.php';
?>
</body>
</html>
