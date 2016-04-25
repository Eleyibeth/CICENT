
	<?php include_once('../template/cabecera.php'); ?>

	<?php include_once('../template/navegador.php'); ?> 

	<?php include_once('../template/sidebar.php'); ?> 

<div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <br>
                        <ol class="breadcrumb">
                            <li class="active">
                                <small><i class="fa fa-home fa-2x"></i></small><a href="../inicio/index.php"> Inicio</a>
                            </li>
                        </ol>
                    </div>
                </div>

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slider-to="3"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="../img/1.JPG" alt="ENT-PDVSA" class="img">
                          <div class="carousel-caption">
                          </div>
                        </div>
                        <div class="item">
                          <img src="../img/2.JPG" alt="ENT-PDVSA" class="img">
                          <div class="carousel-caption">
                          </div>
                        </div>
                        <div class="item">
                          <img src="../img/3.JPG" alt="ENT-PDVSA" class="img">
                          <div class="carousel-caption">
                          </div>
                        </div>
                        <div class="item">
                          <img src="../img/4.JPG" alt="ENT-PDVSA" class="img">
                          <div class="carousel-caption">
                          </div>
                        </div>
                      </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
	<?php include_once('../template/footer.php'); ?>