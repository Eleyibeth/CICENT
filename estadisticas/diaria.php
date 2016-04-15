
	<?php include_once('../template/cabecera.php'); ?>

	<?php include_once('../template/navegador.php'); ?> 

	<?php include_once('../template/sidebar.php'); ?> 

	<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <h1 class="page-header">
                            <small>Diaria </small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <small><i class="fa fa-home fa-2x"></i></small><a href="../inicio/index.php"> Inicio</a>
                            </li>
                            <li class="active">
                                <small><i class="fa fa-area-chart fa-2x"></i></small> <a href="../estadisticas/estadisticas.php"> Estadisticas</a>
                            </li>
                            <li class="active">
                                <small><i class="fa fa-calendar fa-2x"></i></small> Diaria
                            </li>
                        </ol>
                    </div>
                <!-- /.row -->
			</div>
    		<!-- /#wrapper -->
            <div style="width:30%">
            <canvas id="canvas" height="450" width="450"></canvas>
        </div>


    <script>
    var radarChartData = {
        labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65,59,90,81,56,55,40]
            },
            {
                label: "My Second dataset",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [28,48,40,19,96,27,100]
            }
        ]
    };

    window.onload = function(){
        window.myRadar = new Chart(document.getElementById("canvas").getContext("2d")).Radar(radarChartData, {
            responsive: true
        });
    }

    </script>


	<?php include_once('../template/footer.php'); ?>