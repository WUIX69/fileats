<?php include_once __DIR__ . '/../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= shared('elements/meta'); ?>
    <title>Settings - Fil Eats</title>
    <?= shared('elements/styles'); ?>
    <?= featured('user/settings/styles'); ?>
</head>

<body>

    <div class="shared-standalone-cont">
        <?= shared('layouts/loader/window'); ?>
    </div>

    <div class="site-cont">
        <!-- Site header -->
        <?= featured('user/shared/layouts/header'); ?>

        <main class="site-main">
            <!-- Section header -->
            <?= featured('user/settings/components/header'); ?>

            <!-- Settings section -->
            <?= featured('user/settings/components/settings'); ?>
        </main>
    </div>

    <?= shared('elements/scripts'); ?>
    <?= featured('user/settings/scripts'); ?>

</body>

</html>