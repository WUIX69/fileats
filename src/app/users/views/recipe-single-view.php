<?php include_once __DIR__ . '/../../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= shared('elements/meta'); ?> <!-- rcs Meta -->
    <title>Recipe (View) - Fil Eats</title>
    <?= shared('elements/styles'); ?> <!-- rcs Styles -->
    <?= featured('users/recipe-view/styles'); ?>
</head>

<body>

    <div class="shared-standalone-cont">
        <?= shared('layouts/loader/window'); ?>
    </div>

    <div class="site-cont">
        <!-- Site Header -->
        <?= featured('users/shared/layouts/header'); ?>

        <main class="site-main">
            <?= shared('components/ui/recipe-view/recipe'); ?>
        </main>

    </div>

    <?= shared('elements/scripts'); ?> <!-- rcs Scripts -->
    <?= featured('users/recipe-view/scripts'); ?>

</body>

</html>