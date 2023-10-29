@extends('frontend.layout.app')

@section('content')
	<!-- Start main-content -->
	<section class="page-title" style="background-image: url({{ asset('frontend') }}/images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">Blogs</h1>
				<ul class="page-breadcrumb">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>Blogs</li>
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
				@foreach ($blogs as $blog)
				<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="{{ route('our.blog.details', $blog->slug) }}"><img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt=""></a></figure>
							<span class="date">{{ $blog->created_at->format('d,M,Y') }}</span>
						</div>
						<div class="content-box">
							@if ($blog->added_by != null)
							<div class="author-info">   
								@if ($blog->rel_to_user->image != null)
									<div class="author-thumb"><img src="{{ asset('uploads/users') }}/{{ $blog->rel_to_user->image }}" alt=""></div>
								@endif    
								<span class="author-name">{{ $blog->rel_to_user->name }}</span>
							</div>
							@endif
							<h5 class="title"><a href="{{ route('our.blog.details', $blog->slug) }}" title="">{{ $blog->title }}</a></h5>
							<ul class="post-info">
								<li class="read-more"><a href="{{ route('our.blog.details', $blog->slug) }}" title=""><i class="fa fa-long-arrow-alt-right"></i> More</a></li>
							</ul>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>

@endsection