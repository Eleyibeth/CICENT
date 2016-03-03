
    <?php include_once('../template/cabecera.php'); ?>

    <?php include_once('../template/navegador.php'); ?> 

    <?php include_once('../template/sidebar.php'); ?> 

    <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Cargar Información SAP</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <small><i class="fa fa-home fa-2x"></i></small><a href="../inicio/index.php"> Inicio</a>
                            </li>
                            <li class="active">
                                <small><i class="fa fa-cloud-upload fa-2x"></i></small><a href="../cargar_reportes/cargar_info.php"> Cargar Información</a> 
                            </li>
                            <li class="active">
                                <small><i class="fa fa-file-excel-o fa-2x"></i></small> SAP
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="container-fluid">
                    <?php include_once('../template/nav_carg_info.php') ?>
                    
                    <br>

                    <div class="container-fluid row">

                        <form action="" method="">

                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <input type="image"  name="" src="../img/azul.jpg" alt="logo_upload_scli" class="img-circle img-responsive center-block">

                                <br>
                                
                                <h2 class="text-center"><small>Listas de entregas Gral: Entrega Salida</small><br>VL06F
                                </h2>

                                <br>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <input type="image"  name="" src="../img/azul.jpg" alt="logo_upload_scli" class="img-circle img-responsive center-block">

                                <br>
                                
                                <h2 class="text-center"><small>Monitor de Confirmación de carga</small><br>Z0RLCC
                                </h2>

                                <br>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <input type="image"  name="submit" value="" src="../img/azul.jpg" alt="logo_upload_scli" class="img-circle img-responsive center-block">

                                <br>
                                
                                <h2 class="text-center"><small>Monitoreo Pedidos Enviados a SCLI/</small><br>Z0RLSCLIC
                                </h2>

                                <br>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
           </div>
            <!-- /#wrapper -->
    <?php include_once('../template/footer.php'); ?>