<!doctype html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title; ?> &mdash; PETAPia</title>
		<?php foreach ($styles as $file) echo HTML::style($file), PHP_EOL ?>
	</head>
	<body>
		<header class="navbar" role="banner">
		    <div class="navbar-inner">
		        <div class="container">
		            <a href="/" class="brand">PETAPia</a>
					<ul role="navigation" class="nav">
						<li>
							<a href="/programmer/new">New Programmer</a>
						</li>
					</ul>
		        </div>
		    </div>
		</header>

		<?php echo $content; ?>

		<?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
	</body>
</html>
