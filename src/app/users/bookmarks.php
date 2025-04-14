<?php include_once __DIR__ . '/../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= shared('elements/meta'); ?> <!-- rcs Meta -->
    <title>Bookmarks - Fil Eats</title>
    <?= shared('elements/styles'); ?> <!-- rcs Styles -->
    <?= featured('users/bookmarks/styles'); ?> <!-- bookmarks Styles -->
</head>

<body>

    <div class="shared-standalone-cont">
        <?= shared('layouts/loader/window'); ?> <!-- Window loader -->
    </div>

    <div class="site-cont">
        <!-- Site Header -->
        <?= featured('users/shared/layouts/header'); ?>

        <main class="site-main">
            <!-- Header(Section) -->
            <?= featured('users/bookmarks/components/header'); ?>

            <!-- Bookmarks Grid -->
            <?= featured('users/bookmarks/components/bookmarks-grid'); ?>
        </main>
    </div>

    <?= shared('elements/scripts'); ?> <!-- rcs Scripts -->
    <?= featured('users/shared/scripts'); ?> <!-- bookmarks Scripts -->

</body>

</html>