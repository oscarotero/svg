<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SVG</title>

		<link rel="stylesheet" type="text/css" href="styles.dist.css">
	</head>
	<body>
		<?php
		foreach(glob('src/*/*.svg') as $svg) {
			echo file_get_contents($svg);
		}
		?>
	</body>
</html>
