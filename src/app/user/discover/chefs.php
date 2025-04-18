<?php include_once __DIR__ . '/../../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= shared('elements/meta'); ?> <!-- rcs Meta -->
    <title>Cooking</title>
    <?= shared('elements/styles'); ?> <!-- rcs Styles -->
    <?= featured('user/chefs/styles'); ?>
</head>

<body>

    <div class="shared-standalone-cont">
        <?= shared('layouts/loader/window'); ?> <!-- Window loader -->
    </div>

    <div class="site-cont">
        <!-- Site Header -->
        <?= featured('user/shared/layouts/header'); ?>

        <main class="site-main">
            <!-- Header Section -->
            <?= featured('user/chefs/components/header'); ?>

            <!-- Chefs Grid -->
            <?= shared('components/ui/chefs/chefs'); ?>
        </main>
    </div>

    <?= shared('elements/scripts'); ?> <!-- rcs Scripts -->
    <?= featured('user/chefs/scripts'); ?>

</body>

</html>