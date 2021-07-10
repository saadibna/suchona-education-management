<!-- @extends('frontend.master')

@section('title','Registration Form')

@section('content')
<div class="userForm p-3">
	<h2>
        <a href="{{route('login')}}" class="disable_form" title="Click to login">Login Form</a>
        <a href="{{route('register')}}" class="actLog">Registration Form <span style="color:red;">&#8681;</span></a>
    </h2>
	<form action="" method="post">

	  <div class="container">
		<label for="name"><b>Name</b></label>
		<input type="text" placeholder="Enter name" name="name" required>
		
		<label for="eml"><b>Email</b></label>
		<input type="text" placeholder="Enter email" name="eml" required>
		
		<label for="phone"><b>Phone</b></label>
		<input type="text" placeholder="Enter phone" name="phone" required>

		<label for="psw"><b>Password</b></label>
		<input type="password" placeholder="Enter password" name="psw" required>
		
		<label for="psw"><b> Retype Password</b></label>
		<input type="password" placeholder="Retype password" name="psw" required>
			
		<button type="submit">Register</button>
		<label>
		  <input type="checkbox" checked="checked" name="remember"> Remember me
		</label>
	  </div>

	  <div class="container" style="background-color:#f1f1f1">
		<button type="button" class="cancelbtn">Cancel</button>
	  </div>
	</form>
</div>
@endsection -->