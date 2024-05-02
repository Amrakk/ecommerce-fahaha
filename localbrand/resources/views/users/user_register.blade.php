@extends('welcome')
@section('content')
<section id="form"><!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login-form"><!--login form-->
					<h2>Bạn đã có tài khoản, xin mời đăng nhập</h2>
					<?php
					$message = Session::get('message');
					if($message){
						echo '<span class="text-alert">' ,$message, '</span>';
						Session::put('message',null);
					}
					?>
					<form action="{{URL::to('/verify-login-user')}}" method="POST">
						@csrf
						<input type="email" placeholder="Email Address" name="user_email" required=""/>
						<input type="password" placeholder="password" name="user_password" required=""/>
						<button type="submit" class="btn btn-default" name="">Đăng Nhập</button>
					</form>
				</div><!--/login form-->
			</div>
			<div class="col-sm-1">
				<h2 class="or">HOẶC</h2>
			</div>
			<div class="col-sm-4">
				<div class="signup-form"><!--sign up form-->
					<h2>Đăng Kí Tài Khoản</h2>
					<?php
						if (!empty($error)) {
							echo '<span class="text-alert">' ,$error, '</span>';
					}
					?>
					 <?php
					 $error = Session::get('error');
					 if($error){
						 echo '<span class="text-alert">' ,$error, '</span>';
						 Session::put('error',null);
					 }
					 ?>
					<form action="{{URL::to('/save-user')}}" method="POST"> 
						@csrf
						<input type="text" placeholder="Name" name="user_name"/>
						<input type="email" placeholder="Email Address" name="user_email"/>
						<input type="password" placeholder="Password" name="user_password"/>
						<button type="submit" class="btn btn-default">Đăng Kí</button>
					</form>
				</div><!--/sign up form-->
			</div>
		</div>
	</div>
</section>-->
@endsection