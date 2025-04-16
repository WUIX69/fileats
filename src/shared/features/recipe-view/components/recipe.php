<section id="recipe" class="pt-5 pb-5 img-nr">
    <div class="container-xl">
        <div class="row recipe_1">

            <!-- Left Column -->
            <div class="col-md-8 col-lg-9">
                <div class="recipe_dt">
                    <h4 class="mb-4 head_after">Dealing With a Diet Plan</h4>
                    <!-- Montage -->
                    <?= shared('features/recipe-view/components/col/montage'); ?>

                    <!-- Details -->
                    <?= shared('features/recipe-view/components/col/details'); ?>

                    <!-- Chef Box -->
                    <?= shared('features/recipe-view/components/col/chef-box'); ?>

                    <!-- Related Recipes -->
                    <?= shared('features/recipe-view/components/col/related'); ?>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-md-4 col-lg-3">
                <div class="recipe_1_right">
                    <!-- Recent Recipes -->
                    <?= shared('components/ui/recent'); ?>

                    <!-- Categories -->
                    <?= shared('components/ui/categories'); ?>

                    <!-- Measurements -->
                    <?= shared('components/ui/measurements'); ?>

                    <!-- Tags -->
                    <?= shared('components/ui/tags'); ?>

                    <!-- Newsletter -->
                    <?= shared('components/ui/newsletter'); ?>
                </div>
            </div>
        </div>
    </div>
</section>