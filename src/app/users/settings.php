<?php include_once __DIR__ . '/../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= shared('elements/meta'); ?>
    <title>Settings - Fil Eats</title>
    <?= shared('elements/styles'); ?>
    <?= featured('users/settings/styles'); ?>
</head>

<body>

    <div class="shared-standalone-cont">
        <?= shared('layouts/loader/window'); ?>
    </div>

    <div class="site-cont">
        <!-- Site header -->
        <?= featured('users/shared/layouts/header'); ?>

        <main class="site-main">
            <!-- Section header -->
            <?= featured('users/settings/components/header'); ?>

            <!-- Settings section -->
            <?= featured('users/settings/components/settings'); ?>
        </main>
    </div>

    <?= shared('elements/scripts'); ?>
    <?= featured('users/settings/scripts'); ?>

</body>

</html>