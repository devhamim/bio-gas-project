@extends('frontend.layout.app')
@section('content')
 
	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">Contact Us</h1>
				<ul class="page-breadcrumb">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!--Contact Details Start-->
	<section class="contact-details">
		<div class="container ">
			<div class="row">
				<div class="col-xl-7 col-lg-6">
					<div class="sec-title">
						<span class="sub-title">Send us email</span>
						<h2>Feel free to write</h2>
					</div>
					<!-- Contact Form -->
					<form method="POST" action="{{ route('customerMessage.store') }}">
						@csrf
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="name" class="form-control" type="text" placeholder="Enter Name">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="email" class="form-control required email" type="email" placeholder="Enter Email">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="subject" class="form-control required" type="text" placeholder="Enter Subject">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="phone" class="form-control" type="text" placeholder="Enter Phone">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<textarea name="message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
						</div>
						<div class="mb-3">
							<button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
							<button type="reset" class="theme-btn btn-style-one bg-theme-color5"><span class="btn-title">Reset</span></button>
						</div>
					</form>
					<!-- Contact Form Validation-->
				</div>
				<div class="col-xl-5 col-lg-6">
					<div class="contact-details__right">
						<div class="sec-title">
							<span class="sub-title">Need any help?</span>
							<h2>Get in touch with us</h2>
							<div class="text">Lorem ipsum is simply free text available dolor sit amet consectetur notted adipisicing elit sed do eiusmod tempor incididunt simply dolore magna.</div>
						</div>
						<ul class="list-unstyled contact-details__info">
							<li>
								<div class="icon bg-theme-color2">
									<span class="lnr-icon-phone-plus"></span>
								</div>
								<div class="text">
									<h6>Have any question?</h6>
									@if ($settings->first()->number != null)
										<a href="tel:{{ $settings->first()->number }}"><span>Free</span>{{ $settings->first()->number }}</a>
									@endif
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="lnr-icon-envelope1"></span>
								</div>
								<div class="text">
									<h6>Write email</h6>
									@if ($settings->first()->email != null)
									<a href="mailto:{{ $settings->first()->email }}">{{ $settings->first()->email }}</a>
									@endif
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="lnr-icon-location"></span>
								</div>
								<div class="text">
									<h6>Visit anytime</h6>
									
									@if ($settings->first()->address != null)
										<span>{{ $settings->first()->address }}</span>
									@endif
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Contact Details End-->

	<!-- Map Section-->
	<section class="map-section">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14606.14818391618!2d89.6466626!3d23.763883!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe6b9800108d17%3A0xeb481f566ed99f12!2sKamrul%20Biogas!5e0!3m2!1sen!2sbd!4v1698223227698!5m2!1sen!2sbd" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section>
	<!--End Map Section-->
@endsection