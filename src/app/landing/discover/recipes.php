<?php include_once __DIR__ . '/../../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= shared('elements/meta'); ?> <!-- rcs Meta -->
    <title>Dashboard - Fil Eats</title>
    <?= shared('elements/styles'); ?> <!-- rcs Styles -->
    <?= featured('landing/recipes/styles'); ?>
</head>

<body>

    <div class="shared-standalone-cont">
        <?= shared('layouts/loader/window'); ?>
    </div>

    <div class="site-cont">
        <!-- Site Header -->
        <?= featured('landing/shared/layouts/header'); ?>

        <main class="site-main">
            <!-- Hero section -->
            <?= featured('landing/shared/components/hero'); ?>

            <!-- Header Section -->
            <?= featured('landing/recipes/components/header') ?>

            <!-- Recipes Section -->
            <?= featured('landing/recipes/components/recipes') ?>
        </main>

        <!-- Footer -->
        <?= featured('landing/shared/layouts/footer'); ?>
    </div>

    <?= shared('elements/scripts'); ?> <!-- rcs Scripts -->
    <?= featured('landing/recipes/scripts'); ?>

</body>

</html>