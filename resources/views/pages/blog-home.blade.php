@extends('layouts.header')

@section('content')
<!-- content section start here -->

<section class="content-wrapper magazine-wrap">

    <div class="row">
        <div class="eight column">
            <div class="blog-wrapper">
                <div class="blogmedia-wrap">
                    <img src="{{ asset($settings->portfolio_image ?: 'assets/images/sample_images/blog_post1.jpg') }}" alt="portfolio-cover"/>
                </div>
                <div class="blogcontent-wrap">
                    <div class="post-type">
                        <i class="icon-user"></i>
                    </div>
                    <h3><a href="#">{{ $settings->portfolio_title }}</a></h3>
                    <p>{{ $settings->portfolio_description }}</p>
                    <hr/>
                    <ul class="arrow list-line margin-top">
                        @foreach ($portfolioItems as $item)
                            <li>
                                <a href="{{ $item->url ?: '#' }}">{{ $item->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <a href="{{ url('/admin') }}" class="button-plain small orange">Manage Content <span class="plain-arrow">&gt;</span></a>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="four column">
            <aside>
                <div class="note-folded grey text-center">
                    <div class="widget-author">
                        <img src="{{ asset($settings->sidebar_image ?: 'assets/images/sample_images/team7.jpg') }}" alt="portfolio-owner" />
                    </div>
                    <h4>{{ $settings->sidebar_title }}</h4>
                    <hr/>
                    <p>{{ $settings->sidebar_description }}</p>
                </div>
            </aside>
        </div>
    </div>

    <hr/>

    <div class="row">

        <div class="eight column">
            <div class="breaking-news">
                <h4>Breaking News</h4>
                    <ul id="newsticker">
                        @foreach ($breakingNews as $news)
                            <li>
                                <span>{{ $news->news_date }}</span>
                                <a href="{{ $news->url ?: '#' }}">{{ $news->title }}</a>
                            </li>
                        @endforeach
                    </ul>
            </div>

            @foreach ($blogPosts as $post)
                <div class="blog-wrapper">
                    <div class="blogmedia-wrap">
                        <img src="{{ asset($post->image_path ?: 'assets/images/sample_images/blog_post1.jpg') }}" alt=""/>
                        <ul class="no-bullet post-info">
                            <li><i class="icon-user"></i><span>{{ $post->author }}</span></li>
                            <li class="no-tag2"><i class="icon-clockalt-timealt"></i><span>{{ $post->published_at }}</span></li>
                            <li class="no-tag">
                                <i class="icon-tag"></i>
                                <span>
                                    @php $tags = array_filter(array_map('trim', explode(',', (string) $post->tags))); @endphp
                                    @forelse ($tags as $tag)
                                        <a href="#">{{ $tag }}</a>@if (! $loop->last), @endif
                                    @empty
                                        <a href="#">General</a>
                                    @endforelse
                                </span>
                            </li>
                            <li class="no-tag2"><i class="icon-comment"></i><span><a href="#">{{ $post->comments_label }}</a></span></li>
                        </ul>
                    </div>

                    <div class="blogcontent-wrap">
                        <div class="post-type">
                            <i class="icon-picture"></i>
                        </div>
                        <h3><a href="#">{{ $post->title }}</a></h3>
                        <p>{{ $post->excerpt }}</p>
                        <hr/>
                        <ul class="social-list">
                            <li><a href="#"><i class="social-facebook"></i></a></li>
                            <li><a href="#"><i class="social-twitter"></i></a></li>
                            <li><a href="#"><i class="social-googleplus"></i></a></li>
                        </ul>
                        <a href="#" class="button-plain small orange">{{ $post->button_text }} <span class="plain-arrow">&gt;</span></a>
                    </div>
                    <div class="clear"></div>
                </div>
            @endforeach

            <!-- blog pagination -->
            <div class="blog-pagination">
                <div class="pages blogpages">
                    <span class="pageof">Managed from Admin Panel</span>
                </div>
            </div>
        </div>

        <div class="four column">
            <aside>
                <div class="note-folded grey text-center">
                    <div class="widget-author">
                        <img src="{{ asset($settings->sidebar_image ?: 'assets/images/sample_images/team7.jpg') }}" alt="" />
                    </div>
                    <h4>{{ $settings->profile_name }}</h4>
                    <hr/>
                    <p>{{ $settings->profile_bio }}</p>
                </div>
            </aside>

            <aside>
                <div id="weather"></div>
            </aside>

            <aside>
                <h4><span class="highlight">Recent Post</span></h4>
                <ul class="arrow list-line margin-top">
                    @foreach ($recentPostLinks as $link)
                        <li><a href="{{ $link->url ?: '#' }}">{{ $link->title }}</a></li>
                    @endforeach
                </ul>
            </aside>

            <aside>
                <h4><span class="highlight">Twitter Feed</span></h4>
                <!-- Begin of Twitter -->
                <ul id="twitter"></ul>
                <script type="text/javascript">
                    jQuery(document).ready(function($){
                    $.getJSON('twitter.php?url='+encodeURIComponent('statuses/user_timeline.json?screen_name=Indoneztheme&count=3'), function(tweets){
                        $("#twitter").html(tz_format_twitter(tweets));
                    }); });
                </script>
                <!-- End of Twitter -->
            </aside>

            <aside>
                <div class="ads-wrapper text-center">
                    <small>Advertisement</small>
                    <ul class="no-bullet banner-list2">
                        <li><a href="#"><img src="{{asset('assets/images/sample_images/banner_size3.gif')}}" alt=""/></a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>


        <!-- content section end here -->

@endsection
