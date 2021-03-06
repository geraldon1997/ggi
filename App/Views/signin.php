<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(<?= ASSETS; ?>auth/images/bg-01.jpg);">
					<span class="login100-form-title-1">
                    <a href="<?= HOME; ?>" class="login100-form-btn">Go back to Homepage</a>
                        <br>
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" id="email" name="email" placeholder="Enter Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" id="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<i class="txt1">Not a user ? <a href="<?= SIGNUP; ?>"> Sign up</a></i>
						</div>

						<div>
							<a href="<?= FORGOT_PASSWORD; ?>" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="signin">
							Sign in
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
        $('form').submit((e)=>{
            e.preventDefault();
            
            var email = $('#email').val();
            var pass = $('#password').val();

            if (email == '' || email == ' ' || email == null || email == undefined) {
                $('#emailerror').remove();
                $('#email').after('<p style="color:red;" id="emailerror">email address field is required</p>');
                return;
            } else {
                $('#emailerror').remove();
            }

            if (pass == '' || pass == ' ' || pass == null || pass == undefined) {
                $('#passerror').remove();
                $('#password').after('<p style="color:red;" id="passerror">password field is required</p>');
                return;
            } else {
                $('#passerror').remove();
            }

            var formdata = $('form').serialize();
            var signin = $('#signin');
            signin.prop({'disabled':'true'}).html('processing . . .');

            $.ajax({
                type : 'POST',
                url : '/user/auth',
                data : formdata,
                success : (response) => {
                    
                    switch (response) {
                        case 'ne':
                            alert('This user does not exist');
                            signin.removeAttr('disabled').html('Sign in');
                            break;

                        case 'ic':
                            alert('Incorrect Username or Password');
                            signin.removeAttr('disabled').html('Sign in');
                            break;

                        case 'cv':
                            window.location = "<?= DASHBOARD; ?>";
                            break;
                    
                        default:
                            break;
                    }
                }
            });
        })

    </script>