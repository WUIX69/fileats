<?php include_once __DIR__ . '/../../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= shared('elements/meta'); ?> <!-- rcs Meta -->
    <title>Discover Chefs (View) - Fil Eats</title>
    <?= shared('elements/styles'); ?> <!-- rcs Styles -->
    <?= featured('user/chef-view/styles'); ?>
</head>

<body>

    <div class="shared-standalone-cont">
        <?= shared('layouts/loader/window'); ?>
    </div>

    <div class="site-cont">
        <!-- Site Header -->
        <?= featured('user/shared/layouts/header'); ?>

        <main class="site-main">
            <!-- Chef Profile Header -->
            <?= shared('components/ui/chef-view/profile'); ?>

            <!-- Chef Content Tabs -->
            <?= shared('components/ui/chef-view/overview'); ?>
        </main>

    </div>

    <?= shared('elements/scripts'); ?> <!-- rcs Scripts -->
    <?= featured('user/chef-view/scripts'); ?>

</body>

</html>