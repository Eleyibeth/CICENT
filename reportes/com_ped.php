	<?php include_once('../template/cabecera.php'); ?>

	<?php include_once('../template/navegador.php'); ?> 

	<?php include_once('../template/sidebar.php'); ?> 

	<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h1 class="page-header">
                            <small>Pedidos de Combustible Programados y Despachados </small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <small><i class="fa fa-home fa-2x"></i></small>  <a href="../inicio/index.php">Inicio</a>
                            </li>
                            <li class="active">
                            	<small><i class="fa fa-files-o fa-2x"></i></small><a href="../reportes/reportes.php"> Reportes</a>
                            </li>
                            <li class="active"><small><i class="fa fa-line-chart fa-2x"></i></small> Comportamiento pedidos programados y despachados</li>
                        </ol>
                    </div>
                </div>

                <div class="container-fluid row">
                	<?php include_once('../template/nav_reportes.php') ?>
                </div>
                
                <span class="ir-arriba"><i class="fa fa-chevron-up fa-2x"></i></span>

                <div class="container-fluid">
                    <center> 
                        <div class="row">        
                            <div class="col-lg-6">
                                <label for="fecha"> Ultimos 05 días desde:</label>
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
                                </div>          
                                <div class="col-lg-6">
                                    <label for="fecha"> hasta:</label>
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
                                    </div>
                                </div>
                    </center>
                </div>
                <br>        
                    <div class="row">
                        <div class="dropdown col-md-2">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Distrito
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu scrollable-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li><a href="">Distrito</a></li>
                            <li><a href="#">Andes</a></li>
                            <li><a href="#">Centro</a></li>
                            <li><a href="#">Guayana</a></li>
                            <li><a href="#">Metropolitana</a></li>
                            <li><a href="">Occidente</a></li>
                            <li><a href="">Oriente</a></li>
                          </ul>
                        </div>
                        <div class="dropdown col-md-2">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Negocio
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu scrollable-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Negocio</a></li>
                            <li><a href="#">EE/SS</a></li>
                            <li><a href="#">Electrico</a></li>
                            <li><a href="#">Industrial</a></li>
                            <li><a href="">Avión</a></li>
                            <li><a href="#">Marina</a></li>
                            <li><a href="">Módulo fluvial</a></li>
                            <li><a href="">Módulo integral</a></li>
                            <li><a href="">Módulo pescar</a></li>
                          </ul>
                        </div>
                        <div class="dropdown col-md-2">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Estado
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu scrollable-menu" role="menu" aria-labelledby="dropdownMenu6">
                            <li><a href="#">Estado</a></li>
                            <li><a href="#">Mérida</a></li>
                            <li><a href="#">Táchira</a></li>
                            <li><a href="#">Zulia</a></li>
                          </ul>
                        </div>
                        <div class="dropdown col-md-3">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Municipio
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu scrollable-menu" role="menu" aria-labelledby="dropdownMenu5">
                            <li><a href="#">Municipios</a></li>
                            <li><a href="#">Alberto Adriani</a></li>
                            <li><a href="#">Andres Bello</a></li>
                            <li><a href="#">Antonio Pinto Salinas</a></li>
                            <li><a href="">Arzobispo Chacón</a></li>
                            <li><a href="">Ayacucho</a></li>
                            <li><a href="">Bolivar</a></li>
                            <li><a href="">Campo Elías</a></li>
                            <li><a href="">Caracciolo PArra y Olmedo</a></li>
                            <li><a href="">Cardenal Quintero</a></li>
                            <li><a href="">Cardenas</a></li>
                            <li><a href="">Catatumbo</a></li>
                            <li><a href="">Colón</a></li>
                            <li><a href="">Cordoba</a></li>
                            <li><a href="">Fernandez Feo</a></li>
                            <li><a href="">Francisco Javier Pulgar</a></li>
                            <li><a href="">Garcia de Hevia</a></li>
                            <li><a href="">Guaraque</a></li>
                            <li><a href="">Guasimos</a></li>
                            <li><a href="">Independencia</a></li>
                            <li><a href="">Jauregui</a></li>
                            <li><a href="">Jesús María Semprún</a></li>
                            <li><a href="">José María Vargas</a></li>
                            <li><a href="">Junin</a></li>
                            <li><a href="">Libertad </a></li>
                            <li><a href="">Lobatera</a></li>
                            <li><a href="">Michelena</a></li>
                            <li><a href="">Obispo Ramos de Lora</a></li>
                            <li><a href="">Padre Noguera</a></li>
                            <li><a href="">Páez</a></li>
                            <li><a href="">Panamericano</a></li>
                            <li><a href="">Pedro María Ureña</a></li>
                            <li><a href="">Pueblo Llano</a></li>
                            <li><a href="">Rangel</a></li>
                            <li><a href="">Rivas Dávila</a></li>
                            <li><a href="">Samuel Dario Maldonado</a></li>
                            <li><a href="">San Cristobal</a></li>
                            <li><a href="">Santos Marquina</a></li>
                            <li><a href="">Seboruco</a></li>
                            <li><a href="">Súcre</a></li>
                            <li><a href="">Torbes</a></li>
                            <li><a href="">Tovar</a></li>
                            <li><a href="">Uribante</a></li>
                            <li><a href="">Zea</a></li>

                          </ul>
                        </div>
                        <div class="dropdown col-md-3">
                            <input type="checkbox" name="" value=""> Estrategicos<br>
                            <input type="checkbox" name="" value=""> Críticos
                        </div>
                        <div class="dropdown col-md-2">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Planta
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="">Planta</a></li>
                            <li><a href="#">El Vigia</a></li>
                            <li><a href="#">SAn Lorenzo</a></li>
                            <li><a href="#">Bajo Grande</a></li>
                            <li><a href="#">Maporal</a></li>
                          </ul>
                        </div>
                        <div class="dropdown col-md-2">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Transporte
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                          <li><a href="">Transporte</a></li>
                            <li><a href="#">Propio</a></li>
                            <li><a href="#">Privado</a></li>
                          </ul>
                        </div>
                        <div class="dropdown col-md-2">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Dropdown
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                        <div class="dropdown col-md-3">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Ubicación / Sector
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu scrollable-menu" role="menu" aria-labelledby="dropdownMenu7">
                            <li><a href="#">Ubicación / Sector</a></li>
                            <li><a href="#">Casaco Mérida</a></li>
                            <li><a href="#">Casco SCR</a></li>
                            <li><a href="#">Chiguara</a></li>
                            <li><a href="">Ejido Merida</a></li>
                            <li><a href="">El Anis - Lagunillas</a></li>
                            <li><a href="">Elec EVG</a></li>
                            <li><a href="">Elec LFR</a></li>
                            <li><a href="">Elec MER</a></li>
                            <li><a href="">Elec SCR</a></li>
                            <li><a href="">Elec SDL</a></li>
                            <li><a href="">Frontera Táchira</a></li>
                            <li><a href="">IND LFR</a></li>
                            <li><a href="">IND MER</a></li>
                            <li><a href="">IND SCR</a></li>
                            <li><a href="">IND SDL</a></li>
                            <li><a href="">Montaña Mérida</a></li>
                            <li><a href="">Montaña Táchira</a></li>
                            <li><a href="">Norte Táchira</a></li>
                            <li><a href="">Panamericana Mérida</a></li>
                            <li><a href="">Panamericana Táchira</a></li>
                            <li><a href="">Sur del Lago</a></li>
                            <li><a href="">Sur Táchira</a></li>
                            <li><a href="">Tabay Mérida</a></li>
                            <li><a href="">Tovar Mérida</a></li>
                            <li><a href="">Vía Estanques - Tovar</a></li>
                            <li><a href="">Zea Mérida</a></li>
                          </ul>
                        </div>
                        <div class="dropdown col-md-3">
                            <input type="checkbox" name="" value=""> Sin Placa<br>
                            <input type="checkbox" name="" value=""> Sin Cargar<br>
                            <input type="checkbox" name="" value=""> Por Cerrar
                        </div>
                    </div>
               
        <?php include_once('../reportes/tabla_com_ped.php') ?>

        <?php include_once('../template/footer.php'); ?>