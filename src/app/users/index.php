<?php include_once __DIR__ . '/../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?= shared('elements/meta'); ?>
	<title>Dashboard - Fil Eats</title>
	<?= shared('elements/styles'); ?>
	<?= featured('users/dashboard/styles'); ?>
</head>

<body>

	<div class="shared-standalone-cont">
		<?= shared('layouts/loader/window'); ?>
	</div>

	<div class="site-cont">
		<!-- Site Header -->
		<?= featured('users/shared/layouts/header'); ?>

		<main class="site-main">
			<!-- Header(Section) -->
			<?= featured('users/dashboard/components/header'); ?>

			<!-- Stats -->
			<?= featured('users/dashboard/components/stats'); ?>

			<!-- Charts -->
			<?= featured('users/dashboard/components/charts'); ?>

			<!-- Trending Recipes -->
			<?= featured('users/dashboard/components/trending'); ?>
		</main>
	</div>

	<?= shared('elements/scripts'); ?>
	<?= featured('users/dashboard/scripts'); ?>
</body>

</html>