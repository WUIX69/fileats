<?php
// TODO: move all the global logic in /config dir

global $activeLink; // Get the active link from the header
$heroImage = statf('assets/img/contents/hero/' . $activeLink . '.jpg');
$heroTitles = [
    'services' => 'Our Services',
    'products' => 'Our Products',
    'contact' => 'Contact Us',
    'about' => 'About Us',
    '' => 'Welcome to VetSync'
];

// Handle single view pages
global $urlParts; // Get the urlParts from the header 
$isDetailView = in_array('single-view.php', $urlParts);
if ($isDetailView) {
    if ($activeLink === 'services') {
        $heroTitles[$activeLink] = 'Service Details';
    } elseif ($activeLink === 'products') {
        $heroTitles[$activeLink] = 'Product Details';
    }
}

$pageTitle = $heroTitles[$activeLink] ?? null;

?>
<style>
    section#center {
        background-image: url("<?= $heroImage ?>");
        /* background-position: center 40%; */
        <?php if ($activeLink === 'contact'): ?>
            background-position: top center;
        <?php endif; ?>
    }
</style>
<section id="center" class="pt-4 pb-4 center_o shadow">
    <div class="container-xl">
        <div class="row center_o1 text-center">
            <div class="col-md-12">
                <span class="col_green icon_cup fs-2"><i class="bi bi-cup-hot"></i></span>
                <ul class="mt-3 mb-0">
                    <li class="d-inline-block"> <a href="#">Home</a></li>
                    <li class="d-inline-block mx-2 text-muted">|</li>
                    <li class="d-inline-block col_green"> About Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>