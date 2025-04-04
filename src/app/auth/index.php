<?php

include_once __DIR__ . '/../../utils/php/functions.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?= shared('elements/meta'); ?>
	<title>Fil Eats - Sign In</title>
	<?= shared('elements/styles'); ?>
</head>

<body>

	<div class="site-cont">
		<main class="site-main">
			<section id="auth">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-5">
							<div class="auth-wrapper">
								<div class="auth-header">
									<a class="d-flex" href="<?= app('landing'); ?>">
										<b class="fs-2 d-block logo text-center"> <span class="family_1">Fil
												Eats</span>
											<span class="d-block text-uppercase font_13">Cooking
												Recipes</span>
											<span class="d-block font_12 col_green mt-1">
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
											</span>
										</b>
									</a>
								</div>
								<div class="auth-body shadow mx-auto p-4">
									<div class="auth-body-header">
										<h3 class="col_green">Login</h3>
										<div class="mb-2">Login with your Cooking account</div>
									</div>
									<form action="">
										<label for="email">Email Address</label>
										<input type="email" name="email" class="form-control" placeholder="Your Email">
										<label for="password">Password</label>
										<input type="password" name="password" class="form-control"
											placeholder="Your Password">
										<div class="d-flex justify-content-between mt-3">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="remember" value=""
													id="remember">
												<label class="form-check-label" for="remember">
													Remember Me
												</label>
											</div>
											<a href="#">Forgot Password?</a>
										</div>
										<h6 class="mt-3 mb-0"><a class="button" href="#">Login
												<i class="bi bi-box-arrow-in-right ms-1 align-middle"></i></a></h6>
									</form>
									<div class="mt-4 mb-0">Don't have an account? <a class="col_green"
											href="register.php">Register</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
	</div>

	<!-- scripts -->
	<?= shared('elements/scripts'); ?>
	<script type="text/javascript">
		$(function () {
			// Custom js here...
		});
	</script>

</body>

</html>