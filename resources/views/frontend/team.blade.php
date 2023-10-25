@extends('frontend.layout.app')
@section('content')
 <!-- Start main-content -->
 <section class="page-title" style="background-image: url({{ asset('frontend') }}/images/background/page-title.jpg);">
	<div class="auto-container">
		<div class="title-outer">
			<h1 class="title">Team Grid</h1>
			<ul class="page-breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li><a href="#">Pages</a></li>
				<li>Team</li>
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
			<!-- Team Block -->
			<div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
				<div class="inner-box">
					<div class="image-box">
						<figure class="image"><a href="page-team-details.html"><img src="{{ asset('frontend') }}/images/resource/team-1.jpg" alt=""></a></figure>
						<span class="share-icon fa fa-share-alt"></span>
						<ul class="social-links">
							<li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" title=""><i class="fab fa-facebook-square"></i></a></li>
							<li><a href="#" title=""><i class="fab fa-pinterest"></i></a></li>
							<li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
					<div class="info-box">
						<h5 class="name"><a href="page-team-details.html" title="">Mike Hardson</a></h5>
						<span class="designation">designer</span>
					</div>
				</div>
			</div>

			<!-- Team Block -->
			<div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
				<div class="inner-box">
					<div class="image-box">
						<figure class="image"><a href="page-team-details.html"><img src="{{ asset('frontend') }}/images/resource/team-2.jpg" alt=""></a></figure>
						<span class="share-icon fa fa-share-alt"></span>
						<ul class="social-links">
							<li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" title=""><i class="fab fa-facebook-square"></i></a></li>
							<li><a href="#" title=""><i class="fab fa-pinterest"></i></a></li>
							<li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
					<div class="info-box">
						<h5 class="name"><a href="page-team-details.html" title="">Aleesha Brown</a></h5>
						<span class="designation">designer</span>
					</div>
				</div>
			</div>

			<!-- Team Block -->
			<div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
				<div class="inner-box">
					<div class="image-box">
						<figure class="image"><a href="page-team-details.html"><img src="{{ asset('frontend') }}/images/resource/team-3.jpg" alt=""></a></figure>
						<span class="share-icon fa fa-share-alt"></span>
						<ul class="social-links">
							<li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" title=""><i class="fab fa-facebook-square"></i></a></li>
							<li><a href="#" title=""><i class="fab fa-pinterest"></i></a></li>
							<li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
					<div class="info-box">
						<h5 class="name"><a href="page-team-details.html" title="">Kevin Martin</a></h5>
						<span class="designation">designer</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Team Section -->
@endsection