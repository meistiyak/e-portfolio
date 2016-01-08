<!DOCTYPE html>
<html>
<head>
	<title></title>
	{!! Html::style("login/css/bootstrap.min.css") !!}
	{!! Html::style("login/css/forget.css") !!}

    {!! Html::style("login/assets/ico/favicon.png") !!}
    {!! Html::style("login/assets/font-awesome/css/font-awesome.min.css") !!}
</head>
<body>
	<div class = "container">
		{!! Form::open(["url" => "/password/email"]) !!}

		<table class = "table" style= "width: 50%; margin: 0 auto;">
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
			<tr>
				<td colspan = "2">
					<h1 class = "well text-center">Send password reset link </h1>
				</td>
			</tr>
			<tr>
				<td>Enter your email address :</td>
				<td> {!! Form::email("email") !!} </td>
			</tr>
			<tr>
				<td colspan = "2">
					{!! Form::submit("Send password reset link") !!}
				</td>
			</tr>

		</table>
		{!! Form::close() !!}
	</div>
</body>
</html>






<!-- resources/views/auth/password.blade.php -->

<!--
<form method="POST" action="/password/email">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        <button type="submit">
            Send Password Reset Link
        </button>
    </div>
</form>

-->

<!--
<!DOCTYPE html>
<html>
	<head>
		<title></title>
			{!! Html::style("login/css/bootstrap.min.css") !!}
			{!! Html::style("login/css/forget.css") !!}

	        {!! Html::style("login/assets/ico/favicon.png") !!}
	        {!! Html::style("login/assets/font-awesome/css/font-awesome.min.css") !!}
	</head>


	<body>
		
		<div class = "container">
			<div class = "row">
		        <div class = "modal-dialog">
		            <div class = "modal-content">

		                <div class="panel panel-info">
		                    <div class="panel-heading" ><h3 id = "matha"> Portfolio HUB</h3></div>
		                </div>

		                <div class="modal-body">

		                	@if (session('status'))
								<div class="alert alert-success">
									{{ session('status') }}
								</div>
							@endif

							@if (count($errors) > 0)
								<div class="alert alert-danger">
									<strong>Whoops!</strong> There were some problems with your email.<br><br>
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif


		                    <h3 id="reset-header">Reset Password</h3>
		                    <p align="center">Enter your e-mail address below, and we'll send you an e-mail allowing you to reset it.</p>
		                    
		                  	<form class = "form-horizontal" role = "form" method = "POST" action="{{ url('/password/email') }}"> 
			                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
			                   {!! csrf_field() !!} 


			                    <div class="input-group margin-bottom-sm">
			                        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
			                        <input class="form-control" type="text" placeholder="Email address" value="{{ old('email') }}">
			                    </div>
			                
			                    <div class = "modal-footer">
			                    	<a class = "btn btn-default" href="{{ url('/auth/login') }}">Close</a>
			                    	<button class = "btn btn-primary" type = "submit">Send</button>

			                	</div>
			                </form>
		                </div>

		                

		            </div>
		        </div>	
			</div>
		</div>		

	</body>
</html>

-->