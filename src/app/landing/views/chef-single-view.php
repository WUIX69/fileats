<?php include_once __DIR__ . '/../../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= shared('elements/meta'); ?> <!-- rcs Meta -->
    <title>Discover Chefs (View) - Fil Eats</title>
    <?= shared('elements/styles'); ?> <!-- rcs Styles -->
    <?= featured('landing/chef-view/styles'); ?>
</head>

<body>

    <div class="shared-standalone-cont">
        <?= shared('layouts/loader/window'); ?>
    </div>

    <div class="site-cont">
        <!-- Site Header -->
        <?= featured('landing/shared/layouts/header'); ?>

        <main class="site-main">
            <!-- Chef Profile Header -->
            <?= featured('landing/chef-view/components/profile'); ?>

            <!-- Chef Content Tabs -->
            <?= featured('landing/chef-view/components/overview'); ?>
        </main>

        <!-- Site Footer -->
        <?= featured('landing/shared/layouts/footer'); ?>
    </div>

    <?= shared('elements/scripts'); ?> <!-- rcs Scripts -->
    <?= featured('landing/chef-view/scripts'); ?>

</body>

</html>