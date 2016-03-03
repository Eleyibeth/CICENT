	<?php include_once('../template/cabecera.php'); ?>

	<?php include_once('../template/navegador.php'); ?> 

	<?php include_once('../template/sidebar.php'); ?> 

	<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1 class="page-header">
                            <small>Reporte de Monitoreo de Entradas y Salidas de U.T.C. Programadas en DTTO Andes </small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <small><i class="fa fa-home fa-2x"></i></small>  <a href="../inicio/index.php">Inicio</a>
                            </li>
                            <li class="active">
                            	<small><i class="fa fa-files-o fa-2x"></i></small><a href="../reportes/reportes.php"> Reportes</a>
                            </li>
                            <li class="active"><small><i class="fa fa-laptop fa-2x"></i></small> Monitoreo</li>
                        </ol>
                    </div>
                </div>

                <div class="container-fluid row">
                	<?php include_once('../template/nav_reportes.php') ?>
                </div>
                
                <span class="ir-arriba"><i class="fa fa-chevron-up fa-2x"></i></span>

                <div>fecha</div>
                <br>
                
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-bordered  table-condensed table-hover text-center">
                            <tr>
                                <th>Planta</th>
                                <th>Sede</th>
                                <th>Transporte</th>
                                <th>Pedido</th>
                                <th>Nombre del cliente</th>
                                <th>Placa chuto</th>
                                <th>Entrada a planta</th>
                                <th>Hora de carga segun SCLI</th>
                                <th>Salida de planta</th>
                                <th>Entrada a cliente</th>
                                <th>Salida del cliente</th>
                                <th>Permanencia en el cliente</th>
                                <th>Tiempo de viaje desde planta</th>
                            </tr>
                        </table>
                    </div>
                </div>


        <?php include_once('../template/footer.php'); ?>