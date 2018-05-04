<!doctype html>
<html lang="es">
  <head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    
    <title>Hello World</title>
    
    <meta name="robots" content="noindex, nofollow">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
    <base href="/dashboard/"/>
    
    <style>
    <?php	
        echo STYLE::print_file_vendor('bootstrap', 'bootstrap.min.css');
       
		echo STYLE::compile_theme('default');
	?>
	</style>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
	
	<script src="<?php echo SITE::url() ?>core/vendor/jquery/js/jquery-3.3.1.min.js"></script>

  	
  </head>