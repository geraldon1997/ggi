<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(<?= ASSETS; ?>auth/images/bg-01.jpg);">
					<span class="login100-form-title-1">
                    <a href="<?= HOME; ?>" class="login100-form-btn">Go back to Homepage</a>
                        <br>
                        Forgot Password 
					</span>
				</div>

				<form class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email : </span>
						<input class="input100" type="email" name="email" placeholder="Enter Email Address">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							send password reset link
						</button>
					</div>
                </form>
                
                
			</div>
		</div>
	</div>

    <script>
        $('form').submit((e) => {
            e.preventDefault();

            var formdata = $('form').serialize();

            var btn = $('form button');
            btn.prop({'disabled':'true'}).html('processing . . .');

            $.ajax({
                type : 'POST',
                url : '/user/sendpasswordresetlink',
                data : formdata,
                success : (response) => {
                    switch (response) {
                        case 'ie':
                            setTimeout(() => {
                                btn.html('Invalid Email Address');
                            }, 3000);
                            
                            setTimeout(() => {
                                alert('Invalid Email Address');
                                btn.removeAttr('disabled').html('Send Password Reset Link');
                            }, 6000);
                            break;

                        case 'prls':
                            setTimeout(() => {
                                btn.html('email address confirmed');
                            }, 3000);
                            setTimeout(() => {
                                alert('A password reset link has been sent to your email');
                                window.location = '/user/signin';
                            }, 6000);
                            break;
                    
                        default:
                            break;
                    }
                }
            });
        });
    </script>