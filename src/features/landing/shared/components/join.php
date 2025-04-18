<?php
// Define the path to reserve images directory
$reservesPath = asset('img/contents/reserves/');
$fullPath = $_SERVER['DOCUMENT_ROOT'] . parse_url($reservesPath, PHP_URL_PATH);

// Get all jpg images from the reserves directory
$reserveImages = glob($fullPath . '*.jpg');

// Select random image and format path, default to empty if no images found
$reserveImage = '';
if (!empty($reserveImages)) {
    $randomImage = $reserveImages[array_rand($reserveImages)];
    $imageName = basename($randomImage);
    $reserveImage = $reservesPath . $imageName;
}
?>

<style>
    main section#join {
        background-image: url("<?= $reserveImage ?>");
    }
</style>
<section id="join" class="pt-5 pb-5">
    <div class="container-xl">
        <div class="row join_1">
            <div class="col-md-12">
                <div class="join_1_inner bg-white p-3 box">
                    <div class="join_1_inner1 border_light p-5 px-4 text-center box">
                        <b class="d-block fs-3 text-uppercase text-black">WE LOVE OUR CHEFS JOIN US NOW</b>
                        <hr class="line mx-auto">
                        <span class="col_green fs-2 d-block mt-2"><i class="bi bi-cup-hot"></i></span>
                        <p class="mt-3 text-black">Lorem ipsum dolor sit amet, constetur adicng elit
                            Ultricies
                            interdum volutpat morbi nam ornare neque elit leo, diam. </p>
                        <span class="d-block mt-4 text-center"><a class="button" href="#">Our
                                Chefs</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>