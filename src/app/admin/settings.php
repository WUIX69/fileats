<?php include_once __DIR__ . '/../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= shared('elements/meta'); ?>
    <title>Settings</title>
    <?= shared('elements/styles'); ?>
    <style>
        main .account-settings .section-wrapper {
            margin-top: 1.3rem !important;
        }

        main .account-settings .section-wrapper .section-informative-header {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            flex-direction: column;
            gap: 0.4rem;
        }

        main .account-settings .section-wrapper .section-divider {
            height: 2px;
            background-color: var(--color-background);
            margin-top: 1.2rem;
            margin-bottom: 1.3rem;
        }

        main .account-settings .section-wrapper .section-informative-header .title {
            font-size: 1.45rem;
            font-weight: 600;
        }

        main .account-settings .section-wrapper .section-informative-header .description {
            color: var(--color-dark-variant) !important;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .ui.form .field .add-url-btn {
            background: var(--color-background) !important;
            color: var(--color-dark-variant) !important;
            border: 1px solid rgba(0, 0, 0, 0.1) !important;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 0.4rem;
            font-size: 0.7rem !important;
        }
    </style>
</head>

<body>

    <div class="shared-standalone-cont">
        <?= shared('layouts/loader/window'); ?>
    </div>


    <div class="container-body pusher">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-auto">
                <?= featured('admin/shared/layouts/sidebar'); ?>
            </div>

            <div class="col">
                <main class="container-main">
                    <h1>Account Settings</h1>

                    <!-- Account Settings -->
                    <div class="section-container account-settings">
                        <div class="section-wrapper box">
                            <div class="section-informative-header">
                                <div class="title">Profile</div>
                                <div class="description">This is how others will see you on the site.</div>
                            </div>
                            <div class="section-divider"></div>
                            <form class="ui form">
                                <div class="field">
                                    <label>Username</label>
                                    <input class="ui input" type="text" placeholder="Enter your username">
                                    <div class="description">This is your public display name. It can be your
                                        real name
                                        or a pseudonym. You
                                        can only change this once every 30 days.</div>
                                </div>
                                <div class="field">
                                    <label>Password</label>
                                    <input class="ui input" type="password" placeholder="Enter new password">
                                    <div class="description">Your password must be at least 8 characters long and
                                        contain
                                        at least one
                                        uppercase letter, one lowercase letter, and one number.</div>
                                </div>
                                <div class="field">
                                    <label>Email Address</label>
                                    <input class="ui input" type="email" placeholder="Enter your email">
                                    <div class="description">You can manage verified email addresses in your email
                                        settings.</div>
                                </div>
                                <div class="field">
                                    <label>Bio</label>
                                    <textarea class="ui input" placeholder="Enter your bio"></textarea>
                                    <div class="description">Tell us about yourself. You can @mention other users and
                                        organizations to link to them.</div>
                                </div>
                                <div class="field">
                                    <label>URLs</label>
                                    <div class="description">Add links to your website, blog, or social media profiles.
                                    </div>
                                    <div class="url-inputs">
                                        <input class="ui input" type="text" placeholder="Enter your URLs">
                                        <input class="ui input" type="text" placeholder="Enter your URLs">
                                        <button type="button" class="ui mini basic button add-url-btn"
                                            style="margin: 0 !important; width: 100px !important;"><i
                                                class="add icon"></i>
                                            Add
                                            URL</button>
                                    </div>
                                </div>
                                <div class="actions mt-4">
                                    <button class="ui primary button" type="submit">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Notification Preferences -->
                    <!-- <div class="section-container">
                        <h2>Notification Preferences</h2>
                        <div class="section-wrapper box">
                            <div class="ui toggle checkbox">
                                <input type="checkbox" id="email-notifications">
                                <label>Email Notifications</label>
                            </div>
                            <div class="ui toggle checkbox">
                                <input type="checkbox" id="push-notifications">
                                <label>Push Notifications</label>
                            </div>
                        </div>
                    </div> -->

                    <!-- Theme Settings -->
                    <!-- <div class="section-container">
                        <h2>Theme Settings</h2>
                        <div class="section-wrapper box">
                            <div class="ui toggle checkbox">
                                <input type="checkbox" id="dark-mode">
                                <label>Dark Mode</label>
                            </div>
                        </div>
                    </div> -->
                </main>
            </div>

            <!-- Right Section -->
            <div class="col-lg-3">
                <div class="right-section">
                    <!-- Nav -->
                    <div class="nav">
                        <div class="dark-mode-toggle">
                            <span class="material-icons-sharp light active">
                                light_mode
                            </span>
                            <span class="material-icons-sharp dark">
                                dark_mode
                            </span>
                        </div>
                        <div class="profile">
                            <div class="info">
                                <span>Hey, <b>Jonathan</b></span>
                                <small class="text-muted">Admin</small>
                            </div>
                            <div class="profile-photo">
                                <img class="rounded-circle" width="37"
                                    src="<?= asset('img/profiles/profile.jpg'); ?>" />
                            </div>
                        </div>
                    </div>
                    <!-- End of Nav -->

                    <div class="system-info box">
                        <div class="logo">
                            <img class="rounded-circle" width="140" src="<?= asset('img/logo.jpg'); ?>" />
                        </div>
                        <div class="info">
                            <h2>Lorem</h2>
                            <label>Lorem ipsum dolor</label>
                        </div>
                    </div>

                    <div class="reminders">
                        <div class="header">
                            <h2 class="mt-2">Reminders</h2>
                            <span class="material-icons-sharp">
                                notifications_none
                            </span>
                        </div>

                        <div class="notification box-tiny">
                            <div class="content">
                                <span class="material-icons-sharp icon">
                                    volume_up
                                </span>
                                <div class="info">
                                    <h3>Workshop</h3>
                                    <small class="text_muted">
                                        08:00 AM - 12:00 PM
                                    </small>
                                </div>
                            </div>
                            <div class="details">
                                <span class="material-icons-sharp">
                                    more_vert
                                </span>
                            </div>
                        </div>

                        <div class="notification box-tiny deactive">
                            <div class="content">
                                <span class="material-icons-sharp icon">
                                    edit
                                </span>
                                <div class="info">
                                    <h3>Workshop</h3>
                                    <small class="text_muted">
                                        08:00 AM - 12:00 PM
                                    </small>
                                </div>
                            </div>
                            <div class="details">
                                <span class="material-icons-sharp">
                                    more_vert
                                </span>
                            </div>
                        </div>

                        <div class="notification box-tiny add-reminder" data-open-modal="#reminderModal">
                            <span class="material-icons-sharp"> add </span>
                            <h3>Add Reminder</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= shared('elements/scripts'); ?>
    <script type="text/javascript">
        $(function () {
            // Custom js here...
        });
    </script>
</body>

</html>