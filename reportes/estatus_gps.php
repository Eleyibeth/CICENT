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

                <div class="row">
                    <div class="table-responsive">
                        <center>
                            <table class=" table table-bordered table-condensed table-hover">
                                <tr align="center">
                                    <th colspan="7" class="text-center col-md-6">Estatus de disposititvos GPS en unidades operativas</th>
                                    
                                    <th colspan="5" class="text-center col-md-6">Resumen unidades (Chuto) DTTO Andes</th>
                                </tr>
                                <tr align="center">
                                    <td rowspan="2">
                                        <th colspan="2" class="col-md-1.5 text-center">El Vigia</th>
                                        <th colspan="2" class="col-md-1.5 text-center">La Fria</th>
                                        <th colspan="2" class="col-md-1.5 text-center">San Cristobal</th>
                                        <th class=""></th>
                                        <th colspan="1" class="col-md-1.5 text-center">EVG</th>
                                        <th colspan="1" class="col-md-1.5 text-center">LFR</th>
                                        <th colspan="1" class="col-md-1.5 text-center">SCR</th>
                                        <th colspan="1" class="col-md-1.5 text-center">Total</th>
                                    </td>
                                </tr>
                                <tr align="center">
                                    <th> GTRMAX </th>
                                    <th> SMSPE </th>
                                    <th> GTRMAX </th>
                                    <th> SMSPE </th>
                                    <th> GTRMAX </th>
                                    <th> SMSPE </th>
                                    <th> Operativo </th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <th>Reporta</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <th>Inperativo</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <th>No reporta</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <th>En fiscalia</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <th>Total</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <th>A desincorporar</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <th>UTC Sin GPS</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <th>Total</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                        </center>
                        <table class="table table-bordered text-center table-condensed">
                            <tr>
                                <th>Sede</th>
                                <th>Monitoreado por</th>
                                <th>Operador</th>
                                <th>Cedula</th>
                                <th>Placa chuto</th>
                                <th>Cisterna segun SCLI</th>
                                <th>Cisterna casada</th>
                                <th>Estatus GPS</th>
                                <th>Ultima transmision</th>
                                <th>SAP</th>
                                <th>Cliente</th>
                                <th>Ubicacion</th>
                                <th>Chuto segun Mant</th>
                                <th>Cisterna segun Mant</th>
                            </tr>
                        </table>
                    </div>
                </div>

        <?php include_once('../template/footer.php'); ?>