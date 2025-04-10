<?php include_once __DIR__ . '/../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?= shared('elements/meta'); ?>
	<title>Fil Eats</title>
	<?= shared('elements/styles'); ?>
	<?= featured('landing/home/styles'); ?>
</head>

<body>

	<div class="shared-standalone-cont">
		<?= shared('layouts/loader/window'); ?>
	</div>

	<div class="site-cont">
		<!-- Header -->
		<?= featured('landing/shared/layouts/header'); ?>

		<main class="site-main">
			<?= featured('landing/home/components/carousel'); ?>

			<?= featured('landing/home/components/recipes'); ?>

			<?= featured('landing/home/components/spec'); ?>

			<?= featured('landing/shared/components/join'); ?>

			<?= featured('landing/home/components/choose'); ?>

			<?= featured('landing/home/components/news'); ?>

			<?= featured('landing/home/components/trend'); ?>
		</main>

		<!-- Footer -->
		<?= featured('landing/shared/layouts/footer'); ?>
	</div>

	<!-- Scripts -->
	<?= shared('elements/scripts'); ?>
	<?= featured('landing/home/scripts'); ?>
</body>

</html>