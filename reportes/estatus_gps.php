	<?php include_once('../template/cabecera.php'); ?>

	<?php include_once('../template/navegador.php'); ?> 

	<?php include_once('../template/sidebar.php'); ?> 

	<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1 class="page-header">
                            <small>Estatus GPS</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <small><i class="fa fa-home fa-2x"></i></small>  <a href="../inicio/index.php">Inicio</a>
                            </li>
                            <li class="active">
                            	<small><i class="fa fa-files-o fa-2x"></i></small><a href="../reportes/reportes.php"> Reportes</a>
                            </li>
                            <li class="active"><small><i class="fa fa-map-marker fa-2x"></i></small> Estatus GPS</li>
                        </ol>
                    </div>
                </div>

                <div class="container-fluid row">
                	<?php include_once('../template/nav_reportes.php') ?>
                </div>
                
                <span class="ir-arriba"><i class="fa fa-chevron-up fa-2x"></i></span>
                <br>

        <?php include_once('../reportes/tabla_estatus_gps.php') ?>

        <?php include_once('../template/footer.php'); ?>