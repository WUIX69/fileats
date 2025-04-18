<?php include_once __DIR__ . '/../../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= shared('elements/meta'); ?>
    <title>Submit a Recipe - Fil Eats</title>
    <?= shared('elements/styles'); ?>
    <?= featured('user/recipe-submit/styles'); ?>
</head>

<body>

    <div class="shared-standalone-cont">
        <?= shared('layouts/loader/window'); ?> <!-- Window loader -->
    </div>

    <div class="site-cont">
        <!-- Site Header -->
        <?= featured('user/shared/layouts/header'); ?>

        <main class="site-main">
            <section id="recipe">
                <div class="container-xl">
                    <div class="row justify-content-center">
                        <!-- Recipe Form -->
                        <div class="col-lg-8">
                            <?= featured('user/recipe-submit/components/recipe-form'); ?>
                        </div>
                        <!-- FAQs -->
                        <div class="col-lg-4">
                            <?= featured('user/recipe-submit/components/submission-faqs'); ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <?= shared('elements/scripts'); ?>
    <?= featured('user/recipe-submit/scripts'); ?>

</body>

</html>