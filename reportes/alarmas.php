	<?php include_once('../template/cabecera.php'); ?>

	<?php include_once('../template/navegador.php'); ?> 

	<?php include_once('../template/sidebar.php'); ?> 

	<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1 class="page-header">
                            <small>CICENT Distrito Los Andes </small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <small><i class="fa fa-home fa-2x"></i></small>  <a href="../inicio/index.php">Inicio</a>
                            </li>
                            <li class="active">
                            	<small><i class="fa fa-files-o fa-2x"></i></small><a href="../reportes/reportes.php"> Reportes</a>
                            </li>
                            <li class="active"><small><i class="fa fa-bell fa-2x"></i></small> Alarmas</li>
                        </ol>
                    </div>
                </div>

                <div class="container-fluid row">
                	<?php include_once('../template/nav_reportes.php') ?>
                </div>

                <div class="container-fluid">
                    <center>
                        <h3 class="h31"><strong> Reporte de alarmas de exceso de velocidad según sistema GTRMAX en distrito Andes </strong></h3>
                    </center>
                </div>
                <br>
                
                <div class="row">
                    <div class="table-responsive">
                        <div class="col-md-3">
                            <table class="table table-bordered  table-condensed table-hover">
                                <tr align="center">
                                    <th colspan="4" class="text-center" style="background-color: #FF0000; color: #fff;">ENT Propio El Vigia</th>
                                </tr>
                                <tr align="center">
                                    <th>Total unidades con alertas:</th>
                                    <td colspan="2"></td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <th>Promedio de velocidad de unidades:</th>
                                    <td colspan="2"></td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <th>Unidad con maximo de alertas:</th>
                                    <td colspan="2"></td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <th>Unidad con velocidad maxima alcanzada:</th>
                                    <td colspan="2"></td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <th rowspan="2">Estatus de unidades</th>
                                    <td>Reporta</td>
                                    <td>No reporta</td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                
                            </table>
                            <br>

                            <table class="table table-bordered  table-condensed table-hover">
                                <tr>
                                    <th class="text-center" style="background-color: #FF0000; color: #fff;">Acciones tomadas sobre alarmas</th>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                            </table>
                            <br>
                            

                                <table class="table table-bordered  table-condensed table-hover">
                                    <th class="text-center" style="font-size: 11.5px;">Operador</th>
                                    <th class="text-center" style="font-size: 11.5px;">Unidad</th>
                                    <th class="text-center" style="font-size: 11.5px;">N° Alertas</th>
                                    <th class="text-center" style="font-size: 11.5px;">Max Veloc</th>
                                    <th class="text-center" style="font-size: 11.5px;">Sede</th>
                                </table>
                            
                        </div>
                        
                        <div class="col-md-3">
                            <table class="table table-bordered  table-condensed table-hover">
                                <tr align="center">
                                    <th colspan="4" class="text-center">ENT Propio San Cristobal</th>
                                </tr>
                                <tr align="center">
                                    <th>Total unidades con alertas:</th>
                                    <td colspan="2"></td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <th>Promedio de velocidad de unidades:</th>
                                    <td colspan="2"></td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <th>Unidad con maximo de alertas:</th>
                                    <td colspan="2"></td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <th>Unidad con velocidad maxima alcanzada:</th>
                                    <td colspan="2"></td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <th rowspan="2">Estatus de unidades</th>
                                    <td>Reporta</td>
                                    <td>No reporta</td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                
                            </table>
                            <br>
                            
                            <table class="table table-bordered  table-condensed table-hover">
                                <tr>
                                    <th class="text-center">Acciones tomadas sobre alarmas</th>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                            </table>
                            <br>
                            
                                <table class="table table-bordered  table-condensed table-hover">
                                    <th class="text-center" style="font-size: 11.5px;">Operador</th>
                                    <th class="text-center" style="font-size: 11.5px;">Unidad</th>
                                    <th class="text-center" style="font-size: 11.5px;">N° Alertas</th>
                                    <th class="text-center" style="font-size: 11.5px;">Max Veloc</th>
                                    <th class="text-center" style="font-size: 11.5px;">Sede</th>
                                </table>
                            
                        </div>
                        
                        <div class="col-md-3">
                            <table class="table table-bordered  table-condensed table-hover">
                                <tr align="center">
                                    <th colspan="4" class="text-center" >ENT Propio El Vigia</th>
                                </tr>
                                <tr align="center">
                                    <th>Total unidades con alertas:</th>
                                    <td colspan="2"></td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <th>Promedio de velocidad de unidades:</th>
                                    <td colspan="2"></td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <th>Unidad con maximode alertas:</th>
                                    <td colspan="2"></td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <th>Unidad con velocidad maxima alcanzada:</th>
                                    <td colspan="2"></td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <th rowspan="2">Estatus de unidades</th>
                                    <td>Reporta</td>
                                    <td>No reporta</td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                
                            </table>
                            <br>
                            
                            <table class="table table-bordered  table-condensed table-hover">
                                <tr>
                                    <th class="text-center" >Acciones tomadas sobre alarmas</th>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                            </table>
                            <br>
                            

                                <table class="table table-bordered  table-condensed table-hover">
                                    <th class="text-center" style="font-size: 11.5px;">Operador</th>
                                    <th class="text-center" style="font-size: 11.5px;">Unidad</th>
                                    <th class="text-center" style="font-size: 11.5px;">N° Alertas</th>
                                    <th class="text-center" style="font-size: 11.5px;">Max Veloc</th>
                                    <th class="text-center" style="font-size: 11.5px;">Sede</th>
                                </table>
                            
                        </div>
                        
                        <div class="col-md-3">
                            <table class="table table-bordered  table-condensed table-hover">
                                <tr align="center">
                                    <th colspan="4" class="text-center">ENT Propio El Vigia</th>
                                </tr>
                                <tr align="center">
                                    <th>Total unidades con alertas:</th>
                                    <td colspan="2"></td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <th>Promedio de velocidad de unidades:</th>
                                    <td colspan="2"></td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <th>Unidad con maximode alertas:</th>
                                    <td colspan="2"></td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <th>Unidad con velocidad maxima alcanzada:</th>
                                    <td colspan="2"></td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <th rowspan="2">Estatus de unidades</th>
                                    <td>Reporta</td>
                                    <td>No reporta</td>
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                
                            </table>
                            <br>
                            
                            <table class="table table-bordered  table-condensed table-hover">
                                <tr>
                                    <th class="text-center">Acciones tomadas sobre alarmas</th>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                            </table>
                            <br>
                            

                                <table class="table table-bordered  table-condensed table-hover">
                                    <th class="text-center" style="font-size: 11.5px;">Operador</th>
                                    <th class="text-center" style="font-size: 11.5px;">Unidad</th>
                                    <th class="text-center" style="font-size: 11.5px;">N° Alertas</th>
                                    <th class="text-center" style="font-size: 11.5px;">Max Veloc</th>
                                    <th class="text-center" style="font-size: 11.5px;">Sede</th>
                                </table>
                            
                        </div>
                    </div>
                <span class="ir-arriba"><i class="fa fa-chevron-up fa-2x"></i></span>
                </div>

                
        <?php include_once('../template/footer.php'); ?>