
	<?php include_once('../template/cabecera.php'); ?>

	<?php include_once('../template/navegador.php'); ?> 

	<?php include_once('../template/sidebar.php'); ?> 

	<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <h1 class="page-header"> 
                            <small>Mensual</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <small><i class="fa fa-home fa-2x"></i></small><a href="../inicio/index.php"> Inicio</a>
                            </li>
                            <li class="active">
                                <small><i class="fa fa-area-chart fa-2x"></i></small> <a href="../estadisticas/estadisticas.php"> Estadisticas</a>
                            </li>
                            <li class="active">
                                <small><i class="fa fa-bar-chart fa-2x"></i></small> Mensual
                            </li>
                        </ol>
                    </div>
                </div><!-- /.row -->
            <!-- grafico -->
            <div style="width:50%">
                <div>
                    <canvas id="canvas" height="450" width="600"></canvas>
                </div>
            </div>


            <script>
                var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
                var lineChartData = {
                    labels : ["January","February","March","April","May","June","July"],
                    datasets : [
                        {
                            label: "My First dataset",
                            fillColor : "rgba(220,220,220,0.2)",
                            strokeColor : "rgba(220,220,220,1)",
                            pointColor : "rgba(220,220,220,1)",
                            pointStrokeColor : "#fff",
                            pointHighlightFill : "#fff",
                            pointHighlightStroke : "rgba(220,220,220,1)",
                            data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                        },
                        {
                            label: "My Second dataset",
                            fillColor : "rgba(151,187,205,0.2)",
                            strokeColor : "rgba(151,187,205,1)",
                            pointColor : "rgba(151,187,205,1)",
                            pointStrokeColor : "#fff",
                            pointHighlightFill : "#fff",
                            pointHighlightStroke : "rgba(151,187,205,1)",
                            data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                        }
                    ]

                }

            window.onload = function(){
                var ctx = document.getElementById("canvas").getContext("2d");
                window.myLine = new Chart(ctx).Line(lineChartData, {
                    responsive: true
                });
            }


            </script>


    <?php include_once('../template/footer.php'); ?>