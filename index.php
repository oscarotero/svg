<?php include "Svg.php"; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SVG</title>

		<link rel="stylesheet" type="text/css" href="styles.dist.css">
	</head>
	<body>
		<div>
			<?= Svg::square('aboutme') ?>
			<?= Svg::square('behance') ?>
			<?= Svg::square('facebook') ?>
			<?= Svg::square('github') ?>
			<?= Svg::square('googleplus') ?>
			<?= Svg::square('linkedin') ?>
			<?= Svg::square('nodejs') ?>
			<?= Svg::square('twitter') ?>
		</div>

		<div>
			<?= Svg::square('aboutme', 'is-reversed') ?>
			<?= Svg::square('behance', 'is-reversed') ?>
			<?= Svg::square('facebook', 'is-reversed') ?>
			<?= Svg::square('github', 'is-reversed') ?>
			<?= Svg::square('googleplus', 'is-reversed') ?>
			<?= Svg::square('linkedin', 'is-reversed') ?>
			<?= Svg::square('nodejs', 'is-reversed') ?>
			<?= Svg::square('twitter', 'is-reversed') ?>
		</div>

		<div>
			<?= Svg::logo('aboutme') ?>
			<?= Svg::logo('behance') ?>
			<?= Svg::logo('linkedin') ?>
			<?= Svg::logo('nodejs') ?>
		</div>

		<div>
			<?= Svg::logo('aboutme', 'is-reversed') ?>
			<?= Svg::logo('behance', 'is-reversed') ?>
			<?= Svg::logo('linkedin', 'is-reversed') ?>
			<?= Svg::logo('nodejs', 'is-reversed') ?>
		</div>
	</body>
</html>
