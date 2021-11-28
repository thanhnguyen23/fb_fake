@extends('frontend.layout.home')

@section('title' ,'Events')

@section('content')


<div class="main_content_inner">

                        <h2 class="mb-1"> Events Going   </h2>
                        <div class="uk-flex uk-flex-between uk-flex-middle mb-4">
                            <ul class="uk-width-expand uk-tab" uk-tab="">
                                <li class="uk-active"><a href="#">   Suggestions   </a></li>
                                <li><a href="#">  Newest </a></li>
                                <li class="uk-visible@s"><a href="#"> My Events </a></li>
                            </ul>
                            <a href="#" class="button primary small circle uk-visible@s"> <i class="uil-plus"> </i>
                                Create New Event </a>
        
                        </div>

                        <div class="uk-position-relative uk-slider" uk-slider="finite: true">

                            <div class="uk-slider-container px-lg-1 pb-3">
        
                                <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-2@s uk-grid-small uk-grid" style="transform: translate3d(0px, 0px, 0px);">
                                    <li tabindex="-1" class="uk-active">

                                        <div class="sl_events_list">
            
                                            <a href="#" class="event_cover">
                                                <div class="sl_events_list_media">
                                                    <img src="assets/images/events/img-4.jpg" class="events-list-cover-img">
                                                </div>
                                            </a>
            
                                            <div class="sl_events_list_info">
            
                                                <p> Uk brands </p>
            
                                                <h3> <a href="#"> The global creative </a> </h3>
            
                                                <span class="event-info-date">
                                                    <b>01</b>
                                                    <p>Jan</p>
                                                </span>
            
                                                 
                                                <div class="sl_avatar-groups">
                                                    <a href="#">
            
                                                        <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                                        <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                                        <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">
            
                                                    </a><a href="#">12 interested users  </a>
            
                                                </div>
            
                                                <div class="sl_events_list_info_btns">
                                                    <span>
                                                        <button type="button" class="btn button primary small block">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M10.74,11.72C11.21,12.95 11.16,14.23 9.75,14.74C6.85,15.81 6.2,13 6.16,12.86L10.74,11.72M5.71,10.91L10.03,9.84C9.84,8.79 10.13,7.74 10.13,6.5C10.13,4.82 8.8,1.53 6.68,2.06C4.26,2.66 3.91,5.35 4,6.65C4.12,7.95 5.64,10.73 5.71,10.91M17.85,19.85C17.82,20 17.16,22.8 14.26,21.74C12.86,21.22 12.8,19.94 13.27,18.71L17.85,19.85M20,13.65C20.1,12.35 19.76,9.65 17.33,9.05C15.22,8.5 13.89,11.81 13.89,13.5C13.89,14.73 14.17,15.78 14,16.83L18.3,17.9C18.38,17.72 19.89,14.94 20,13.65Z"></path>
                                                            </svg> <span> Join </span>
                                                        </button>
                                                    </span> 
                                                    <span>
                                                        <button type="button" class="btn button light small block">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M16.5,5C15,5 13.58,5.91 13,7.2V17.74C17.25,13.87 20,11.2 20,8.5C20,6.5 18.5,5 16.5,5M16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3Z">
                                                                </path>
                                                            </svg> <span> Interested</span>
                                                        </button>
                                                    </span>
                                                </div>
            
                                            </div>
            
                                        </div>
            
                                    </li>
                                    <li tabindex="-1" class="uk-active">
            
                                        <div class="sl_events_list">
            
                                            <a href="#" class="event_cover">
                                                <div class="sl_events_list_media">
                                                    <img src="assets/images/events/img-3.jpg" class="events-list-cover-img">
                                                </div>
                                            </a>
            
                                            <div class="sl_events_list_info">
            
                                                <p> Upcomming </p>
            
                                                <h3> <a href="#">  Safety and Flight  </a> </h3>
            
                                                <span class="event-info-date">
                                                    <b>01</b>
                                                    <p>Jan</p>
                                                </span>
            
                                                 
                                                <div class="sl_avatar-groups">
                                                    <a href="#">
            
                                                        <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                                        <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                                        <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">
            
                                                    </a><a href="#">12 interested users  </a>
            
                                                </div>
            
                                                <div class="sl_events_list_info_btns">
                                                    <span>
                                                        <button type="button" class="btn button primary small block">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M10.74,11.72C11.21,12.95 11.16,14.23 9.75,14.74C6.85,15.81 6.2,13 6.16,12.86L10.74,11.72M5.71,10.91L10.03,9.84C9.84,8.79 10.13,7.74 10.13,6.5C10.13,4.82 8.8,1.53 6.68,2.06C4.26,2.66 3.91,5.35 4,6.65C4.12,7.95 5.64,10.73 5.71,10.91M17.85,19.85C17.82,20 17.16,22.8 14.26,21.74C12.86,21.22 12.8,19.94 13.27,18.71L17.85,19.85M20,13.65C20.1,12.35 19.76,9.65 17.33,9.05C15.22,8.5 13.89,11.81 13.89,13.5C13.89,14.73 14.17,15.78 14,16.83L18.3,17.9C18.38,17.72 19.89,14.94 20,13.65Z"></path>
                                                            </svg> <span> Join </span>
                                                        </button>
                                                    </span> 
                                                    <span>
                                                        <button type="button" class="btn button light small block">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M16.5,5C15,5 13.58,5.91 13,7.2V17.74C17.25,13.87 20,11.2 20,8.5C20,6.5 18.5,5 16.5,5M16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3Z">
                                                                </path>
                                                            </svg> <span> Interested</span>
                                                        </button>
                                                    </span>
                                                </div>
            
                                            </div>
            
                                        </div>
            
                                    </li>
                                    <li tabindex="-1" class="uk-active">
            
                                        <div class="sl_events_list">
            
                                            <a href="#" class="event_cover">
                                                <div class="sl_events_list_media">
                                                    <img src="assets/images/events/img-2.jpg" class="events-list-cover-img">
                                                </div>
                                            </a>
            
                                            <div class="sl_events_list_info">
            
                                                <p> Uk brands </p>
            
                                                <h3> <a href="#">  Perspective is everything </a> </h3>
            
                                                <span class="event-info-date">
                                                    <b>01</b>
                                                    <p>Jan</p>
                                                </span>
            
                                                 
                                                <div class="sl_avatar-groups">
                                                    <a href="#">
            
                                                        <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                                        <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                                        <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">
            
                                                    </a><a href="#">12 interested users  </a>
            
                                                </div>
            
                                                <div class="sl_events_list_info_btns">
                                                    <span>
                                                        <button type="button" class="btn button primary small block">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M10.74,11.72C11.21,12.95 11.16,14.23 9.75,14.74C6.85,15.81 6.2,13 6.16,12.86L10.74,11.72M5.71,10.91L10.03,9.84C9.84,8.79 10.13,7.74 10.13,6.5C10.13,4.82 8.8,1.53 6.68,2.06C4.26,2.66 3.91,5.35 4,6.65C4.12,7.95 5.64,10.73 5.71,10.91M17.85,19.85C17.82,20 17.16,22.8 14.26,21.74C12.86,21.22 12.8,19.94 13.27,18.71L17.85,19.85M20,13.65C20.1,12.35 19.76,9.65 17.33,9.05C15.22,8.5 13.89,11.81 13.89,13.5C13.89,14.73 14.17,15.78 14,16.83L18.3,17.9C18.38,17.72 19.89,14.94 20,13.65Z"></path>
                                                            </svg> <span> Join </span>
                                                        </button>
                                                    </span> 
                                                    <span>
                                                        <button type="button" class="btn button light small block">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M16.5,5C15,5 13.58,5.91 13,7.2V17.74C17.25,13.87 20,11.2 20,8.5C20,6.5 18.5,5 16.5,5M16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3Z">
                                                                </path>
                                                            </svg> <span> Interested</span>
                                                        </button>
                                                    </span>
                                                </div>
            
                                            </div>
            
                                        </div>
            
                                    </li>
                                    <li tabindex="-1" class="uk-active">
            
                                        <div class="sl_events_list">
            
                                            <a href="#" class="event_cover">
                                                <div class="sl_events_list_media">
                                                    <img src="assets/images/events/img-1.jpg" class="events-list-cover-img">
                                                </div>
                                            </a>
            
                                            <div class="sl_events_list_info">
            
                                                <p>Conferences </p>
            
                                                <h3> <a href="#">  Accept Who I Am </a> </h3>
            
                                                <span class="event-info-date">
                                                    <b>01</b>
                                                    <p>Jan</p>
                                                </span>
            
                                                 
                                                <div class="sl_avatar-groups">
                                                    <a href="#">
            
                                                        <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                                        <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                                        <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">
            
                                                    </a><a href="#">12 interested users  </a>
            
                                                </div>
            
                                                <div class="sl_events_list_info_btns">
                                                    <span>
                                                        <button type="button" class="btn button primary small block">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M10.74,11.72C11.21,12.95 11.16,14.23 9.75,14.74C6.85,15.81 6.2,13 6.16,12.86L10.74,11.72M5.71,10.91L10.03,9.84C9.84,8.79 10.13,7.74 10.13,6.5C10.13,4.82 8.8,1.53 6.68,2.06C4.26,2.66 3.91,5.35 4,6.65C4.12,7.95 5.64,10.73 5.71,10.91M17.85,19.85C17.82,20 17.16,22.8 14.26,21.74C12.86,21.22 12.8,19.94 13.27,18.71L17.85,19.85M20,13.65C20.1,12.35 19.76,9.65 17.33,9.05C15.22,8.5 13.89,11.81 13.89,13.5C13.89,14.73 14.17,15.78 14,16.83L18.3,17.9C18.38,17.72 19.89,14.94 20,13.65Z"></path>
                                                            </svg> <span> Join </span>
                                                        </button>
                                                    </span> 
                                                    <span>
                                                        <button type="button" class="btn button light small block">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M16.5,5C15,5 13.58,5.91 13,7.2V17.74C17.25,13.87 20,11.2 20,8.5C20,6.5 18.5,5 16.5,5M16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3Z">
                                                                </path>
                                                            </svg> <span> Interested</span>
                                                        </button>
                                                    </span>
                                                </div>
            
                                            </div>
            
                                        </div>
            
                                    </li>
                                    <li tabindex="-1" class="">

                                        <div class="sl_events_list">
            
                                            <a href="#" class="event_cover">
                                                <div class="sl_events_list_media">
                                                    <img src="assets/images/events/img-4.jpg" class="events-list-cover-img">
                                                </div>
                                            </a>
            
                                            <div class="sl_events_list_info">
            
                                                <p> Uk brands </p>
            
                                                <h3> <a href="#"> The global creative </a> </h3>
            
                                                <span class="event-info-date">
                                                    <b>01</b>
                                                    <p>Jan</p>
                                                </span>
            
                                                 
                                                <div class="sl_avatar-groups">
                                                    <a href="#">
            
                                                        <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                                        <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                                        <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">
            
                                                    </a><a href="#">12 interested users  </a>
            
                                                </div>
            
                                                <div class="sl_events_list_info_btns">
                                                    <span>
                                                        <button type="button" class="btn button primary small block">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M10.74,11.72C11.21,12.95 11.16,14.23 9.75,14.74C6.85,15.81 6.2,13 6.16,12.86L10.74,11.72M5.71,10.91L10.03,9.84C9.84,8.79 10.13,7.74 10.13,6.5C10.13,4.82 8.8,1.53 6.68,2.06C4.26,2.66 3.91,5.35 4,6.65C4.12,7.95 5.64,10.73 5.71,10.91M17.85,19.85C17.82,20 17.16,22.8 14.26,21.74C12.86,21.22 12.8,19.94 13.27,18.71L17.85,19.85M20,13.65C20.1,12.35 19.76,9.65 17.33,9.05C15.22,8.5 13.89,11.81 13.89,13.5C13.89,14.73 14.17,15.78 14,16.83L18.3,17.9C18.38,17.72 19.89,14.94 20,13.65Z"></path>
                                                            </svg> <span> Join </span>
                                                        </button>
                                                    </span> 
                                                    <span>
                                                        <button type="button" class="btn button light small block">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M16.5,5C15,5 13.58,5.91 13,7.2V17.74C17.25,13.87 20,11.2 20,8.5C20,6.5 18.5,5 16.5,5M16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3Z">
                                                                </path>
                                                            </svg> <span> Interested</span>
                                                        </button>
                                                    </span>
                                                </div>
            
                                            </div>
            
                                        </div>
            
                                    </li>
                                    <li tabindex="-1">

                                        <div class="sl_events_list">
            
                                            <a href="#" class="event_cover">
                                                <div class="sl_events_list_media">
                                                    <img src="assets/images/events/img-4.jpg" class="events-list-cover-img">
                                                </div>
                                            </a>
            
                                            <div class="sl_events_list_info">
            
                                                <p> Uk brands </p>
            
                                                <h3> <a href="#"> The global creative </a> </h3>
            
                                                <span class="event-info-date">
                                                    <b>01</b>
                                                    <p>Jan</p>
                                                </span>
            
                                                 
                                                <div class="sl_avatar-groups">
                                                    <a href="#">
            
                                                        <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                                        <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                                        <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">
            
                                                    </a><a href="#">12 interested users  </a>
            
                                                </div>
            
                                                <div class="sl_events_list_info_btns">
                                                    <span>
                                                        <button type="button" class="btn button primary small block">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M10.74,11.72C11.21,12.95 11.16,14.23 9.75,14.74C6.85,15.81 6.2,13 6.16,12.86L10.74,11.72M5.71,10.91L10.03,9.84C9.84,8.79 10.13,7.74 10.13,6.5C10.13,4.82 8.8,1.53 6.68,2.06C4.26,2.66 3.91,5.35 4,6.65C4.12,7.95 5.64,10.73 5.71,10.91M17.85,19.85C17.82,20 17.16,22.8 14.26,21.74C12.86,21.22 12.8,19.94 13.27,18.71L17.85,19.85M20,13.65C20.1,12.35 19.76,9.65 17.33,9.05C15.22,8.5 13.89,11.81 13.89,13.5C13.89,14.73 14.17,15.78 14,16.83L18.3,17.9C18.38,17.72 19.89,14.94 20,13.65Z"></path>
                                                            </svg> <span> Join </span>
                                                        </button>
                                                    </span> 
                                                    <span>
                                                        <button type="button" class="btn button light small block">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M16.5,5C15,5 13.58,5.91 13,7.2V17.74C17.25,13.87 20,11.2 20,8.5C20,6.5 18.5,5 16.5,5M16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3Z">
                                                                </path>
                                                            </svg> <span> Interested</span>
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

                        <div class="section-header pb-0 mt-3">
                            <div class="section-header-left">
                                <h3> Lists You may like </h3>
                            </div>
                            <div class="section-header-right">
                                <a href="#" class="see-all"> See all</a>
                            </div>
                        </div>
        
                        <div class="uk-position-relative uk-slider" uk-slider="finite: true">
        
                            <div class="uk-slider-container py-3">
        
                                <ul class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid" style="transform: translate3d(0px, 0px, 0px);">
        
                                    <li tabindex="-1" class="uk-active">
        
                                        <a href="#">
                                            <div class="sl_event_listing animate-this" data-src="assets/images/events/listing-1.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/events/listing-1.jpg&quot;);">
                                                <div class="sl_event_listing-content">
                                                    <p> Miami </p>
                                                    <h4> Hotels </h4>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li tabindex="-1" class="uk-active">
        
                                        <a href="#">
                                            <div class="sl_event_listing animate-this" data-src="assets/images/events/listing-2.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/events/listing-2.jpg&quot;);">
                                                <div class="sl_event_listing-content">
                                                    <p> Florida</p>
                                                    <h4> Hotels </h4>
                                                </div>
                                            </div>
                                        </a>
        
                                    </li>
                                    <li tabindex="-1" class="uk-active">
                                        <a href="#">
                                            <div class="sl_event_listing animate-this" data-src="assets/images/events/listing-6.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/events/listing-6.jpg&quot;);">
                                                <div class="sl_event_listing-content">
                                                    <p> London</p>
                                                    <h4> Cold Drink </h4>
                                                </div>
                                            </div>
                                        </a>
        
                                    </li>
                                    <li tabindex="-1" class="uk-active">
        
                                        <a href="#">
                                            <div class="sl_event_listing animate-this" data-src="assets/images/events/listing-3.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/events/listing-3.jpg&quot;);">
                                                <div class="sl_event_listing-content">
                                                    <p> Los Angeles </p>
                                                    <h4> Hotels </h4>
                                                </div>
                                            </div>
                                        </a>
        
                                    </li>
                                    <li tabindex="-1" class="uk-active">
        
                                        <a href="#">
                                            <div class="sl_event_listing animate-this" data-src="assets/images/events/listing-4.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/events/listing-4.jpg&quot;);">
                                                <div class="sl_event_listing-content">
                                                    <p> Dubai </p>
                                                    <h4> Tom Restaurant </h4>
                                                </div>
                                            </div>
                                        </a>
        
                                    </li>
                                    <li tabindex="-1" class="">
        
                                        <a href="#">
                                            <div class="sl_event_listing animate-this" data-src="assets/images/events/listing-5.jpg" uk-img="">
                                                <div class="sl_event_listing-content">
                                                    <p> Florida</p>
                                                    <h4> Food </h4>
                                                </div>
                                            </div>
                                        </a>
        
                                    </li>
                                    <li tabindex="-1">
        
                                        <a href="#">
                                            <div class="sl_event_listing animate-this" data-src="assets/images/events/listing-1.jpg" uk-img="">
                                                <div class="sl_event_listing-content">
                                                    <p> Miami </p>
                                                    <h4> Hotels </h4>
                                                </div>
                                            </div>
                                        </a>
        
                                    </li>
                                </ul>
        
                                <a class="uk-position-center-left-out uk-position-small uk-hidden-hover slidenav-prev uk-invisible" href="#" uk-slider-item="previous"></a>
                                <a class="uk-position-center-right-out uk-position-small uk-hidden-hover slidenav-next" href="#" uk-slider-item="next"></a>
        
                            </div>
                        </div>


                        <div class="section-header mt-3">
                            <div class="section-header-left">
                                <h2> Events Interested   </h2>
                            </div>
                            <div class="section-header-right">
                                <a href="#" class="see-all"> See all</a>
                            </div>
                        </div>
                    <!-- Events  -->
                    <div class="uk-child-width-1-4@m uk-child-width-1-2@s uk-grid-small uk-grid" uk-grid="">
                        <div class="uk-first-column">

                            <div class="sl_events_list">

                                <a href="#" class="event_cover">
                                    <div class="sl_events_list_media">
                                        <img src="assets/images/events/img-4.jpg" class="events-list-cover-img">
                                    </div>
                                </a>

                                <div class="sl_events_list_info">

                                    <p> Uk brands </p>

                                    <h3> <a href="#"> The global creative </a> </h3>

                                    <span class="event-info-date">
                                        <b>01</b>
                                        <p>Jan</p>
                                    </span>

                                     
                                    <div class="sl_avatar-groups">
                                        <a href="#">

                                            <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                            <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                            <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">

                                        </a><a href="#">12 interested users  </a>

                                    </div>

                                    <div class="sl_events_list_info_btns">
                                        <span>
                                            <button type="button" class="btn button primary small block">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M10.74,11.72C11.21,12.95 11.16,14.23 9.75,14.74C6.85,15.81 6.2,13 6.16,12.86L10.74,11.72M5.71,10.91L10.03,9.84C9.84,8.79 10.13,7.74 10.13,6.5C10.13,4.82 8.8,1.53 6.68,2.06C4.26,2.66 3.91,5.35 4,6.65C4.12,7.95 5.64,10.73 5.71,10.91M17.85,19.85C17.82,20 17.16,22.8 14.26,21.74C12.86,21.22 12.8,19.94 13.27,18.71L17.85,19.85M20,13.65C20.1,12.35 19.76,9.65 17.33,9.05C15.22,8.5 13.89,11.81 13.89,13.5C13.89,14.73 14.17,15.78 14,16.83L18.3,17.9C18.38,17.72 19.89,14.94 20,13.65Z"></path>
                                                </svg> <span> Join </span>
                                            </button>
                                        </span> 
                                        <span>
                                            <button type="button" class="btn button light small block">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M16.5,5C15,5 13.58,5.91 13,7.2V17.74C17.25,13.87 20,11.2 20,8.5C20,6.5 18.5,5 16.5,5M16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3Z">
                                                    </path>
                                                </svg> <span> Interested</span>
                                            </button>
                                        </span>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div>

                            <div class="sl_events_list">

                                <a href="#" class="event_cover">
                                    <div class="sl_events_list_media">
                                        <img src="assets/images/events/img-3.jpg" class="events-list-cover-img">
                                    </div>
                                </a>

                                <div class="sl_events_list_info">

                                    <p> Upcomming </p>

                                    <h3> <a href="#">  Safety and Flight  </a> </h3>

                                    <span class="event-info-date">
                                        <b>01</b>
                                        <p>Jan</p>
                                    </span>

                                     
                                    <div class="sl_avatar-groups">
                                        <a href="#">

                                            <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                            <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                            <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">

                                        </a><a href="#">12 interested users  </a>

                                    </div>

                                    <div class="sl_events_list_info_btns">
                                        <span>
                                            <button type="button" class="btn button primary small block">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M10.74,11.72C11.21,12.95 11.16,14.23 9.75,14.74C6.85,15.81 6.2,13 6.16,12.86L10.74,11.72M5.71,10.91L10.03,9.84C9.84,8.79 10.13,7.74 10.13,6.5C10.13,4.82 8.8,1.53 6.68,2.06C4.26,2.66 3.91,5.35 4,6.65C4.12,7.95 5.64,10.73 5.71,10.91M17.85,19.85C17.82,20 17.16,22.8 14.26,21.74C12.86,21.22 12.8,19.94 13.27,18.71L17.85,19.85M20,13.65C20.1,12.35 19.76,9.65 17.33,9.05C15.22,8.5 13.89,11.81 13.89,13.5C13.89,14.73 14.17,15.78 14,16.83L18.3,17.9C18.38,17.72 19.89,14.94 20,13.65Z"></path>
                                                </svg> <span> Join </span>
                                            </button>
                                        </span> 
                                        <span>
                                            <button type="button" class="btn button light small block">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M16.5,5C15,5 13.58,5.91 13,7.2V17.74C17.25,13.87 20,11.2 20,8.5C20,6.5 18.5,5 16.5,5M16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3Z">
                                                    </path>
                                                </svg> <span> Interested</span>
                                            </button>
                                        </span>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div>

                            <div class="sl_events_list">

                                <a href="#" class="event_cover">
                                    <div class="sl_events_list_media">
                                        <img src="assets/images/events/img-2.jpg" class="events-list-cover-img">
                                    </div>
                                </a>

                                <div class="sl_events_list_info">

                                    <p> Uk brands </p>

                                    <h3> <a href="#">  Perspective is everything </a> </h3>

                                    <span class="event-info-date">
                                        <b>01</b>
                                        <p>Jan</p>
                                    </span>

                                     
                                    <div class="sl_avatar-groups">
                                        <a href="#">

                                            <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                            <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                            <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">

                                        </a><a href="#">12 interested users  </a>

                                    </div>

                                    <div class="sl_events_list_info_btns">
                                        <span>
                                            <button type="button" class="btn button primary small block">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M10.74,11.72C11.21,12.95 11.16,14.23 9.75,14.74C6.85,15.81 6.2,13 6.16,12.86L10.74,11.72M5.71,10.91L10.03,9.84C9.84,8.79 10.13,7.74 10.13,6.5C10.13,4.82 8.8,1.53 6.68,2.06C4.26,2.66 3.91,5.35 4,6.65C4.12,7.95 5.64,10.73 5.71,10.91M17.85,19.85C17.82,20 17.16,22.8 14.26,21.74C12.86,21.22 12.8,19.94 13.27,18.71L17.85,19.85M20,13.65C20.1,12.35 19.76,9.65 17.33,9.05C15.22,8.5 13.89,11.81 13.89,13.5C13.89,14.73 14.17,15.78 14,16.83L18.3,17.9C18.38,17.72 19.89,14.94 20,13.65Z"></path>
                                                </svg> <span> Join </span>
                                            </button>
                                        </span> 
                                        <span>
                                            <button type="button" class="btn button light small block">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M16.5,5C15,5 13.58,5.91 13,7.2V17.74C17.25,13.87 20,11.2 20,8.5C20,6.5 18.5,5 16.5,5M16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3Z">
                                                    </path>
                                                </svg> <span> Interested</span>
                                            </button>
                                        </span>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div>

                            <div class="sl_events_list">

                                <a href="#" class="event_cover">
                                    <div class="sl_events_list_media">
                                        <img src="assets/images/events/img-1.jpg" class="events-list-cover-img">
                                    </div>
                                </a>

                                <div class="sl_events_list_info">

                                    <p>Conferences </p>

                                    <h3> <a href="#">  Accept Who I Am </a> </h3>

                                    <span class="event-info-date">
                                        <b>01</b>
                                        <p>Jan</p>
                                    </span>

                                     
                                    <div class="sl_avatar-groups">
                                        <a href="#">

                                            <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                            <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                            <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">

                                        </a><a href="#">12 interested users  </a>

                                    </div>

                                    <div class="sl_events_list_info_btns">
                                        <span>
                                            <button type="button" class="btn button primary small block">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M10.74,11.72C11.21,12.95 11.16,14.23 9.75,14.74C6.85,15.81 6.2,13 6.16,12.86L10.74,11.72M5.71,10.91L10.03,9.84C9.84,8.79 10.13,7.74 10.13,6.5C10.13,4.82 8.8,1.53 6.68,2.06C4.26,2.66 3.91,5.35 4,6.65C4.12,7.95 5.64,10.73 5.71,10.91M17.85,19.85C17.82,20 17.16,22.8 14.26,21.74C12.86,21.22 12.8,19.94 13.27,18.71L17.85,19.85M20,13.65C20.1,12.35 19.76,9.65 17.33,9.05C15.22,8.5 13.89,11.81 13.89,13.5C13.89,14.73 14.17,15.78 14,16.83L18.3,17.9C18.38,17.72 19.89,14.94 20,13.65Z"></path>
                                                </svg> <span> Join </span>
                                            </button>
                                        </span> 
                                        <span>
                                            <button type="button" class="btn button light small block">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M16.5,5C15,5 13.58,5.91 13,7.2V17.74C17.25,13.87 20,11.2 20,8.5C20,6.5 18.5,5 16.5,5M16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3Z">
                                                    </path>
                                                </svg> <span> Interested</span>
                                            </button>
                                        </span>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="uk-grid-margin uk-first-column">

                            <div class="sl_events_list">

                                <a href="#" class="event_cover">
                                    <div class="sl_events_list_media">
                                        <img src="assets/images/events/img-2.jpg" class="events-list-cover-img">
                                    </div>
                                </a>

                                <div class="sl_events_list_info">

                                    <p> Uk brands </p>

                                    <h3> <a href="#">  Perspective is everything </a> </h3>

                                    <span class="event-info-date">
                                        <b>01</b>
                                        <p>Jan</p>
                                    </span>

                                     
                                    <div class="sl_avatar-groups">
                                        <a href="#">

                                            <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                            <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                            <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">

                                        </a><a href="#">12 interested users  </a>

                                    </div>

                                    <div class="sl_events_list_info_btns">
                                        <span>
                                            <button type="button" class="btn button primary small block">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M10.74,11.72C11.21,12.95 11.16,14.23 9.75,14.74C6.85,15.81 6.2,13 6.16,12.86L10.74,11.72M5.71,10.91L10.03,9.84C9.84,8.79 10.13,7.74 10.13,6.5C10.13,4.82 8.8,1.53 6.68,2.06C4.26,2.66 3.91,5.35 4,6.65C4.12,7.95 5.64,10.73 5.71,10.91M17.85,19.85C17.82,20 17.16,22.8 14.26,21.74C12.86,21.22 12.8,19.94 13.27,18.71L17.85,19.85M20,13.65C20.1,12.35 19.76,9.65 17.33,9.05C15.22,8.5 13.89,11.81 13.89,13.5C13.89,14.73 14.17,15.78 14,16.83L18.3,17.9C18.38,17.72 19.89,14.94 20,13.65Z"></path>
                                                </svg> <span> Join </span>
                                            </button>
                                        </span> 
                                        <span>
                                            <button type="button" class="btn button light small block">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M16.5,5C15,5 13.58,5.91 13,7.2V17.74C17.25,13.87 20,11.2 20,8.5C20,6.5 18.5,5 16.5,5M16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3Z">
                                                    </path>
                                                </svg> <span> Interested</span>
                                            </button>
                                        </span>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="uk-grid-margin">

                            <div class="sl_events_list">

                                <a href="#" class="event_cover">
                                    <div class="sl_events_list_media">
                                        <img src="assets/images/events/img-1.jpg" class="events-list-cover-img">
                                    </div>
                                </a>

                                <div class="sl_events_list_info">

                                    <p>Conferences </p>

                                    <h3> <a href="#">  Accept Who I Am </a> </h3>

                                    <span class="event-info-date">
                                        <b>01</b>
                                        <p>Jan</p>
                                    </span>

                                     
                                    <div class="sl_avatar-groups">
                                        <a href="#">

                                            <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                            <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                            <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">

                                        </a><a href="#">12 interested users  </a>

                                    </div>

                                    <div class="sl_events_list_info_btns">
                                        <span>
                                            <button type="button" class="btn button primary small block">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M10.74,11.72C11.21,12.95 11.16,14.23 9.75,14.74C6.85,15.81 6.2,13 6.16,12.86L10.74,11.72M5.71,10.91L10.03,9.84C9.84,8.79 10.13,7.74 10.13,6.5C10.13,4.82 8.8,1.53 6.68,2.06C4.26,2.66 3.91,5.35 4,6.65C4.12,7.95 5.64,10.73 5.71,10.91M17.85,19.85C17.82,20 17.16,22.8 14.26,21.74C12.86,21.22 12.8,19.94 13.27,18.71L17.85,19.85M20,13.65C20.1,12.35 19.76,9.65 17.33,9.05C15.22,8.5 13.89,11.81 13.89,13.5C13.89,14.73 14.17,15.78 14,16.83L18.3,17.9C18.38,17.72 19.89,14.94 20,13.65Z"></path>
                                                </svg> <span> Join </span>
                                            </button>
                                        </span> 
                                        <span>
                                            <button type="button" class="btn button light small block">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M16.5,5C15,5 13.58,5.91 13,7.2V17.74C17.25,13.87 20,11.2 20,8.5C20,6.5 18.5,5 16.5,5M16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3Z">
                                                    </path>
                                                </svg> <span> Interested</span>
                                            </button>
                                        </span>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="uk-grid-margin">

                            <div class="sl_events_list">

                                <a href="#" class="event_cover">
                                    <div class="sl_events_list_media">
                                        <img src="assets/images/events/img-4.jpg" class="events-list-cover-img">
                                    </div>
                                </a>

                                <div class="sl_events_list_info">

                                    <p> Uk brands </p>

                                    <h3> <a href="#"> The global creative </a> </h3>

                                    <span class="event-info-date">
                                        <b>01</b>
                                        <p>Jan</p>
                                    </span>

                                     
                                    <div class="sl_avatar-groups">
                                        <a href="#">

                                            <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                            <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                            <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">

                                        </a><a href="#">12 interested users  </a>

                                    </div>

                                    <div class="sl_events_list_info_btns">
                                        <span>
                                            <button type="button" class="btn button primary small block">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M10.74,11.72C11.21,12.95 11.16,14.23 9.75,14.74C6.85,15.81 6.2,13 6.16,12.86L10.74,11.72M5.71,10.91L10.03,9.84C9.84,8.79 10.13,7.74 10.13,6.5C10.13,4.82 8.8,1.53 6.68,2.06C4.26,2.66 3.91,5.35 4,6.65C4.12,7.95 5.64,10.73 5.71,10.91M17.85,19.85C17.82,20 17.16,22.8 14.26,21.74C12.86,21.22 12.8,19.94 13.27,18.71L17.85,19.85M20,13.65C20.1,12.35 19.76,9.65 17.33,9.05C15.22,8.5 13.89,11.81 13.89,13.5C13.89,14.73 14.17,15.78 14,16.83L18.3,17.9C18.38,17.72 19.89,14.94 20,13.65Z"></path>
                                                </svg> <span> Join </span>
                                            </button>
                                        </span> 
                                        <span>
                                            <button type="button" class="btn button light small block">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M16.5,5C15,5 13.58,5.91 13,7.2V17.74C17.25,13.87 20,11.2 20,8.5C20,6.5 18.5,5 16.5,5M16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3Z">
                                                    </path>
                                                </svg> <span> Interested</span>
                                            </button>
                                        </span>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="uk-grid-margin">

                            <div class="sl_events_list">

                                <a href="#" class="event_cover">
                                    <div class="sl_events_list_media">
                                        <img src="assets/images/events/img-3.jpg" class="events-list-cover-img">
                                    </div>
                                </a>

                                <div class="sl_events_list_info">

                                    <p> Upcomming </p>

                                    <h3> <a href="#">  Safety and Flight  </a> </h3>

                                    <span class="event-info-date">
                                        <b>01</b>
                                        <p>Jan</p>
                                    </span>

                                     
                                    <div class="sl_avatar-groups">
                                        <a href="#">

                                            <img src="assets/images/avatars/avatar-1.jpg" class="avatars" alt="picture">
                                            <img src="assets/images/avatars/avatar-2.jpg" class="avatars" alt="picture">
                                            <img src="assets/images/avatars/avatar-3.jpg" class="avatars" alt="picture">

                                        </a><a href="#">12 interested users  </a>

                                    </div>

                                    <div class="sl_events_list_info_btns">
                                        <span>
                                            <button type="button" class="btn button primary small block">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M10.74,11.72C11.21,12.95 11.16,14.23 9.75,14.74C6.85,15.81 6.2,13 6.16,12.86L10.74,11.72M5.71,10.91L10.03,9.84C9.84,8.79 10.13,7.74 10.13,6.5C10.13,4.82 8.8,1.53 6.68,2.06C4.26,2.66 3.91,5.35 4,6.65C4.12,7.95 5.64,10.73 5.71,10.91M17.85,19.85C17.82,20 17.16,22.8 14.26,21.74C12.86,21.22 12.8,19.94 13.27,18.71L17.85,19.85M20,13.65C20.1,12.35 19.76,9.65 17.33,9.05C15.22,8.5 13.89,11.81 13.89,13.5C13.89,14.73 14.17,15.78 14,16.83L18.3,17.9C18.38,17.72 19.89,14.94 20,13.65Z"></path>
                                                </svg> <span> Join </span>
                                            </button>
                                        </span> 
                                        <span>
                                            <button type="button" class="btn button light small block">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M16.5,5C15,5 13.58,5.91 13,7.2V17.74C17.25,13.87 20,11.2 20,8.5C20,6.5 18.5,5 16.5,5M16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3Z">
                                                    </path>
                                                </svg> <span> Interested</span>
                                            </button>
                                        </span>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="load-more">
                        <button class="btn button">Load more Events</button>
                    </div>


                    

                    
            </div>



@endsection