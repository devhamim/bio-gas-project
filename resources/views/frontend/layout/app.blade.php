

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>{{ $setting->first()->title }}</title>
<!-- Stylesheets -->
<link href="{{ asset('frontend') }}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset('frontend') }}/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{ asset('frontend') }}/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{ asset('frontend') }}/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="{{ asset('frontend') }}/css/venobox.min.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="{{ asset('frontend') }}/css/style.css" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}" type="image/x-icon">
<link rel="icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

	<!-- Preloader -->


	<!-- Main Header-->
	@include('frontend.layout.header')
	<!--End Main Header -->

	{{-- main start --}}
    @yield('content')
	{{-- main end --}}

	<!-- Main Footer -->
	@include('frontend.layout.footer')
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script src="{{ asset('frontend') }}/js/jquery.js"></script>
<script src="{{ asset('frontend') }}/js/popper.min.js"></script>
<!--Revolution Slider-->
<script src="{{ asset('frontend') }}/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{ asset('frontend') }}/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ asset('frontend') }}/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{ asset('frontend') }}/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{ asset('frontend') }}/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{ asset('frontend') }}/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{ asset('frontend') }}/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{ asset('frontend') }}/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{ asset('frontend') }}/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{ asset('frontend') }}/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{ asset('frontend') }}/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="{{ asset('frontend') }}/js/main-slider-script.js"></script>
<!--Revolution Slider-->
<script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.fancybox.js"></script>
<script src="{{ asset('frontend') }}/js/wow.js"></script>
<script src="{{ asset('frontend') }}/js/appear.js"></script>
<script src="{{ asset('frontend') }}/js/select2.min.js"></script>
<script src="{{ asset('frontend') }}/js/venobox.min.js"></script>
<script src="{{ asset('frontend') }}/js/owl.js"></script>
<script src="{{ asset('frontend') }}/js/script.js"></script>


<script>
    new VenoBox({
    selector: ".my-link"
});
</script>
</body>
</html>
