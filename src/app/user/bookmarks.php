<?php include_once __DIR__ . '/../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= shared('elements/meta'); ?> <!-- rcs Meta -->
    <title>Bookmarks - Fil Eats</title>
    <?= shared('elements/styles'); ?> <!-- rcs Styles -->
    <?= featured('user/bookmarks/styles'); ?> <!-- bookmarks Styles -->
</head>

<body>

    <div class="shared-standalone-cont">
        <?= shared('layouts/loader/window'); ?> <!-- Window loader -->
    </div>

    <div class="site-cont">
        <!-- Site Header -->
        <?= featured('user/shared/layouts/header'); ?>

        <main class="site-main">
            <!-- Header(Section) -->
            <?= featured('user/bookmarks/components/header'); ?>

            <!-- Bookmarks Grid -->
            <?= featured('user/bookmarks/components/bookmarks-grid'); ?>
        </main>
    </div>

    <?= shared('elements/scripts'); ?> <!-- rcs Scripts -->
    <?= featured('user/shared/scripts'); ?> <!-- bookmarks Scripts -->

</body>

</html>