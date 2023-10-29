@extends('frontend.layout.app')

@section('content')
<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ asset('frontend') }}/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">News Details</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>News</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->

<!--Blog Details Start-->
<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__left">
                    <div class="blog-details__img">
                        <img src="{{ asset('uploads/blog') }}/{{ $blogs->first()->image }}" alt="">
                        <div class="blog-details__date">
                            <span class="month">{{ $blogs->first()->created_at->format('d-M-Y') }}</span>
                        </div>
                    </div>
                    <div class="blog-details__content">
                        <ul class="list-unstyled blog-details__meta">
                            @if ($blogs->first()->added_by != null)
                                <li><a ><i class="fas fa-user-circle"></i>{{ $blogs->first()->rel_to_user->name }}</a> </li>
                            @endif
                        </ul>
                        <h3 class="blog-details__title">{{ $blogs->first()->title }}</h3>
                        <p class="blog-details__text-2">{!! $blogs->first()->description !!}</p>
                    </div>
                    
                    <div class="comment-one">
                        <h3 class="comment-one__title">{{ $blog_comment_count }} Comments</h3>
                        @foreach ($blog_comment as $comment)
                        <div class="comment-one__single">
                            <div class="comment-one__image"> <img src="images/resource/testi-1.jpg" alt=""> </div>
                            <div class="comment-one__content">
                                <h3>{{ $comment->name }}</h3>
                                <p>{{$comment->message}}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        <div class="comment-form">
                            <h3 class="comment-form__title">Leave a Comment</h3>
                            <form name="contact_form" class="" action="{{ route('blog.comment') }}" method="POST">
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
                                <div class="mb-3">
                                    <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                                </div>
                                <div class="mb-3">
                                    <input name="blogs_id" class="form-control" type="hidden" value="{{ $blogs->first()->id }}" />
                                    <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Submit Comment</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Latest Posts</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            @foreach ($latest_blogs->take(6) as $latest)
                            <li>
                                <div class="sidebar__post-image"> <img src="{{ asset('uploads/blog') }}/{{ $latest->image }}" alt=""> </div>
                                <div class="sidebar__post-content">
                                    <h3> 
                                        @if ($latest->added_by != null)
                                        <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i>{{ $latest->rel_to_user->name }}</span> 
                                        @endif
                                        <a href="{{ route('our.blog.details', $latest->slug) }}">{{ $latest->title }}</a>
                                    </h3>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <div class="sidebar__single sidebar__comments">
                        <h3 class="sidebar__title">Recent Comments</h3>
                        <ul class="sidebar__comments-list list-unstyled">
                            @foreach ($blog_comment_all->take(10) as $comment_all)
                            <li>
                                <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
                                <div class="sidebar__comments-text-box">
                                    <p>{{ $comment_all->message }}
                                    </p>
                                </div>
                            </li>                           
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Details End-->
@endsection