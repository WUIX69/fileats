<section id="recipe" class="pb-5">
    <div class="container-xl">
        <div class="row recipe_1">
            <div class="col-md-8 col-lg-9">
                <div class="recipe_1_left img-nr">
                    <div class="recipe_1_left1 row">
                        <div class="col-md-9">
                            <div class="recipe_1_left1_left pt-2">
                                <h4 class="mb-0 head_after">Boosting Your Hunger</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recipe_1_left1_right text-end">
                                <ul class="nav nav-tabs mb-0  flex-wrap fs-5 tab_click border-0 justify-content-end">
                                    <li class="nav-item">
                                        <a href="#profile1" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            <span class="d-md-block"><i class="bi bi-grid"></i></span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#profile2" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link active">
                                            <span class="d-md-block"><i class="bi bi-list"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="recipe_1_left2 mt-4">
                        <div class="tab-content">
                            <!-- Recipe Portrait View -->
                            <?= shared('features/recipes/components/tab/portrait'); ?>

                            <!-- Recipe Landscape View -->
                            <?= shared('features/recipes/components/tab/landscape'); ?>
                        </div>
                    </div>
                    <?= shared('components/ui/pagination-grid'); ?>
                </div>
            </div>
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
                    <?= shared('components/ui/news-letter'); ?>
                </div>
            </div>
        </div>
    </div>
</section>