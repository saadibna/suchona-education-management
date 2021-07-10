<!-- @extends('frontend.master')

@section('title','Login Form')

@section('content') -->
<!-- <div class="userForm p-3">
	<h2>
        <a href="{{route('login')}}" class="actLog">Login Form <span style="color:red;">&#8681;</span></a>
        <a href="{{route('register')}}" class="disable_form" title="Click to be Registered">Registration Form</a>
    </h2>
	<form method="POST" action="{{ route('login') }}">
		@csrf
	  <div class="container">
		<label for="eml"><b>Email</b></label>
		<input type="text" placeholder="Enter email" name="email" required>

		<label for="psw"><b>Password</b></label>
		<input type="password" placeholder="Enter password" name="password" required>
			
		<button type="submit" href="#">Login</button>
		<label>
		  <input type="checkbox" checked="checked" name="remember"> Remember me
		</label>
	  </div>

	  <div class="container" style="background-color:#f1f1f1">
		<button type="button" class="cancelbtn">Cancel</button>
		<span class="psw text-dark">Forgot <a href="#" class="text-info">password?</a></span>
	  </div>
	</form>
</div> -->
<!-- @endsection -->
