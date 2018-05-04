<nav class="navbar nav-top navbar-dark">		
 		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
   			<span class="navbar-toggler-icon"></span>
 		</button>
 		<?php if( !empty( $_APP_ ) ) : ?>
 			<a class="navbar-brand plug" title="<?php echo $_APP_->getTitle() ?>" href="plugs/<?php echo $_APP_->getName() ?>"><?php echo $_APP_->getName() ?></a>
 		<?php endif; ?>
 		<a class="navbar-brand" href="">koods</a>
</nav>

<?php Pipes::flow('navi_top') ?>

<div class="collapsed collapse" id="menu">
	<ul class="navbar-nav">
		<li class="nav-item <?php echo (empty( $_APP_ ) )?'active':'' ?>">
			<a class="nav-link" href=""><i class="fa fa-home" aria-hidden="true"></i> Home</a>
		</li>
		
		<?php Pipes::flow('menu_root', $_ID_APP )?>	
		
		<div class="dropdown-divider"></div>
		
		<?php Pipes::flow( 'menu_plugs', $_ID_APP )?>
		
		<div class="dropdown-divider"></div>
				
		<?php Pipes::flow( 'menu_settings', $_ID_APP )?>
		
		
		
		<!-- 
		<li class="nav-item dropdown">
       		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         			<i class="fa fa-user" aria-hidden="true"></i> Usuarios
       		</a>
		    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">		    
			    <a class="dropdown-item" href="nuevos.xhtml"><i class="fa fa-plus" aria-hidden="true"></i> Nuevo</a>			  
		    	<a class="dropdown-item" href="usuarios.xhtml"><i class="fa fa-search" aria-hidden="true"></i> Buscar</a>
	        </div>
		</li>
	
		<div class="dropdown-divider"></div>
		<li class="nav-item">
  			<a class="nav-link" href="Door"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
		</li>	
		-->
	</ul>
</div>