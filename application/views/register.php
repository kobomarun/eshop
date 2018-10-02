<div class="col-md-9">

  <div class="table_layout">
    <h3>User Registration</h3>
<?php if($this->session->flashdata('error')) { ?>
  <div class="alert_box_error"> <?php echo $this->session->flashdata('error'); ?></div>
<?php } ?>
			<div class="table_row">

				<div class="table_cell">

					<section>

						<h4>User Registration</h4>

						<p class="subcaption">Already registered? Please log in here</p>

						<form id="login_form" class="type_2" method="post" action="<?php echo base_url(); ?>users/registrationProcess">
							<ul>
                <li class="row">
									<div class="col-xs-12">
										<label for="login_email" class="required">Full Name</label>
										<input type="text" id="name" name="fname" required/>
									</div>
								</li>

								<li class="row">
									<div class="col-xs-12">
										<label for="login_email" class="required">Email address</label>
										<input type="email" id="login_email" name="email" required/>
									</div>
								</li>

								<li class="row">
									<div class="col-xs-12">
										<label for="login_password" class="required">Password</label>
										<input type="password" name="password" id="login_password" required/>
									</div>
								</li>

							</ul>

						</form>

					</section>

				</div><!--/ .table_cell -->

			</div><!--/ .table_row -->

			<div class="table_row">


				<div class="table_cell">

					<div class="on_the_sides login_with">

						<div class="left_side">
							<button type="submit" form="login_form" class="button_blue middle_btn">Register</button>
						</div>
					</div>

				</div><!--/ .table_cell -->

			</div><!--/ .table_row -->

		</div>
</div>
<div style="margin-top:150px;">.</div>
