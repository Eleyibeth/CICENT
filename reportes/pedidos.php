    <?php include_once('../template/cabecera.php'); ?>

    <?php include_once('../template/navegador.php'); ?> 

    <?php include_once('../template/sidebar.php') ?>

    <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h1 class="page-header">
                            <small>Reporte Operacional </small>
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

                <div class="row">        
                    <div class="col-lg-8">
                      <label for="fecha"> Día:</label>
                        <select class="scrollable-menu">
                          <option value="#"></option>
                          <option value="#">Lunes</option>
                          <option value="#">Martes</option>
                          <option value="#">Miercoles</option>
                          <option value="#">Jueves</option>
                          <option value="#">Viernes</option>
                          <option value="#">Sabado</option>
                          <option value="#">Domingo</option>
                        </select>
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
                    <div class="col-lg-4">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Consultar...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <br>
                <div class="table-responsive">
                    <center>
                        <table class="table table-bordered text-center table-condensed table-hover">
                            <tr>
                                <td><label for="id1">Total Prog.</label>  <input type="text"id="id1"></td>
                                <td><label for="id2">Prog. Safec.</label>  <input type="text"id="id2"></td>
                                <td><label for="id3">Prog. M.I</label>  <input type="text"id="id3"></td>
                                <td><label for="id4">Prog. Merida</label>  <input type="text"id="id4"></td>
                            </tr>
                            <tr>
                                <td><label for="id1">Total Prog.</label>  <input type="text"id="id1"></td>
                                <td><label for="id2">Prog. Safec.</label>  <input type="text"id="id2"></td>
                                <td><label for="id3">Prog. M.I</label>  <input type="text"id="id3"></td>
                                <td><label for="id4">Prog. Merida</label>  <input type="text"id="id4"></td>
                            </tr>
                            <tr>
                                <td><label for="id1">Total Prog.</label>  <input type="text"id="id1"></td>
                                <td><label for="id2">Prog. Safec.</label>  <input type="text"id="id2"></td>
                                <td><label for="id3">Prog. M.I</label>  <input type="text"id="id3"></td>
                                <td><label for="id4">Prog. Merida</label>  <input type="text"id="id4"></td>
                            </tr>
                            <tr>
                                <td><label for="id1">Total Prog.</label>  <input type="text"id="id1"></td>
                                <td><label for="id2">Prog. Safec.</label>  <input type="text"id="id2"></td>
                                <td><label for="id3">Prog. M.I</label>  <input type="text"id="id3"></td>
                                <td><label for="id4">Prog. Merida</label>  <input type="text"id="id4"></td>
                            </tr>
                        </table>
                    </center>
                </div>

                <?php include_once('../reportes/tabla_pedidos.php') ?>
                
                          
        <?php include_once('../template/footer.php'); ?>