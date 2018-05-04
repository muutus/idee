<?php
	$_DSH_MODE = true;
	require( $_SERVER['DOCUMENT_ROOT'] . '/core/core.php' );

	include DSHPATH.'include/header.php';
?>
<body class="wrapper bg-light text-dark">
	<div id="login-wrapper" class="col-md-12">	
		<form id="login-form" class="col-md-3 login">
			<div class="title">
				system
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
  						<span class="input-group-text"><i class="fas fa-user" aria-hidden="true"></i></span>
  					</div>
  					<input type="text" class="form-control" name="login-user" placeholder="Username" aria-label="Username"/>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-lock" aria-hidden="true"></i></span>
					</div>
  					<input type="password" class="form-control" name="login-pass" placeholder="Password" aria-label="Password"/>
				</div>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary btn-lg btn-block" value="Login"/>
			</div>
			<div id="login-error" class="alert alert-danger">
				Ha ocurrido un error al iniciar sesión, comprueba que el nombre de usuario y contraseña sean correctos
			</div>
		</form>		
	</div>
</body>
<script>
$('input').keyup(function(e){
	if( e.keycode == 13 || e.which == 13 )
	$('.submit-but').trigger( 'click' );
});

</script>
<?php
	include DSHPATH.'include/footer.php';
?>
