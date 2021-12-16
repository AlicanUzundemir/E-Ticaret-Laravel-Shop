<!DOCTYPE html>
<html lang="en">

@include('frontend.layouts.partials.head')

<body>


	@include('frontend.layouts.partials.header')


	<!-- Header End====================================================================== -->
	
	

	
	<!-- main kısmı -->
	@yield('content')
	<!-- main son -->
	
	<!-- Footer ================================================================== -->
	@include('frontend.layouts.partials.footer')
	<!-- Footer son -->
	<!-- Placed at the end of the document so the pages load faster ============================================= -->
	@include('frontend.layouts.partials.secectionBox')
	<!-- Script kısmı -->
	@include('frontend.layouts.partials.script')
	<!-- Script son -->
	
</body>

</html>