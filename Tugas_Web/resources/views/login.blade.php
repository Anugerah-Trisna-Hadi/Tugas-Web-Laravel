@extends('master.master')
@section('title','Login - Anugerah Web')
@section('content')
<section>
	<div class="container">
		<div class="col-md mt-5">
			<h1 class="text-center">Login</h1>
		</div>
		<form action="/PostLogin" method="post">
			@csrf
			<div class="form-group">
				<label for="email">Masukan Email</label>
				<input type="email" class="form-control" id="email" name="email"  required="required">
			</div>
			<div class="form-group">
				<label for="password">Masukan Password</label>
				<input type="password" class="form-control" id="password" name="password" required="required">
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
		</form>
	</div>
</section>

@endsection


