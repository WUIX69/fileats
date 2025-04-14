<?php include_once __DIR__ . '/../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?= shared('elements/meta'); ?>
	<title>Fil Eats</title>
	<?= shared('elements/styles'); ?>
	<?= featured('landing/about/styles'); ?>
</head>

<body>

	<div class="site-cont">
		<!-- Site Header -->
		<?= featured('landing/shared/layouts/header'); ?>

		<main class="site-main">
			<!-- Header section -->
			<?= featured('landing/shared/components/hero'); ?>

			<?= featured('landing/about/components/about'); ?>

			<?= featured('landing/about/components/testimonials'); ?>

			<?= featured('landing/shared/components/join'); ?>
		</main>

		<!-- Footer -->
		<?= featured('landing/shared/layouts/footer'); ?>
	</div>

	<!-- Scripts -->
	<?= shared('elements/scripts'); ?>
	<?= featured('landing/about/scripts'); ?>

</body>

</html>