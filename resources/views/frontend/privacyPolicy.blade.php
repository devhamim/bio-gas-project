@extends('frontend.layout.app')
@section('content')
 <!-- Start main-content -->
 <section class="page-title" style="background-image: url({{ asset('frontend') }}/images/background/page-title.jpg);">
	<div class="auto-container">
		<div class="title-outer">
			<h1 class="title">Privacy Policy</h1>
			<ul class="page-breadcrumb">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li>Privacy Policy</li>
			</ul>
		</div>
	</div>
</section>
<!-- end main-content -->

<!-- Team Section -->
<section class="team-section">
	<div class="bg bg-pattern-4"></div>
	<div class="auto-container">
		
		<div class="row">
			<div class="team-block col-lg-12 col-md-12 col-sm-12 wow fadeInUp">
				<div class="inner-box">
					<p>{!! $privacyPolicy->first()->description !!}</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Team Section -->
@endsection