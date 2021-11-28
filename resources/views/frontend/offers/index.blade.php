@extends('frontend.layout.home')

@section('title' ,'Offers')

@section('content')


<div class="main_content_inner">


    <div uk-grid="" class="uk-grid">
        <div class="uk-width-2-3@m fead-area uk-first-column">
    
            <h2> Offers </h2>
    
                <div class="uk-child-width-1-2@m uk-child-width-1-2@s uk-grid-small uk-grid" uk-grid="">
                    <div class="uk-first-column">
                        <div class="sl_offer_list">
                            <div class="sl_offer_list_headimg">
                                <a href="#">
                                    <img src="assets/images/offers/img-1.png" alt="">
                                </a>
                                <div class="sl_offer_list_date">End date 09/08/20</div>
                            </div>
                            <div class="sl_offer_list_info">
                                <h2><a href="#">Free Shipping Creating Prototype App</a></h2>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="sl_offer_list">
                            <div class="sl_offer_list_headimg">
                                <a href="#">
                                    <img src="assets/images/product/8.jpg" alt="">
                                </a>
                                <div class="sl_offer_list_date">End date 09/08/20</div>
                            </div>
                            <div class="sl_offer_list_info">
                                <h2><a href="#">50% Off  It's time to get Fruit Basket Grapes </a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="uk-grid-margin uk-first-column">
                        <div class="sl_offer_list">
                            <div class="sl_offer_list_headimg">
                                <a href="#">
                                    <img src="assets/images/offers/img-2.png" alt="">
                                </a>
                                <div class="sl_offer_list_date">End date 09/08/20</div>
                            </div>
                            <div class="sl_offer_list_info">
                                <h2><a href="#">10% Off Cheesecake Eggless HidaMari Cooking</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="uk-grid-margin">
                        <div class="sl_offer_list">
                            <div class="sl_offer_list_headimg">
                                <a href="#">
                                    <img src="assets/images/product/1.jpg" alt="">
                                </a>
                                <div class="sl_offer_list_date">End date 09/08/20</div>
                            </div>
                            <div class="sl_offer_list_info">
                                <h2><a href="#">10% Off  Big Shot Boxing when you sell one item</a></h2>
                            </div>
                        </div>
                    </div>                                
                    <div class="uk-grid-margin uk-first-column">
                        <div class="sl_offer_list">
                            <div class="sl_offer_list_headimg">
                                <a href="#">
                                    <img src="assets/images/product/8.jpg" alt="">
                                </a>
                                <div class="sl_offer_list_date">End date 09/08/20</div>
                            </div>
                            <div class="sl_offer_list_info">
                                <h2><a href="#">50% Off  It's time to get Fruit Basket Grapes </a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="uk-grid-margin">
                        <div class="sl_offer_list">
                            <div class="sl_offer_list_headimg">
                                <a href="#">
                                    <img src="assets/images/offers/img-1.png" alt="">
                                </a>
                                <div class="sl_offer_list_date">End date 09/08/20</div>
                            </div>
                            <div class="sl_offer_list_info">
                                <h2><a href="#">Free Shipping Creating Prototype App</a></h2>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="load-more">
                    <button class="btn button">Load more Offers</button>
                </div>
    
        </div>
        <div class="uk-width-expand">
    
            <div class="sl_sidebar_sugs_title border-0"> Trending !
                <i class="icon-feather-rotate-cw"></i>
            </div>
            <div class="list-group-item sl_htag"> 
                <a href="#">
                    <span class="htag_top"> #hello</span>
                </a>
            </div>
            <div class="list-group-item sl_htag"> 
                <a href="#">
                    <span class="htag_top"> #test</span>
                </a>
            </div>
            <div class="list-group-item sl_htag"> 
                <a href="#">
                    <span class="htag_top"> #template</span>
                </a>
            </div>
            <div class="list-group-item sl_htag"> 
                <a href="#">
                    <span class="htag_top"> #social</span>
                </a>
            </div>
            <div class="list-group-item sl_htag"> 
                <a href="#">
                    <span class="htag_top"> #simplest</span>
                </a>
            </div>
            <div class="list-group-item sl_htag"> 
                <a href="#">
                    <span class="htag_top"> #new</span>
                </a>
            </div>
    
            <div class="sl_sidebar_sugs_title mt-4">Pro Members
                <i class="icon-feather-rotate-cw"></i>
            </div>
            <div class="uk-position-relative uk-slider" uk-slider="finite: true; autoplay:true">
    
                <div class="uk-slider-container pb-3">
    
                    <ul class="uk-slider-items uk-child-width-1-3@m uk-grid-small uk-grid sl_pro_users uk-transition" style="transform: translate3d(-296.063px, 0px, 0px); transition-property: transform; transition-duration: 374.056ms; transition-timing-function: ease;">
                        <li tabindex="-1" class="">
                            <a class="user" href="#">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                <span>Stella Johnson 1</span>
                            </a>
                        </li>
                        <li tabindex="-1" class="uk-active">
                            <a class="user" href="#">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                <span>Stella Johnson 2</span>
                            </a>
                        </li>
                        <li tabindex="-1" class="uk-active">
                            <a class="user" href="#">
                                <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                <span>Stella Johnson 3</span>
                            </a>
                        </li>
                        <li tabindex="-1" class="uk-active">
                            <a class="user" href="#">
                                <img src="assets/images/avatars/avatar-4.jpg" alt="">
                                <span>Stella Johnson 4</span>
                            </a>
                        </li>
                        <li tabindex="-1" class="uk-active">
                            <a class="user" href="#">
                                <img src="assets/images/avatars/avatar-5.jpg" alt="">
                                <span>Stella Johnson 5</span>
                            </a>
                        </li>
                    </ul>
    
                    <a class="uk-position-center-left uk-hidden-hover slidenav-prev sl_pro_users_prev" href="#" uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small uk-hidden-hover slidenav-next sl_pro_users_next uk-invisible" href="#" uk-slider-item="next"></a>
    
                </div>
            </div>
    
            <div class="sl_sidebar_sugs_title">People you may know
                <i class="icon-feather-rotate-cw"></i>
            </div>
            <div class="sl_sidebar_sugs">
                <div class="sl_sidebar_sugs_avatar">
                    <img src="assets/images/avatars/avatar-1.jpg" alt="">
                </div>
                <div class="sl_sidebar_sugs_text">
                    <a href="#" class="sl_user_link_name"> Jonathan Madano </a>
                </div>
                <div class="user-follow-button sl_sidebar_sugs_btns">
                    <button type="button" class="button small">
                        <span> Follow</span>
                    </button>
                </div>
            </div>
            <div class="sl_sidebar_sugs">
                <div class="sl_sidebar_sugs_avatar">
                    <img src="assets/images/avatars/avatar-6.jpg" alt="">
                </div>
                <div class="sl_sidebar_sugs_text">
                    <a href="#" class="sl_user_link_name"> Monera Khalifa </a>
                </div>
                <div class="user-follow-button sl_sidebar_sugs_btns">
                    <button type="button" class="button small">
                        <span> Accept</span>
                    </button>
                </div>
            </div>
            <div class="sl_sidebar_sugs">
                <div class="sl_sidebar_sugs_avatar">
                    <img src="assets/images/avatars/avatar-3.jpg" alt="">
                </div>
                <div class="sl_sidebar_sugs_text">
                    <a href="#" class="sl_user_link_name"> Adrian Mohani </a>
                </div>
                <div class="user-follow-button sl_sidebar_sugs_btns">
                    <button type="button" class="button small">
                        <span> Follow</span>
                    </button>
                </div>
            </div>
            <div class="sl_sidebar_sugs">
                <div class="sl_sidebar_sugs_avatar">
                    <img src="assets/images/avatars/avatar-2.jpg" alt="">
                </div>
                <div class="sl_sidebar_sugs_text">
                    <a href="#" class="sl_user_link_name"> Stella Johnson </a>
                </div>
                <div class="user-follow-button sl_sidebar_sugs_btns">
                    <button type="button" class="button small">
                        <span> Follow</span>
                    </button>
                </div>
            </div>
    
            <div class="sl_sidebar_sugs_title mt-4">Pages you may like
                <i class="icon-feather-rotate-cw"></i>
            </div>
            <div class="sl_sidebar_sugs">
                <div class="sl_sidebar_sugs_avatar">
                    <img src="assets/images/brand/brand-avatar-3.png" alt="">
                </div>
                <div class="sl_sidebar_sugs_text">
                    <a href="#" class="sl_user_link_name"> Suranna Brand </a>
                    <span> Education</span>
                </div>
                <div class="user-follow-button sl_sidebar_sugs_btns">
                    <button type="button" class="button small">
                        <span> Like </span>
                    </button>
                </div>
            </div>
            <div class="sl_sidebar_sugs">
                <div class="sl_sidebar_sugs_avatar">
                    <img src="assets/images/brand/brand-avatar-4.png" alt="">
                </div>
                <div class="sl_sidebar_sugs_text">
                    <a href="#" class="sl_user_link_name"> Uk Brands </a>
                    <span> Shopping</span>
                </div>
                <div class="user-follow-button sl_sidebar_sugs_btns">
                    <button type="button" class="button small">
                        <span> Like </span>
                    </button>
                </div>
            </div>
    
            <div class="sl_sidebar_sugs_title mt-4">Suggested groups
                <i class="icon-feather-rotate-cw"></i>
            </div>
            <div class="sl_sidebar_sugs">
                <div class="sl_sidebar_sugs_avatar">
                    <img src="assets/images/group/group-2.jpg" alt="">
                </div>
                <div class="sl_sidebar_sugs_text">
                    <a href="#" class="sl_user_link_name"> Coffee Addicts </a>
                    <span> 6 Members</span>
                </div>
                <div class="user-follow-button sl_sidebar_sugs_btns">
                    <button type="button" class="button small">
                        <span> Join </span>
                    </button>
                </div>
            </div>
            <div class="sl_sidebar_sugs">
                <div class="sl_sidebar_sugs_avatar">
                    <img src="assets/images/group/group-1.jpg" alt="">
                </div>
                <div class="sl_sidebar_sugs_text">
                    <a href="#" class="sl_user_link_name"> Architecture </a>
                    <span> 12 Members</span>
                </div>
                <div class="user-follow-button sl_sidebar_sugs_btns">
                    <button type="button" class="button small">
                        <span> Join </span>
                    </button>
                </div>
            </div>
            <div class="sl_sidebar_sugs">
                <div class="sl_sidebar_sugs_avatar">
                    <img src="assets/images/group/group-3.jpg" alt="">
                </div>
                <div class="sl_sidebar_sugs_text">
                    <a href="#" class="sl_user_link_name"> Mountain Riders </a>
                    <span> 32 Members</span>
                </div>
                <div class="user-follow-button sl_sidebar_sugs_btns">
                    <button type="button" class="button small">
                        <span> Join </span>
                    </button>
                </div>
            </div>
            <div class="sl_sidebar_sugs">
                <div class="sl_sidebar_sugs_avatar">
                    <img src="assets/images/group/group-4.jpg" alt="">
                </div>
                <div class="sl_sidebar_sugs_text">
                    <a href="#" class="sl_user_link_name"> Graphic Design </a>
                    <span> 25 Members</span>
                </div>
                <div class="user-follow-button sl_sidebar_sugs_btns">
                    <button type="button" class="button small">
                        <span> Join </span>
                    </button>
                </div>
            </div>
    
            <div class="sl_sidebar_sugs_title mt-4">Online Users 1
            </div>
    
            <div class="sl_sidebar_sugs_title mt-1"> Invite Your Friends
                <i class="icon-feather-rotate-cw"></i>
            </div>
            <form action="#" class="invite-user-form">
                <div class="sl_form_fields invite-user-combine">
                    <input type="text" name="email" placeholder="E-mail" class="form-control">
                    <button class="button small" title="Send Invitation"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M2,21L23,12L2,3V10L17,12L2,14V21Z"></path>
                        </svg></button>
                </div>
            </form>
    
    
            <div class="sl_sidebar_sugs_title mt-4">Promoted Pages
                <i class="icon-feather-rotate-cw"></i>
            </div>
            <div class="sl_sidebar_sugs">
                <div class="sl_sidebar_sugs_avatar">
                    <img src="assets/images/brand/brand-avatar-3.png" alt="">
                </div>
                <div class="sl_sidebar_sugs_text">
                    <a href="#" class="sl_user_link_name"> Suranna Brand </a>
                    <span> Education</span>
                </div>
                <div class="user-follow-button sl_sidebar_sugs_btns">
                    <button type="button" class="button small">
                        <span> Like </span>
                    </button>
                </div>
            </div>
            <div class="sl_sidebar_sugs">
                <div class="sl_sidebar_sugs_avatar">
                    <img src="assets/images/brand/brand-avatar-4.png" alt="">
                </div>
                <div class="sl_sidebar_sugs_text">
                    <a href="#" class="sl_user_link_name"> Uk Brands </a>
                    <span> Shopping</span>
                </div>
                <div class="user-follow-button sl_sidebar_sugs_btns">
                    <button type="button" class="button small">
                        <span> Like </span>
                    </button>
                </div>
            </div>
            <div class="sl_sidebar_sugs">
                <div class="sl_sidebar_sugs_avatar">
                    <img src="assets/images/brand/brand-avatar-1.png" alt="">
                </div>
                <div class="sl_sidebar_sugs_text">
                    <a href="#" class="sl_user_link_name"> Reveal Store </a>
                    <span> Shopping</span>
                </div>
                <div class="user-follow-button sl_sidebar_sugs_btns">
                    <button type="button" class="button small">
                        <span> Like </span>
                    </button>
                </div>
            </div>
            <div class="sl_sidebar_sugs">
                <div class="sl_sidebar_sugs_avatar">
                    <img src="assets/images/brand/brand-avatar-2.png" alt="">
                </div>
                <div class="sl_sidebar_sugs_text">
                    <a href="#" class="sl_user_link_name"> Phase Designers </a>
                    <span> Design</span>
                </div>
                <div class="user-follow-button sl_sidebar_sugs_btns">
                    <button type="button" class="button small">
                        <span> Like </span>
                    </button>
                </div>
            </div>
    
    
    
    
    
            <!-- Footer menus-->
            <div class="footer-wrapper-sidebar mt-4">
                <div class="footer-powered">
                    <p> © 2020 Simplest.net</p>
                </div>
    
                <hr>
    
                <ul class="list-inline">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#"> Privecy</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Developers</a></li>
                    <li>
                        <div class="dropdown dropup sun_foot_drop_menu">
                            <a href="#" class="dropdown-toggle" aria-expanded="false">
                                More <span class="caret"></span>
                            </a>
                            <div uk-dropdown="pos: bottom-left ; mode:hover " class="uk-dropdown uk-dropdown-bottom-right" style="left: 745px; top: 87px;">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li><a href="#"> View as guast </a></li>
                                    <li><a href="#"> Bloc this person </a></li>
                                    <li><a href="#"> Report abuse</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
    
    
    
    
    
    
        </div>
    </div>

    

</div>


@endsection