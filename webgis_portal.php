<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Web-GIS Portal</title>

	<!-- Adding links to external libraries and files. -->

	<link rel="stylesheet" href="styles.css">

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="https://unpkg.com/browse/jquery-ui-bundle@1.12.1-migrate/jquery-ui.min.css"> -->
	<!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"> -->
	<link rel="stylesheet" href="source/jquery-ui.min.css">
	<link rel="stylesheet" href="source/jquery-ui.css">
	<link rel="stylesheet" href="plugins/sidebar/leaflet-sidebar.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> -->
	<link rel="stylesheet" href="https://ppete2.github.io/Leaflet.PolylineMeasure/Leaflet.PolylineMeasure.css"/>
	<link rel="stylesheet" href="plugins/mouseposition/L.Control.MousePosition.css"/>
	<link rel="stylesheet" href="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css"/>
	<link rel="stylesheet" href="plugins/minimap/Control.MiniMap.min.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.19.1/dist/sweetalert2.min.css"/>


	<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
	<script src="https://unpkg.com/browse/leaflet@1.9.4/dist/leaflet-src.js"></script>
	<script src="https://unpkg.com/browse/jquery@1.9.1/jquery.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
	<script src="source/jquery-3.6.4.js"></script>
	<!-- <script src="source/jquery-3.6.4.min.js"></script> -->
	<script src="source/jquery-3.7.1.min.js"></script>
	<!-- <script src="https://unpkg.com/browse/jquery-ui-bundle@1.12.1-migrate/jquery-ui.min.js"></script> -->
	<script src="source/jquery-ui.min.js"></script>
	<script src="source/jquery-ui.js"></script>
	<script src="plugins/sidebar/leaflet-sidebar.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.js"></script>
	<script src="https://ppete2.github.io/Leaflet.PolylineMeasure/Leaflet.PolylineMeasure.js"></script>
	<script src="plugins/mouseposition/L.Control.MousePosition.js"></script>
	<script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.js"></script>
	<script src="plugins/minimap/Control.MiniMap.min.js"></script>
	<script src="plugins/ajax/leaflet.ajax.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.19.1/dist/sweetalert2.all.min.js"></script>



	<style>
		.bold {
			font-weight: bold;
			font-size: 16px;
		}

		.errorMsg {
			padding: 0;
			text-align: center;
			background-color: darksalmon;
		}


		/* Hiding New Feature addition form on Side-Bar */
		.new_feature{
			display:none;
		}


		.successMsg{
			text-align: center;
			background-color: #85C1E9;
			font-weight: bold;
		}

	</style>

</head>
<body>


	
	<!-- Creating SideBar-v2 and Mapdiv elements for Query Form. -->

		<div id="sidebar" class="sidebar collapsed">
		    <!-- Nav tabs -->
		    <div class="sidebar-tabs">
		        <ul role="tablist">
		            <li><a href="#home" role="tab"><i class="glyphicon glyphicon-home"></i></a></li>
		            <li><a href="#valve" role="tab"><i class="glyphicon glyphicon-yen"></i></a></li>
		            <li><a href="#pipeline" role="tab"><i class="glyphicon glyphicon-menu-hamburger"></i></a></li>
		            <li><a href="#building" role="tab"><i class="glyphicon glyphicon-equalizer"></i></a></li>
		        </ul>
		    </div>

        	<!-- Tab panes -->
            <div class="sidebar-content">
                <div class="sidebar-pane" id="home">
                    <h1 class="sidebar-header">
                        Home
                        <span class="sidebar-close"><i class="glyphicon glyphicon-chevron-left"></i></span>
                    </h1>


                    <!-- Adding HTML elements in Side-Bar-v2 Query Form for - Home -->
                    <div id="divhome" class="col-xs-12">
                    	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between SideBar Top and Header. -->

                    	<div class="col-xs-12">
                    		<p class="text-center bold">Filter an Area</p>
                    	</div>

                    	<div id="home_error" class="errorMsg col-xs-12"></div>

                    	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

                    	<div class="form-group">
                    		<div class="col-xs-6">
                    			<input type="text" id="dma_id" class="form-control" placeholder="DMA ID">
                    		</div>
                    		<div class="col-xs-6">
                    			<button id="filter_dma" class="btn btn-primary btn-block">Filter Area</button>
                    		</div>
                    	</div>
                    	<div class="col-xs-12" id="home_information">
                    		
                    	</div>
                    </div>
                </div>


<!-- **********************************************************************************************************************
********************************************************************************************************************** -->


                <!-- Adding HTML elements in Side-Bar-v2 Query Form for - Valves -->
                <div class="sidebar-pane" id="valve">
                    <h1 class="sidebar-header">
                        Valves
                        <span class="sidebar-close"><i class="glyphicon glyphicon-chevron-left"></i></span>
                    </h1>

                    <div id="divValve" class="col-xs-12">
                    	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

                    	<div class="col-xs-12">
                    		<p class="text-center bold">Valve Information</p>
                    	</div>

                    	<div id="valve_error" class="errorMsg col-xs-12" style="font-size:15px;"></div>

                    	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

                    	<div class="form-group">
                    		<div class="col-xs-6">
                    			<input type="text" id="valve_id" class="form-control" placeholder="Valve ID">
                    		</div>
                    		<div class="col-xs-6">
                    			<button id="findValve" class="btn btn-primary btn-block">Find Valve</button>
                    		</div>
                    	</div>
                    	<div class="col-xs-12" id="valve_information" style="font-size:15px;">
                    		
                    	</div>
                    </div>
                    <!-- ******************************************************************************************************** -->
                    <div class="col-xs-12" style="height: 60px;"></div>

                    <div id="newValve" class="col-xs-12">
                    	
                    	<div class="col-xs-8">
                    		<button type="button" class="btn btn-info btn-block" id="btn_valve_form">Insert New Valve</button>
                    	</div>
                    	<div class="col-xs-4">
                    		<button type="button" class="btn btn-success btn-block" id="btn_valve_refresh">Refresh</button>
                    	</div>

                    	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

                    	<div id="new_valve_information" class="col-xs-12 new_feature">
                    		
    	                	<label class="control-label col-sm-4" for="valve_id_new">Valve ID</label>
    	                	<div class="col-sm-8">
    	                		<input type="text" class="form-control" name="valve_id_new" id="valve_id_new">
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

    	                	<label class="control-label col-sm-4" for="valve_type">Valve Type</label>
    	                	<div class="col-sm-8">
    	                	    <select class="form-control" name="valve_type" id="valve_type">
    	                	        <option value=""></option>
    	                	        <option value="Gate Valve">Gate Valve</option>
    	                	        <option value="Washout Valve">Washout Valve</option>
    	                	        <option value="Air Release Valve">Air Release Valve</option>
    	                	    </select>
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

    	                	<label class="control-label col-sm-4" for="valve_dma_id">DMA ID</label>
    	                	<div class="col-sm-8">
    	                		<input type="text" class="form-control" name="valve_dma_id" id="valve_dma_id">
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

    	                	<label class="control-label col-sm-4" for="valve_diameter">Diameter (mm)</label>
    	                	<div class="col-sm-8">
    	                		<input type="text" class="form-control" name="valve_diameter" id="valve_diameter">
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

    	                	<label class="control-label col-sm-4" for="valve_visibility">Visibility</label>
    	                	<div class="col-sm-8">
    	                		<select class="form-control" name="valve_visibility" id="valve_visibility">
    	                	        <option value=""></option>
    	                	        <option value="Visible">Visible</option>
    	                	        <option value="Invisible">Invisible</option>
    	                	    </select>
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

    	                	<label class="control-label col-sm-4" for="valve_location">Location</label>
    	                	<div class="col-sm-8">
    	                		<input type="text" class="form-control" name="valve_location" id="valve_location">
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

    	                	<label class="control-label col-sm-4" for="valve_geometry">Geometry</label>
    	                	<div class="col-sm-8">
    	                		<textarea name="valve_geometry" id="valve_geometry" disabled></textarea>
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->
    	                	
    	                	<div class="col-sm-6">
    							<button type="button" class="btn btn-danger btn-block" id="btn_valve_cancel">Cancel</button>	
    	                	</div>
    	                	<div class="col-sm-6">
    							<button type="button" class="btn btn-success btn-block" id="btn_valve_insert">Insert Valve</button>	
    	                	</div>
                    	</div>
                    </div>

                    <div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->
                    <div id="valve_status" class="col-xs-12 successMsg"></div>
                </div>


<!-- **********************************************************************************************************************
********************************************************************************************************************** -->


                <!-- Adding HTML elements in Side-Bar-v2 Query Form for - Pipelines -->
                <div class="sidebar-pane" id="pipeline">
                    <h1 class="sidebar-header">
                        Pipelines
                        <span class="sidebar-close"><i class="glyphicon glyphicon-chevron-left"></i></span>
                    </h1>

                    <div id="divPipeline" class="col-xs-12">
                    	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

                    	<div class="col-xs-12">
                    		<p class="text-center bold">Pipeline Information</p>
                    	</div>

                    	<div id="pipeline_error" class="errorMsg col-xs-12" style="font-size:15px;"></div>

                    	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

                    	<div class="form-group">
                    		<div class="col-xs-6">
                    			<input type="text" id="pipeline_id" class="form-control" placeholder="Pipeline ID">
                    		</div>
                    		<div class="col-xs-6">
                    			<button id="findPipeline" class="btn btn-primary btn-block">Find Pipeline</button>
                    		</div>
                    	</div>
                    	<div class="col-xs-12" id="pipeline_information" style="font-size:15px;">
                    		
                    	</div>
                    	
                    </div>
                    <!-- ******************************************************************************************************** -->
                    <div class="col-xs-12" style="height: 60px;"></div>

                    <div id="newPipeline" class="col-xs-12">
                    	
                    	<div class="col-xs-8">
                    		<button type="button" class="btn btn-info btn-block" id="btn_pipeline_form">Insert New Pipeline</button>
                    	</div>
                    	<div class="col-xs-4">
                    		<button type="button" class="btn btn-success btn-block" id="btn_pipeline_refresh">Refresh</button>
                    	</div>

                    	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

                    	<div id="new_pipeline_information" class="col-xs-12 new_feature">
                    		
    	                	<label class="control-label col-sm-4" for="new_pipeline_id">Pipe ID</label>
    	                	<div class="col-sm-8">
    	                		<input type="text" class="form-control" name="new_pipeline_id" id="new_pipeline_id">
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

    	                	<label class="control-label col-sm-4" for="pipeline_category">Category</label>
    	                	<div class="col-sm-8">
    	                	    <select class="form-control" name="pipeline_category" id="pipeline_category">
    	                	        <option value=""></option>
    	                	        <option value="Distribution Pipeline">Distribution Pipeline</option>
    	                	        <option value="Reticulation Pipeline">Reticulation Pipeline</option>
    	                	        <option value="Transmission Pipeline">Transmission Pipeline</option>
    	                	    </select>
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

    	                	<label class="control-label col-sm-4" for="pipeline_dma_id">DMA ID</label>
    	                	<div class="col-sm-8">
    	                		<input type="text" class="form-control" name="pipeline_dma_id" id="pipeline_dma_id">
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

    	                	<label class="control-label col-sm-4" for="pipeline_diameter">Diameter (mm)</label>
    	                	<div class="col-sm-8">
    	                		<input type="text" class="form-control" name="pipeline_diameter" id="pipeline_diameter">
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

    	                	<label class="control-label col-sm-4" for="pipeline_method">Construction Method</label>
    	                	<div class="col-sm-8">
    	                		<select class="form-control" name="pipeline_method" id="pipeline_method">
    	                	        <option value=""></option>
    	                	        <option value="OT">OT</option>
    	                	        <option value="HDD">HDD</option>
    	                	    </select>
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

    	                	<label class="control-label col-sm-4" for="pipeline_location">Location</label>
    	                	<div class="col-sm-8">
    	                		<input type="text" class="form-control" name="pipeline_location" id="pipeline_location">
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

    	                	<label class="control-label col-sm-4" for="pipeline_geometry">Geometry</label>
    	                	<div class="col-sm-8">
    	                		<textarea name="pipeline_geometry" id="pipeline_geometry" disabled></textarea>
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->
    	                	
    	                	<div class="col-sm-6">
    							<button type="button" class="btn btn-danger btn-block" id="btn_pipeline_cancel">Cancel</button>	
    	                	</div>
    	                	<div class="col-sm-6">
    							<button type="button" class="btn btn-success btn-block" id="btn_pipeline_insert">Insert Pipeline</button>	
    	                	</div>
                    	</div>
                    </div>

                    <div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->
                    <div id="pipeline_status" class="col-xs-12 successMsg"></div>  
                    
                </div>


<!-- **********************************************************************************************************************
********************************************************************************************************************** -->


                <!-- Adding HTML elements in Side-Bar-v2 Query Form for - Buildings -->
                <div class="sidebar-pane" id="building">
                    <h1 class="sidebar-header">
                        Buildings
                        <span class="sidebar-close"><i class="glyphicon glyphicon-chevron-left"></i></span>
                    </h1>

                    <div id="divBuilding" class="col-xs-12">
                    	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

                    	<div class="col-xs-12">
                    		<p class="text-center bold">Building Information</p>
                    	</div>

                    	<div id="building_error" class="errorMsg col-xs-12" style="font-size:15px;"></div>

                    	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

                    	<div class="form-group">
                    		<div class="col-xs-6">
                    			<input type="text" id="building_id" class="form-control" placeholder="Building Account No.">
                    		</div>
                    		<div class="col-xs-6">
                    			<button id="findBuilding" class="btn btn-primary btn-block">Find Building</button>
                    		</div>
                    	</div>
                    	<div class="col-xs-12" id="building_information" style="font-size:15px;">
                    		
                    	</div>
                    	
                    </div>
                    <!-- ******************************************************************************************************** -->
                    <div class="col-xs-12" style="height: 60px;"></div>

                    <div id="newBuilding" class="col-xs-12">
                    	
                    	<div class="col-xs-8">
                    		<button type="button" class="btn btn-info btn-block" id="btn_building_form">Insert New Building</button>
                    	</div>
                    	<div class="col-xs-4">
                    		<button type="button" class="btn btn-success btn-block" id="btn_building_refresh">Refresh</button>
                    	</div>

                    	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

                    	<div id="new_building_information" class="col-xs-12 new_feature">
                    		
    	                	<label class="control-label col-sm-4" for="new_building_id">Building ID</label>
    	                	<div class="col-sm-8">
    	                		<input type="text" class="form-control" name="new_building_id" id="new_building_id">
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

    	                	<label class="control-label col-sm-4" for="building_category">Category</label>
    	                	<div class="col-sm-8">
    	                	    <select class="form-control" name="building_category" id="building_category">
    	                	        <option value=""></option>
    	                	        <option value="Building">Building</option>
    	                	        <option value="Tin Shed">Tin Shed</option>
    	                	        <option value="Under Construction">Under Construction</option>
    	                	        <option value="Open Plot">Open Plot</option>
    	                	    </select>
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

    	                	<label class="control-label col-sm-4" for="building_dma_id">DMA ID</label>
    	                	<div class="col-sm-8">
    	                		<input type="text" class="form-control" name="building_dma_id" id="building_dma_id">
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

    	                	<label class="control-label col-sm-4" for="building_storey">Storey</label>
    	                	<div class="col-sm-8">
    	                		<input type="number" class="form-control" name="building_storey" id="building_storey">
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

    	                	<label class="control-label col-sm-4" for="building_population">Population</label>
    	                	<div class="col-sm-8">
    	                		<input type="number" class="form-control" name="building_population" id="building_population">
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

    	                	<label class="control-label col-sm-4" for="building_location">Location</label>
    	                	<div class="col-sm-8">
    	                		<input type="text" class="form-control" name="building_location" id="building_location">
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->

    	                	<label class="control-label col-sm-4" for="building_geometry">Geometry</label>
    	                	<div class="col-sm-8">
    	                		<textarea name="building_geometry" id="building_geometry" disabled></textarea>
    	                	</div>

    	                	<div class="col-xs-12" style="height: 10px;"></div>		<!-- To add some space between Header and Input Box. -->
    	                	
    	                	<div class="col-sm-6">
    							<button type="button" class="btn btn-danger btn-block" id="btn_building_cancel">Cancel</button>	
    	                	</div>
    	                	<div class="col-sm-6">
    							<button type="button" class="btn btn-success btn-block" id="btn_building_insert">Insert building</button>	
    	                	</div>
                    	</div>
                    </div>

                    <div class="col-xs-12" style="height: 10px;"></div>
                    <div id="building_status" class="col-xs-12 successMsg"></div>  

                </div>
            </div>
    	</div>
    
	<div id="mapdiv" class="col-md-12"></div> <!-- "col-md-12" is used for full width. -->



<!-- ****************************************************************************************************************
****************************************************************************************************************
****************************************************************************************************************
**************************************************************************************************************** -->



	<script>
		/*Creating a WebMap.*/
		var mymap;
		var baseLayers;
		var overlays;
		var lyrSearch;

		var layerValves;
		var layerPipelines;
		var layerBuildings;
		
		var valves_array = [];
		var pipelines_array = [];
		var buildings_array = [];


		var dma_id;

		var raster_data;

		mymap = L.map('mapdiv', {
		    center: [19.102633, 72.888164],
		    zoom: 12,
		    attributionControl: false,
		    zoomControl: false
		});


/****************************************************************************************************************
****************************************************************************************************************/


		/*Adding Base Layers.*/
		var GoogleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{maxZoom: 23, subdomains:['mt0','mt1','mt2','mt3']});
		var openStreetMap = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png?', {maxZoom:23});
		var CartoDB_Positron = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png',{maxZoom: 23});
		var Esri_WorldImagery = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {maxZoom: 23});
		var Esri_WorldImagery_minimap = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {maxZoom: 23});
		var OpenTopoMap= L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {maxZoom: 23});

		GoogleStreets.addTo(mymap);



		/*Adding a SideBar*/
		var sidebar = L.control.sidebar('sidebar', {	//We have already declared the ID 'sidebar' in the "div" section.
		    position: 'left'
		});
		mymap.addControl(sidebar);	//Replace the variable "map" to the variable we have already declared a variable "mymap".



		/*Zoom Controls*/
		L.control.zoom({position: 'topright'}).addTo(mymap);



		/*Layer Control*/
		baseLayers = {
		    "Google Streets": GoogleStreets,
		    "Open Street Map": openStreetMap,
		    "Carto-DB Positron": CartoDB_Positron,
		    "Esri World Imagery":Esri_WorldImagery,
		    "Open Topo Map": OpenTopoMap
		};
		var control_layers = L.control.layers(baseLayers, overlays).addTo(mymap);



		/*Adding Measure Tool*/
		L.control.polylineMeasure({position: 'topright', showClearControl: true, showUnitControl: true}).addTo(mymap);



		/*Mouse Position*/
		L.control.mousePosition({position: 'bottomright', prefix: 'Coordinates: '}).addTo(mymap);



		/*Draw Controls or GEOMAN*/
		mymap.pm.addControls({
		  position: 'topright',
		  drawMarker: true,			/* To add the tool on the Map Draw Controls, change it's value to "True" */
		  drawPoliline: true,		/* To add the tool on the Map Draw Controls, change it's value to "True" */
		  drawPolygon: true,		/* To add the tool on the Map Draw Controls, change it's value to "True" */
		  drawCircleMarker: false,	/* To add the tool on the Map Draw Controls, change it's value to "True" */
		  rotateMode: false,		/* To add the tool on the Map Draw Controls, change it's value to "True" */
		  drawCircle: false,		/* To add the tool on the Map Draw Controls, change it's value to "True" */
		  drawText: false,			/* To add the tool on the Map Draw Controls, change it's value to "True" */
		  drawRectangle: false,		/* To add the tool on the Map Draw Controls, change it's value to "True" */
		  editMode: false,			/* To add the tool on the Map Draw Controls, change it's value to "True" */
		  dragMode: false,			/* To add the tool on the Map Draw Controls, change it's value to "True" */
		  cutPolygon: false,		/* To add the tool on the Map Draw Controls, change it's value to "True" */
		  removalMode: true			/* To add the tool on the Map Draw Controls, change it's value to "True" */
		}); 



		/*Catching an Event*/
		mymap.on("pm:create", function(e) {
			/*console.log(e);*/

			var jsn = e.layer.toGeoJSON().geometry;
			/*console.log(jsn);*/
			var jsn_modified;


			/*Populating Geometry values inside Insert New Valve form HTML Element Text-Area - Valves*/
			if (e.shape == 'Marker') {

				if (confirm("Do you want to add new Valve?")) {
					jsn_modified = {type:'Point', coordinates:jsn.coordinates};
					$("#valve_geometry").val(JSON.stringify(jsn_modified));
				}
			}


			/*Populating Geometry values inside Insert New Pipeline form HTML Element Text-Area - Pipelines*/
			if (e.shape == 'Line') {

				if (confirm("Do you want to add new Pipeline?")) {
					jsn_modified = {type:'MultiLineString', coordinates:[jsn.coordinates]};
					$("#pipeline_geometry").val(JSON.stringify(jsn_modified));
				}
			}


			/*Populating Geometry values inside Insert New Building form HTML Element Text-Area - Buildings*/
			if (e.shape == 'Polygon') {

				if (confirm("Do you want to add new Building?")) {
					jsn_modified = {type:'MultiPolygon', coordinates:[jsn.coordinates]};
					$("#building_geometry").val(JSON.stringify(jsn_modified));
				}
			}
		})



		/*Mini-Map*/
		var miniMap = new L.Control.MiniMap(Esri_WorldImagery_minimap, {
			position: 'bottomright', 
			zoomLevelOffset: 0,
			height: 200, 
			width: 200
		}).addTo(mymap);



		/*Adding a Scalebar*/
		L.control.scale({position: "bottomright", maxWidth: '200', imperial:false} ).addTo(mymap);



/****************************************************************************************************************
****************************************************************************************************************
****************************************************************************************************************
****************************************************************************************************************/

		/*Home Tab jQuery Function*/

		$("#filter_dma").click(function(){
			dma_id = $("#dma_id").val();
			if (!dma_id) {
				$("#home_error").html("Please enter DMA ID!");
			} else {
				/*console.log(dma_id);*/
				/*Home - Calling Data loading Functions*/
				load_valves(dma_id);
				load_pipelines(dma_id);
				load_buildings(dma_id);
				load_rasterdata(dma_id);
			}
		})


/****************************************************************************************************************
****************************************************************************************************************
****************************************************************************************************************
****************************************************************************************************************/

		/* Loading Valves data from PostgreSQL Remote Instance - Valves*/
		function load_valves(dma_id) {
			$.ajax({
				url:'load_data.php',
				data: {table:'valves', dma_id:dma_id},
				type: 'POST',
				success: function(response) {
					if (response.trim().substr(0,5)=='ERROR') {
						console.log(response);
					} else {
						var jsnValve = JSON.parse(response);
						

						/*Removing Duplicate Valve Layer from WebMap using Layer Control*/
						if (layerValves) {
							layerValves.remove();
							control_layers.removeLayer(layerValves);
						}


						layerValves = L.geoJSON(jsnValve, {pointToLayer:style_valves}).addTo(mymap);
						control_layers.addOverlay(layerValves, "Valves");
						mymap.fitBounds(layerValves.getBounds());
						

						$("#valve_id").autocomplete({	/*AutoComplete Valve_ID*/
							source:valves_array
						});
					}
				},
				error: function(xhr, status, error) {
					console.log("ERROR: "+error);
				}
			});
		}

		

		/*Refreshing data in Web-Map - Valves*/
		function refresh_valves(dma_id) {
			$.ajax({
				url:'load_data.php',
				data: {table:'valves', dma_id:dma_id},
				type: 'POST',
				success: function(response) {
					if (response.trim().substr(0,5)=='ERROR') {
						console.log(response);
					} else {
						var jsnValve = JSON.parse(response);
						

						/*Removing Duplicate Valve Layer from WebMap using Layer Control*/
						if (layerValves) {
							layerValves.remove();
							control_layers.removeLayer(layerValves);
						}


						layerValves = L.geoJSON(jsnValve, {pointToLayer:style_valves}).addTo(mymap);
						control_layers.addOverlay(layerValves, "Valves");
												

						$("#valve_id").autocomplete({	/*AutoComplete Valve_ID*/
							source:valves_array
						});
					}
				},
				error: function(xhr, status, error) {
					console.log("ERROR: "+error);
				}
			});
		}




		/*Applying Styles to Point Feature - Valves*/
		function style_valves (json, latlng) {
			/*console.log(json);*/
			/*console.log(latlng);*/
			var att = json.properties;
			var color;
			var fill_color;
			var radius = 5;
			var fillOpacity = 1;

			valves_array.push(att.valve_id);	/*To copy valve to Temporary Layer.*/

			switch (att.valve_type) {
				case 'Air Release Valve':
					color = '#d35400';			/*This will be the color of the outer ring.*/
					fill_color = '#d35400';		/*This will be color of the inner part of the symbol.*/
					break;
				case 'Gate Valve':
					color = '#2E86C1';			/*This will be the color of the outer ring.*/
					fill_color = '#2E86C1';		/*This will be color of the inner part of the symbol.*/
					break;
				case 'Washout Valve':
					color = '#8E44AD';			/*This will be the color of the outer ring.*/
					fill_color = '#8E44AD';		/*This will be color of the inner part of the symbol.*/
					break;
				case 'Pressure Reducing Valve':
					color = '#E74C3C';			/*This will be the color of the outer ring.*/
					fill_color = '#8E44AD';		/*This will be color of the inner part of the symbol.*/
					break;
				case 'Non Return Valve':
					color = '#566573';			/*This will be the color of the outer ring.*/
					fill_color = '#8E44AD';		/*This will be color of the inner part of the symbol.*/
					break;
				default:
					color = '#16A085';
					fill_color = '#16A085';
					break;
			}

			var style = {radius:radius, color:color, fillcolor:fill_color, fillOpacity:fillOpacity}
			return L.circleMarker(latlng, style).bindTooltip(`<div style="font-size: 12px;">Valve ID: ${att.valve_id}<br>Valve Type: ${att.valve_type}<br>Diameter (mm): ${att.valve_diameter}<br>Location: ${att.valve_location}<br>Valve DMA ID: ${att.valve_dma_id}<br>Valve Visibility: ${att.valve_visibility}</div>`).bindPopup(

				`<div class="popup-container-valve">

					<input type="hidden" name="valve_database_id" class="updateValve" value='${att.valve_database_id}'>

					<input type="hidden" name="valve_id_old" class="updateValve" value='${att.valve_id}'>

					<div class="popup-form-group" style="font-size:12px;">
						<label class="control-label popup-label">Valve ID.</label>
						<input type="text" class="form-control popup-input text-center updateValve" value='${att.valve_id}' name="valve_id">
					</div>

					<div class="popup-form-group" style="font-size:12px;">
						<label class="control-label popup-label">DMA ID</label>
						<input type="text" class="form-control popup-input text-center updateValve" value='${att.valve_dma_id}' name="valve_dma_id">
					</div>

					<div class="popup-form-group" style="font-size:12px;">
						<label class="control-label popup-label">Valve Type</label>
						<input type="text" class="form-control popup-input text-center updateValve" value='${att.valve_type}' name="valve_type">
					</div>

					<div class="popup-form-group" style="font-size:12px;">
						<label class="control-label popup-label">Valve Diameter(mm)</label>
						<input type="number" class="form-control popup-input text-center updateValve" value='${att.valve_diameter}' name="valve_diameter">
					</div>

					<div class="popup-form-group" style="font-size:12px;">
						<label class="control-label popup-label">Valve Visibility</label>
						<input type="text" class="form-control popup-input text-center updateValve" value='${att.valve_visibility}' name="valve_visibility">
					</div>

					<div class="popup-form-group" style="font-size:12px;">
						<label class="control-label popup-label">Valve Location</label>
						<input type="text" class="form-control popup-input text-center updateValve" value='${att.valve_location}' name="valve_location">
					</div>

					<div class="popup-button-group">
						<button type="submit" class="btn btn-success popup-button" onclick='updateValve()'>Update</button>
						<button type="submit" class="btn btn-danger popup-button" onclick='deleteValve()'>Delete</button>
					</div>

				</div>`);
		}



		/*Developing Function to Update Existing Valves*/
		function updateValve() {
			var jsn = returnFormData('updateValve');
			jsn.request = "valves";

			Swal.fire({
				title: "Do you want to save the changes?",
				showDenyButton: true,
				showCancelButton: true,
				confirmButtonText: "Save",
				denyButtonText: `Don't save`
			}).then((result) => {
				if (result.isConfirmed) {
					$.ajax({
						url: 'update_data.php',
						data: jsn,
						type: 'POST',
						success: function(response){
							Swal.fire("Saved!", "", "success");
							console.log(response);
							refresh_valves(dma_id);
						},
						error: function (error) {
							console.log("ERROR: "+error);
						}
					});

				} else if (result.isDenied) {
					Swal.fire("Changes are not saved", "", "info");
				}
			});
		}



		/*Developing Function to Delete Existing Valves*/
		function deleteValve() {
			var jsn = returnFormData('updateValve');
			jsn.request = "valves";

			Swal.fire({
				title: "Do you want to delete this Valve?",
				showDenyButton: true,
				showCancelButton: true,
				confirmButtonText: "Delete",
				denyButtonText: `Don't Delete`
			}).then((result) => {
				if (result.isConfirmed) {
					$.ajax({
						url: 'delete_data.php',
						data: jsn,
						type: 'POST',
						success: function(response){
							Swal.fire("Valve Deleted!", "", "success");
							refresh_valves(dma_id);
						},
						error: function (error) {
							console.log("ERROR: "+error);
						}
					});

				} else if (result.isDenied) {
					Swal.fire("Valve feature not deleted!", "", "info");
				}
			});
		}





		/*Starting jQuery to search for Valve.*/
		$("#findValve").click(function(){
			var valve_id = $("#valve_id").val();
			
			returnLayerByAttribute("valves", "valve_id", valve_id, function(lyr) {
				if (lyr) {
					var att = lyr.feature.properties;
								
					/*Removing old Search Marker*/
					if (lyrSearch) {
						lyrSearch.remove();
					}


					/*Adding New Layer to place Circle Marker*/
					lyrSearch = L.circle(lyr.getLatLng(), {radius:15, color:'red', weight:10, opacity:0.6, fillOpacity:0.3}).addTo(mymap);

					
					/*Zoom to searched Map feature*/
					mymap.setView(lyr.getLatLng(), 20);


					/*Bring to Front Valve Layer*/
					layerValves.bringToFront();


					/*Printing information of Searched Valve on SideBar*/
					$("#valve_information").html("<br>Valve Type: "+att.valve_type+"<br>DMA ID: "+att.valve_dma_id+"<br>Diameter: "+att.valve_diameter+" (mm)"+"<br>Remarks: "+att.valve_remarks+"<br>Visibility: "+att.valve_visibility+"<br>Location: "+att.valve_location);
				} else {
					$("#valve_error").html("Valve not found!");
				}
			});
		});



		/* Displaying New Feature addition form on Side-Bar */
		$("#btn_valve_form").click(function(){
			$("#new_valve_information").show();
		});


		/* Hiding New Feature addition form on Side-Bar */
		$("#btn_valve_cancel").click(function(){
			$("#new_valve_information").hide();
		});



		/*Catching attributes from Insert New Valve form - Valves*/
		$("#btn_valve_insert").click(function(){
			var valve_id = $("#valve_id_new").val();
			var valve_type = $("#valve_type").val();
			var valve_dma_id = $("#valve_dma_id").val();
			var valve_diameter = $("#valve_diameter").val();
			var valve_visibility = $("#valve_visibility").val();
			var valve_location = $("#valve_location").val();
			var valve_geometry = $("#valve_geometry").val();
			/*console.log(valve_id);*/

			
			/*Check for missing attributes from Insert New Valve form - Valves*/
			if (valve_id == "" || valve_type == "" || valve_dma_id == "" || valve_geometry == "") {
				$("#valve_status").html("Please fill all the values.");
			} else {
			/*Proceed to the AJAX request with all the attributes.*/
				$.ajax({
					url:'insert_data.php',
					data:{valve_id:valve_id, 
						valve_type:valve_type, 
						valve_dma_id:valve_dma_id, 
						valve_diameter:valve_diameter, 
						valve_visibility:valve_visibility, 
						valve_location:valve_location, 
						valve_geometry:valve_geometry,
						request:'valves'},

					type:'POST',
					success:function(response){
						if (response.trim().substr(0,5)=='ERROR') {
						console.log(response);
						$("#valve_status").html(response);
						} else {
							$("#valve_status").html("Valve added successfully!");
							refresh_valves(dma_id);


							/*Clearing the contents from the Insert New Valve Form*/
							$("#valve_id_new").val("");
							$("#valve_type").val("");
							$("#valve_dma_id").val("");
							$("#valve_diameter").val("");
							$("#valve_visibility").val("");
							$("#valve_location").val("");
							$("#valve_geometry").val("");
						}
					},
					error: function(xhr, status, error) {
						$("#valve_status").html(error);
					}
				});
			}
		});




		/*Refreshing data on the "Refresh" button click event*/
		$("#btn_valve_refresh").click(function(){
			refresh_valves(dma_id);
			/*Clearing the contents from the Insert New Valve Form*/
			$("#valve_id_new").val("");
			$("#valve_type").val("");
			$("#valve_dma_id").val("");
			$("#valve_diameter").val("");
			$("#valve_visibility").val("");
			$("#valve_location").val("");
			$("#valve_geometry").val("");
		});


/****************************************************************************************************************
****************************************************************************************************************/

		/* Loading Pipeline data from PostgreSQL Remote Instance - Valves*/
		function load_pipelines(dma_id) {
			$.ajax({
				url:'load_data.php',
				data: {table:'pipelines', dma_id:dma_id},
				type: 'POST',
				success: function(response) {
					if (response.trim().substr(0,5)=='ERROR') {
						console.log(response);
					} else {
						var jsnPipeline = JSON.parse(response);
						

						/*Removing Duplicate Pipeline Layer from WebMap using Layer Control*/
						if (layerPipelines) {
							layerPipelines.remove();
							control_layers.removeLayer(layerPipelines);
						}


						layerPipelines = L.geoJSON(jsnPipeline, {style: style_pipelines, onEachFeature:process_pipeline}).addTo(mymap);
						control_layers.addOverlay(layerPipelines, "Pipelines");
						mymap.fitBounds(layerPipelines.getBounds());
						

						$("#pipeline_id").autocomplete({	/*AutoComplete Pipeline_ID*/
							source:pipelines_array
						});
					}
				},
				error: function(xhr, status, error) {
					console.log("ERROR: "+error);
				}
			});
		}




		/*Applying Styles to Line Feature - Pipeline*/
		function style_pipelines (json) {
			var att = json.properties;
			/*console.log(json);*/

			switch (att.pipeline_category) {
				case 'Distribution Pipeline':
					color = '#2980B9';
					break;
				case 'Reticulation Pipeline':
					color = '#FFA07A';
					break;
				case 'Transmission Pipeline':
					color = '#16A085';
					break;
				default:
					color = '#17202A';
					break;
			}
			return{color:color};
		}


		function process_pipeline (json, lyr) {
			var att = json.properties;
			
			pipelines_array.push(att.pipe_id);	/*To copy pipeline to Temporary Layer.*/

			lyr.bindTooltip(`<div style="font-size: 12px;">Pipe ID: ${att.pipe_id}<br>Diameter: ${att.pipeline_diameter} (mm)<br>Location: ${att.pipeline_location}<br>Category: ${att.pipeline_category}<br>Length: ${att.length} (m)<br>Pipeline DMA ID: ${att.pipeline_dma_id}</div>`).bindPopup(

				`<div class="popup-container-pipeline">

					<input type="hidden" name="pipeline_database_id" class="updatePipeline" value='${att.pipeline_database_id}'>

					<input type="hidden" name="pipeline_id_old" class="updatePipeline" value='${att.pipe_id}'>

					<div class="popup-form-group" style="font-size:12px;">
						<label class="control-label popup-label">Pipe ID.</label>
						<input type="text" class="form-control popup-input text-center updatePipeline" value='${att.pipe_id}' name="pipeline_id">
					</div>

					<div class="popup-form-group" style="font-size:12px;">
						<label class="control-label popup-label">DMA ID</label>
						<input type="text" class="form-control popup-input text-center updatePipeline" value='${att.pipeline_dma_id}' name="pipeline_dma_id">
					</div>

					<div class="popup-form-group" style="font-size:12px;">
						<label class="control-label popup-label">Pipeline Category</label>
						<input type="text" class="form-control popup-input text-center updatePipeline" value='${att.pipeline_category}' name="pipeline_category">
					</div>

					<div class="popup-form-group" style="font-size:12px;">
						<label class="control-label popup-label">Pipeline Diameter(mm)</label>
						<input type="number" class="form-control popup-input text-center updatePipeline" value='${att.pipeline_diameter}' name="pipeline_diameter">
					</div>

					<div class="popup-form-group" style="font-size:12px;">
						<label class="control-label popup-label">Construction Method</label>
						<input type="text" class="form-control popup-input text-center updatePipeline" value='${att.pipeline_method}' name="pipeline_method">
					</div>

					<div class="popup-form-group" style="font-size:12px;">
						<label class="control-label popup-label">Pipeline Location</label>
						<input type="text" class="form-control popup-input text-center updatePipeline" value='${att.pipeline_location}' name="pipeline_location">
					</div>

					<div class="popup-form-group" style="font-size:12px;">
						<label class="control-label popup-label">Pipeline Length(m)</label>
						<input type="number" step="any" class="form-control popup-input text-center updatePipeline" value='${att.length}' name="length">
					</div>

					<div class="popup-button-group">
						<button type="submit" class="btn btn-success popup-button" onclick='updatePipeline()'>Update</button>
						<button type="submit" class="btn btn-danger popup-button" onclick='deletePipeline()'>Delete</button>
					</div>

				</div>`);
		}



		/*Developing Function to Update Existing Pipelines*/
		function updatePipeline() {
			var jsn = returnFormData('updatePipeline');
			jsn.request = "pipelines";

			Swal.fire({
				title: "Do you want to save the changes?",
				showDenyButton: true,
				showCancelButton: true,
				confirmButtonText: "Save",
				denyButtonText: `Don't save`
			}).then((result) => {
				if (result.isConfirmed) {
					$.ajax({
						url: 'update_data.php',
						data: jsn,
						type: 'POST',
						success: function(response){
							Swal.fire("Saved!", "", "success");
							console.log(response);
							load_pipelines(dma_id);
						},
						error: function (error) {
							console.log("ERROR: "+error);
						}
					});

				} else if (result.isDenied) {
					Swal.fire("Changes are not saved", "", "info");
				}
			});
		}



		/*Developing Function to Delete Existing Pipelines*/
		function deletePipeline() {
			var jsn = returnFormData('updatePipeline');
			jsn.request = "pipelines";

			Swal.fire({
				title: "Do you want to delete this Pipeline?",
				showDenyButton: true,
				showCancelButton: true,
				confirmButtonText: "Delete",
				denyButtonText: `Don't Delete`
			}).then((result) => {
				if (result.isConfirmed) {
					$.ajax({
						url: 'delete_data.php',
						data: jsn,
						type: 'POST',
						success: function(response){
							Swal.fire("Pipeline Deleted!", "", "success");
							load_pipelines(dma_id);
						},
						error: function (error) {
							console.log("ERROR: "+error);
						}
					});

				} else if (result.isDenied) {
					Swal.fire("Pipeline feature not deleted!", "", "info");
				}
			});
		}



		/*Starting jQuery to search for Pipeline.*/
		$("#findPipeline").click(function(){
			var pipeline_id = $("#pipeline_id").val();
			
			returnLayerByAttribute("pipelines", "pipe_id", pipeline_id, function(lyr){

				if (lyr) {
					var att = lyr.feature.properties;
					
					/*Removing old Search Marker*/
					if (lyrSearch) {
						lyrSearch.remove();
					}


					/*Adding New Layer to place Highlighter*/
					lyrSearch = L.geoJSON(lyr.toGeoJSON(), {style:{color:'red', weight:10, opacity:0.5}}).addTo(mymap);

					
					/*Zoom to searched Map feature*/
					mymap.fitBounds(lyr.getBounds());


					/*Bring to Front Pipeline Layer*/
					layerPipelines.bringToFront();


					/*Printing information of Searched Pipeline on SideBar*/
					$("#pipeline_information").html("<br>Category: "+att.pipeline_category+"<br>Pipeline DMA ID: "+att.pipeline_dma_id+"<br>Material: "+att.pipeline_material+"<br>Length: "+att.length+" m<br>Location: "+att.pipeline_location+"<br>Construction Method: "+att.pipeline_method);
				} else {
					$("#pipeline_error").html("Pipeline not found!");
				}
			});
		});


		/* Displaying New Feature addition form on Side-Bar */
		$("#btn_pipeline_form").click(function(){
			$("#new_pipeline_information").show();
		});


		/* Hiding New Feature addition form on Side-Bar */
		$("#btn_pipeline_cancel").click(function(){
			$("#new_pipeline_information").hide();
		});



		/*Catching attributes from Insert New Pipeline form - Pipelines*/
		$("#btn_pipeline_insert").click(function(){
			var pipeline_id = $("#new_pipeline_id").val();
			var pipeline_category = $("#pipeline_category").val();
			var pipeline_dma_id = $("#pipeline_dma_id").val();
			var pipeline_diameter = $("#pipeline_diameter").val();
			var pipeline_method = $("#pipeline_method").val();
			var pipeline_location = $("#pipeline_location").val();
			var pipeline_geometry = $("#pipeline_geometry").val();
			/*console.log(pipeline_id);*/



			/*Check for missing attributes from Insert New Pipeline form - Pipelines*/
			if (pipeline_id == "" || pipeline_category == "" || pipeline_dma_id == "" || pipeline_geometry == "") {
				$("#pipeline_status").html("Please fill all the values.");
			} else {
			/*Proceed to the AJAX request with all the attributes.*/
				$.ajax({
					url:'insert_data.php',
					data:{pipeline_id:pipeline_id,
						pipeline_category:pipeline_category,
						pipeline_dma_id:pipeline_dma_id,
						pipeline_diameter:pipeline_diameter,
						pipeline_method:pipeline_method,
						pipeline_location:pipeline_location,
						pipeline_geometry:pipeline_geometry,
						request:'pipelines'},

					type:'POST',
					success:function(response){
						if (response.trim().substr(0,5)=='ERROR') {
						console.log(response);
						$("#pipeline_status").html(response);
						} else {
							$("#pipeline_status").html("Pipeline added successfully!");
							load_pipelines(dma_id);


							/*Clearing the contents from the Insert New Pipeline Form*/
							$("#new_pipeline_id").val("");
							$("#pipeline_category").val("");
							$("#pipeline_dma_id").val("");
							$("#pipeline_diameter").val("");
							$("#pipeline_method").val("");
							$("#pipeline_location").val("");
							$("#pipeline_geometry").val("");
						}
					},
					error: function(xhr, status, error) {
						$("#pipeline_status").html(error);
					}
				});
			}
		});




		/*Refreshing data on the "Refresh" button click event*/
		$("#btn_pipeline_refresh").click(function(){
			load_pipelines(dma_id);
			/*Clearing the contents from the Insert New Valve Form*/
			$("#new_pipeline_id").val("");
			$("#pipeline_category").val("");
			$("#pipeline_dma_id").val("");
			$("#pipeline_diameter").val("");
			$("#pipeline_method").val("");
			$("#pipeline_location").val("");
			$("#pipeline_geometry").val("");
		});


/****************************************************************************************************************
****************************************************************************************************************/

		/* Loading Buildings data from PostgreSQL Remote Instance - Buildings*/
		function load_buildings(dma_id) {
			$.ajax({
				url:'load_data.php',
				data: {table:'buildings', dma_id:dma_id},
				type: 'POST',
				success: function(response) {
					if (response.trim().substr(0,5)=='ERROR') {
						console.log(response);
					} else {
						var jsnBuilding = JSON.parse(response);
						

						/*Removing Duplicate Pipeline Layer from WebMap using Layer Control*/
						if (layerBuildings) {
							layerBuildings.remove();
							control_layers.removeLayer(layerBuildings);
						}


						layerBuildings = L.geoJSON(jsnBuilding, {style:style_buildings, onEachFeature:process_buildings}).addTo(mymap);
						control_layers.addOverlay(layerBuildings, "Buildings");
					

						$("#building_id").autocomplete({	/*AutoComplete Building_Account_no*/
							source:buildings_array
						});
					}
				},
				error: function(xhr, status, error) {
					console.log("ERROR: "+error);
				}
			});

		}




		/*Applying Styles to Polygon Feature - Building*/
		function style_buildings (json) {
			var att = json.properties;
			var storey = att.building_storey;
			var color;
			var fill_color;
			var fill_opacity = 1;
			/*console.log(json);*/

			switch (att.building_category) {
				case 'Building':
					if (storey >= 10) {
						color = '#C0392B';
						fill_color = '#C0392B';
					} else if (storey >= 8) {
						color = '#CD6155';
						fill_color = '#CD6155'; 
					} else if (storey >= 5) {
						color = '#D98880';
						fill_color = '#D98880';
					} else if (storey >= 3) {
						color = '#E6B0AA';
						fill_color = '#E6B0AA';	
					} else {
						color = '#F2D7D5';
						fill_color = '#F2D7D5';
					}
					break;
				case 'Open Plot':
					color = '#808000';
					fill_color = '#808000';
					break;
				case 'Tin Shed':
					color = '#BDB76B';
					fill_color = '#BDB76B';
					fill_opacity = 0.8;
					break;
				case 'Under Construction':
					color = '#99A3A4';
					fill_color = '#99A3A4';
					fill_opacity = 0.8;
					break;
				default:
					color = 'black';
					fill_color = 'black';
					break;
			}
			return{color:color, fillColor:fill_color, fillOpacity:fill_opacity};
		}




		function process_buildings (json, lyr) {
			var att = json.properties;

			buildings_array.push(att.account_no);	/*To copy building to Temporary Layer.*/

			lyr.bindTooltip(`<div style="font-size: 12px;">Account Number: ${att.account_no}<br>Category: ${att.building_category}<br>Storey: ${att.building_storey}<br>Location: ${att.building_location}<br>Population: ${att.building_population}</div>`).bindPopup(

				`<div class="popup-container-building">

					<input type="hidden" name="building_database_id" class="updateBuilding" value='${att.building_database_id}'>
					<input type="hidden" name="account_no_old" class="updateBuilding" value='${att.account_no}'>

					<div class="popup-form-group" style="font-size:12px;">
						<label class="control-label popup-label">Account No.</label>
						<input type="text" class="form-control popup-input text-center updateBuilding" value='${att.account_no}' name="account_no">
					</div>

					<div class="popup-form-group" style="font-size:12px;">
						<label class="control-label popup-label">DMA ID</label>
						<input type="text" class="form-control popup-input text-center updateBuilding" value='${att.building_dma_id}' name="building_dma_id">
					</div>

					<div class="popup-form-group" style="font-size:12px;">
						<label class="control-label popup-label">Category</label>
						<input type="text" class="form-control popup-input text-center updateBuilding" value='${att.building_category}' name="building_category">
					</div>

					<div class="popup-form-group" style="font-size:12px;">
						<label class="control-label popup-label">Storey</label>
						<input type="number" class="form-control popup-input text-center updateBuilding" value='${att.building_storey}' name="building_storey">
					</div>

					<div class="popup-form-group" style="font-size:12px;">
						<label class="control-label popup-label">Population</label>
						<input type="number" class="form-control popup-input text-center updateBuilding" value='${att.building_population}' name="building_population">
					</div>

					<div class="popup-form-group" style="font-size:12px;">
						<label class="control-label popup-label">Location</label>
						<input type="text" class="form-control popup-input text-center updateBuilding" value='${att.building_location}' name="building_location">
					</div>

					<div class="popup-button-group">
						<button type="submit" class="btn btn-success popup-button" onclick='updateBuilding()'>Update</button>
						<button type="submit" class="btn btn-danger popup-button" onclick='deleteBuilding()'>Delete</button>
					</div>

				</div>`);
		}



		/*Developing Function to Update Existing Buildings*/
		function updateBuilding() {
			var jsn = returnFormData('updateBuilding');
			jsn.request = "buildings";

			Swal.fire({
				title: "Do you want to save the changes?",
				showDenyButton: true,
				showCancelButton: true,
				confirmButtonText: "Save",
				denyButtonText: `Don't save`
			}).then((result) => {
				if (result.isConfirmed) {
					$.ajax({
						url: 'update_data.php',
						data: jsn,
						type: 'POST',
						success: function(response){
							Swal.fire("Saved!", "", "success");
							console.log(response);
							load_buildings(dma_id);
						},
						error: function (error) {
							console.log("ERROR: "+error);
						}
					});

				} else if (result.isDenied) {
					Swal.fire("Changes are not saved", "", "info");
				}
			});
		}



		/*Developing Function to Delete Existing Buildings*/
		function deleteBuilding() {
			var jsn = returnFormData('updateBuilding');
			jsn.request = "buildings";

			Swal.fire({
				title: "Do you want to delete this Building?",
				showDenyButton: true,
				showCancelButton: true,
				confirmButtonText: "Delete",
				denyButtonText: `Don't Delete`
			}).then((result) => {
				if (result.isConfirmed) {
					$.ajax({
						url: 'delete_data.php',
						data: jsn,
						type: 'POST',
						success: function(response){
							Swal.fire("Building Deleted!", "", "success");
							load_buildings(dma_id);
						},
						error: function (error) {
							console.log("ERROR: "+error);
						}
					});

				} else if (result.isDenied) {
					Swal.fire("Building feature not deleted!", "", "info");
				}
			});
		}



		/*Starting jQuery to search for Buildings.*/
		$("#findBuilding").click(function(){
			var account_no = $("#building_id").val();
			
			returnLayerByAttribute("buildings", "account_no", account_no, function(lyr) {

				if (lyr) {
					var att = lyr.feature.properties;
					
					/*Removing old Search Marker*/
					if (lyrSearch) {
						lyrSearch.remove();
					}


					/*Adding New Layer to place Highlighter*/
					lyrSearch = L.geoJSON(lyr.toGeoJSON(), {style:{color:'red', weight:10, opacity:1, fillOpacity:0}}).addTo(mymap);

					
					/*Zoom to searched Map feature*/
					mymap.fitBounds(lyr.getBounds());


					/*Printing information of Searched Building on SideBar*/
					$("#building_information").html("<br>Category: "+att.building_category+"<br>Storey: "+att.building_storey+"<br>Population: "+att.building_population+"<br>Location: "+att.building_location+"<br>DMA ID: "+att.building_dma_id);
				} else {
					$("#building_error").html("Building not found!");
				}
			});
		});


		/* Displaying New Feature addition form on Side-Bar */
		$("#btn_building_form").click(function(){
			$("#new_building_information").show();
		});


		/* Hiding New Feature addition form on Side-Bar */
		$("#btn_building_cancel").click(function(){
			$("#new_building_information").hide();
		});



		/*Catching attributes from Insert New Building form - Buildings*/
		$("#btn_building_insert").click(function(){
			var account_no = $("#new_building_id").val();
			var building_category = $("#building_category").val();
			var building_dma_id = $("#building_dma_id").val();
			var building_storey = $("#building_storey").val();
			var building_population = $("#building_population").val();
			var building_location = $("#building_location").val();
			var building_geometry = $("#building_geometry").val();
			/*console.log(building_id);*/


			/*Check for missing attributes from Insert New Building form - Buildings*/
			if (account_no == "" || building_category == "" || building_dma_id == "" || building_storey == "" || building_population == "" || building_location == "" || building_geometry == "") {
				$("#building_status").html("Please fill all the values.");
			} else {
			/*Proceed to the AJAX request with all the attributes.*/
				$.ajax({
					url:'insert_data.php',
					data:{account_no:account_no, 
						building_category:building_category, 
						building_dma_id:building_dma_id, 
						building_storey:building_storey, 
						building_population:building_population, 
						building_location:building_location, 
						building_geometry:building_geometry,
						request:'buildings'},

					type:'POST',
					success:function(response){
						if (response.trim().substr(0,5)=='ERROR') {
						console.log(response);
						$("#building_status").html(response);
						} else {
							$("#building_status").html("Building added successfully!");
							load_buildings(dma_id);


							/*Clearing the contents from the Insert New Building Form*/
							$("#new_building_id").val("");
							$("#building_category").val("");
							$("#building_dma_id").val("");
							$("#building_storey").val("");
							$("#building_population").val("");
							$("#building_location").val("");
							$("#building_geometry").val("");
						}
					},
					error: function(xhr, status, error) {
						$("#building_status").html(error);
					}
				});
			}
		});



		/*Refreshing data on the "Refresh" button click event*/
		$("#btn_building_refresh").click(function(){
			load_buildings(dma_id);
			/*Clearing the contents from the Insert New Building Form*/
			$("#new_building_id").val("");
			$("#building_category").val("");
			$("#building_dma_id").val("");
			$("#building_storey").val("");
			$("#building_population").val("");
			$("#building_location").val("");
			$("#building_geometry").val("");
		});



/****************************************************************************************************************
****************************************************************************************************************/

		/*Raster Data*/

		function load_rasterdata(dma_id) {
			var path = 'raster_data/'+dma_id+'/{z}/{x}/{y}.png';

			if(raster_data) {
				raster_data.remove();
				control_layers.removeLayer(raster_data);
			}

			raster_data = L.tileLayer(path, {tms:1, opacity:1, attribution:"", maxZoom:22});

			control_layers.addOverlay(raster_data, "Drone Image");

		}


/*****************************************************************************************************************
****************************************************************************************************************
****************************************************************************************************************
*****************************************************************************************************************/

		/*General Functions*/
		/* Function to Search a value from PostgreSQL the data table*/
		function returnLayerByAttribute (table, field, value, callback) {
			$.ajax({
				url:'find_data.php',
				data: {table:table, field:field, value:value},
				type: 'POST',
				success: function(response) {
					if (response.trim().substr(0,5)=='ERROR') {
						console.log(response);
						callback(false);
					} else {
						var jsn = JSON.parse(response);
						var layer = L.geoJSON(jsn);
						var layers = layer.getLayers();

						if (layers.length>0) {
							callback(layers[0]);
						} else {
							callback(false);
						}
					}
				},
				error: function(xhr, status, error) {
					console.log("ERROR: "+error);
				}
			})
		}



		/*Function to return values from data table*/
		function returnFormData(inpClass) {
			var objFormData = {};

			$("."+inpClass).each(function(){
				objFormData[this.name] = this.value;
			});

			return objFormData;
		}


	</script>

</body>
</html>