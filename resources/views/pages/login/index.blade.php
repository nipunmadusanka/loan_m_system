<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @include('libraries.styles')
</head>
<body>
    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

@if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>
@endif
<div class="modal fade " class="modal-dialog modal-dialog-centered" id="adduser" data-bs-backdrop="static"
data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Create Users (Admin)</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!--Modal form-->
        <form action="{{ Route('pages.login.userRegister') }}" method="post">
            @csrf
            <div class="modal-body">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-20">
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" class="form-control" name="name" id="Username" placeholder="User name">
                            </div>
                        </div>
                        <div class="col-md-20">
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" name="email" id="Email" placeholder="Email address" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" required autocomplete="current-password">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="submit">Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

{{-- End reg user --}}

<div class="auth-wrapper">
    {{-- <div class="card borderless">
        <div class="row align-items-center">
            <div class="col-md-12">
                <img class="card-img-top" src="assets/images/download.jpg" alt="Card image cap">
            </div>
        </div>
    </div> --}}
	<div class="auth-content text-center">
		<div class="card borderless">
			<div class="row align-items-center">
				<div class="col-md-12">
					<div class="card-body">
						<h4 class="mb-3 f-w-400">Loan Manegement System</h4>
						<hr>
						<form action="{{ Route('pages.login') }}" method="post">
							@csrf
						<div class="form-group mb-3">
							<input type="text" name="email" class="form-control" id="email" placeholder="Email address">
							@if($errors->has('email'))
							<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif
						</div>
						<div class="form-group mb-4">
							<input type="password" class="form-control" name="password" id="password" placeholder="Password">
							@if($errors->has('password'))
							<span class="text-danger">{{ $errors->first('password') }}</span>
						@endif
						</div>
						<div class="custom-control custom-checkbox text-left mb-4 mt-2">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Save credentials.</label>
						</div>
						<button type="submit" class="btn btn-block btn-primary mb-4">Signin</button>
                        <button type="button" class="btn btn-block btn-secondary" data-bs-toggle="modal" data-bs-target="#adduser">
                            Register +
                        </button>

						<hr>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
</html>
