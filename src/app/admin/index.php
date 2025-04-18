<?php include_once __DIR__ . '/../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= shared('elements/meta'); ?>
    <title>Admin Dashboard</title>
    <?= shared('elements/styles'); ?>
</head>

<body>

    <div class="shared-standalone-cont">
        <?= shared('layouts/loader/window'); ?>
        <?= shared('components/modal/archieve-flyout'); ?>
        <?= shared('components/modal/reminder-modal'); ?>
    </div>

    <div class="container-body pusher">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-auto">
                <?= featured('admin/shared/layouts/sidebar'); ?>
            </div>

            <!-- Main Content -->
            <div class="col">
                <main class="container-main">
                    <h1>Dashboard</h1>

                    <!-- Stats Cards -->
                    <?= featured('admin/dashboard/components/stat-cards'); ?>

                    <!-- New Users -->
                    <?= featured('admin/dashboard/components/new-users'); ?>

                    <!-- Recent Orders -->
                    <?= featured('admin/dashboard/components/recent-orders'); ?>

                </main>
            </div>

            <!-- Right Section -->
            <div class="col-lg-3">
                <?= featured('admin/dashboard/components/right-section'); ?>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <?= shared('elements/scripts'); ?>
    <?= featured('admin/dashboard/scripts'); ?>
</body>

</html>