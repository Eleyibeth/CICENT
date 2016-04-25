
    <?php include_once('../template/cabecera.php'); ?>

    <?php include_once('../template/navegador.php'); ?> 

    <?php include_once('../template/sidebar.php'); ?> 

    <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <small>Cargar Información Presinto </small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <small><i class="fa fa-home fa-2x"></i></small><a href="../inicio/index.php"> Inicio</a>
                            </li>
                            <li class="active">
                                <small><i class="fa fa-cloud-upload fa-2x"></i></small><a href="../cargar_reportes/cargar_info.php"> Cargar Información</a> 
                            </li>
                            <li class="active">
                                <small><i class="fa fa-file-excel-o fa-2x"></i></small> PRE
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="container-fluid">
                    <?php include_once('../template/nav_carg_info.php') ?>
                    
                    <br>

                    <div class="container-fluid row">

                        <form action="" method="">

                            <div class="col-md-12">
                                <input type="image"  name="" src="../img/verde.jpg" alt="logo_upload_scli" class="img-circle img-responsive center-block">

                                <br>
                                
                                <h2 class="text-center"><small>Cargar Archivo del Presinto</small><br>ALAR-PRE</h2>

                                <br>
                                <br>
                                <div class="boton">
                                    <input type="submit" value="Enviar" class="btn btn-danger btn-lg btn-block active">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
           </div>
            <!-- /#wrapper -->
    <?php include_once('../template/footer.php'); ?>