<?php

include("../config/init.php");

$Alarma = new Alarma();

	$unidades = simplexml_load_file("./Reporte_de_Alarmas_Desde_28_01_2016_0000_Hasta_29_01_2016_0000.xml");

	foreach ($unidades -> registro as $row) {

		$Alarma->pla_veh = $row->pla_veh;
	    $Alarma->nom_tip_age = $row->nom_tip_age;

	    $Alarma->fec_eve_age = $row->fec_eve_age;
	    $Alarma->hor_eve_age = $row->hor_eve_age;

	    $Alarma->tiempo_permanencia = $row->tiempo_permanencia;
	    $Alarma->vel_veh = $row->vel_veh;

		$Alarma->validar_chuto();

		$Alarma->alarma_chuto();

	}

 ?>