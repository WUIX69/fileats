<?php
include_once __DIR__ . '/../../utils/php/functions.php';
$title = 'Sign Up';
?>

<?= shared('partials/top'); ?>
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
							<?= shared('components/auth/header'); ?>
							<div class="auth-body shadow mx-auto p-4">
								<div class="auth-body-header">
									<h3 class="col_green">Register</h3>
									<div class="mb-2">Create your Cooking account</div>
								</div>
								<form action="">
									<label for="name">Full Name</label>
									<input type="text" class="form-control" name="name" placeholder="Your Name">
									<label for="email">Email Address</label>
									<input type="email" class="form-control" name="email" placeholder="Your Email">
									<label for="password">Password</label>
									<input type="password" class="form-control" name="password"
										placeholder="Your Password">
									<div class="d-flex justify-content-between mt-3">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" name="remember"
												id="remember">
											<label class="form-check-label" for="remember">
												I agree with the <a href="#">Terms Of Service</a>
											</label>
										</div>
									</div>
									<h6 class="mt-3 mb-0"><a class="button" href="#">Register <i
												class="bi bi-arrow-right-circle ms-1 align-middle"></i></a></h6>
								</form>
								<div class="mt-4 mb-0">Already have an account? <a class="col_green"
										href="index.php">Login</a>
								</div>
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
<script src="<?= feature('auth/register/main.js'); ?>"></script>

<?= shared('partials/bot'); ?>