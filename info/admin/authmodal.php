    <!-- ######################################################################################################################### -->
    <!-- authModal HTML -->
<?php require_once('auth.php')?>
<div id="authModalStaff" class="modal ">
	<div class="modal-dialog modal-confirm" style="width:300px">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="login-box" style="width:100%">
				<!-- /.login-logo -->
				<div class="login-box-body" id="div1">
					<p id="p1" class="login-box-msg">Authentication Required</p>
					<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
					<div class="form-group has-feedback">
						<input type="number" class="form-control" name="staffid" placeholder="Admin ID" required>
					</div>
					<div class="form-group has-feedback">
						<input type="password" class="form-control" id="password" name="password"  placeholder="Password" required>
						<i id="togglePassword" class="fa fa-eye fa-eye-slash" style="position:absolute;right:10px;top:10px"></i>
					</div>
					<div class="row">
						<div class="col-sm-6">
						<div class="checkbox icheck">
							<label>
							</label>
						</div>
						</div>
						<!-- /.col -->
						<div class="col-sm-6">
						<button type="submit" name="allow_staff" class="btn btn-primary btn-block btn-flat">Authenticate</button>
						</div>
						<!-- /.col -->
					</div>
					</form>
				</div>
				<!-- /.login-box-body -->
			</div>
		</div>
	</div>
</div>
<div id="authModalAdmin" class="modal ">
	<div class="modal-dialog modal-confirm" style="width:300px">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="login-box" style="width:100%">
				<!-- /.login-logo -->
				<div class="login-box-body" id="div1">
					<p id="p1" class="login-box-msg">Authentication Required</p>
					<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
					<div class="form-group has-feedback">
						<input type="number" class="form-control" name="staffid" placeholder="Admin ID" required>
					</div>
					<div class="form-group has-feedback">
						<input type="password" class="form-control" id="password1" name="password"  placeholder="Password" required>
						<i id="togglePassword1" class="fa fa-eye fa-eye-slash" style="position:absolute;right:10px;top:10px"></i>
					</div>
					<div class="row">
						<div class="col-sm-6">
						<div class="checkbox icheck">
							<label>
							</label>
						</div>
						</div>
						<!-- /.col -->
						<div class="col-sm-6">
						<button type="submit" name="allow_admin" class="btn btn-primary btn-block btn-flat">Authenticate</button>
						</div>
						<!-- /.col -->
					</div>
					</form>
				</div>
				<!-- /.login-box-body -->
			</div>
		</div>
	</div>
</div>
<script>
const togglePassword = document.querySelector('#togglePassword');
const togglePassword1 = document.querySelector('#togglePassword1');
const password = document.querySelector('#password');
const password1 = document.querySelector('#password1');
togglePassword.addEventListener('click',function (e) {
    const type = password.getAttribute('type') === 'password'? 'text': 'password';
    password.setAttribute('type',type);
    this.classList.toggle('fa-eye-slash');
    
});
togglePassword1.addEventListener('click',function (e) {
    const type = password1.getAttribute('type') === 'password'? 'text': 'password';
    password1.setAttribute('type',type);
    this.classList.toggle('fa-eye-slash');
    
});
</script>


    <!-- ################################################################################################################################## -->
