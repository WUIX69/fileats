<?php include_once __DIR__ . '/../../../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= shared('elements/meta'); ?> <!-- rcs Meta -->
    <title>Dashboard - Fil Eats</title>
    <?= shared('elements/styles'); ?> <!-- rcs Styles -->
    <?= featured('users/recipes/styles'); ?>
</head>

<body>

    <div class="site-cont">
        <!-- Site Header -->
        <?= featured('users/shared/layouts/header'); ?>

        <main class="site-main">
            <!-- Header Section -->
            <?= featured('users/recipes/components/header') ?>

            <!-- Recipes Section -->
            <?= featured('users/recipes/components/recipes') ?>
        </main>
    </div>

    <?= shared('elements/scripts'); ?> <!-- rcs Scripts -->
    <?= featured('users/recipes/scripts'); ?>

</body>

</html>