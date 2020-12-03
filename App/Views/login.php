<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(<?= ASSETS; ?>auth/images/bg-01.jpg);">
					<span class="login100-form-title-1">
                    <a href="<?= HOME; ?>" class="login100-form-btn">Go back to Homepage</a>
                        <br>
						Verify Login Code
					</span>
				</div>

				<form class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Login code is required">
						<span class="label-input100">Code</span>
						<input class="input100" type="text" name="login_code" id="login_code" placeholder="Enter login code">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="verify">
							Verify
						</button>
					</div>
				</form>
			</div>
		</div>
    </div>
    
    
    <script>
        $('form').submit((e)=>{
            e.preventDefault();
            
            var lc = $('#login_code');

            if (lc.val() == '' || lc.val() == ' ' || lc.val() == null || lc.val() == undefined) {
                alert('Please enter your login code');
                return;
            }

            var formdata = $('form').serialize();
            var btn = $('#verify');
            btn.prop({'disabled':'true'}).html('verifying . . .');

            $.ajax({
                type : 'POST',
                url : '/user/verifylogincode',
                data : formdata,
                success : (response) => {
                    switch (response) {
                        case 'ilc':
                            alert('Invalid Login Code, a new Code has been sent to your email');
                            btn.removeAttr('disabled').html('Verify');
                            break;

                        case '':
                            alert('An Error Occurred');
                            window.location = '/user/signin';
                            break;

                        case 'exlc':
                            alert('Login Code has expired, a new Code has been sent to your email');
                            btn.removeAttr('disabled').html('Verify');
                            break;
                    
                        case 'lcv':
                            setTimeout(() => {
                                btn.html('Login Code Verified');
                            }, 3000);
                            setTimeout(()=>{
                                btn.html('Redirecting . . . .');
                            }, 6000);
                            setTimeout(() => {
                                window.location = '/user/dashboard';
                            }, 9000)

                        default:
                            break;
                    }
                }
            });
        })

    </script>