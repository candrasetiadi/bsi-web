<html lang="en">
@include('admincms.layouts.head')

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
	@include('admincms.layouts.header')
	<div class="app-body">
		@include('admincms.layouts.navigation')
		@yield('content')
	</div>
</body>

@include('admincms.layouts.footer')
@include('admincms.layouts.js')
@yield('js-extra')
</html>