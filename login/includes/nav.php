<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="">
				<span class="sr-only">PDVSA</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand"></a>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="index.php">Inicio</a>
					</li>
					<?php if (logged_in()):?>
					<li>
						<a href="admin.php">Administración</a>
					</li>
					<li>
						<a href="logout.php">Cerrar Sesión</a>
					</li>
					<?php endif; ?>
				</ul>
			</div><!-- /.nav-collapse-->
		</div>
	</div>
</nav>