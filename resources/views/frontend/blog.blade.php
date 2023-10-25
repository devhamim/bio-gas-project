@extends('frontend.layout.app')

@section('content')
	<!-- Start main-content -->
	<section class="page-title" style="background-image: url({{ asset('frontend') }}/images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">Blogs</h1>
				<ul class="page-breadcrumb">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>Glogs</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!-- News Section -->
	<section class="news-section">
		<div class="auto-container">

			<div class="row">
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="news-details.html"><img src="{{ asset('frontend') }}/images/resource/news-1.jpg" alt=""></a></figure>
							<span class="date">20 Mar, 2023</span>
						</div>
						<div class="content-box">
							<div class="author-info">
								<div class="author-thumb"><img src="{{ asset('frontend') }}/images/resource/avatar1.jpg" alt=""></div>
								<span class="author-name">by Mike Hardson</span>
							</div>
							<h5 class="title"><a href="news-details.html" title="">Five Ways that can Develop your Business Website</a></h5>
							<div class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem…</div>
							<ul class="post-info">
								<li class="read-more"><a href="news-details.html" title=""><i class="fa fa-long-arrow-alt-right"></i> More</a></li>
								<li class="comments"><a href="#" title=""><i class="fa fa-comments color1"></i> 2 Comments</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="news-details.html"><img src="{{ asset('frontend') }}/images/resource/news-2.jpg" alt=""></a></figure>
							<span class="date">20 Mar, 2023</span>
						</div>
						<div class="content-box">
							<div class="author-info">
								<div class="author-thumb"><img src="{{ asset('frontend') }}/images/resource/avatar1.jpg" alt=""></div>
								<span class="author-name">by Mike Hardson</span>
							</div>
							<h5 class="title"><a href="news-details.html" title="">Five Ways that can Develop your Business Website</a></h5>
							<div class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem…</div>
							<ul class="post-info">
								<li class="read-more"><a href="news-details.html" title=""><i class="fa fa-long-arrow-alt-right"></i> More</a></li>
								<li class="comments"><a href="#" title=""><i class="fa fa-comments color1"></i> 2 Comments</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="news-details.html"><img src="{{ asset('frontend') }}/images/resource/news-3.jpg" alt=""></a></figure>
							<span class="date">20 Mar, 2023</span>
						</div>
						<div class="content-box">
							<div class="author-info">
								<div class="author-thumb"><img src="{{ asset('frontend') }}/images/resource/avatar1.jpg" alt=""></div>
								<span class="author-name">by Mike Hardson</span>
							</div>
							<h5 class="title"><a href="news-details.html" title="">Five Ways that can Develop your Business Website</a></h5>
							<div class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem…</div>
							<ul class="post-info">
								<li class="read-more"><a href="news-details.html" title=""><i class="fa fa-long-arrow-alt-right"></i> More</a></li>
								<li class="comments"><a href="#" title=""><i class="fa fa-comments color1"></i> 2 Comments</a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

@endsection