<?php include_once __DIR__ . '/../../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= shared('elements/meta'); ?> <!-- rcs Meta -->
    <title>My Recipes - Fil Eats</title>
    <?= shared('elements/styles'); ?> <!-- rcs Styles -->
    <?= featured('user/recipe-mine/styles'); ?>
</head>

<body>

    <div class="shared-standalone-cont">
        <?= shared('layouts/loader/window'); ?> <!-- Window loader -->
    </div>

    <div class="site-cont">
        <!-- Site Header -->
        <?= featured('user/shared/layouts/header'); ?>

        <main class="site-main">
            <!-- Page Header -->
            <?= featured('user/recipe-mine/components/header'); ?>

            <!-- Recipes Grid -->
            <?= featured('user/recipe-mine/components/recipes'); ?>
        </main>
    </div>

    <?= shared('elements/scripts'); ?> <!-- rcs Scripts -->
    <?= featured('user/recipe-mine/scripts'); ?>

</body>

</html>