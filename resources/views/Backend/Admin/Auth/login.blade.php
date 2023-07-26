
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Admin Login </title>

    <style type="text/css">
        .authlogin-side-wrapper{
            height: 100%;
            width: 100%;
            background-image: url({{asset('assets/admin/login.png')}});

        }
    </style>

    @include('Backend.admin.inc.style')
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pe-md-0">
                  <div class="authlogin-side-wrapper">

                  </div>
                </div>
                <div class="col-md-8 ps-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo logo-light d-block mb-2">Admin <span>Login</span></a>
                    <h5 class="text-muted fw-normal mb-4"></h5>
                    <form class="forms-sample" method="POST" action="{{ route('login') }}">
                        @csrf
                      <div class="mb-3">
                        <label for="login" class="form-label">Email/Phone/UserName</label>
                        <input type="text" name="login" class="form-control" id="login" placeholder="Email/Phone/UserName">
                      </div>
                      <div class="mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="Password" autocomplete="current-password" placeholder="Password">
                      </div>
                      <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="authCheck">
                        <label class="form-check-label" for="authCheck">
                          Remember me
                        </label>
                      </div>
                      <div>

                        <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                          <i class="btn-icon-prepend" data-feather="twitter"></i>
                            login
                        </button>
                      </div>
                      <a href="register.html" class="d-block mt-3 text-muted">Not a user? Sign up</a>
                    </form>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


    @

</body>
</html>
