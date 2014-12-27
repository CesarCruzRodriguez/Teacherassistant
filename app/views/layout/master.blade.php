<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation</title>
    <!-- <link rel="stylesheet" href="packages/stylesheets/app.css" /> -->
    {{ HTML::style("packages/stylesheets/app.css") }}
    <script src="packages/bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>
	<div class="row">
		<div class="large-12 columns">
			<h1>Teacher Assistant</h1>
		</div>		
	</div>
	<div class="contain-to-grid">
		
			<nav class="top-bar" data-topbar role="navigation">
				<ul class="title-area">
					<li class="name">
						<h1><a href="/">Inicio</a></h1>
					</li>
					<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
					<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
				</ul>
					
			<section class="top-bar-section">
					<!-- Left Nav Section -->
				<ul class="left">
					<li><a href="{{ URL::to('profesor') }}">Profesores</a></li>
					<li><a href="#">Asignaturas</a></li>
					<li><a href="#">Cursos</a></li>
					<li><a href="#">Alumnos</a></li>
					<!-- <li class="has-dropdown">
						<a href="#">Dropdown</a>
						<ul class="dropdown">
							<li><a href="#">dropdown 1</a></li>
							<li><a href="#">dropdown 2</a></li>
						</ul>
					</li> -->
				</ul>
					<!-- Right Nav Section -->
				<ul class="right">
					<li><a href="#">Administración</a></li>
					<li><a href="teachers/login">Log-in</a></li>
				</ul>
			</section>
			</nav>
		
	</div>
	<div class="row">
		<div class="large-12 columns">
			@yield('content')
		</div>
	</div>

    <script src="packages/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="packages/bower_components/foundation/js/foundation.min.js"></script>
    <script src="packages/js/app.js"></script>
  </body>
</html>