<section id="settings" class="pt-3 pb-5">
    <div class="container-xl">
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card settings-nav">
                    <div class="nav flex-column nav-pills card-body" role="tablist">
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#profile">
                            <i class="bi bi-person-fill"></i>Profile
                        </button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#account">
                            <i class="bi bi-shield-lock-fill"></i>Account
                        </button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#notifications">
                            <i class="bi bi-bell-fill"></i>Notifications
                        </button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#preferences">
                            <i class="bi bi-sliders"></i>Preferences
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="tab-content p-4 card-body">
                        <!-- Profile Settings -->
                        <?= featured('user/settings/components/tab/profile'); ?>

                        <!-- Account Settings -->
                        <?= featured('user/settings/components/tab/account'); ?>

                        <!-- Notification Settings -->
                        <?= featured('user/settings/components/tab/notification'); ?>

                        <!-- Preferences Settings -->
                        <?= featured('user/settings/components/tab/preferences'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>