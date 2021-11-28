@extends('frontend.layout.home')

@section('title' ,'Find Friend')

@section('content')



<div class="main_content_inner">
 
    <div class="sl_filter_btn" uk-toggle="target: #offcanvas-flip">  <i class="uil-filter"></i>   Open Filter </div>
        <ul id="component-nav" class="uk-switcher" style="touch-action: pan-y pinch-zoom;">

        <li class="uk-active">
        <h2> Find Friend</h2>
        <div class="section-small pt-2">
            <!-- users   -->
            <div class="uk-child-width-1-4@m uk-child-width-1-2@s uk-grid-small uk-grid" uk-grid="">
                <div class="uk-first-column">

                    <div class="sl_find_frns_user">
                        <div class="sl_find_frns_user_cover"> 
                            <img src="assets/images/group/group-cover-1.jpg" alt="">
                        </div>
                        <div class="sl_find_frns_user_info">
                            <div class="sl_find_frns_user_avatar"> 
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                </a>
                            </div>
                            <h4> <a href="timeline.html"> Adrian Mohani </a> </h4>
                            <p> <span class="small-last-seen">1 hours ago</span> </p>
                        </div>
                        <div class="sl_find_frns_user_btns">
                            <span>
                                <button type="button" class="btn button small primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                    <span> Follow</span>
                                </button>
                            </span>
                            <span>
                                <button type="button" class="btn button small light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    <span> Message</span>
                                </button> 
                            </span>
                        </div>
                    </div>

                </div>
                <div>

                    <div class="sl_find_frns_user">
                        <div class="sl_find_frns_user_cover"> 
                            <img src="assets/images/group/group-cover.jpg" alt="">
                        </div>
                        <div class="sl_find_frns_user_info">
                            <div class="sl_find_frns_user_avatar"> 
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-4.jpg" alt="">
                                </a>
                            </div>
                            <h4> <a href="timeline.html"> Dennis Han </a> </h4>
                            <p> <span class="small-last-seen">2 hours ago</span> </p>
                        </div>
                        <div class="sl_find_frns_user_btns">
                            <span>
                                <button type="button" class="btn button small primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                    <span> Follow</span>
                                </button>
                            </span>
                            <span>
                                <button type="button" class="btn button small light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    <span> Message</span>
                                </button> 
                            </span>
                        </div>
                    </div>

                </div>
                <div>

                    <div class="sl_find_frns_user">
                        <div class="sl_find_frns_user_cover"> 
                            <img src="assets/images/group/group-cover-3.jpg" alt="">
                        </div>
                        <div class="sl_find_frns_user_info">
                            <div class="sl_find_frns_user_avatar"> 
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-6.jpg" alt="">
                                </a>
                            </div>
                            <h4> <a href="timeline.html"> Monera Khalifa </a> </h4>
                            <p> <span class="small-last-seen">4 hours ago</span> </p>
                        </div>
                        <div class="sl_find_frns_user_btns">
                            <span>
                                <button type="button" class="btn button small primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                    <span> Follow</span>
                                </button>
                            </span>
                            <span>
                                <button type="button" class="btn button small light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    <span> Message</span>
                                </button> 
                            </span>
                        </div>
                    </div>

                </div>
                <div>

                    <div class="sl_find_frns_user">
                        <div class="sl_find_frns_user_cover"> 
                            <img src="assets/images/group/group-cover-4.jpg" alt="">
                        </div>
                        <div class="sl_find_frns_user_info">
                            <div class="sl_find_frns_user_avatar"> 
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-7.jpg" alt="">
                                </a>
                            </div>
                            <h4> <a href="timeline.html"> Stella Johnson </a> </h4>
                            <p> <span class="small-last-seen">5 hours ago</span> </p>
                        </div>
                        <div class="sl_find_frns_user_btns">
                            <span>
                                <button type="button" class="btn button small primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                    <span> Follow</span>
                                </button>
                            </span>
                            <span>
                                <button type="button" class="btn button small light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    <span> Message</span>
                                </button> 
                            </span>
                        </div>
                    </div>

                </div>
                <div class="uk-grid-margin uk-first-column">

                    <div class="sl_find_frns_user">
                        <div class="sl_find_frns_user_cover"> 
                            <img src="assets/images/group/group-cover-3.jpg" alt="">
                        </div>
                        <div class="sl_find_frns_user_info">
                            <div class="sl_find_frns_user_avatar"> 
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-6.jpg" alt="">
                                </a>
                            </div>
                            <h4> <a href="timeline.html"> Monera Khalifa </a> </h4>
                            <p> <span class="small-last-seen">4 hours ago</span> </p>
                        </div>
                        <div class="sl_find_frns_user_btns">
                            <span>
                                <button type="button" class="btn button small primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                    <span> Follow</span>
                                </button>
                            </span>
                            <span>
                                <button type="button" class="btn button small light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    <span> Message</span>
                                </button> 
                            </span>
                        </div>
                    </div>

                </div>
                <div class="uk-grid-margin">

                    <div class="sl_find_frns_user">
                        <div class="sl_find_frns_user_cover"> 
                            <img src="assets/images/group/group-cover-4.jpg" alt="">
                        </div>
                        <div class="sl_find_frns_user_info">
                            <div class="sl_find_frns_user_avatar"> 
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-7.jpg" alt="">
                                </a>
                            </div>
                            <h4> <a href="timeline.html"> Stella Johnson </a> </h4>
                            <p> <span class="small-last-seen">5 hours ago</span> </p>
                        </div>
                        <div class="sl_find_frns_user_btns">
                            <span>
                                <button type="button" class="btn button small primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                    <span> Follow</span>
                                </button>
                            </span>
                            <span>
                                <button type="button" class="btn button small light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    <span> Message</span>
                                </button> 
                            </span>
                        </div>
                    </div>

                </div>
                <div class="uk-grid-margin">

                    <div class="sl_find_frns_user">
                        <div class="sl_find_frns_user_cover"> 
                            <img src="assets/images/group/group-cover-4.jpg" alt="">
                        </div>
                        <div class="sl_find_frns_user_info">
                            <div class="sl_find_frns_user_avatar"> 
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-5.jpg" alt="">
                                </a>
                            </div>
                            <h4> <a href="timeline.html">  Danial Prime </a> </h4>
                            <p> <span class="small-last-seen">5 hours ago</span> </p>
                        </div>
                        <div class="sl_find_frns_user_btns">
                            <span>
                                <button type="button" class="btn button small primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                    <span> Follow</span>
                                </button>
                            </span>
                            <span>
                                <button type="button" class="btn button small light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    <span> Message</span>
                                </button> 
                            </span>
                        </div>
                    </div>

                </div>
                <div class="uk-grid-margin">

                    <div class="sl_find_frns_user">
                        <div class="sl_find_frns_user_cover"> 
                            <img src="assets/images/group/group-cover-1.jpg" alt="">
                        </div>
                        <div class="sl_find_frns_user_info">
                            <div class="sl_find_frns_user_avatar"> 
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                </a>
                            </div>
                            <h4> <a href="timeline.html"> Adrian Mohani </a> </h4>
                            <p> <span class="small-last-seen">1 hours ago</span> </p>
                        </div>
                        <div class="sl_find_frns_user_btns">
                            <span>
                                <button type="button" class="btn button small primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                    <span> Follow</span>
                                </button>
                            </span>
                            <span>
                                <button type="button" class="btn button small light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    <span> Message</span>
                                </button> 
                            </span>
                        </div>
                    </div>

                </div>
            </div>

            <div class="load-more">
                <button class="btn button">Load more users</button>
            </div>
        </div>
        </li>

        <li>
        <h2> Browse Pages </h2>
        <div class="uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid uk-grid-stack" uk-grid="">
            <div>

                <div class="sl_page_list boosted_pages">

                    <a href="group-feed.html">
                        <div class="sl_page_list_media">
                            <img src="assets/images/avatars/avatar-1.jpg" alt="Picture">
                        </div>
                    </a>
                    
                    <div class="sl_page_list_info">
                        <h3> <a href="group-feed.html">Suranna Brand </a></h3>
                        <span>  Education </span>
                        <p> 5 people like this </p>
                        <div class="sl_page_list_info_btns">
                            <span>
                            <button type="button" class="button primary small block">
                                <span> like</span>
                            </button>
                            </span>
                        </div>
            
                    </div>
            
                </div>

            </div>
            <div>

                <div class="sl_page_list boosted_pages">

                    <a href="group-feed.html">
                        <div class="sl_page_list_media">
                            <img src="assets/images/avatars/avatar-6.jpg" alt="Picture">
                        </div>
                    </a>
                    
                    <div class="sl_page_list_info">
                        <h3> <a href="group-feed.html">  Reveal Store </a></h3>
                        <span> Marketplace </span>
                        <p> 14 people like this </p>
                        <div class="sl_page_list_info_btns">
                            <span>
                            <button type="button" class="button primary small block">
                                <span> like</span>
                            </button>
                            </span>
                        </div>
            
                    </div>
            
                </div>

            </div>
            <div>

                <div class="sl_page_list boosted_pages">

                    <a href="group-feed.html">
                        <div class="sl_page_list_media">
                            <img src="assets/images/avatars/avatar-7.jpg" alt="Picture">
                        </div>
                    </a>
                    
                    <div class="sl_page_list_info">
                        <h3> <a href="group-feed.html">Suranna Brand </a></h3>
                        <span>  Education </span>
                        <p> 5 people like this </p>
                        <div class="sl_page_list_info_btns">
                            <span>
                            <button type="button" class="button primary small block">
                                <span> like</span>
                            </button>
                            </span>
                        </div>
            
                    </div>
            
                </div>

            </div>
            <div>

                <div class="sl_page_list boosted_pages">

                    <a href="group-feed.html">
                        <div class="sl_page_list_media">
                            <img src="assets/images/avatars/avatar-lg-4.jpg" alt="Picture">
                        </div>
                    </a>
                    
                    <div class="sl_page_list_info">
                        <h3> <a href="group-feed.html">Suranna Brand </a></h3>
                        <span>  Education </span>
                        <p> 5 people like this </p>
                        <div class="sl_page_list_info_btns">
                            <span>
                            <button type="button" class="button primary small block">
                                <span> like</span>
                            </button>
                            </span>
                        </div>
            
                    </div>
            
                </div>

            </div>
            <div>

                <div class="sl_page_list boosted_pages">

                    <a href="group-feed.html">
                        <div class="sl_page_list_media">
                            <img src="assets/images/avatars/avatar-lg-2.jpg" alt="Picture">
                        </div>
                    </a>
                    
                    <div class="sl_page_list_info">
                        <h3> <a href="group-feed.html"> Sky Accounting </a></h3>
                        <span>  Business </span>
                        <p> 13 people like this </p>
                        <div class="sl_page_list_info_btns">
                            <span>
                            <button type="button" class="button primary small block">
                                <span> like</span>
                            </button>
                            </span>
                        </div>
            
                    </div>
            
                </div>

            </div>                        
            <div>

                <div class="sl_page_list boosted_pages">

                    <a href="group-feed.html">
                        <div class="sl_page_list_media">
                            <img src="assets/images/avatars/avatar-lg-2.jpg" alt="Picture">
                        </div>
                    </a>
                    
                    <div class="sl_page_list_info">
                        <h3> <a href="group-feed.html"> Sky Accounting </a></h3>
                        <span>  Business </span>
                        <p> 13 people like this </p>
                        <div class="sl_page_list_info_btns">
                            <span>
                            <button type="button" class="button primary small block">
                                <span> like</span>
                            </button>
                            </span>
                        </div>
            
                    </div>
            
                </div>

            </div>
            <div>

                <div class="sl_page_list boosted_pages">

                    <a href="group-feed.html">
                        <div class="sl_page_list_media">
                            <img src="assets/images/avatars/avatar-lg-5.jpg" alt="Picture">
                        </div>
                    </a>
                    
                    <div class="sl_page_list_info">
                        <h3> <a href="group-feed.html">  Phase Designers </a></h3>
                        <span>  Shopping </span>
                        <p> 15 people like this </p>
                        <div class="sl_page_list_info_btns">
                            <span>
                            <button type="button" class="button primary small block">
                                <span> like</span>
                            </button>
                            </span>
                        </div>
            
                    </div>
            
                </div>

            </div>
            <div>

                <div class="sl_page_list boosted_pages">

                    <a href="group-feed.html">
                        <div class="sl_page_list_media">
                            <img src="assets/images/avatars/avatar-lg-3.jpg" alt="Picture">
                        </div>
                    </a>
                    
                    <div class="sl_page_list_info">
                        <h3> <a href="group-feed.html">  Reveal Store </a></h3>
                        <span> Marketplace </span>
                        <p> 14 people like this </p>
                        <div class="sl_page_list_info_btns">
                            <span>
                            <button type="button" class="button primary small block">
                                <span> like</span>
                            </button>
                            </span>
                        </div>
            
                    </div>
            
                </div>

            </div>
            <div>

                <div class="sl_page_list boosted_pages">

                    <a href="group-feed.html">
                        <div class="sl_page_list_media">
                            <img src="assets/images/avatars/avatar-1.jpg" alt="Picture">
                        </div>
                    </a>
                    
                    <div class="sl_page_list_info">
                        <h3> <a href="group-feed.html">  Phase Designers </a></h3>
                        <span>  Shopping </span>
                        <p> 15 people like this </p>
                        <div class="sl_page_list_info_btns">
                            <span>
                            <button type="button" class="button primary small block">
                                <span> like</span>
                            </button>
                            </span>
                        </div>
            
                    </div>
            
                </div>

            </div>
            <div>

                <div class="sl_page_list boosted_pages">

                    <a href="group-feed.html">
                        <div class="sl_page_list_media">
                            <img src="assets/images/avatars/avatar-6.jpg" alt="Picture">
                        </div>
                    </a>
                    
                    <div class="sl_page_list_info">
                        <h3> <a href="group-feed.html">  Reveal Store </a></h3>
                        <span> Marketplace </span>
                        <p> 14 people like this </p>
                        <div class="sl_page_list_info_btns">
                            <span>
                            <button type="button" class="button primary small block">
                                <span> like</span>
                            </button>
                            </span>
                        </div>
            
                    </div>
            
                </div>

            </div>
        </div>
        <div class="load-more">
            <button class="btn button">Load more Pages</button>
        </div>
        </li>

        <li>
        <h2> Browse Groups  </h2>
        <div class="uk-child-width-1-4@m uk-child-width-1-2@s uk-grid-small uk-grid uk-grid-stack" uk-grid="">
            <div>

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
            <div>

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

        </div>
        <div class="load-more">
            <button class="btn button">Load more Groups</button>
        </div>
        </li>

        <li>
        <h2> Browse Games  </h2>
        <div class="uk-child-width-1-5@m uk-child-width-1-3@s uk-grid-small uk-grid uk-grid-stack" uk-grid="">
            <div>
                <div class="sl_game_list">

                    <!-- Game cover -->
                    <a href="#">
                        <div class="sl_game_list_media">
                            <img src="assets/images/games/img-4.jpg" alt="Picture">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_game_list_info">
                        <h3>  Mobile Legends </h3>
                        <span> 2 users playing</span>
                        <div class="sl_game_list_info_btns">
                            <div class="btn button light block small"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M9,2V7.5L12,10.5L15,7.5V2H9M2,9V15H7.5L10.5,12L7.5,9H2M16.5,9L13.5,12L16.5,15H22V9H16.5M12,13.5L9,16.5V22H15V16.5L12,13.5M11,18H13V20H11V18Z">
                                    </path>
                                </svg> Play</div>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <div class="sl_game_list">

                    <!-- Game cover -->
                    <a href="#">
                        <div class="sl_game_list_media">
                            <img src="assets/images/games/img-5.jpg" alt="Picture">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_game_list_info">
                        <h3> Minecraft </h3>
                        <span> 2 users playing</span>
                        <div class="sl_game_list_info_btns">
                            <div class="btn button light block small"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M9,2V7.5L12,10.5L15,7.5V2H9M2,9V15H7.5L10.5,12L7.5,9H2M16.5,9L13.5,12L16.5,15H22V9H16.5M12,13.5L9,16.5V22H15V16.5L12,13.5M11,18H13V20H11V18Z">
                                    </path>
                                </svg> Play</div>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <div class="sl_game_list">

                    <!-- Game cover -->
                    <a href="#">
                        <div class="sl_game_list_media">
                            <img src="assets/images/games/3.jpg" alt="Picture">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_game_list_info">
                        <h3> urban basketball </h3>
                        <span> 2 users playing</span>
                        <div class="sl_game_list_info_btns">
                            <div class="btn button light block small"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M9,2V7.5L12,10.5L15,7.5V2H9M2,9V15H7.5L10.5,12L7.5,9H2M16.5,9L13.5,12L16.5,15H22V9H16.5M12,13.5L9,16.5V22H15V16.5L12,13.5M11,18H13V20H11V18Z">
                                    </path>
                                </svg> Play</div>
                        </div>

                    </div>
                </div>

            </div>
            <div>
                <div class="sl_game_list">

                    <!-- Game cover -->
                    <a href="#">
                        <div class="sl_game_list_media">
                            <img src="assets/images/games/1.jpg" alt="Picture">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_game_list_info">
                        <h3>8 Ball Pool</h3>
                        <span> 2 users playing</span>
                        <div class="sl_game_list_info_btns">
                            <div class="btn button light block small"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M9,2V7.5L12,10.5L15,7.5V2H9M2,9V15H7.5L10.5,12L7.5,9H2M16.5,9L13.5,12L16.5,15H22V9H16.5M12,13.5L9,16.5V22H15V16.5L12,13.5M11,18H13V20H11V18Z">
                                    </path>
                                </svg> Play</div>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <div class="sl_game_list">

                    <!-- Game cover -->
                    <a href="#">
                        <div class="sl_game_list_media">
                            <img src="assets/images/games/2.jpg" alt="Picture">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_game_list_info">
                        <h3> Big Shot Boxing </h3>
                        <span> 2 users playing</span>
                        <div class="sl_game_list_info_btns">
                            <div class="btn button light block small"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M9,2V7.5L12,10.5L15,7.5V2H9M2,9V15H7.5L10.5,12L7.5,9H2M16.5,9L13.5,12L16.5,15H22V9H16.5M12,13.5L9,16.5V22H15V16.5L12,13.5M11,18H13V20H11V18Z">
                                    </path>
                                </svg> Play</div>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <div class="sl_game_list">

                    <!-- Game cover -->
                    <a href="#">
                        <div class="sl_game_list_media">
                            <img src="assets/images/games/3.jpg" alt="Picture">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_game_list_info">
                        <h3> urban basketball </h3>
                        <span> 2 users playing</span>
                        <div class="sl_game_list_info_btns">
                            <div class="btn button light block small"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M9,2V7.5L12,10.5L15,7.5V2H9M2,9V15H7.5L10.5,12L7.5,9H2M16.5,9L13.5,12L16.5,15H22V9H16.5M12,13.5L9,16.5V22H15V16.5L12,13.5M11,18H13V20H11V18Z">
                                    </path>
                                </svg> Play</div>
                        </div>

                    </div>
                </div>

            </div>
            <div>
                <div class="sl_game_list">

                    <!-- Game cover -->
                    <a href="#">
                        <div class="sl_game_list_media">
                            <img src="assets/images/games/img-2.jpg" alt="Picture">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_game_list_info">
                        <h3> ChooxTv </h3>
                        <span> 2 users playing</span>
                        <div class="sl_game_list_info_btns">
                            <div class="btn button light block small"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M9,2V7.5L12,10.5L15,7.5V2H9M2,9V15H7.5L10.5,12L7.5,9H2M16.5,9L13.5,12L16.5,15H22V9H16.5M12,13.5L9,16.5V22H15V16.5L12,13.5M11,18H13V20H11V18Z">
                                    </path>
                                </svg> Play</div>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <div class="sl_game_list">

                    <!-- Game cover -->
                    <a href="#">
                        <div class="sl_game_list_media">
                            <img src="assets/images/games/img-3.jpg" alt="Picture">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_game_list_info">
                        <h3> Larion TV </h3>
                        <span> 2 users playing</span>
                        <div class="sl_game_list_info_btns">
                            <div class="btn button light block small"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M9,2V7.5L12,10.5L15,7.5V2H9M2,9V15H7.5L10.5,12L7.5,9H2M16.5,9L13.5,12L16.5,15H22V9H16.5M12,13.5L9,16.5V22H15V16.5L12,13.5M11,18H13V20H11V18Z">
                                    </path>
                                </svg> Play</div>
                        </div>

                    </div>
                </div>

            </div>
            <div>
                <div class="sl_game_list">

                    <!-- Game cover -->
                    <a href="#">
                        <div class="sl_game_list_media">
                            <img src="assets/images/games/img-5.jpg" alt="Picture">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_game_list_info">
                        <h3> Minecraft </h3>
                        <span> 2 users playing</span>
                        <div class="sl_game_list_info_btns">
                            <div class="btn button light block small"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M9,2V7.5L12,10.5L15,7.5V2H9M2,9V15H7.5L10.5,12L7.5,9H2M16.5,9L13.5,12L16.5,15H22V9H16.5M12,13.5L9,16.5V22H15V16.5L12,13.5M11,18H13V20H11V18Z">
                                    </path>
                                </svg> Play</div>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <div class="sl_game_list">

                    <!-- Game cover -->
                    <a href="#">
                        <div class="sl_game_list_media">
                            <img src="assets/images/games/img-4.jpg" alt="Picture">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_game_list_info">
                        <h3> Mobile Legends </h3>
                        <span> 2 users playing</span>
                        <div class="sl_game_list_info_btns">
                            <div class="btn button light block small"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M9,2V7.5L12,10.5L15,7.5V2H9M2,9V15H7.5L10.5,12L7.5,9H2M16.5,9L13.5,12L16.5,15H22V9H16.5M12,13.5L9,16.5V22H15V16.5L12,13.5M11,18H13V20H11V18Z">
                                    </path>
                                </svg> Play</div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="load-more">
            <button class="btn button">Load more Games</button>
        </div>
        </li>

        </ul>

            
    </div>

@endsection