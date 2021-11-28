

@extends('frontend.layout.home')

@section('title' ,'Blogs')

@section('content')

<div class="main_content_inner">


<h2>  Most recent articles </h2>

    <!-- blog  -->

    <div class="uk-child-width-1-4@m uk-child-width-1-2@s uk-grid-small uk-grid" uk-grid="">
        <div class="uk-first-column">

            <div class="sl_blog_list">
                <div class="sl_blog_list_media">
                    <img src="assets/images/blog/img-4.jpg" alt="">
                </div>
        
                <div class="sl_blog_list_info">
                    <a class="postCategory" href="#">Education</a>
                    <h2 class="art-title"><a href="#">10 Interesting JavaScript and CSS libraries for 2020</a></h2>
                    <a class="postMeta--author-text" href="#">
                        <img src="assets/images/avatars/avatar-1.jpg" alt="">
                        <div>
                            <span class="author-name"> Jonathan Madano </span>
                            <time>24 Aug 2020</time>
                        </div> 
                    </a>
                </div>
            </div>

        </div>
        <div>

            <div class="sl_blog_list">
                <div class="sl_blog_list_media">
                    <img src="assets/images/blog/img-3.jpg" alt="">
                </div>
        
                <div class="sl_blog_list_info">
                    <a class="postCategory" href="#">Education</a>
                    <h2 class="art-title"><a href="#">10 Interesting JavaScript and CSS Libraries</a></h2>
                    <a class="postMeta--author-text" href="#">
                        <img src="assets/images/avatars/avatar-1.jpg" alt="">
                        <div>
                            <span class="author-name"> Jonathan Madano </span>
                            <time>24 Aug 2020</time>
                        </div> 
                    </a>
                </div>
            </div>

        </div>
        <div>

            <div class="sl_blog_list">
                <div class="sl_blog_list_media">
                    <img src="assets/images/blog/img-2.jpg" alt="">
                </div>
        
                <div class="sl_blog_list_info">
                    <a class="postCategory" href="#">Education</a>
                    <h2 class="art-title"><a href="#">10 Awesome Web Dev Tools and Resources For 2020</a></h2>
                    <a class="postMeta--author-text" href="#">
                        <img src="assets/images/avatars/avatar-1.jpg" alt="">
                        <div>
                            <span class="author-name"> Jonathan Madano </span>
                            <time>24 Aug 2020</time>
                        </div> 
                    </a>
                </div>
            </div>

        </div>
        <div>

            <div class="sl_blog_list">
                <div class="sl_blog_list_media">
                    <img src="assets/images/blog/img-1.jpg" alt="">
                </div>
        
                <div class="sl_blog_list_info">
                    <a class="postCategory" href="#">Education</a>
                    <h2 class="art-title"><a href="#">10 amazing web demos and experiments</a></h2>
                    <a class="postMeta--author-text" href="#">
                        <img src="assets/images/avatars/avatar-1.jpg" alt="">
                        <div>
                            <span class="author-name"> Jonathan Madano </span>
                            <time>24 Aug 2020</time>
                        </div> 
                    </a>
                </div>
            </div>

        </div>
        <div class="uk-grid-margin uk-first-column">

            <div class="sl_blog_list">
                <div class="sl_blog_list_media">
                    <img src="assets/images/blog/img-2.jpg" alt="">
                </div>
        
                <div class="sl_blog_list_info">
                    <a class="postCategory" href="#">Education</a>
                    <h2 class="art-title"><a href="#">10 Awesome Web Dev Tools and Resources For 2020</a></h2>
                    <a class="postMeta--author-text" href="#">
                        <img src="assets/images/avatars/avatar-1.jpg" alt="">
                        <div>
                            <span class="author-name"> Jonathan Madano </span>
                            <time>24 Aug 2020</time>
                        </div> 
                    </a>
                </div>
            </div>

        </div>
        <div class="uk-grid-margin">

            <div class="sl_blog_list">
                <div class="sl_blog_list_media">
                    <img src="assets/images/blog/img-1.jpg" alt="">
                </div>
        
                <div class="sl_blog_list_info">
                    <a class="postCategory" href="#">Education</a>
                    <h2 class="art-title"><a href="#">10 amazing web demos and experiments</a></h2>
                    <a class="postMeta--author-text" href="#">
                        <img src="assets/images/avatars/avatar-1.jpg" alt="">
                        <div>
                            <span class="author-name"> Jonathan Madano </span>
                            <time>24 Aug 2020</time>
                        </div> 
                    </a>
                </div>
            </div>

        </div>
        <div class="uk-grid-margin">

            <div class="sl_blog_list">
                <div class="sl_blog_list_media">
                    <img src="assets/images/blog/img-4.jpg" alt="">
                </div>
        
                <div class="sl_blog_list_info">
                    <a class="postCategory" href="#">Education</a>
                    <h2 class="art-title"><a href="#">10 Interesting JavaScript and CSS libraries for 2020</a></h2>
                    <a class="postMeta--author-text" href="#">
                        <img src="assets/images/avatars/avatar-1.jpg" alt="">
                        <div>
                            <span class="author-name"> Jonathan Madano </span>
                            <time>24 Aug 2020</time>
                        </div> 
                    </a>
                </div>
            </div>

        </div>
        <div class="uk-grid-margin">

            <div class="sl_blog_list">
                <div class="sl_blog_list_media">
                    <img src="assets/images/blog/img-3.jpg" alt="">
                </div>
        
                <div class="sl_blog_list_info">
                    <a class="postCategory" href="#">Education</a>
                    <h2 class="art-title"><a href="#">10 Interesting JavaScript and CSS Libraries</a></h2>
                    <a class="postMeta--author-text" href="#">
                        <img src="assets/images/avatars/avatar-1.jpg" alt="">
                        <div>
                            <span class="author-name"> Jonathan Madano </span>
                            <time>24 Aug 2020</time>
                        </div> 
                    </a>
                </div>
            </div>

        </div>
    </div> 

    <div class="load-more">
        <button class="btn button">Load more articles</button>
    </div>
    
</div>


@endsection