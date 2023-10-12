<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
{{-- @if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>
@endif --}}

{{-- End reg user --}}

<div class="auth-wrapper">
    <div class="card borderless">
        <div class="row align-items-center">
            <div class="col-md-12">
                <img class="card-img-top" src="assets/images/railway.jpg" alt="Card image cap">
            </div>
        </div>
    </div>
	<div class="auth-content text-center">
		<div class="card borderless">
			<div class="row align-items-center">
				<div class="col-md-12">
					<div class="card-body">
						<h4 class="mb-3 f-w-400">User Registration</h4>
						<hr>
						<form action="{{ route('user.store') }}" method="post">
							@csrf
                            <div class="form-group mb-3">
                                <input type="text" name="name" class="form-control" id="name" placeholder="User Name">
                                {{-- @if($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif --}}
                            </div>
						<div class="form-group mb-3">
							<input type="email" name="email" class="form-control" id="email" placeholder="Email Address">
							{{-- @if($errors->has('email'))
							<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif --}}
						</div>
                        <div class="form-group mb-3">
							<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number">

						</div>
						<div class="form-group mb-3">
							<input type="text" name="address" class="form-control" id="address" placeholder="Address">

						</div>
                        <div class="form-group mb-3">
							<input type="password" name="password" class="form-control" id="password" placeholder="Password">
							{{-- @if($errors->has('email'))
							<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif --}}
						</div>
						<button type="submit" class="btn btn-block btn-primary mb-4">Register</button>
                        {{-- <button type="button" class="btn btn-block btn-secondary" data-bs-toggle="modal" data-bs-target="#adduser">
                            Register +
                        </button> --}}
						<hr>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
</html>
