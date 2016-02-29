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
                            <li class="active"><small><i class="fa fa-table fa-2x"></i></small> Pedidos </li>
                        </ol>
                    </div>
                </div>

                <div class="container-fluid row">
                    <?php include_once('../template/nav_reportes.php') ?>
                </div>
                
                <span class="ir-arriba"><i class="fa fa-chevron-up fa-2x"></i></span>

                <div class="container-fluid">
                    <center>
                        <h3 class="h3"><strong> Reporte operacional del distrito Andes </strong></h3>
                    </center>
                </div>

                <div>fecha</div>
                <br>
                <div class="table-responsive">
                    <center>
                    <table class="table table-bordered text-center table-condensed table-hover">
                        <tr>
                            <td>Total Prog. <input type="text"></td>
                            <td>Prog. Safec. <input type="text"></td>
                            <td>Prog. M.I <input type="text"></td>
                            <td>Prog. Merida <input type="text"></td>
                        </tr>
                        <tr>
                            <td>Total Desp. <input type="text"></td>
                            <td>Desp. Safec. <input type="text"></td>
                            <td>Desp. M.I <input type="text"></td>
                            <td>Desp. Merida <input type="text"></td>
                        </tr>
                        <tr>
                            <td>Total Trans. <input type="text"></td>
                            <td>Trans. Safec <input type="text"></td>
                            <td>Trans. M.I <input type="text"></td>
                            <td>Trans. Merida <input type="text"></td>
                        </tr>
                        <tr>
                            <td>Total Lleg. <input type="text"></td>
                            <td>Lleg. Safec. <input type="text"></td>
                            <td>Lleg. M.I <input type="text"></td>
                            <td>Lleg. Merida <input type="text"></td>
                        </tr>
                    </table>
                    </center>
                </div>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center table-hover">
                            <tr>
                                <th>N°</th>
                                <th>Planta</th>
                                <th>Sede</th>
                                <th>Número Pedido</th>
                                <th>Código cliente</th>
                                <th>Nombre cliente</th>
                                <th>Tipo cliente</th>
                                <th>Nombre transporte</th>
                                <th>Nombre conductor</th>
                                <th>Cedula conductor</th>
                                <th>Tipo transporte</th>
                                <th>Placa chuto</th>
                                <th>Placa cisterna</th>
                                <th>95</th>
                                <th>91</th>
                                <th>Diesel</th>
                                <th>Jeet-A1</th>
                                <th>Kerosene</th>
                                <th>Tot vol</th>
                                <th>Observacón</th>
                                <th>Hora carga P/D</th>
                                <th>Chuto anterior</th>
                                <th>Estatus GPS</th>
                                <th>Ubicación</th>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>


                        </table>
                    </div>

                
        <?php include_once('../template/footer.php'); ?>