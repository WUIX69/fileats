<section id="recipe" class="pt-5 pb-5 img-nr">
    <div class="container-xl">
        <div class="row recipe_1">

            <!-- Left Column -->
            <div class="col-md-8 col-lg-9">
                <div class="recipe_dt">
                    <h4 class="mb-4 head_after">Dealing With a Diet Plan</h4>
                    <!-- Montage -->
                    <?= shared('components/ui/recipe-view/col/montage'); ?>

                    <!-- Details -->
                    <?= shared('components/ui/recipe-view/col/details'); ?>

                    <!-- Chef Box -->
                    <?= shared('components/ui/recipe-view/col/chef-box'); ?>

                    <!-- Related Recipes -->
                    <?= shared('components/ui/recipe-view/col/related'); ?>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-md-4 col-lg-3">
                <div class="recipe_1_right">
                    <!-- Recent Recipes -->
                    <?= shared('components/primitives/recent'); ?>

                    <!-- Categories -->
                    <?= shared('components/primitives/categories'); ?>

                    <!-- Measurements -->
                    <?= shared('components/primitives/measurements'); ?>

                    <!-- Tags -->
                    <?= shared('components/primitives/tags'); ?>

                    <!-- Newsletter -->
                    <?= shared('components/primitives/news-letter'); ?>
                </div>
            </div>
        </div>
    </div>
</section>