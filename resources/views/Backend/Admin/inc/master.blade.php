<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Admin | @yield('admin_title')</title>

 @include('Backend.admin.inc.style')
</head>
<body>
	<div class="main-wrapper">
        @include('Backend.Admin.inc.sidebar')

		<div class="page-wrapper">

         @include('Backend.Admin.inc.navbar')

         @yield('admin_content')

		@include('Backend.Admin.inc.footer')

		</div>
	</div>

@include('Backend.admin.inc.script')

</body>
</html>
