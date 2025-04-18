<?php include_once __DIR__ . '/../../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?= shared('elements/meta'); ?>
	<title>Cooking</title>
	<?= shared('elements/styles'); ?>
	<?= asset('css/shared/recipe.css'); ?>
</head>

<body>

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
								<li class="d-inline-block col_green"> Blog Detail</li>
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
									<a href="#"><img src="<?= asset('img/contents/others/gal-1.jpg'); ?>"
											class="img-fluid" alt="abc"></a>
									<div class="blog_1_left1_inner p-3 shadow box">
										<div class="blog_1_left1_inner1 p-4 border_light">
											<b class="fs-4 d-block"><a href="#">SLIM LINE BETWEEN HEALTH AND
													UNHEALTHY</a></b>
											<hr class="line">
											<span class="font_14"> <i
													class="bi bi-person-fill col_green me-1 fs-6 align-middle"></i>
												Lorem <i
													class="bi bi-calendar3 col_green me-1 fs-6 align-middle ms-3"></i>
												23/02/2024 <i
													class="bi bi-chat col_green me-1 fs-6 align-middle ms-3"></i> 2
												Comments</span>
											<p class="mt-3"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
												sed diam
												nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
												sed diam
												voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
												clita
												kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
												Lorem
												ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
												eirmod tempor
												invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
												vero eos
												et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
												no sea
												takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
												amet,
												consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
												labore et
												dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
												justo
												duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
												sanctus est
												Lorem ipsum dolor sit amet.</p>
											<p>Atque nulla vel ipsam doloremque illo rem eveniet nemo, quod error quasi
												voluptatibus, cum quo odit molestiae repellendus, repudiandae
												consequatur natus
												consequuntur! Voluptates cumque, laborum blanditiis at qui. Ut suscipit
												reprehenderit eveniet, facere commodi sequi soluta eligendi fugiat, enim
												quasi
												error, rerum ullam voluptatem asperiores quaerat, alias facilis! Autem,
												nihil
												quidem amet distinctio deleniti iste maiores aut culpa itaque harum
												provident
												mollitia magnam, nemo at expedita.</p>
											<b class="fs-5 d-block mb-3">Facere commodi sequi blanditiis at qui. Ut
												suscipit
												reprehenderit eveniet, facere soluta eligendi fugiat, enim quasi
												temporibus
												minus expedita molestiae</b>
											<p>Consectetur adipisicing elit. Eaque neque hic, quis unde quasi deserunt!
												Illo
												nostrum laboriosam voluptates id voluptatum rem voluptatem. Id ducimus,
												neque
												ipsam sit in assumenda!Atque nulla vel ipsam doloremque illo rem eveniet
												nemo,
												quod error quasi voluptatibus, cum quo odit molestiae repellendus,
												repudiandae
												consequatur natus consequuntur! Voluptates cumque, laborum blanditiis at
												qui. Ut
												suscipit reprehenderit eveniet, facere commodi</p>
											<h4>The Rustic Beauty of French Country Design</h4>

											<p class="bg_light fst-italic p-3 mt-3"> Facere commodi sequi soluta
												eligendi
												fugiat, enim quasi error, rerum ullam voluptatem asperiores quaerat,
												alias
												facilis! Autem, nihil quidem amet distinctio deleniti iste maiores aut
												culpa
												itaque harum provident mollitia magnam, nemo at expedita.</p>

											<ul class="px-3 mt-3">
												<li class="d-flex"><i
														class="bi bi-chevron-right me-1 col_green align-middle"></i>
													Praesent
													mauris Fusce nec tellus sed augue semper porta</li>
												<li class="mt-2 d-flex"><i
														class="bi bi-chevron-right me-1 col_green align-middle"></i> Sed
													cursus
													ante dapibus diam Sed nisi Nulla quis sem at nibh elementum</li>
												<li class="mt-2 d-flex"><i
														class="bi bi-chevron-right me-1 col_green align-middle"></i>
													Vestibulum
													lacinia arcu eget nulla Class aptent taciti sociosqu</li>
												<li class="mt-2 d-flex"><i
														class="bi bi-chevron-right me-1 col_green align-middle"></i>
													Fusce nec
													tellus sed augue semper porta Mauris massa</li>
											</ul>
											<p class="mt-3">Duis sagittis ipsum Praesent mauris Fusce nec tellus sed
												augue
												semper porta. Mauris massa.Vestibulum lacinia arcu eget nulla.Class
												aptent
												taciti sociosqu ad litora torquent per conubia nostra, per inceptos.</p>
											<h4 class="mb-4 mt-4">Popular Tags</h4>
											<ul class="mb-0 tags">
												<li class="d-inline-block"><i
														class="bi bi-tag col_green me-1 fs-6 align-middle"></i></li>
												<li class="d-inline-block"><a href="#">Healthy</a></li>
												<li class="d-inline-block"><a href="#">Pizza</a></li>
												<li class="d-inline-block"><a href="#">Unhealthy</a></li>
											</ul>
											<h4 class="mb-4 mt-4">Related Blogs</h4>
											<div class="news_1 row row-cols-1 row-cols-md-3">
												<div class="col">
													<div class="news_1_left">
														<a href="#"><img
																src="<?= asset('img/contents/menus/breakfast/baked-creamy.jpg'); ?>"
																class="img-fluid" alt="abc"></a>
														<b class="mt-3 font_14 d-block"><a href="#">PRESENTATION IS AS
																IMPORTANT
																AS TASTE</a></b>
														<hr class="line">
														<span class="font_14"> <i
																class="bi bi-person-fill col_green me-1 fs-6 align-middle"></i>
															Ipsum <i
																class="bi bi-calendar3 col_green me-1 fs-6 align-middle ms-2"></i>
															22/02/2024</span>
														<p class="mt-3">Lorem ipsum dolor sit amet, consetetur
															sadipscing elitr,
															sed…</p>
														<span class="d-block mt-4"><a class="button" href="#">Read
																More</a></span>
													</div>
												</div>
												<div class="col">
													<div class="news_1_left">
														<a href="#"><img
																src="<?= asset('img/contents/menus/breakfast/morning-fresh.jpg'); ?>"
																class="img-fluid" alt="abc"></a>
														<b class="mt-3 font_14 d-block"><a href="#">SANDWICHES &amp;
																THEIR BEST
																ORIGINS</a></b>
														<hr class="line">
														<span class="font_14"> <i
																class="bi bi-person-fill col_green me-1 fs-6 align-middle"></i>
															Dolor <i
																class="bi bi-calendar3 col_green me-1 fs-6 align-middle ms-2"></i>
															24/02/2024</span>
														<p class="mt-3">Lorem ipsum dolor sit amet, consetetur
															sadipscing elitr,
															sed…</p>
														<span class="d-block mt-4"><a class="button" href="#">Read
																More</a></span>
													</div>
												</div>
												<div class="col">
													<div class="news_1_left">
														<a href="#"><img
																src="<?= asset('img/contents/menus/dinner/salmon.jpg'); ?>"
																class="img-fluid" alt="abc"></a>
														<b class="mt-3 font_14 d-block"><a href="#">HEALTHY FOOD IS EASY
																TO
																MAKE</a></b>
														<hr class="line">
														<span class="font_14"> <i
																class="bi bi-person-fill col_green me-1 fs-6 align-middle"></i>
															Augue <i
																class="bi bi-calendar3 col_green me-1 fs-6 align-middle ms-2"></i>
															27/02/2024</span>
														<p class="mt-3">Lorem ipsum dolor sit amet, consetetur
															sadipscing elitr,
															sed…</p>
														<span class="d-block mt-4"><a class="button" href="#">Read
																More</a></span>
													</div>
												</div>
											</div>
											<h4 class="mb-4 mt-4">Recent Comments</h4>
											<div class="profile1i1 row">
												<div class="col-md-2">
													<div class="profile1i1l text-center">
														<span class="col_brown font_80"><i
																class="bi bi-person"></i></span>
													</div>
												</div>
												<div class="col-md-10">
													<div class="profile1i1r shadow p-4">
														<h6 class="mb-3">
															<span class="fw-bold fs-4">Lorem – </span>December 4, 2018
															<span class="font_12 text-warning float-end mt-2">
																<i class="bi bi-star-fill"></i>
																<i class="bi bi-star-fill"></i>
																<i class="bi bi-star-fill"></i>
																<i class="bi bi-star-fill"></i>
																<i class="bi bi-star-fill"></i>
															</span>
														</h6>
														<p class="mb-0">Vestibulum tortor quam, feugiat vitae, ultricies
															eget,
															tempor sit amet, ante
															Very good product and amazing quality.</p>
													</div>
												</div>
											</div>
											<div class="profile1i1 row mt-4">
												<div class="col-md-2">
													<div class="profile1i1l text-center">
														<span class="col_brown font_80"><i
																class="bi bi-person"></i></span>
													</div>
												</div>
												<div class="col-md-10">
													<div class="profile1i1r shadow p-4">
														<h6 class="mb-3">
															<span class="fw-bold fs-4">Porta – </span>December 8, 2018
															<span class="font_12 text-warning float-end mt-2">
																<i class="bi bi-star-fill"></i>
																<i class="bi bi-star-fill"></i>
																<i class="bi bi-star-fill"></i>
																<i class="bi bi-star-fill"></i>
																<i class="bi bi-star-fill"></i>
															</span>
														</h6>
														<p class="mb-0">Vestibulum tortor quam, feugiat vitae, ultricies
															eget,
															tempor sit amet, ante
															Very good product and amazing quality.</p>
													</div>
												</div>
											</div>
											<h4 class="mb-4 mt-4">Leave a Reply</h4>
											<form class="row g-3 needs-validation" novalidate="">
												<div class="col-md-6">
													<input type="text" class="form-control font_12" id="name"
														value="Name" required="">
													<div class="valid-feedback">
														Looks good!
													</div>
													<div class="invalid-feedback">
														Please provide a valid first name.
													</div>
												</div>
												<div class="col-md-6">
													<input type="text" class="form-control font_12" id="email"
														value="Email" required="">
													<div class="valid-feedback">
														Looks good!
													</div>
													<div class="invalid-feedback">
														Please provide a valid last name.
													</div>
												</div>
												<div class="col-md-6">
													<input type="text" class="form-control font_12" id="subject"
														value="Subject" required="">
													<div class="valid-feedback">
														Looks good!
													</div>
													<div class="invalid-feedback">
														Please provide a valid subject.
													</div>
												</div>
												<div class="col-md-6">
													<input type="text" class="form-control font_12" id="website"
														value="Website" required="">
													<div class="valid-feedback">
														Looks good!
													</div>
													<div class="invalid-feedback">
														Please provide a valid website.
													</div>
												</div>
												<div class="col-md-12">
													<textarea id="message" value="Your Message (Maximum 300 words)"
														class="form-control form_text font_12" required=""></textarea>
													<div class="valid-feedback">
														Looks good!
													</div>
													<div class="invalid-feedback">
														Please provide a valid message.
													</div>
												</div>
												<div class="col-12">
													<div class="form-check font_14">
														<input class="form-check-input" type="checkbox" value=""
															id="invalidCheck" required="">
														<label class="form-check-label" for="invalidCheck">
															Before registration read our <a href="#">Privacy
																Statement</a> and
															<a href="#">Terms &amp; Conditions</a>
														</label>
														<div class="valid-feedback">
															Looks good!
														</div>
														<div class="invalid-feedback">
															You must agree before submitting.
														</div>
													</div>
												</div>
												<div class="col-12 center_sm">
													<button
														class="btn btn-primary button text-white p-3 px-5 border-0 rounded-0 w-50 text-uppercase font_14 fw-bold sm_100"
														type="submit">Post Your Comment</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-lg-3">
							<div class="blog_1_right">
								<div class="blog_1_right1">
									<h5 class="head_after mb-4">Weekly Special</h5>
									<a href="#"><img src="<?= asset('img/contents/others/gal-2.jpg'); ?>"
											class="img-fluid" alt="abc"></a>
									<b class="d-block"><a class="d-block bg-black text-white p-2 font_13 link"
											href="#">PASTO
											PIZZA WITH EXTRA TOPPINGS</a></b>
								</div>
								<div class="recipe_1_right1 mt-5">
									<h5 class="head_after mb-4">Categories</h5>
									<ul class="mb-0 font_14">
										<li><a class="d-block pb-3  border-bottom" href="#"><i
													class="bi bi-chevron-right me-1 col_green"></i> Breakfast <span
													class="float-end">23</span></a></li>
										<li><a class="d-block py-3  border-bottom" href="#"><i
													class="bi bi-chevron-right me-1 col_green"></i> Desssert <span
													class="float-end">12</span></a></li>
										<li><a class="d-block py-3 border-bottom" href="#"><i
													class="bi bi-chevron-right me-1 col_green"></i> Dinner <span
													class="float-end">16</span></a></li>
										<li><a class="d-block py-3 border-bottom" href="#"><i
													class="bi bi-chevron-right me-1 col_green"></i> Fruits <span
													class="float-end">09</span></a></li>
										<li><a class="d-block py-3  border-bottom" href="#"><i
													class="bi bi-chevron-right me-1 col_green"></i> Lunch <span
													class="float-end">07</span></a></li>
										<li><a class="d-block pt-3" href="#"><i
													class="bi bi-chevron-right me-1 col_green"></i>
												Popular <span class="float-end">17</span></a></li>
									</ul>
								</div>
								<div class="recipe_1_right1 mt-5">
									<h5 class="head_after mb-4">Archives</h5>
									<ul class="mb-0 font_14">
										<li><a class="d-block pb-3  border-bottom" href="#"><i
													class="bi bi-chevron-right me-1 col_green"></i> JANUARY 2017 <span
													class="float-end">23</span></a></li>
										<li><a class="d-block py-3  border-bottom" href="#"><i
													class="bi bi-chevron-right me-1 col_green"></i> DECEMBER 2016 <span
													class="float-end">12</span></a></li>
										<li><a class="d-block py-3 border-bottom" href="#"><i
													class="bi bi-chevron-right me-1 col_green"></i> NOVEMBER 2016 <span
													class="float-end">16</span></a></li>
										<li><a class="d-block py-3 border-bottom" href="#"><i
													class="bi bi-chevron-right me-1 col_green"></i> AUGUST 2016 <span
													class="float-end">09</span></a></li>

										<li><a class="d-block pt-3" href="#"><i
													class="bi bi-chevron-right me-1 col_green"></i>
												MARCH 2016 <span class="float-end">17</span></a></li>
									</ul>
								</div>
								<div class="recipe_1_right1 mt-5">
									<h5 class="head_after mb-4">Recent Recipes</h5>
									<ul class="mb-0 recipes-downward-fmt">
										<li class="d-flex border-bottom  pb-3 mb-3">
											<span><a href="single-view.html"><img width="100" alt="abc"
														src="<?= asset('img/contents/menus/breakfast/baked-creamy.jpg'); ?>"></a></span>
											<span class="flex-column ms-3">
												<b class="d-block font_14"><a href="#">Nulla Quis Sem Nibh
														Imperdiet</a></b>
												<span class="mt-1 font_14 d-block">Jan 16, 2016</span>
											</span>
										</li>
										<li class="d-flex border-bottom  pb-3 mb-3">
											<span><a href="single-view.html"><img width="100" alt="abc"
														src="<?= asset('img/contents/menus/breakfast/morning-fresh.jpg'); ?>"></a></span>
											<span class="flex-column ms-3">
												<b class="d-block font_14"><a href="#">Ligula in libero Sed lacinia
														nunc</a></b>
												<span class="mt-1 font_14 d-block">Jan 18, 2016</span>
											</span>
										</li>
										<li class="d-flex border-bottom  pb-3 mb-3">
											<span><a href="single-view.html"><img width="100" alt="abc"
														src="<?= asset('img/contents/menus/dinner/salmon.jpg'); ?>"></a></span>
											<span class="flex-column ms-3">
												<b class="d-block font_14"><a href="#">Consectetur Elit Integer Nec
														Libero</a></b>
												<span class="mt-1 font_14 d-block">Jan 19, 2016</span>
											</span>
										</li>

										<li class="d-flex">
											<span><a href="single-view.html"><img width="100" alt="abc"
														src="<?= asset('img/contents/menus/dinner/seafood.jpg'); ?>"></a></span>
											<span class="flex-column ms-3">
												<b class="d-block font_14"><a href="#">Atque nulla illo rem eveniet
														nemo,</a></b>
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