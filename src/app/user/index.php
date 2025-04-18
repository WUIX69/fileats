<?php include_once __DIR__ . '/../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?= shared('elements/meta'); ?>
	<title>Dashboard - Fil Eats</title>
	<?= shared('elements/styles'); ?>
	<?= featured('user/dashboard/styles'); ?>
</head>

<body>

	<div class="shared-standalone-cont">
		<?= shared('layouts/loader/window'); ?>
	</div>

	<div class="site-cont">
		<!-- Site Header -->
		<?= featured('user/shared/layouts/header'); ?>

		<main class="site-main">
			<!-- Header(Section) -->
			<?= featured('user/dashboard/components/header'); ?>

			<!-- Stats -->
			<?= featured('user/dashboard/components/stats'); ?>

			<!-- Charts -->
			<?= featured('user/dashboard/components/charts'); ?>

			<!-- Trending Recipes -->
			<?= featured('user/dashboard/components/trending'); ?>
		</main>
	</div>

	<?= shared('elements/scripts'); ?>
	<?= featured('user/dashboard/scripts'); ?>
</body>

</html>