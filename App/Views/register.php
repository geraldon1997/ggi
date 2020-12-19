<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(<?= ASSETS; ?>auth/images/bg-01.jpg);">
					<span class="login100-form-title-1">
                    <a href="<?= HOME; ?>" class="login100-form-btn">Go back to Homepage</a>
                        <br>
						Sign Up
					</span>
				</div>

				<form class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">Email : </span>
						<input class="input100" type="email" name="email" id="email" placeholder="Enter Email Address" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password : </span>
						<input class="input100" type="password" name="password" id="password" placeholder="Enter password" required>
						<span class="focus-input100"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Confirm : </span>
						<input class="input100" type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm password" required>
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<i class="txt1">Already a user ? <a href="<?= SIGNIN; ?>"> Sign in</a></i>
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign up
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<script>

$('#password').keyup(()=>{
    var cp = $('#confirmpassword').val();
    var p = $('#password').val();

    if (p != cp) {
        $('#passerror').remove();
        $('#confirmpassword').after('<p style="color:red;" id="passerror">Passwords do not match</p>')
        return;
    } else {
        $('#passerror').remove();
    }
});

$('#confirmpassword').keyup(()=>{
    var cp = $('#confirmpassword').val();
    var p = $('#password').val();

    if (cp != p) {
        $('#passerror').remove();
        $('#password').after('<p style="color:red;" id="passerror">Passwords do not match</p>')
        return;
    } else {
        $('#passerror').remove();
    }
});


$('form').submit((event)=>{
    event.preventDefault();

    $('form button').prop('disabled', 'true');
    $('form button').html('Processing . . .');

    $.ajax({
        type : 'POST',
        url : '/user/store',
        data : {
            email : $('input#email').val(),
            pass : $('input#password').val()
        },
        success : (response) => {
            
            if (response) {
                setTimeout(() => {
                    $('form button').html('registration was successful');
                }, 1000);
                
                setTimeout(() => {
                    alert('A verification link has been sent to your email');
                    location.href = "/user/signin"
                }, 3000);
            }
        }
    });
})

</script>