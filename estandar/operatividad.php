
	<?php include_once('../template/cabecera.php'); ?>

	<?php include_once('../template/navegador.php'); ?> 

	<?php include_once('../template/sidebar.php'); ?> 

<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <h1 class="page-header">
                         
                            <small>Sala CICENT Distrito Los Andes </small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <small><i class="fa fa-home fa-2x"></i></small><a href="../inicio/index.php"> Inicio</a>
                            </li>
                            <li class="active">
                                <small><i class="fa fa-tasks fa-2x"></i></small>  Operatividad
                            </li>
                        </ol>
                    </div>
                </div>
                <br>
                
                <div class="container-fluid">
                    <center>
                        <h3><strong> Estatus de unidades en talleres externos DTTO Andes 
                        Actualizado: <br>Fecha: <input type="date">  Hora: <input type="time"></strong></h3>
                        boton
                    </center>
                </div>
                <br>

                <div class="row">
                    <div class="table-responsive container-fluid">
                        <table class=" table table-bordered table-condensed table-hover">
                            <tr>
                                <th colspan="2" class="col-md-4">Sede San Cristobal</th>
                                <th colspan="2" class="col-md-4">Sede LA Fria</th>
                                <th colspan="2" class="col-md-4">Sede El Vigia</th>
                            </tr>
                            <tr style="background-color: #B7B7B7;">
                                <td class="col-md-2">Placa</td>
                                <td class="col-md-2">Estatus de unidad</td>
                                <td class="col-md-2">Placa</td>
                                <td class="col-md-2">Estatus de unidad</td>
                                <td class="col-md-2">Placa</td>
                                <td class="col-md-2">Estatus de unidad</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>

    <?php include_once('../template/footer.php'); ?>