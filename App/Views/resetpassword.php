<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(<?= ASSETS; ?>auth/images/bg-01.jpg);">
					<span class="login100-form-title-1">
                    <a href="<?= HOME; ?>" class="login100-form-btn">Go back to Homepage</a>
                        <br>
						Reset Password
					</span>
				</div>
                

				<form class="login100-form validate-form">
                <input type="hidden" name="token" id="token" value="<?= $params; ?>">
					<div class="wrap-input100 validate-input m-b-26" data-validate="password is required">
						<span class="label-input100">New password</span>
						<input class="input100" type="password" name="password" id="password" placeholder="Enter new password" required>
						<span class="focus-input100"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Login code is required">
						<span class="label-input100">Confirm password</span>
						<input class="input100" type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm password" required>
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="">
							reset
						</button>
					</div>
				</form>
			</div>
		</div>
    </div>

    <script>
        $(window).load(() => {
            var token = $('#token').val();
            
            $.ajax({
                type: 'POST',
                url: '/user/checkpasswordresettoken',
                data: {
                    token : token
                },
                success: (response) => {
                    switch (response) {
                        case 'tde':
                            alert('Invalid Token');
                            window.location = '/user/signin';
                            break;
                        
                        case 'the':
                            alert('Token has expired');
                            window.location = '/user/forgotpassword';
                            break;

                        default :
                        break;
                    }
                }
            })
        })

        var pass = $('#password');
        var cpass = $('#confirmpassword');

        $(pass).keyup(()=>{
            $('#pe').remove();
            if (pass.val() != cpass.val()) {
                cpass.after('<p id="pe" style="color:red;">passwords do not match</p>');
                return;
            }
            $('#pe').remove();
        })

        $(cpass).keyup(()=>{
            $('#pe').remove();
            if (cpass.val() != pass.val()) {
                pass.after('<p id="pe" style="color:red;">passwords do not match</p>');
                return;
            }
            $('#pe').remove();
        })

        $('form').submit((e) => {
            e.preventDefault();
            
            $('form button').prop('disabled','true').html('Processing . . .');
            $.ajax({
                type : 'POST',
                url : '/user/updatepassword',
                data : $('form').serialize(),
                success : (response) => {
                    switch (response) {
                        case 'pnu':
                            alert('An error occurred, please try again later');
                            $('form button').removeAttr('disabled').html('Reset');
                            setTimeout(()=>{
                                window.location = '/user/forgotpassword';
                            }, 2000);
                            break;

                        case '1':
                            $('form button').html('password updated');
                            setTimeout(()=>{
                                alert('password updated, you can now login with your new password');
                            }, 3000);
                            setTimeout(()=>{
                                window.location = '/user/signin';
                            }, 6000);
                            break;

                        default :
                        break;
                    }
                }
            })
        })
    </script>