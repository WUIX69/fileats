<?php include_once __DIR__ . '/../../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= shared('elements/meta'); ?> <!-- rcs Meta -->
    <title>Discover Recipe (View) - Fil Eats</title>
    <?= shared('elements/styles'); ?> <!-- rcs Styles -->
    <?= featured('landing/recipe-view/styles'); ?>
</head>

<body>

    <div class="shared-standalone-cont">
        <?= shared('layouts/loader/window'); ?>
    </div>

    <div class="site-cont">
        <!-- Site Header -->
        <?= featured('landing/shared/layouts/header'); ?>

        <main class="site-main">
            <?= shared('features/recipe-view/components/recipe'); ?>
        </main>

        <!-- Site Footer -->
        <?= featured('landing/shared/layouts/footer'); ?>
    </div>

    <?= shared('elements/scripts'); ?> <!-- rcs Scripts -->
    <?= featured('landing/recipe-view/scripts'); ?>

</body>

</html>