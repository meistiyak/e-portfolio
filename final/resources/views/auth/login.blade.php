<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title></title>

		<meta charset="utf-8">
		<title>Home</title>

		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet'>
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel='stylesheet'>
		
		{!! Html::style("login/css/bootstrap.min.css") !!}
		{!! Html::style("login/css/style.css") !!}
<!--        <link href="css/font-awesome.min.css" rel="stylesheet">-->

        {!! Html::style("login/assets/ico/favicon.png") !!}
        {!! Html::style("login/assets/font-awesome/css/font-awesome.min.css") !!}
	</head>

	<body>

	
		<div id="login-form">
			
		    <div class="logo">Portfolio HUB</div>
            <div class="tagline">
                <h2>Stop Wishing , Start Doing</h2>
            </div>

            <input type="radio" checked id="login" name="switch" class="hide">
			<input type="radio" id="signup" name="switch" class="hide">


            <div>
				<ul class="form-header">
				<li><label for="login"><i class="fa fa-lock"></i> LOGIN<label for="login"></li>
				<li><label for="signup"><i class="fa fa-credit-card"></i> REGISTER</label></li>
				</ul>
			</div>

			<div class="section-out">
				<section class="login-section">
                    <div class="login">
                        <form method="POST" action="/auth/login">
                        	{!! csrf_field() !!}

                        	@if (count($errors) > 0)
								<tr>
									<td colspan = "2">
										<div class = "alert alert-danger">
											<ul>
												@foreach($errors->all() as $error)
												<li>{{ $error }}</li>
												@endforeach
											</ul>
										</div>
									</td>
								</tr>
							@endif

                            <ul class="ul-list">
                                
                                <li><input type="email" name="email" required class="input" placeholder="Your Email" value="{{ old('email') }}"/><span class="icon"><i class="fa fa-envelope-o fa-fw"></i></span></li>

                                <li><input type="password" name = "password" id = "password" required class="input" placeholder="Password"/><span class="icon"><i class="fa fa-lock"></i></span></li>
                                
                              	<li><span class="remember"><input type="checkbox" id="check" > <label for="check">Remember Me</label></span><span class="remember"><a href="{{ url('/password/email') }}" >Forget Password</a></span></li>
                                <li><input type="submit" value="SIGN IN" class="btn btn-primary"></li>

                            </ul>
                        </form>
                    </div>

					<div class="social-login">Or sign in with &nbsp;

                        <a href="{{ url('/auth/facebook') }}" class="fb"><i class="fa fa-facebook"></i></a>
                        <a href="{{ url('/auth/github') }}" class="gh"><i class="fa fa-github"></i></a>
                        <a href="{{ url('/auth/google') }}" class="gp"><i class="fa fa-google-plus"></i></a>
                        <a href="{{ url('/auth/linkedin') }}" class="in"><i class="fa fa-linkedin"></i></a>
                    </div>
				</section>
				

				</section>

				<section class="signup-section">
				<div class="login">
					{{-- <form method="POST" action="/auth/register">  --}}
						<form method="POST" action="/register"> 
						{!! csrf_field() !!}

						@if (count($errors) > 0)
							<tr>
								<td colspan = "2">
									<div class = "alert alert-danger">
										<ul>
											@foreach($errors->all() as $error)
											<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								</td>
							</tr>
						@endif

						<ul class="ul-list">
							<li><input type="text" name = "name" value="{{ old('name') }}" required class="input" placeholder="FulL Name"/><span class="icon"><i class="fa fa-user"></i></span></li>
							<li><input type="email" name = "email" value="{{ old('email') }}" required class="input" placeholder="Your Email"/><span class="icon"><i class="fa fa-envelope-o fa-fw"></i></span></li>
							<li><input type="password" name = "password" required class="input" placeholder="Password"/><span class="icon"><i class="fa fa-lock"></i></span></li>
							<li><input type="password" name="password_confirmation" required class="input" placeholder="Confirm Password"/><span class="icon"><i class="fa fa-lock"></i></span></li>
							<li><input type="checkbox" id="check1" > <label for="check1">I accept <a href="{{ url('/pages/Terms') }}" id="terms" target="_blank">terms and conditions</a></label></li>
							<!--<li> <a href=""><input type="submit" value="SIGN UP" class="btn btn-primary"> </a> </li>-->
                            <!--<button type="submit" class="btn btn-primary ">Sign Up</button>-->
                        </ul>
                        <button type="submit" class="btn btn-primary ">SIGN UP</button>
					</form>
				</div>

					<div class="social-login">Or sign up with &nbsp;
						<a href="{{ url('/auth/facebook') }}" class="fb"><i class="fa fa-facebook"></i></a>
                        <a href="{{ url('/auth/github') }}" class="gh"><i class="fa fa-github"></i></a>
                        <a href="{{ url('/auth/google') }}" class="gp"><i class="fa fa-google-plus"></i></a>
                        <a href="{{ url('/auth/linkedin') }}" class="in"><i class="fa fa-linkedin"></i></a>
					</div>
				</section>				
		</div>
	</body>
</html>

