<html lang="en">
@include('admincms.layouts.head')

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
	@include('admincms.layouts.header')
	<div class="app-body">
		@include('admincms.layouts.navigation')
		<main class="main">
			@include('admincms.layouts.breadcrumb')
			<div class="container-fluid">
	          	<div class="animated fadeIn">
					@yield('content')
				</div>
			</div>
		</main>	
	</div>
</body>

@include('admincms.layouts.footer')
@include('admincms.layouts.js')
@yield('js-extra')
</html>