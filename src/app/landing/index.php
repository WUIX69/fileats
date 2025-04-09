<?php include_once __DIR__ . '/../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?= shared('elements/meta'); ?>
	<title>Cooking</title>
	<?= shared('elements/styles'); ?>
	<?= featured('landing/home/styles'); ?>
</head>

<body>

	<div class="shared-standalone-cont">
		<?= shared('layouts/loader/window'); ?>
	</div>

	<div class="site-cont">
		<!-- Header -->
		<?= featured('landing/shared/layouts/header'); ?>

		<main class="site-main">
			<section id="center" class="center_home img-nr carousel-int">
				<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
							class="active" aria-label="Slide 1" aria-current="true"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
							aria-label="Slide 2" class=""></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
							aria-label="Slide 3" class=""></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="../../../public/assets/img/contents/menus/breakfast/kalderatang-itlog.jpg"
								class="d-block img-fluid" alt="...">
							<div class="carousel-caption d-md-block bg-white carousel-caption1 border_light box">
								<div class="carousel-caption_inner border_light p-3 shadow box">
									<b class="d-block fs-3 text-uppercase text-black">Dealing with a diet plan</b>
									<hr class="line mx-auto">
									<span class="d-block fs-4 col_green">
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star"></i>
									</span>
									<span class="d-block text-black mt-3">(4/5)</span>
									<p class="mt-3 text-black">Lorem ipsum dolor sit amet, constetur adicng elit
										Ultricies
										interdum volutpat morbi nam ornare neque elit leo, diam. </p>
									<span class="d-block mt-4 text-center"><a class="button" href="#">Learn
											More</a></span>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<img src="../../../public/assets/img/contents/menus/dinner/salmong-nakatayo.jpg"
								class="d-block img-fluid" alt="...">
							<div class="carousel-caption carousel-caption1 d-md-block bg-white border_light box">
								<div class="carousel-caption_inner border_light p-3 shadow box">
									<b class="d-block fs-3 text-uppercase text-black">Lorem Amet a porta sit</b>
									<hr class="line mx-auto">
									<span class="d-block fs-4 col_green">
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
									</span>
									<span class="d-block text-black mt-3">(5/5)</span>
									<p class="mt-3 text-black">Lorem ipsum dolor sit amet, constetur adicng elit
										Ultricies
										interdum volutpat morbi nam ornare neque elit leo, diam. </p>
									<span class="d-block mt-4 text-center"><a class="button" href="#">Learn
											More</a></span>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<img src="../../../public/assets/img/contents/menus/launch/pulutan.jpg"
								class="d-block img-fluid" alt="...">
							<div class="carousel-caption carousel-caption2 d-md-block bg-white border_light box">
								<div class="carousel-caption_inner border_light p-3 shadow box">
									<b class="d-block fs-3 text-uppercase text-black">Dolor sed augue quis</b>
									<hr class="line mx-auto">
									<span class="d-block fs-4 col_green">
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
									</span>
									<span class="d-block text-black mt-3">(4.5/5)</span>
									<p class="mt-3 text-black">Lorem ipsum dolor sit amet, constetur adicng elit
										Ultricies
										interdum volutpat morbi nam ornare neque elit leo, diam. </p>
									<span class="d-block mt-4 text-center"><a class="button" href="#">Learn
											More</a></span>
								</div>
							</div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
						data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
						data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</section>

			<section id="recipe" class="pt-5 pb-5 bg_light img-nr">
				<div class="container-xl">
					<div class="recipe_1 row text-center mb-4">
						<div class="col-md-12">
							<b class="d-block fs-3 text-uppercase">HOTTEST RECIPES AT FOOD & TASTE</b>
							<span class="icon_cup col_green fs-4 d-block mt-2"><i class="bi bi-cup-hot"></i></span>
						</div>
					</div>
					<div class="recipe_2 row row-cols-1 row-cols-md-4 row-cols-sm-2">
						<div class="col p-0">
							<div class="recipe_2_left">
								<a href="#"><img src="../../../public/assets/img/contents/menus/dinner/seafood.jpg"
										class="img-fluid" alt="abc"></a>
							</div>
						</div>
						<div class="col p-0">
							<div class="recipe_2_right text-center bg-white  py-4 px-3">
								<b class="d-block"><a href="#">PASTO PIZZA WITH EXTRA TOPPINGS</a></b>
								<hr class="line mx-auto">
								<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
									ex ea
									commodo consequat.</p>
								<b class="d-block font_14"><a href="#">Read More <i
											class="bi bi-arrow-right ms-1"></i></a></b>
							</div>
						</div>
						<div class="col p-0">
							<div class="recipe_2_left">
								<a href="#"><img src="../../../public/assets/img/contents/menus/dinner/inasal.jpg"
										class="img-fluid" alt="abc"></a>
							</div>
						</div>
						<div class="col p-0">
							<div class="recipe_2_right text-center bg-white  py-4 px-3">
								<b class="d-block"><a href="#">HEALTHY FOOD AND BANANAS</a></b>
								<hr class="line mx-auto">
								<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
									ex ea
									commodo consequat.</p>
								<b class="d-block font_14"><a href="#">Read More <i
											class="bi bi-arrow-right ms-1"></i></a></b>
							</div>
						</div>
					</div>
					<div class="recipe_2 row row-cols-1 row-cols-md-4 row-cols-sm-2">
						<div class="col p-0">
							<div class="recipe_2_right text-center bg-white  py-4 px-3">
								<b class="d-block"><a href="#">BEST FOOD WITH EXTRA TOPPINGS</a></b>
								<hr class="line mx-auto">
								<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
									ex ea
									commodo consequat.</p>
								<b class="d-block font_14"><a href="#">Read More <i
											class="bi bi-arrow-right ms-1"></i></a></b>
							</div>
						</div>
						<div class="col p-0">
							<div class="recipe_2_left">
								<a href="#"><img
										src="../../../public/assets/img/contents/menus/launch/tooplate-soup.jpg"
										class="img-fluid" alt="abc"></a>
							</div>
						</div>
						<div class="col p-0">
							<div class="recipe_2_right text-center bg-white  py-4 px-3">
								<b class="d-block"><a href="#">EXTRA CHEESY FRENCH HOT DOG</a></b>
								<hr class="line mx-auto">
								<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
									ex ea
									commodo consequat.</p>
								<b class="d-block font_14"><a href="#">Read More <i
											class="bi bi-arrow-right ms-1"></i></a></b>
							</div>
						</div>
						<div class="col p-0">
							<div class="recipe_2_left">
								<a href="#"><img
										src="../../../public/assets/img/contents/menus/breakfast/morning-fresh.jpg"
										class="img-fluid" alt="abc"></a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="spec" class="pt-5 pb-5">
				<div class="container-xl">
					<div class="recipe_1 row text-center mb-4">
						<div class="col-md-12">
							<b class="d-block fs-3 text-uppercase">CATERING FOR EVERY TASTE</b>
							<span class="icon_cup col_green fs-4 d-block mt-2"><i class="bi bi-cup-hot"></i></span>
						</div>
					</div>
					<div class="row spec_2">
						<div class="col-md-3 col-sm-6">
							<div class="spec_2i p-4 text-center bg_light box">
								<span class="font_60 col_green"><i class="bi bi-cup-straw"></i></span>
								<h5 class="mt-3 fs-6">BANQUET SERVICE</h5>
								<p class="mt-3 mb-0">Organization and hosting of banquets lorem</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="spec_2i p-4 text-center bg_light box">
								<span class="font_60 col_green"><i class="bi bi-cup-hot"></i></span>
								<h5 class="mt-3 fs-6">OFF-SITE CATERING</h5>
								<p class="mt-3 mb-0">Catering services for events at various locations</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="spec_2i p-4 text-center bg_light box">
								<span class="font_60 col_green"><i class="bi bi-buildings"></i></span>
								<h5 class="mt-3 fs-6">OFFICE CATERING</h5>
								<p class="mt-3 mb-0">Providing meals for company employees</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="spec_2i p-4 text-center bg_light box">
								<span class="font_60 col_green"><i class="bi bi-heart"></i></span>
								<h5 class="mt-3 fs-6">WEDDING CATERING</h5>
								<p class="mt-3 mb-0">Organization and catering for weddings</p>
							</div>
						</div>
					</div>
				</div>
			</section>

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

			<section id="choose" class="pt-5 pb-5 bg_light">
				<div class="container-xl">
					<div class="row choose_1">
						<div class="col-md-6">
							<div class="choose_1l">
								<div class="grid clearfix">
									<figure class="effect-jazz mb-0">
										<a href="#"><img
												src="../../../public/assets/img/contents/others/busog-meals.jpg"
												class="img-fluid" alt="abc"></a>
									</figure>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="choose_1r">
								<h6 class="col_green">WHY CHOOSE US</h6>
								<h1 class="mt-3 mb-3">New London Coffee Founded For Extraordinary Test</h1>
								<p>Sed ut perspiciatis unde omnis iste natus error voluptate accusantium doloremque
									laudantium,
									totam rem aperiam eaque ipsa quae abillo inventore veritatis</p>
								<div class="choose_1ri row mt-4">
									<div class="col-md-2 col-sm-2">
										<div class="choose_1ril">
											<span class="font_60 col_green lh-1"><i class="bi bi-apple"></i></span>
										</div>
									</div>
									<div class="col-md-10 col-sm-10">
										<div class="choose_1rir">
											<h4>Natural Coffee Beans</h4>
											<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error voluptate
												accusantium doloremque</p>
										</div>
									</div>
								</div>
								<div class="choose_1ri row mt-4">
									<div class="col-md-2 col-sm-2">
										<div class="choose_1ril">
											<span class="font_60 col_green lh-1"><i
													class="bi bi-patch-check-fill"></i></span>
										</div>
									</div>
									<div class="col-md-10 col-sm-10">
										<div class="choose_1rir">
											<h4>100% ISO Certification</h4>
											<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error voluptate
												accusantium doloremque</p>
										</div>
									</div>
								</div>
								<h6 class="mb-0 mt-4"><a class="button" href="#"> Explore More <i
											class="bi bi-arrow-right ms-1 align-middle"></i></a></h6>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="news" class="pt-5 pb-5">
				<div class="container-xl">
					<div class="recipe_1 row text-center mb-4">
						<div class="col-md-12">
							<b class="d-block fs-3 text-uppercase">LATEST NEWS</b>
							<span class="icon_cup col_green fs-4 d-block mt-2"><i class="bi bi-cup-hot"></i></span>
						</div>
					</div>
					<div class="news_1 row row-cols-1 row-cols-md-4 row-cols-sm-2">
						<div class="col">
							<div class="news_1_left">
								<a href="#"><img
										src="../../../public/assets/img/contents/menus/breakfast/baked-creamy.jpg"
										class="img-fluid" alt="abc"></a>
								<b class="mt-3 font_14 d-block"><a href="#">SLIM LINE BETWEEN HEALTH AND
										UNHEALTHY</a></b>
								<hr class="line">
								<span class="font_14"> <i
										class="bi bi-person-fill col_green me-1 fs-6 align-middle"></i>
									Lorem
									<i class="bi bi-calendar3 col_green me-1 fs-6 align-middle ms-2"></i>
									20/02/2024</span>
								<p class="mt-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed…</p>
								<span class="d-block mt-4"><a class="button" href="#">Read More</a></span>
							</div>
						</div>
						<div class="col">
							<div class="news_1_left">
								<a href="#"><img
										src="../../../public/assets/img/contents/menus/breakfast/burger-set.jpg"
										class="img-fluid" alt="abc"></a>
								<b class="mt-3 font_14 d-block"><a href="#">PRESENTATION IS AS IMPORTANT AS
										TASTE</a></b>
								<hr class="line">
								<span class="font_14"> <i
										class="bi bi-person-fill col_green me-1 fs-6 align-middle"></i>
									Ipsum
									<i class="bi bi-calendar3 col_green me-1 fs-6 align-middle ms-2"></i>
									22/02/2024</span>
								<p class="mt-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed…</p>
								<span class="d-block mt-4"><a class="button" href="#">Read More</a></span>
							</div>
						</div>
						<div class="col">
							<div class="news_1_left">
								<a href="#"><img src="../../../public/assets/img/contents/menus/dinner/inasal.jpg"
										class="img-fluid" alt="abc"></a>
								<b class="mt-3 font_14 d-block"><a href="#">SANDWICHES & THEIR BEST ORIGINS</a></b>
								<hr class="line">
								<span class="font_14"> <i
										class="bi bi-person-fill col_green me-1 fs-6 align-middle"></i>
									Dolor
									<i class="bi bi-calendar3 col_green me-1 fs-6 align-middle ms-2"></i>
									24/02/2024</span>
								<p class="mt-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed…</p>
								<span class="d-block mt-4"><a class="button" href="#">Read More</a></span>
							</div>
						</div>
						<div class="col">
							<div class="news_1_left">
								<a href="#"><img src="../../../public/assets/img/contents/menus/launch/super-steak.jpg"
										class="img-fluid" alt="abc"></a>
								<b class="mt-3 font_14 d-block"><a href="#">HEALTHY FOOD IS ACCESSIBLE AND EASY TO
										MAKE</a></b>
								<hr class="line">
								<span class="font_14"> <i
										class="bi bi-person-fill col_green me-1 fs-6 align-middle"></i>
									Augue
									<i class="bi bi-calendar3 col_green me-1 fs-6 align-middle ms-2"></i>
									27/02/2024</span>
								<p class="mt-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed…</p>
								<span class="d-block mt-4"><a class="button" href="#">Read More</a></span>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="trend" class="pt-5 pb-5 bg_light">
				<div class="container-xl">
					<div class="row trend_1">
						<div class="col-md-8">
							<div class="trend_1_left position-relative">
								<div class="trend_1_left1">
									<a href="#"><img src="../../../public/assets/img/contents/others/pasto-pizza.jpg"
											class="img-fluid" alt="abc"></a>
								</div>
								<div class="trend_1_left2 position-absolute top-0 py-3 px-4">
									<div class="trend_1_left2_inner text-center bg-white p-2 box">
										<div class="recipe_2_right_inner border_light py-4 px-3 box">
											<span
												class="d-inline-block bg_green text-white py-1 px-3 font_14 tag-box">Recipe
												of
												the
												day</span>
											<b class="d-block mt-3"><a href="#">PASTO PIZZA WITH EXTRA TOPPINGS</a></b>
											<hr class="line mx-auto">
											<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
												ut
												aliquip ex ea commodo consequat.</p>
											<b class="d-block font_14"><a href="#">Read More <i
														class="bi bi-arrow-right ms-1"></i></a></b>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="trend_1_right bg-white p-3 box">
								<ul class="nav nav-tabs mb-0  flex-wrap font_13 tab_click border-0 mb-4">
									<li class="nav-item">
										<a href="#profile1" data-bs-toggle="tab" aria-expanded="true"
											class="nav-link active">
											<span class="d-md-block">RECENT</span>
										</a>
									</li>

									<li class="nav-item">
										<a href="#profile2" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
											<span class="d-md-block">POPULAR</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#profile3" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
											<span class="d-md-block">RANDOM</span>
										</a>
									</li>

								</ul>
								<div class="tab-content">
									<!-- Recent -->
									<div class="tab-pane active" id="profile1">
										<ul class="mb-0 recipes-downward-fmt">
											<li class="d-flex border-bottom  pb-3 mb-3">
												<span><a href="#"><img width="100" alt="abc"
															src="../../../public/assets/img/contents/menus/breakfast/baked-creamy.jpg"></a></span>
												<span class="flex-column ms-3">
													<b class="d-block font_14"><a href="#">Nulla Quis Sem Nibh
															Imperdiet</a></b>
													<span class="mt-1 font_14 d-block">Jan 16, 2016</span>
												</span>
											</li>
											<li class="d-flex border-bottom  pb-3 mb-3">
												<span><a href="#"><img width="100" alt="abc"
															src="../../../public/assets/img/contents/menus/breakfast/morning-fresh.jpg"></a></span>
												<span class="flex-column ms-3">
													<b class="d-block font_14"><a href="#">Ligula in libero Sed lacinia
															nunc</a></b>
													<span class="mt-1 font_14 d-block">Jan 18, 2016</span>
												</span>
											</li>
											<li class="d-flex">
												<span><a href="#"><img width="100" alt="abc"
															src="../../../public/assets/img/contents/menus/dinner/salmon.jpg"></a></span>
												<span class="flex-column ms-3">
													<b class="d-block font_14"><a href="#">Consectetur Elit Integer Nec
															Libero</a></b>
													<span class="mt-1 font_14 d-block">Jan 19, 2016</span>
												</span>
											</li>

										</ul>
									</div>
									<!-- Popular -->
									<div class="tab-pane" id="profile2">
										<ul class="mb-0 recipes-downward-fmt">
											<li class="d-flex border-bottom  pb-3 mb-3">
												<span><a href="#"><img width="100" alt="abc"
															src="../../../public/assets/img/contents/menus/launch/pulutan.jpg"></a></span>
												<span class="flex-column ms-3">
													<b class="d-block font_14"><a href="#">Ligula in libero Sed lacinia
															nunc</a></b>
													<span class="mt-1 font_14 d-block">Jan 18, 2016</span>
												</span>
											</li>
											<li class="d-flex border-bottom  pb-3 mb-3">
												<span><a href="#"><img width="100" alt="abc"
															src="../../../public/assets/img/contents/menus/launch/pulutan.jpg"></a></span>
												<span class="flex-column ms-3">
													<b class="d-block font_14"><a href="#">Nulla Quis Sem Nibh
															Imperdiet</a></b>
													<span class="mt-1 font_14 d-block">Jan 16, 2016</span>
												</span>
											</li>

											<li class="d-flex">
												<span><a href="#"><img width="100" alt="abc"
															src="../../../public/assets/img/contents/menus/dinner/salmong-nakatayo.jpg"></a></span>
												<span class="flex-column ms-3">
													<b class="d-block font_14"><a href="#">Consectetur Elit Integer Nec
															Libero</a></b>
													<span class="mt-1 font_14 d-block">Jan 19, 2016</span>
												</span>
											</li>

										</ul>

									</div>
									<!-- Random -->
									<div class="tab-pane" id="profile3">

										<ul class="mb-0 recipes-downward-fmt">
											<li class="d-flex border-bottom  pb-3 mb-3">
												<span><a href="#"><img width="100" alt="abc"
															src="../../../public/assets/img/contents/menus/breakfast/burger-set.jpg"></a></span>
												<span class="flex-column ms-3">
													<b class="d-block font_14"><a href="#">Consectetur Elit Integer Nec
															Libero</a></b>
													<span class="mt-1 font_14 d-block">Jan 19, 2016</span>
												</span>
											</li>
											<li class="d-flex border-bottom  pb-3 mb-3">
												<span><a href="#"><img width="100" alt="abc"
															src="../../../public/assets/img/contents/menus/breakfast/kalderatang-itlog.jpg"></a></span>
												<span class="flex-column ms-3">
													<b class="d-block font_14"><a href="#">Nulla Quis Sem Nibh
															Imperdiet</a></b>
													<span class="mt-1 font_14 d-block">Jan 16, 2016</span>
												</span>
											</li>
											<li class="d-flex">
												<span><a href="#"><img width="100" alt="abc"
															src="../../../public/assets/img/contents/menus/breakfast/morning-fresh.jpg"></a></span>
												<span class="flex-column ms-3">
													<b class="d-block font_14"><a href="#">Ligula in libero Sed lacinia
															nunc</a></b>
													<span class="mt-1 font_14 d-block">Jan 18, 2016</span>
												</span>
											</li>
										</ul>
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

	<!-- Scripts -->
	<?= shared('elements/scripts'); ?>
	<?= featured('landing/home/scripts'); ?>
</body>

</html>