<?php include_once __DIR__ . '/../../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= shared('elements/meta'); ?> <!-- rcs Meta -->
    <title>Discover Recipe (View) - Fil Eats</title>
    <?= shared('elements/styles'); ?> <!-- rcs Styles -->
    <?= featured('landing/recipe-view/styles'); ?>
</head>

<body>

    <div class="shared-standalone-cont">
        <?= shared('layouts/loader/window'); ?>
    </div>

    <div class="site-cont">
        <!-- Site Header -->
        <?= featured('landing/shared/layouts/header'); ?>

        <main class="site-main">
            <section id="recipe" class="pt-5 pb-5 img-nr">
                <div class="container-xl">
                    <div class="row recipe_1">

                        <!-- Left Column -->
                        <div class="col-md-8 col-lg-9">
                            <div class="recipe_dt">
                                <h4 class="mb-4 head_after">Dealing With a Diet Plan</h4>
                                <!-- Montage -->
                                <?= featured('landing/recipe-view/components/montage'); ?>

                                <!-- Details -->
                                <?= featured('landing/recipe-view/components/details'); ?>

                                <!-- Chef Box -->
                                <?= featured('landing/recipe-view/components/chef-box'); ?>

                                <!-- Related Recipes -->
                                <?= featured('landing/recipe-view/components/related'); ?>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-md-4 col-lg-3">
                            <div class="recipe_1_right">
                                <!-- Recent Recipes -->
                                <?= featured('landing/recipe-view/components/recent'); ?>

                                <!-- Categories -->
                                <?= featured('landing/recipe-view/components/categories'); ?>

                                <!-- Measurements -->
                                <?= featured('landing/recipe-view/components/measurements'); ?>

                                <!-- Tags -->
                                <?= featured('landing/recipe-view/components/tags'); ?>

                                <!-- Newsletter -->
                                <?= featured('landing/recipe-view/components/news-letter'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Site Footer -->
        <?= featured('landing/shared/layouts/footer'); ?>
    </div>

    <?= shared('elements/scripts'); ?> <!-- rcs Scripts -->
    <?= featured('landing/recipe-view/scripts'); ?>

</body>

</html>