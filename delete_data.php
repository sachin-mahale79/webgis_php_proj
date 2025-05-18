<?php 

	include 'init.php';

	$request = htmlspecialchars($_POST['request'], ENT_QUOTES);


	/*Delete Existing Building data using Popup Form*/
	if ($request == 'buildings') {
		$building_database_id = htmlspecialchars($_POST['building_database_id'], ENT_QUOTES);

		try{

			$pdo -> query("DELETE from buildings where building_database_id = '$building_database_id' ");

		} catch (PDOException $e) {
			echo "ERROR: ".$e->getMessage();
		}

	}





	/*Delete Existing Pipeline data using Popup Form*/
	if ($request == 'pipelines') {
		$pipeline_database_id = htmlspecialchars($_POST['pipeline_database_id'], ENT_QUOTES);

		try{

			$pdo -> query("DELETE from pipelines where pipeline_database_id = '$pipeline_database_id' ");

		} catch (PDOException $e) {
			echo "ERROR: ".$e->getMessage();
		}

	}





	/*Delete Existing Valve data using Popup Form*/
	if ($request == 'valves') {
		$valve_database_id = htmlspecialchars($_POST['valve_database_id'], ENT_QUOTES);

		try{

			$pdo -> query("DELETE from valves where valve_database_id = '$valve_database_id' ");

		} catch (PDOException $e) {
			echo "ERROR: ".$e->getMessage();
		}

	}
 ?>