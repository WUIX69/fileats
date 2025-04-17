<section id="overview" class="chef-content py-5">
    <div class="container-xl">
        <div>
            <ul class="nav nav-tabs mb-4" id="chefTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#recipes">
                        <i class="bi bi-journal-text me-2"></i>Recipes
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#about">
                        <i class="bi bi-person me-2"></i>About
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#gallery">
                        <i class="bi bi-images me-2"></i>Gallery
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#reviews">
                        <i class="bi bi-star me-2"></i>Reviews
                    </button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="chefTabContent">
            <!-- Recipes Tab -->
            <?= shared('components/ui/chef-view/tab/recipes'); ?>

            <!-- About Tab -->
            <?= shared('components/ui/chef-view/tab/about'); ?>

            <!-- Gallery Tab -->
            <?= shared('components/ui/chef-view/tab/gallery'); ?>

            <!-- Reviews Tab -->
            <?= shared('components/ui/chef-view/tab/reviews'); ?>
        </div>
    </div>
</section>