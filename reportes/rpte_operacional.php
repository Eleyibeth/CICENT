  <?php include_once('../template/cabecera.php'); ?>

  <?php include_once('../template/navegador.php'); ?> 

  <?php include_once('../template/sidebar.php'); ?> 

  <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1 class="page-header">
                            <small>Reporte Operacional del Distrito Andes </small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <small><i class="fa fa-home fa-2x"></i></small>  <a href="../inicio/index.php">Inicio</a>
                            </li>
                            <li class="active">
                              <small><i class="fa fa-files-o fa-2x"></i></small><a href="../reportes/reportes.php"> Reportes</a>
                            </li>
                            <li class="active"><small><i class="fa fa-lightbulb-o fa-2x"></i></small> Reporte operacional</li>
                        </ol>
                    </div>
                </div>

                <div class="container-fluid row">
                    <?php include_once('../template/nav_reportes.php') ?>
                </div>
                
                <span class="ir-arriba"> <i class="fa fa-chevron-up fa-2x"></i></span>
                
                <div class="row">        
                    <div class="col-lg-8">
                       <label for="fecha"> Fecha:</label>
                           <select class="scrollable-menu">
                              <option value="#">DD</option>
                              <option value="">1</option>
                              <option value="">2</option>
                              <option value="">3</option>
                              <option value="">4</option>
                              <option value="">5</option>
                              <option value="">6</option>
                              <option value="">7</option>
                              <option value="">8</option>
                              <option value="">9</option>
                              <option value="">10</option>
                              <option value="">11</option>
                              <option value="">12</option>
                              <option value="">13</option>
                              <option value="">14</option>
                              <option value="">15</option>
                              <option value="">16</option>
                              <option value="">17</option>
                              <option value="">18</option>
                              <option value="">19</option>
                              <option value="">20</option>
                              <option value="">21</option>
                              <option value="">22</option>
                              <option value="">23</option>
                              <option value="">24</option>
                              <option value="">25</option>
                              <option value="">26</option>
                              <option value="">27</option>
                              <option value="">28</option>
                              <option value="">29</option>
                              <option value="">30</option>
                              <option value="">31</option>
                            </select>
                            <select class="scrollable-menu">
                              <option value="#">MM</option>
                              <option value="">Enero</option>
                              <option value="">Febrero</option>
                              <option value="">Marzo</option>
                              <option value="">Abril</option>
                              <option value="">Mayo</option>
                              <option value="">Junio</option>
                              <option value="">Julio</option>
                              <option value="">Agosto</option>
                              <option value="">Septiembre</option>
                              <option value="">Octubre</option>
                              <option value="">Noviembre</option>
                              <option value="">Diciembre</option>
                            </select>
                            <select class="scrollable-menu">
                              <option value="#">AA</option>
                              <option value="">2000</option>
                              <option value="">2001</option>
                              <option value="">2002</option>
                              <option value="">2003</option>
                              <option value="">2004</option>
                              <option value="">2005</option>
                              <option value="">2006</option>
                              <option value="">2007</option>
                              <option value="">2008</option>
                              <option value="">2009</option>
                              <option value="">2010</option>
                              <option value="">2011</option>
                              <option value="">2012</option>
                              <option value="">2013</option>
                              <option value="">2014</option>
                              <option value="">2015</option>
                              <option value="">2016</option>
                              <option value="">2017</option>
                              <option value="">2018</option>
                              <option value="">2019</option>
                              <option value="">2020</option>
                              <option value="">2021</option>
                              <option value="">2022</option>
                              <option value="">2023</option>
                            </select>
                    </div><!-- /.col-lg-6 -->
                </div>
              <br>
<?php include_once('../reportes/tabla_rpt_operacional.php') ?>

<?php include_once('../template/footer.php'); ?>
