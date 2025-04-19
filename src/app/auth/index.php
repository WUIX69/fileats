<?php include_once __DIR__ . '/../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?= shared('elements/meta'); ?>
	<title>Sign In - Fil Eats</title>
	<?= shared('elements/styles'); ?>
</head>

<body>
	<div class="shared-standalone-cont">
		<?= shared('layouts/loader/window'); ?>
	</div>

	<div class="site-cont">
		<main class="site-main">
			<section id="auth">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-5">
							<div class="auth-wrapper">
								<?= featured('auth/components/header'); ?>
								<div class="auth-body shadow mx-auto p-4">
									<div class="auth-body-header">
										<h3 class="col_green">Login</h3>
										<div class="mb-2">Login with your Cooking account</div>
									</div>
									<form class="ui form">
										<div class="field">
											<label for="email">Email Address</label>
											<input type="email" name="email" class="form-control"
												placeholder="Your Email">
										</div>
										<div class="field">
											<label for="password">Password</label>
											<input type="password" name="password" class="form-control"
												placeholder="Your Password">
										</div>
										<div class="field d-flex justify-content-between mt-3">
											<div class="ui left aligned checkbox">
												<input type="checkbox" name="remember" value="">
												<label for="remember">Remember Me</label>
											</div>
											<a class="forgot" href="#">Forgot Password?</a>
										</div>
										<div class="actions">
											<button class="ui submit positive button" type="submit">Login
												<i class="bi bi-box-arrow-in-right ms-1 align-middle"></i></button>
										</div>
									</form>
									<div class="mt-4 mb-0 redirect">Don't have an account? <a class="col_green"
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
	<script src="<?= featured('auth/login/main.js', true); ?>"></script>

</body>

</html>