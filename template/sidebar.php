            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           

            <div class="collapse navbar-collapse navbar-ex-collapse ">
                <ul class="nav navbar-nav side-nav" style="background-color: #E9E9E9;">
                    <li>
                        <a href="../inicio/index.php"><i class="fa fa-home fa-2x"></i> Inicio </a>
                    </li>
                    <li>
                        <a href="../cargar_reportes/cargar_info.php" ><i class="fa fa-cloud-upload fa-2x"></i> Cargar Información </a>
                    </li>
                    <li>                        
                        <a href="javascript:;" data-toggle="collapse" data-target="#reportes"><i class="fa fa-files-o fa-2x"></i> Reportes <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="reportes" class="collapse">
                                <li>
                                    <a href="../reportes/pedidos.php"><i class="fa fa-table"></i> Pedidos </a>
                                </li>
                                <li>
                                    <a href="../reportes/rpte_operacional.php"><i class="fa fa-lightbulb-o"></i> Reporte Operacional </a>
                                </li>
                                <li>
                                    <a href="../reportes/rpte_cliente.php"><i class="fa fa-list-alt"></i> Reporte Cliente </a>
                                </li>
                                <li>
                                    <a href="../reportes/monitoreo.php"><i class="fa fa-laptop"></i> Monitoreo </a>
                                </li>
                                <li>
                                    <a href="../reportes/com_ped.php"><i class="fa fa-line-chart"></i> Comp Ped</a>
                                </li>
                                <li>
                                    <a href="../reportes/alarmas.php"><i class="fa fa-bell"></i> Alarmas </a>
                                </li>
                                <li>
                                    <a href="../reportes/estatus_gps.php"><i class="fa fa-map-marker"></i> Estatus GPS </a>
                                </li>
                            </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#estadisticas"><i class="fa fa-area-chart fa-2x"></i> Estadisticas <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="estadisticas" class="collapse">
                            <li>
                                <a href="../estadisticas/diaria.php"><i class="fa fa-calendar"></i> Diaria </a>
                            </li>
                            <li>
                                <a href="../estadisticas/semanal.php"><i class="fa fa-pie-chart"></i> Semanal </a>
                            </li>
                            <li>
                                <a href="../estadisticas/mensual.php"><i class="fa fa-bar-chart"></i> Mensual </a>
                            </li>
                            <li>
                                <a href="../estadisticas/anual.php"><i class="fa fa-line-chart"></i> Anual </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#camiontanque"><i class="fa fa-database fa-2x"></i> Data <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="camiontanque" class="collapse">
                            <li>
                                <a href="../estandar/clientes.php"><i class="fa fa-users"></i> Clientes</a>
                            </li>
                            <li>
                                <a href="../estandar/certificacion.php"><i class="fa fa-truck"></i> Certificación</a>
                            </li>
                            <li>
                                <a href="../estandar/chutos.php"><i class="fa fa-bus"></i> Chutos</a>
                            </li>
                            <li>
                                <a href="../estandar/operadores.php"><i class="fa fa-male"></i> Operadores </a>
                            </li>
                            <li>
                                <a href="../estandar/operatividad.php"><i class="fa fa-tasks"></i> Operatividas</a>
                            </li>
                        </ul>
                    </li>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        



            <?php include_once('../template/footer.php'); ?>