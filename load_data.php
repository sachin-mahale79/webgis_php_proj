<?php 
	
	include 'init.php';
	
	$table = htmlspecialchars($_POST['table'], ENT_QUOTES);
	$dma_id = htmlspecialchars($_POST['dma_id'], ENT_QUOTES);


	if ($table == 'valves'){
		$dma_id_field = "valve_dma_id";
	}
	if ($table == 'pipelines'){
		$dma_id_field = "pipeline_dma_id";
	}
	if ($table == 'buildings'){
		$dma_id_field = "building_dma_id";
	}

	try {

		$result = $pdo -> query("SELECT *, ST_AsGeoJSON(geom) as geojson from {$table} where {$dma_id_field} = '$dma_id' ");
		$features = [];

		foreach ($result as $row) {
			unset($row['geom']);
			$geometry = json_decode($row['geojson']);

			unset($row['geojson']);

			$feature = ["type"=>"Feature", "geometry"=>$geometry, "properties"=>$row];
			array_push($features, $feature);
		}

		$featureCollection = ["type"=> "featureCollection", "features"=>$features];
		echo json_encode($featureCollection);

	} catch (PDOException $e) {
		echo "ERROR ".$e->getMessage();
	}

 ?>