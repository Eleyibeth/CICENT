
	<?php include_once('../template/cabecera.php'); ?>

	<?php include_once('../template/navegador.php'); ?> 

	<?php include_once('../template/sidebar.php'); ?> 

	<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <h1 class="page-header">                        
                            <small>Anual </small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <small><i class="fa fa-home fa-2x"></i></small><a href="../inicio/index.php"> Inicio</a>
                            </li>
                            <li class="active">
                                <small><i class="fa fa-area-chart fa-2x"></i></small> <a href="../estadisticas/estadisticas.php"> Estadisticas</a>
                            </li>
                            <li class="active">
                                <small><i class="fa fa-line-chart fa-2x"></i></small> Anual
                            </li>
                        </ol>
                    </div>
                <!-- /.row -->
            </div>
            <!-- /#wrapper -->
            <div id="canvas-holder" style="width:30%">
            <canvas id="chart-area" width="300" height="300"/>
        </div>


    <script>

        var polarData = [
                {
                    value: 300,
                    color:"#F7464A",
                    highlight: "#FF5A5E",
                    label: "Red"
                },
                {
                    value: 50,
                    color: "#46BFBD",
                    highlight: "#5AD3D1",
                    label: "Green"
                },
                {
                    value: 100,
                    color: "#FDB45C",
                    highlight: "#FFC870",
                    label: "Yellow"
                },
                {
                    value: 40,
                    color: "#949FB1",
                    highlight: "#A8B3C5",
                    label: "Grey"
                },
                {
                    value: 120,
                    color: "#4D5360",
                    highlight: "#616774",
                    label: "Dark Grey"
                }

            ];

            window.onload = function(){
                var ctx = document.getElementById("chart-area").getContext("2d");
                window.myPolarArea = new Chart(ctx).PolarArea(polarData, {
                    responsive:true
                });
            };



    </script>


    <?php include_once('../template/footer.php'); ?>