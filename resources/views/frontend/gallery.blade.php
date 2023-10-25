@extends('frontend.layout.app')

@section('content')

	<!-- Start main-content -->
	<section class="page-title" style="background-image: url({{ asset('frontend') }}/images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">Gallery</h1>
				<ul class="page-breadcrumb">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>Gallery</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!-- Projects Section -->
	<section class="">
		<div class="container pb-80">

			<div class="outer-box">
				<div class="row">
					<!-- Project Block -->
					<div class=" project-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-project-details.html"><img src="{{ asset('frontend') }}/images/resource/project-1.jpg" alt=""></a></figure>
							</div>
							<div class="content-box">
								<a href="page-project-details.html" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
								<span class="cat">DESIGN / IDEAS</span>
								<h4 class="title"><a href="page-project-details.html" title="">Get the Website  Solutions</a></h4>
							</div>
						</div>
					</div>

					<!-- Project Block -->
					<div class=" project-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-project-details.html"><img src="{{ asset('frontend') }}/images/resource/project-2.jpg" alt=""></a></figure>
							</div>
							<div class="content-box">
								<a href="page-project-details.html" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
								<span class="cat">DESIGN / IDEAS</span>
								<h4 class="title"><a href="page-project-details.html" title="">Get the Website Solutions</a></h4>
							</div>
						</div>
					</div>

					<!-- Project Block -->
					<div class=" project-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-project-details.html"><img src="{{ asset('frontend') }}/images/resource/project-3.jpg" alt=""></a></figure>
							</div>
							<div class="content-box">
								<a href="page-project-details.html" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
								<span class="cat">DESIGN / IDEAS</span>
								<h4 class="title"><a href="page-project-details.html" title="">Get the Website Solutions</a></h4>
							</div>
						</div>
					</div>

					<!-- Project Block -->
					<div class=" project-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-project-details.html"><img src="{{ asset('frontend') }}/images/resource/project-4.jpg" alt=""></a></figure>
							</div>
							<div class="content-box">
								<a href="page-project-details.html" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
								<span class="cat">DESIGN / IDEAS</span>
								<h4 class="title"><a href="page-project-details.html" title="">Get the Website Solutions</a></h4>
							</div>
						</div>
					</div>

					<!-- Project Block -->
					<div class=" project-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-project-details.html"><img src="{{ asset('frontend') }}/images/resource/project-1.jpg" alt=""></a></figure>
							</div>
							<div class="content-box">
								<a href="page-project-details.html" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
								<span class="cat">DESIGN / IDEAS</span>
								<h4 class="title"><a href="page-project-details.html" title="">Get the Website  Solutions</a></h4>
							</div>
						</div>
					</div>

					<!-- Project Block -->
					<div class=" project-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-project-details.html"><img src="{{ asset('frontend') }}/images/resource/project-2.jpg" alt=""></a></figure>
							</div>
							<div class="content-box">
								<a href="page-project-details.html" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
								<span class="cat">DESIGN / IDEAS</span>
								<h4 class="title"><a href="page-project-details.html" title="">Get the Website Solutions</a></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End projects-section-->
@endsection