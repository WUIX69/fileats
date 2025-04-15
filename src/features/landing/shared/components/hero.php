<?php
// TODO: move all the global logic in /config dir

global $urlParts; // Get the urlParts from the header
if (is_array($urlParts)) {
    // Remove .php extension from all elements in $urlParts
    foreach ($urlParts as $key => $part) {
        $urlParts[$key] = str_replace('.php', '', $part);
    }
}

$heroesMap = [
    'contact' => 'Contact Us',
    'about' => 'About Us',
    'team' => 'Our Team',
    'chefs' => 'Discover Chefs',
    'recipes' => 'Discover Recipes',
    '' => 'Welcome to Fil Eats'
];

$pageLink = '';
$pageTitle = null;
foreach ($heroesMap as $link => $title) {
    if (in_array($link, $urlParts)) {
        $pageLink = $link;
        $pageTitle = $title;
        break;
    }
}

$heroImage = statf('assets/img/contents/heroes/' . $pageLink . '.jpg');
$pageTitle = $pageTitle ?? $heroesMap[''];

?>
<style>
    section#center {
        background-image: url("<?= $heroImage ?>");
        background-position: center;
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
                    <li class="d-inline-block col_green"> <?= $pageTitle ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>