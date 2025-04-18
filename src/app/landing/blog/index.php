<?php include_once __DIR__ . '/../../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?= shared('elements/meta'); ?>
	<title>Cooking</title>
	<?= shared('elements/styles'); ?>
	<link rel="stylesheet" href="<?= asset('css/shared/recipe.css'); ?>">
	<style>
		section#center {
			background-image: url(<?= asset('img/contents/heroes/blog.jpg'); ?>);
		}
	</style>
</head>

<body>

	<div class="shared-standalone-cont">
		<?= shared('layouts/loader/window'); ?>
	</div>

	<div class="site-cont">
		<!-- Site Header -->
		<?= featured('landing/shared/layouts/header'); ?>

		<main class="site-main">
			<section id="center" class="pt-4 pb-4 center_o shadow">
				<div class="container-xl">
					<div class="row center_o1 text-center">
						<div class="col-md-12">
							<span class="col_green icon_cup fs-2"><i class="bi bi-cup-hot"></i></span>
							<ul class="mt-3 mb-0">
								<li class="d-inline-block"> <a href="#">Home</a></li>
								<li class="d-inline-block mx-2 text-muted">|</li>
								<li class="d-inline-block col_green"> Blog</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<section id="blog" class="pt-5 pb-5 img-nr">
				<div class="container-xl">
					<div class="row blog_1">
						<div class="col-md-8 col-lg-9">
							<div class="blog_1_left">
								<div class="blog_1_left1">
									<a href="single-view.html"><img src="<?= asset('img/contents/others/gal-2.jpg'); ?>"
											class="img-fluid" alt="abc"></a>
									<div class="blog_1_left1_inner p-3 shadow">
										<div class="blog_1_left1_inner1 p-4 box border_light">
											<b class="fs-4 d-block"><a href="single-view.html">PRESENTATION IS AS
													IMPORTANT
													AS
													TASTE</a></b>
											<hr class="line">
											<span class="font_14"> <i
													class="bi bi-person-fill col_green me-1 fs-6 align-middle"></i>
												Ipsum <i
													class="bi bi-calendar3 col_green me-1 fs-6 align-middle ms-3"></i>
												22/02/2024 <i
													class="bi bi-chat col_green me-1 fs-6 align-middle ms-3"></i>
												4
												Comments</span>
											<p class="mt-3"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
												sed
												diam
												nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
												sed
												diam
												voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
												clita
												kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
												Lorem
												ipsum dolor sit amet,</p>
											<span class="d-block mt-4"><a class="button" href="single-view.html">Read
													More</a></span>
										</div>
									</div>
								</div>
								<div class="blog_1_left1 mt-4">
									<a href="single-view.html"><img
											src="<?= asset('img/contents/others/busog-sarap.jpg'); ?>" class="img-fluid"
											alt="abc"></a>
									<div class="blog_1_left1_inner p-3 shadow">
										<div class="blog_1_left1_inner1 p-4 box border_light">
											<b class="fs-4 d-block"><a href="single-view.html">SLIM LINE BETWEEN HEALTH
													AND
													UNHEALTHY</a></b>
											<hr class="line">
											<span class="font_14"> <i
													class="bi bi-person-fill col_green me-1 fs-6 align-middle"></i>
												Lorem <i
													class="bi bi-calendar3 col_green me-1 fs-6 align-middle ms-3"></i>
												23/02/2024 <i
													class="bi bi-chat col_green me-1 fs-6 align-middle ms-3"></i>
												2
												Comments</span>
											<p class="mt-3"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
												sed
												diam
												nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
												sed
												diam
												voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
												clita
												kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
												Lorem
												ipsum dolor sit amet,</p>
											<span class="d-block mt-4"><a class="button" href="single-view.html">Read
													More</a></span>
										</div>
									</div>
								</div>
								<div class="blog_1_left1 mt-4">
									<a href="single-view.html"><img src="<?= asset('img/contents/others/gal-1.jpg'); ?>"
											class="img-fluid" alt="abc"></a>
									<div class="blog_1_left1_inner p-3 shadow">
										<div class="blog_1_left1_inner1 p-4 box border_light">
											<b class="fs-4 d-block"><a href="single-view.html">SANDWICHES & THEIR
													ORIGINS</a></b>
											<hr class="line">
											<span class="font_14"> <i
													class="bi bi-person-fill col_green me-1 fs-6 align-middle"></i>
												Dolor <i
													class="bi bi-calendar3 col_green me-1 fs-6 align-middle ms-3"></i>
												25/02/2024 <i
													class="bi bi-chat col_green me-1 fs-6 align-middle ms-3"></i>
												6
												Comments</span>
											<p class="mt-3"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
												sed
												diam
												nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
												sed
												diam
												voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
												clita
												kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
												Lorem
												ipsum dolor sit amet,</p>
											<span class="d-block mt-4"><a class="button" href="single-view.html">Read
													More</a></span>
										</div>
									</div>
								</div>
								<div class="paging">
									<ul class="mb-0  paginate text-center  mt-4">
										<li class="d-inline-block mt-1 mb-1"><a class="border d-block"
												href="single-view.html"><i class="bi bi-chevron-left"></i> </a></li>
										<li class="d-inline-block mt-1 mb-1"><a class="border d-block active"
												href="single-view.html">1</a></li>
										<li class="d-inline-block mt-1 mb-1"><a class="border d-block"
												href="single-view.html">2</a></li>
										<li class="d-inline-block mt-1 mb-1"><a class="border d-block"
												href="single-view.html">3</a></li>
										<li class="d-inline-block mt-1 mb-1"><a class="border d-block"
												href="single-view.html">4</a></li>
										<li class="d-inline-block mt-1 mb-1"><a class="border d-block"
												href="single-view.html">5</a></li>
										<li class="d-inline-block mt-1 mb-1"><a class="border d-block"
												href="single-view.html">6</a></li>
										<li class="d-inline-block mt-1 mb-1"><a class="border d-block"
												href="single-view.html"><i class="bi bi-chevron-right"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-lg-3">
							<div class="blog_1_right">
								<div class="blog_1_right1">
									<h5 class="head_after mb-4">Weekly Special</h5>
									<a href="single-view.html"><img
											src="<?= asset('img/contents/others/pasto-pizza.jpg'); ?>" class="img-fluid"
											alt="abc"></a>
									<b class="d-block"><a class="d-block bg-black text-white p-2 font_13 link"
											href="single-view.html">PASTO PIZZA WITH EXTRA TOPPINGS</a></b>
								</div>
								<div class="recipe_1_right1 mt-5">
									<h5 class="head_after mb-4">Categories</h5>
									<ul class="mb-0 font_14">
										<li><a class="d-block pb-3  border-bottom" href="single-view.html"><i
													class="bi bi-chevron-right me-1 col_green"></i> Breakfast <span
													class="float-end">23</span></a></li>
										<li><a class="d-block py-3  border-bottom" href="single-view.html"><i
													class="bi bi-chevron-right me-1 col_green"></i> Desssert <span
													class="float-end">12</span></a></li>
										<li><a class="d-block py-3 border-bottom" href="single-view.html"><i
													class="bi bi-chevron-right me-1 col_green"></i> Dinner <span
													class="float-end">16</span></a></li>
										<li><a class="d-block py-3 border-bottom" href="single-view.html"><i
													class="bi bi-chevron-right me-1 col_green"></i> Fruits <span
													class="float-end">09</span></a></li>
										<li><a class="d-block py-3  border-bottom" href="single-view.html"><i
													class="bi bi-chevron-right me-1 col_green"></i> Lunch <span
													class="float-end">07</span></a></li>
										<li><a class="d-block pt-3" href="single-view.html"><i
													class="bi bi-chevron-right me-1 col_green"></i> Popular <span
													class="float-end">17</span></a></li>
									</ul>
								</div>
								<div class="recipe_1_right1 mt-5">
									<h5 class="head_after mb-4">Archives</h5>
									<ul class="mb-0 font_14">
										<li><a class="d-block pb-3  border-bottom" href="single-view.html"><i
													class="bi bi-chevron-right me-1 col_green"></i> JANUARY 2017 <span
													class="float-end">23</span></a></li>
										<li><a class="d-block py-3  border-bottom" href="single-view.html"><i
													class="bi bi-chevron-right me-1 col_green"></i> DECEMBER 2016 <span
													class="float-end">12</span></a></li>
										<li><a class="d-block py-3 border-bottom" href="single-view.html"><i
													class="bi bi-chevron-right me-1 col_green"></i> NOVEMBER 2016 <span
													class="float-end">16</span></a></li>
										<li><a class="d-block py-3 border-bottom" href="single-view.html"><i
													class="bi bi-chevron-right me-1 col_green"></i> AUGUST 2016 <span
													class="float-end">09</span></a></li>

										<li><a class="d-block pt-3" href="single-view.html"><i
													class="bi bi-chevron-right me-1 col_green"></i> MARCH 2016 <span
													class="float-end">17</span></a></li>
									</ul>
								</div>
								<div class="recipe_1_right1 mt-5">
									<h5 class="head_after mb-4">Recent Recipes</h5>
									<ul class="mb-0 recipes-downward-fmt">
										<li class="d-flex border-bottom  pb-3 mb-3">
											<span><a href="single-view.html"><img width="100" alt="abc"
														src="<?= asset('img/contents/menus/breakfast/baked-creamy.jpg'); ?>"></a></span>
											<span class="flex-column ms-3">
												<b class="d-block font_14"><a href="single-view.html">Nulla Quis Sem
														Nibh
														Imperdiet</a></b>
												<span class="mt-1 font_14 d-block">Jan 16, 2016</span>
											</span>
										</li>
										<li class="d-flex border-bottom  pb-3 mb-3">
											<span><a href="single-view.html"><img width="100" alt="abc"
														src="<?= asset('img/contents/menus/launch/tooplate-soup.jpg'); ?>"></a></span>
											<span class="flex-column ms-3">
												<b class="d-block font_14"><a href="single-view.html">Ligula in libero
														Sed
														lacinia nunc</a></b>
												<span class="mt-1 font_14 d-block">Jan 18, 2016</span>
											</span>
										</li>
										<li class="d-flex border-bottom  pb-3 mb-3">
											<span><a href="single-view.html"><img width="100" alt="abc"
														src="<?= asset('img/contents/menus/dinner/salmon.jpg'); ?>"></a></span>
											<span class="flex-column ms-3">
												<b class="d-block font_14"><a href="single-view.html">Consectetur Elit
														Integer
														Nec Libero</a></b>
												<span class="mt-1 font_14 d-block">Jan 19, 2016</span>
											</span>
										</li>

										<li class="d-flex">
											<span><a href="single-view.html"><img width="100" alt="abc"
														src="<?= asset('img/contents/menus/breakfast/kalderatang-itlog.jpg'); ?>"></a></span>
											<span class="flex-column ms-3">
												<b class="d-block font_14"><a href="single-view.html">Atque nulla illo
														rem
														eveniet nemo,</a></b>
												<span class="mt-1 font_14 d-block">Jan 29, 2016</span>
											</span>
										</li>

									</ul>
								</div>
								<div class="recipe_1_right1 mt-5">
									<h5 class="head_after mb-4">Tags</h5>
									<ul class="mb-0 tags">
										<li class="d-inline-block"><a href="single-view.html">Food</a></li>
										<li class="d-inline-block"><a href="single-view.html">Gastronomy</a></li>
										<li class="d-inline-block"><a href="single-view.html">Restaurant</a></li>
										<li class="d-inline-block"><a href="single-view.html">Eat</a></li>
										<li class="d-inline-block"><a href="single-view.html">Rest</a></li>
										<li class="d-inline-block"><a href="single-view.html">Montreal</a></li>
										<li class="d-inline-block"><a href="single-view.html">Fast Food</a></li>
										<li class="d-inline-block"><a href="single-view.html">Recipes</a></li>
										<li class="d-inline-block"><a href="single-view.html">Coffee</a></li>
									</ul>
								</div>
								<div class="recipe_1_right1 mt-5">
									<h5 class="head_after mb-4">Newsletter</h5>
									<b class="text-uppercase font_12 d-block">Subscribe Now!</b>
									<p class="mt-2 mb-3">Aliqm Lorem Ante, Dapibus In, Viverra Feugiat Phasellus.</p>
									<div class="input-group">
										<input type="text" class="form-control font_12"
											placeholder="Your Email address...">
										<span class="input-group-btn">
											<button class="btn btn-primary bg_green border-0 rounded-0 p-3 px-4 font_12"
												type="button">
												SEND </button>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

		<!-- Footer -->
		<?= featured('landing/shared/layouts/footer'); ?>
	</div>

	<?= shared('elements/scripts'); ?> <!-- rcs Scripts -->
	<?= featured('landing/blog/scripts'); ?>

</body>

</html>