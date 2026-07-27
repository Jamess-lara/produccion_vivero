<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><i class="fas fa-seedling text-success mr-2"></i>Vivero de Plantas - Panel Principal</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo $rowNumCompras['num'] ?? 0; ?></h3>
                            <p>Total Compras Registradas</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="panel.php?modulo=compras" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php echo $rowNumInsumos['num'] ?? 0; ?></h3>
                            <p>Insumos Registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <a href="panel.php?modulo=insumos" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php echo $rowNumProveedores['num'] ?? 0; ?></h3>
                            <p>Proveedores Activos</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <a href="panel.php?modulo=proveedores" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3><?php echo '$' . number_format($rowActual['total'] ?? 0, 2); ?></h3>
                            <p>Compras Mes Actual</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <a href="panel.php?modulo=generar-compra" class="small-box-footer">Nueva Compra <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-chart-bar mr-1"></i> Histórico de Compras por Mes</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart_div_compras" style="height: 400px; width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div><!-- /.content-wrapper -->

<script type="text/javascript">
    if (typeof google !== 'undefined' && google.charts) {
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
    }

    function drawChart() {
        var data = google.visualization.arrayToDataTable(<?php echo json_encode($datosCompra); ?>);

        var options = {
            title: 'Resumen de Compras por Mes',
            curveType: 'function',
            legend: { position: 'bottom' },
            colors: ['#28a745'],
            vAxis: { format: 'currency' }
        };

        var chartContainer = document.getElementById('chart_div_compras');
        if (chartContainer) {
            var chart = new google.visualization.ColumnChart(chartContainer);
            chart.draw(data, options);
        }
    }
</script>