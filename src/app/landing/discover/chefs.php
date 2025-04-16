<?php include_once __DIR__ . '/../../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= shared('elements/meta'); ?> <!-- rcs Meta -->
    <title>Discover Chefs - Fil Eats</title>
    <?= shared('elements/styles'); ?> <!-- rcs Styles -->
    <?= featured('landing/chefs/styles'); ?>
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
            <?= featured('landing/chefs/components/header'); ?>

            <!-- Chefs Grid -->
            <?= shared('components/ui/chefs/chefs'); ?>
        </main>

        <!-- Footer -->
        <?= featured('landing/shared/layouts/footer'); ?>
    </div>

    <?= shared('elements/scripts'); ?> <!-- rcs Scripts -->
    <?= featured('landing/chefs/scripts'); ?>

</body>

</html>