
@extends('frontend.layout.home')

@section('title' ,'Groups')

@section('content')


<div class="main_content_inner">

<h1> Groups </h1>
<div class="uk-flex uk-flex-between">
    <nav class="responsive-tab style-1 mb-3">
        <ul>
            <li class="uk-active"><a href="#"> Suggested groups </a></li>
            <li><a href="#"> My Groups</a></li>
            <li><a href="#"> Joined Groups</a></li>
        </ul>
    </nav>
    <a href="#" class="button primary small circle uk-visible@s"> <i class="uil-plus"> </i> Create new
    </a>

</div>


    <div class="uk-position-relative uk-slider" uk-slider="finite: true">
        <div class="uk-slider-container px-lg-1 py-3">
            <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-2@s  pr-lg-1 uk-grid uk-grid-small" uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-small; delay: 100" style="transform: translate3d(0px, 0px, 0px);">
                <li tabindex="-1" class="uk-active">

                    <div class="sl_group_list">

                        <!-- Group cover -->
                        <a href="group-feed.html">
                            <div class="sl_group_list_media">
                                <img src="assets/images/group/group-cover-4.jpg" alt="image">
                            </div>
                        </a>

                        <!-- Group  Content -->
                        <div class="sl_group_list_info">
                            <h3><a href="group-feed.html"> Mountain Riders</a></h3>
                            <ul>
                                <li> <span> 12 Members </span> </li>
                                <li> <span> 2 posts </span> </li>
                            </ul>

                            <div class="sl_avatar-groups sl_hide_members">
                                <a href="group-feed.html">

                                    <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">
                                    <img src="assets/images/avatars/avatar-4.jpg" class="avatars" alt="picture">
                                    <img src="assets/images/avatars/avatar-5.jpg" class="avatars" alt="picture">
                                    <img src="assets/images/avatars/avatar-6.jpg" class="avatars" alt="picture">

                                </a><a href="group-feed.html">See all Members </a>

                            </div>

                            <div class="sl_group_list_info_btns">
                                <span>
                                    <button type="button" class="button primary small block">
                                        <span> Join</span>
                                    </button>
                                </span>
                                <span>
                                    <button type="button" class="button light small block">
                                        <span>View</span>
                                    </button>
                                </span>
                            </div>

                        </div>
                    </div>

                </li>
                <li tabindex="-1" class="uk-active">

                    <div class="sl_group_list">

                        <!-- Group cover -->
                        <a href="group-feed.html">
                            <div class="sl_group_list_media">
                                <img src="assets/images/group/group-cover-2.jpg" alt="">
                            </div>
                        </a>

                        <!-- Group  Content -->
                        <div class="sl_group_list_info">
                            <h3><a href="group-feed.html">Coffee Addicts  </a></h3>
                            <ul>
                                <li> <span> 23 Members </span> </li>
                                <li> <span> 4 posts </span> </li>
                            </ul>

                            <div class="sl_avatar-groups sl_hide_members">
                                <a href="group-feed.html">

                                    <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                    <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                    <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">
                                    <img src="assets/images/avatars/avatar-4.jpg" class="avatars" alt="picture">
                                    <img src="assets/images/avatars/avatar-5.jpg" class="avatars" alt="picture">

                                </a><a href="group-feed.html">See all Members </a>

                            </div>

                            <div class="sl_group_list_info_btns">
                                <span>
                                    <button type="button" class="button primary small block">
                                        <span> Join</span>
                                    </button>
                                </span>
                                <span>
                                    <button type="button" class="button light small block">
                                        <span>View</span>
                                    </button>
                                </span>
                            </div>

                        </div>
                    </div>

                </li>
                <li tabindex="-1" class="uk-active">

                    <div class="sl_group_list">

                        <!-- Group cover -->
                        <a href="group-feed.html">
                            <div class="sl_group_list_media">
                                <img src="assets/images/group/group-cover-1.jpg" alt="">
                            </div>
                        </a>

                        <!-- Group  Content -->
                        <div class="sl_group_list_info">
                            <h3><a href="group-feed.html"> Graphic Design</a></h3>
                            <ul>
                                <li> <span> 15 Members </span> </li>
                                <li> <span> 1 posts </span> </li>
                            </ul>

                            <div class="sl_avatar-groups sl_hide_members">
                                <a href="group-feed.html">

                                    <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                    <img src="assets/images/avatars/avatar-5.jpg" class="avatars" alt="picture">
                                    <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">

                                </a><a href="group-feed.html">See all Members </a>

                            </div>

                            <div class="sl_group_list_info_btns">
                                <span>
                                    <button type="button" class="button primary small block">
                                        <span> Join</span>
                                    </button>
                                </span>
                                <span>
                                    <button type="button" class="button light small block">
                                        <span>View</span>
                                    </button>
                                </span>
                            </div>

                        </div>
                    </div>

                </li>
                <li tabindex="-1" class="uk-active">

                    <div class="sl_group_list">

                        <!-- Group cover -->
                        <a href="group-feed.html">
                            <div class="sl_group_list_media">
                                <img src="assets/images/group/group-cover-3.jpg" alt="">
                            </div>
                        </a>

                        <!-- Group  Content -->
                        <div class="sl_group_list_info">
                            <h3><a href="group-feed.html">Property Rent And Sale </a></h3>
                            <ul>
                                <li> <span> 2 Members </span> </li>
                                <li> <span> 0 posts </span> </li>
                            </ul>

                            <div class="sl_avatar-groups sl_hide_members">
                                <a href="group-feed.html">

                                    <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                    <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                    <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">

                                </a><a href="group-feed.html">See all Members </a>

                            </div>

                            <div class="sl_group_list_info_btns">
                                <span>
                                    <button type="button" class="button primary small block">
                                        <span> Join</span>
                                    </button>
                                </span>
                                <span>
                                    <button type="button" class="button light small block">
                                        <span>View</span>
                                    </button>
                                </span>
                            </div>

                        </div>
                    </div>

                </li>
                <li tabindex="-1" class="">

                    <div class="sl_group_list">

                        <!-- Group cover -->
                        <a href="group-feed.html">
                            <div class="sl_group_list_media">
                                <img src="assets/images/group/group-cover-4.jpg" alt="image">
                            </div>
                        </a>

                        <!-- Group  Content -->
                        <div class="sl_group_list_info">
                            <h3><a href="group-feed.html"> Mountain Riders</a></h3>
                            <ul>
                                <li> <span> 12 Members </span> </li>
                                <li> <span> 2 posts </span> </li>
                            </ul>

                            <div class="sl_avatar-groups sl_hide_members">
                                <a href="group-feed.html">

                                    <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">
                                    <img src="assets/images/avatars/avatar-4.jpg" class="avatars" alt="picture">
                                    <img src="assets/images/avatars/avatar-5.jpg" class="avatars" alt="picture">
                                    <img src="assets/images/avatars/avatar-6.jpg" class="avatars" alt="picture">

                                </a><a href="group-feed.html">See all Members </a>

                            </div>

                            <div class="sl_group_list_info_btns">
                                <span>
                                    <button type="button" class="button primary small block">
                                        <span> Join</span>
                                    </button>
                                </span>
                                <span>
                                    <button type="button" class="button light small block">
                                        <span>View</span>
                                    </button>
                                </span>
                            </div>

                        </div>
                    </div>

                </li>
            </ul>

            <a class="uk-position-center-left-out uk-position-small uk-hidden-hover slidenav-prev uk-invisible" href="#" uk-slider-item="previous"></a>
            <a class="uk-position-center-right-out uk-position-small uk-hidden-hover slidenav-next" href="#" uk-slider-item="next"></a>


        </div>
    </div>

    <div class="section-header pb-0">
        <div class="section-header-left">
            <h3> Categories </h3>
            <p> Find a group <span class="uk-visible@s"> by browsing top Categories </span></p>
        </div>
        <div class="section-header-right">
            <a href="#" class="see-all"> See all</a>
        </div>
    </div>

    <div class="uk-position-relative uk-slider" uk-slider="finite: true">

        <div class="uk-slider-container py-3">

            <ul class="uk-slider-items uk-child-width-1-6@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid" style="transform: translate3d(0px, 0px, 0px);">

                <li tabindex="-1" class="uk-active">

                    <a href="#">
                        <div class="group-catagroy-card animate-this" data-src="assets/images/category/img6.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/category/img6.jpg&quot;);">
                            <div class="group-catagroy-card-content">
                                <h4> Animals </h4>
                            </div>
                        </div>
                    </a>
                </li>
                <li tabindex="-1" class="uk-active">

                    <a href="#">
                        <div class="group-catagroy-card animate-this" data-src="assets/images/category/img1.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/category/img1.jpg&quot;);">
                            <div class="group-catagroy-card-content">
                                <h4> Sports </h4>
                            </div>
                        </div>
                    </a>

                </li>
                <li tabindex="-1" class="uk-active">
                    <a href="#">
                        <div class="group-catagroy-card animate-this" data-src="assets/images/category/img3.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/category/img3.jpg&quot;);">
                            <div class="group-catagroy-card-content">
                                <h4> Workout </h4>
                            </div>
                        </div>
                    </a>

                </li>
                <li tabindex="-1" class="uk-active">

                    <a href="#">
                        <div class="group-catagroy-card animate-this" data-src="assets/images/category/img2.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/category/img2.jpg&quot;);">
                            <div class="group-catagroy-card-content">
                                <h4> Motivation </h4>
                            </div>
                        </div>
                    </a>

                </li>
                <li tabindex="-1" class="uk-active">

                    <a href="#">
                        <div class="group-catagroy-card animate-this" data-src="assets/images/category/img4.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/category/img4.jpg&quot;);">
                            <div class="group-catagroy-card-content">
                                <h4> Music </h4>
                            </div>
                        </div>
                    </a>

                </li>
                <li tabindex="-1" class="uk-active">

                    <a href="#">
                        <div class="group-catagroy-card animate-this" data-src="assets/images/category/img5.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/category/img5.jpg&quot;);">
                            <div class="group-catagroy-card-content">
                                <h4> Food </h4>
                            </div>
                        </div>
                    </a>

                </li>
                <li tabindex="-1" class="">

                    <a href="#">
                        <div class="group-catagroy-card animate-this" data-src="assets/images/category/img1.jpg" uk-img="">
                            <div class="group-catagroy-card-content">
                                <h4> Sports </h4>
                            </div>
                        </div>
                    </a>

                </li>
            </ul>

            <a class="uk-position-center-left-out uk-position-small uk-hidden-hover slidenav-prev uk-invisible" href="#" uk-slider-item="previous"></a>
            <a class="uk-position-center-right-out uk-position-small uk-hidden-hover slidenav-next" href="#" uk-slider-item="next"></a>

        </div>
    </div>

    <div class="section-small">
        <h2 class="mb-4"> Suggested groups </h2>
        <div class="uk-child-width-1-4@m uk-child-width-1-2@s uk-grid-small uk-grid" uk-grid="">
            <div class="uk-first-column">

                <div class="sl_group_list">

                    <!-- Group cover -->
                    <a href="group-feed.html">
                        <div class="sl_group_list_media">
                            <img src="assets/images/group/group-cover-4.jpg" alt="image">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_group_list_info">
                        <h3><a href="group-feed.html"> Mountain Riders</a></h3>
                        <ul>
                            <li> <span> 2 Members </span> </li>
                            <li> <span> 0 posts </span> </li>
                        </ul>

                        <div class="sl_avatar-groups sl_hide_members">
                            <a href="group-feed.html">

                                <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">

                            </a><a href="group-feed.html">See all Members </a>

                        </div>

                        <div class="sl_group_list_info_btns">
                            <span>
                                <button type="button" class="button primary small block">
                                    <span> Join</span>
                                </button>
                            </span>
                            <span>
                                <button type="button" class="button light small block">
                                    <span>View</span>
                                </button>
                            </span>
                        </div>

                    </div>
                </div>

            </div>
            <div>

                <div class="sl_group_list">

                    <!-- Group cover -->
                    <a href="group-feed.html">
                        <div class="sl_group_list_media">
                            <img src="assets/images/group/group-cover-2.jpg" alt="">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_group_list_info">
                        <h3><a href="group-feed.html">Coffee Addicts  </a></h3>
                        <ul>
                            <li> <span> 2 Members </span> </li>
                            <li> <span> 0 posts </span> </li>
                        </ul>

                        <div class="sl_avatar-groups sl_hide_members">
                            <a href="group-feed.html">

                                <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">

                            </a><a href="group-feed.html">See all Members </a>

                        </div>

                        <div class="sl_group_list_info_btns">
                            <span>
                                <button type="button" class="button primary small block">
                                    <span> Join</span>
                                </button>
                            </span>
                            <span>
                                <button type="button" class="button light small block">
                                    <span>View</span>
                                </button>
                            </span>
                        </div>

                    </div>
                </div>

            </div>
            <div>

                <div class="sl_group_list">

                    <!-- Group cover -->
                    <a href="group-feed.html">
                        <div class="sl_group_list_media">
                            <img src="assets/images/group/group-cover-1.jpg" alt="">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_group_list_info">
                        <h3><a href="group-feed.html"> Graphic Design</a></h3>
                        <ul>
                            <li> <span> 2 Members </span> </li>
                            <li> <span> 0 posts </span> </li>
                        </ul>

                        <div class="sl_avatar-groups sl_hide_members">
                            <a href="group-feed.html">

                                <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">

                            </a><a href="group-feed.html">See all Members </a>

                        </div>

                        <div class="sl_group_list_info_btns">
                            <span>
                                <button type="button" class="button primary small block">
                                    <span> Join</span>
                                </button>
                            </span>
                            <span>
                                <button type="button" class="button light small block">
                                    <span>View</span>
                                </button>
                            </span>
                        </div>

                    </div>
                </div>

            </div>
            <div>

                <div class="sl_group_list">

                    <!-- Group cover -->
                    <a href="group-feed.html">
                        <div class="sl_group_list_media">
                            <img src="assets/images/group/group-cover-3.jpg" alt="">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_group_list_info">
                        <h3><a href="group-feed.html">Property Rent And Sale </a></h3>
                        <ul>
                            <li> <span> 2 Members </span> </li>
                            <li> <span> 0 posts </span> </li>
                        </ul>

                        <div class="sl_avatar-groups sl_hide_members">
                            <a href="group-feed.html">

                                <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">

                            </a><a href="group-feed.html">See all Members </a>

                        </div>

                        <div class="sl_group_list_info_btns">
                            <span>
                                <button type="button" class="button primary small block">
                                    <span> Join</span>
                                </button>
                            </span>
                            <span>
                                <button type="button" class="button light small block">
                                    <span>View</span>
                                </button>
                            </span>
                        </div>

                    </div>
                </div>

            </div>
            <div class="uk-grid-margin uk-first-column">

                <div class="sl_group_list">

                    <!-- Group cover -->
                    <a href="group-feed.html">
                        <div class="sl_group_list_media">
                            <img src="assets/images/group/group-cover-1.jpg" alt="">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_group_list_info">
                        <h3><a href="group-feed.html"> Graphic Design</a></h3>
                        <ul>
                            <li> <span> 2 Members </span> </li>
                            <li> <span> 0 posts </span> </li>
                        </ul>

                        <div class="sl_avatar-groups sl_hide_members">
                            <a href="group-feed.html">

                                <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">

                            </a><a href="group-feed.html">See all Members </a>

                        </div>

                        <div class="sl_group_list_info_btns">
                            <span>
                                <button type="button" class="button primary small block">
                                    <span> Join</span>
                                </button>
                            </span>
                            <span>
                                <button type="button" class="button light small block">
                                    <span>View</span>
                                </button>
                            </span>
                        </div>

                    </div>
                </div>

            </div>
            <div class="uk-grid-margin">

                <div class="sl_group_list">

                    <!-- Group cover -->
                    <a href="group-feed.html">
                        <div class="sl_group_list_media">
                            <img src="assets/images/group/group-cover-3.jpg" alt="">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_group_list_info">
                        <h3><a href="group-feed.html">Property Rent And Sale </a></h3>
                        <ul>
                            <li> <span> 2 Members </span> </li>
                            <li> <span> 0 posts </span> </li>
                        </ul>

                        <div class="sl_avatar-groups sl_hide_members">
                            <a href="group-feed.html">

                                <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">

                            </a><a href="group-feed.html">See all Members </a>

                        </div>

                        <div class="sl_group_list_info_btns">
                            <span>
                                <button type="button" class="button primary small block">
                                    <span> Join</span>
                                </button>
                            </span>
                            <span>
                                <button type="button" class="button light small block">
                                    <span>View</span>
                                </button>
                            </span>
                        </div>

                    </div>
                </div>

            </div>
            <div class="uk-grid-margin">

                <div class="sl_group_list">

                    <!-- Group cover -->
                    <a href="group-feed.html">
                        <div class="sl_group_list_media">
                            <img src="assets/images/group/group-cover-4.jpg" alt="image">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_group_list_info">
                        <h3><a href="group-feed.html"> Mountain Riders</a></h3>
                        <ul>
                            <li> <span> 2 Members </span> </li>
                            <li> <span> 0 posts </span> </li>
                        </ul>

                        <div class="sl_avatar-groups sl_hide_members">
                            <a href="group-feed.html">

                                <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">

                            </a><a href="group-feed.html">See all Members </a>

                        </div>

                        <div class="sl_group_list_info_btns">
                            <span>
                                <button type="button" class="button primary small block">
                                    <span> Join</span>
                                </button>
                            </span>
                            <span>
                                <button type="button" class="button light small block">
                                    <span>View</span>
                                </button>
                            </span>
                        </div>

                    </div>
                </div>

            </div>
            <div class="uk-grid-margin">

                <div class="sl_group_list">

                    <!-- Group cover -->
                    <a href="group-feed.html">
                        <div class="sl_group_list_media">
                            <img src="assets/images/group/group-cover-2.jpg" alt="">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_group_list_info">
                        <h3><a href="group-feed.html">Coffee Addicts  </a></h3>
                        <ul>
                            <li> <span> 2 Members </span> </li>
                            <li> <span> 0 posts </span> </li>
                        </ul>

                        <div class="sl_avatar-groups sl_hide_members">
                            <a href="group-feed.html">

                                <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">

                            </a><a href="group-feed.html">See all Members </a>

                        </div>

                        <div class="sl_group_list_info_btns">
                            <span>
                                <button type="button" class="button primary small block">
                                    <span> Join</span>
                                </button>
                            </span>
                            <span>
                                <button type="button" class="button light small block">
                                    <span>View</span>
                                </button>
                            </span>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="load-more">
        <button class="btn button">Load more groups</button>
    </div>

</div>


@endsection