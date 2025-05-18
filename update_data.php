<?php 

	include 'init.php';

	$request = htmlspecialchars($_POST['request'], ENT_QUOTES);


	/*Update Existing Building data using Popup Form*/
	if ($request == 'buildings') {
		$building_database_id = htmlspecialchars($_POST['building_database_id'], ENT_QUOTES);
		$account_no_old = htmlspecialchars($_POST['account_no_old'], ENT_QUOTES);
		$account_no = htmlspecialchars($_POST['account_no'], ENT_QUOTES);
		$building_dma_id = htmlspecialchars($_POST['building_dma_id'], ENT_QUOTES);
		$building_category = htmlspecialchars($_POST['building_category'], ENT_QUOTES);
		$building_storey = htmlspecialchars($_POST['building_storey'], ENT_QUOTES);
		$building_population = htmlspecialchars($_POST['building_population'], ENT_QUOTES);
		$building_location = htmlspecialchars($_POST['building_location'], ENT_QUOTES);


		try{

			if ($account_no_old != $account_no) {
				$result = $pdo -> query("SELECT * from buildings where account_no = '$account_no' ");

				if ($result -> rowCount()>0) {
					echo "ERROR: Building Account No. already exist in the database for another building. Please check for correct Building Account No.!";
				} else {
					$pdo -> query("UPDATE buildings set 
						account_no = '$account_no', 
						building_dma_id = '$building_dma_id',
						building_category = '$building_category', 
						building_storey = '$building_storey', 
						building_population = '$building_population', 
						building_location = '$building_location' 
						where building_database_id = '$building_database_id' ");
				}
			} else {
				$pdo -> query("UPDATE buildings set 
					account_no = '$account_no', 
					building_dma_id = '$building_dma_id',
					building_category = '$building_category', 
					building_storey = '$building_storey', 
					building_population = '$building_population', 
					building_location = '$building_location' 
					where building_database_id = '$building_database_id' ");
				}

		} catch (PDOException $e) {
			echo "ERROR: ".$e->getMessage();
		}
	}




	/*Update Existing Pipeline data using Popup Form*/
	if ($request == 'pipelines') {
		$pipeline_database_id = htmlspecialchars($_POST['pipeline_database_id'], ENT_QUOTES);
		$pipeline_id_old = htmlspecialchars($_POST['pipeline_id_old'], ENT_QUOTES);
		$pipeline_id = htmlspecialchars($_POST['pipeline_id'], ENT_QUOTES);
		$pipeline_dma_id = htmlspecialchars($_POST['pipeline_dma_id'], ENT_QUOTES);
		$pipeline_category = htmlspecialchars($_POST['pipeline_category'], ENT_QUOTES);
		$pipeline_diameter = htmlspecialchars($_POST['pipeline_diameter'], ENT_QUOTES);
		$pipeline_method = htmlspecialchars($_POST['pipeline_method'], ENT_QUOTES);
		$pipeline_location = htmlspecialchars($_POST['pipeline_location'], ENT_QUOTES);
		$length = htmlspecialchars($_POST['length'], ENT_QUOTES);


		try{

			if ($pipeline_id_old != $pipeline_id) {
				$result = $pdo -> query("SELECT * from pipelines where pipeline_id = '$pipeline_id' ");

				if ($result -> rowCount()>0) {
					echo "ERROR: Pipeline ID already exist in the database for another Pipeline. Please check for correct Pipeline ID.!";
				} else {
					$pdo -> query("UPDATE pipelines set 
						pipe_id = '$pipeline_id',
						pipeline_dma_id = '$pipeline_dma_id',
						pipeline_category = '$pipeline_category',
						pipeline_diameter = '$pipeline_diameter',
						pipeline_method = '$pipeline_method',
						pipeline_location = '$pipeline_location',
						length = '$length'
						where pipeline_database_id = '$pipeline_database_id' ");
				}
			} else {
				$pdo -> query("UPDATE pipelines set 
					pipe_id = '$pipeline_id',
					pipeline_dma_id = '$pipeline_dma_id',
					pipeline_category = '$pipeline_category',
					pipeline_diameter = '$pipeline_diameter',
					pipeline_method = '$pipeline_method',
					pipeline_location = '$pipeline_location',
					length = '$length'
					where pipeline_database_id = '$pipeline_database_id' ");
				}

		} catch (PDOException $e) {
			echo "ERROR: ".$e->getMessage();
		}
	}



	/*Update Existing Valve data using Popup Form*/
	if ($request == 'valves') {
		$valve_database_id = htmlspecialchars($_POST['valve_database_id'], ENT_QUOTES);
		$valve_id_old = htmlspecialchars($_POST['valve_id_old'], ENT_QUOTES);
		$valve_id = htmlspecialchars($_POST['valve_id'], ENT_QUOTES);
		$valve_dma_id = htmlspecialchars($_POST['valve_dma_id'], ENT_QUOTES);
		$valve_type = htmlspecialchars($_POST['valve_type'], ENT_QUOTES);
		$valve_diameter = htmlspecialchars($_POST['valve_diameter'], ENT_QUOTES);
		$valve_visibility = htmlspecialchars($_POST['valve_visibility'], ENT_QUOTES);
		$valve_location = htmlspecialchars($_POST['valve_location'], ENT_QUOTES);
		

		try{

			if ($valve_id_old != $valve_id) {
				$result = $pdo -> query("SELECT * from valves where valve_id = '$valve_id' ");

				if ($result -> rowCount()>0) {
					echo "ERROR: Valve ID already exist in the database for another Valve. Please check for correct Valve ID.!";
				} else {
					$pdo -> query("UPDATE valves set 
						valve_id = '$valve_id',
						valve_dma_id = '$valve_dma_id',
						valve_type = '$valve_type',
						valve_diameter = '$valve_diameter',
						valve_visibility = '$valve_visibility',
						valve_location = '$valve_location'
						where valve_database_id = '$valve_database_id' ");
				}
			} else {
				$pdo -> query("UPDATE valves set 
					valve_id = '$valve_id',
					valve_dma_id = '$valve_dma_id',
					valve_type = '$valve_type',
					valve_diameter = '$valve_diameter',
					valve_visibility = '$valve_visibility',
					valve_location = '$valve_location'
					where valve_database_id = '$valve_database_id' ");
				}

		} catch (PDOException $e) {
			echo "ERROR: ".$e->getMessage();
		}
	}
 ?>