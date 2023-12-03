<div class="container">

	<!-- Outer Row -->
	<div class="row justify-content-center">

		<!-- <div class="col-lg-12"> -->
		<div class="col-xl-10 col-lg-12 col-md-9">

			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<div class="row">
						<div class="col-lg-6">
							<img src="<?= base_url('assets/img/admin.svg'); ?>" alt="">
						</div>
						<div class="col-lg-6">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4"><b>Login Page</b></h1>
								</div>
								<?= $this->session->flashdata('msg'); ?>
								<form class="user" method="post" action="<?= base_url('auth'); ?>">
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
										<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class=" form-group">
										<input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
										<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>

									<button type="submit" class="btn btn-primary btn-user btn-block">
										Login
									</button>

								</form>
								<div class="text-center" style="padding-top: 10px;">
									<a class="small" href="<?= base_url('auth/forgotPassword'); ?>">Lupa Kata Sandi?</a>
								</div>
								<hr>
								<div class="text-center">
									<a class="btn btn-success btn-sm" href="<?= base_url('auth/registrasi') ?>">Daftar Sebuah Akun!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>