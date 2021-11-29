@extends('frontend.layout.home')

@section('title' ,'Popular Posts')

@section('content')

<div class="main_content_inner">

                <div id="spinneroverlay"> </div>


                <div class="uk-grid-large uk-grid" uk-grid="">
                    <div class="uk-width-2-3@m fead-area uk-first-column">

                        <h2> Popular Posts &amp; Comments  </h2>

                            <div class="post">
                                <div class="post-heading">
                                    <div class="post-avature">
                                        <img src="assets/images/avatars/avatar-6.jpg" alt="">
                                    </div>
                                    <div class="post-title">
                                        <h4> Mariah Ali </h4>
                                        <p> 5 <span> hrs</span> <i class="uil-users-alt"></i> </p>
                                    </div>
                                    <div class="post-btn-action">
                                        <span class="icon-more uil-ellipsis-h" aria-expanded="false"></span>
                                        <div class="mt-0 p-2 uk-dropdown" uk-dropdown="pos: bottom-right;mode:hover ">
                                            <ul class="uk-nav uk-dropdown-nav">
                                                <li><a href="#"> <i class="uil-share-alt mr-1"></i> Share</a> </li>
                                                <li><a href="#"> <i class="uil-edit-alt mr-1"></i> Edit Post </a></li>
                                                <li><a href="#"> <i class="uil-comment-slash mr-1"></i> Disable comments
                                                    </a></li>
                                                <li><a href="#"> <i class="uil-favorite mr-1"></i> Add favorites </a></li>
                                                <li><a href="#" class="text-danger"> <i class="uil-trash-alt mr-1"></i>
                                                        Delete </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-description">
                                    <div class="fullsizeimg">
                                        <img src="assets/images/post/img-1.jpg" alt="">
                                    </div>
    
                                    <div class="post-state-details">
                                        <div>
                                            <img src="assets/images/icons/reactions_like.png" alt="">
                                            <img src="assets/images/icons/reactions_love.png" alt="">
                                            <p> 13 </p>
                                        </div>
                                        <p> 24 Comments</p>
                                    </div>
    
                                </div>
    
                                <div class="post-state">
                                    <div class="post-state-btns"> <i class="uil-thumbs-up"></i> 126<span> Liked </span>
                                    </div>
                                    <div class="post-state-btns"> <i class="uil-heart"></i> 18 <span> Coments</span>
                                    </div>
                                    <div class="post-state-btns"> <i class="uil-share-alt"></i> 193 <span> Shared </span>
                                    </div>
                                    <div class="post-state-btns"> <i class="uil-bookmark"></i> 13 <span> Saved </span>
                                    </div>
                                </div>
    
                                <!-- post comments -->
                                <div class="post-comments">
                                    <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>
                                    <div class="post-comments-single">
                                        <div class="post-comment-avatar">
                                            <img src="assets/images/avatars/avatar-5.jpg" alt="">
                                        </div>
                                        <div class="post-comment-text">
                                            <div class="post-comment-text-inner">
                                                <h6> Alex Dolgove</h6>
                                                <p> Ut wisi enim ad minim laoreet dolore magna aliquam erat </p>
                                            </div>
                                            <div class="uk-text-small">
                                                <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love </a>
                                                <a href="#" class=" mr-1"> Replay </a>
                                                <span> 1d</span>
                                            </div>
                                        </div>
                                        <a href="#" class="post-comment-opt"></a>
                                    </div>
                                    <div class="post-comments-single">
                                        <div class="post-comment-avatar">
                                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="post-comment-text">
                                            <div class="post-comment-text-inner">
                                                <h6>Stella Johnson</h6>
                                                <p> Ut wisi enim ad minim laoreet dolore <strong> David !</strong> </p>
                                            </div>
                                            <div class="uk-text-small">
                                                <a href="#" class="text-primary mr-1"> <i class="uil-thumbs-up"></i> Like
                                                </a>
                                                <a href="#" class=" mr-1"> Replay </a>
                                                <span> 2d</span>
                                            </div>
                                        </div>
                                        <a href="#" class="post-comment-opt"></a>
                                    </div>
                                    <div class="post-comments-single">
                                        <div class="post-comment-avatar">
                                            <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                        </div>
                                        <div class="post-comment-text">
                                            <div class="post-comment-text-inner">
                                                <h6> Jonathan Madano </h6>
                                                <p> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                    erat
                                                    volutpat.<strong> David !</strong> </p>
                                            </div>
                                            <div class="uk-text-small">
                                                <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love </a>
                                                <a href="#" class=" mr-1"> Replay </a>
                                                <span> 3d</span>
                                            </div>
                                        </div>
                                        <a href="#" class="post-comment-opt"></a>
                                    </div>
    
    
                                    <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>
    
                                    <div class="post-add-comment">
                                        <div class="post-add-comment-avature">
                                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="post-add-comment-text-area">
                                            <input type="text" placeholder="Write your comment...">
                                            <div class="icons">
                                                <span class="uil-link-alt"></span>
                                                <span class="uil-grin"></span>
                                                <span class="uil-image"></span>
                                            </div>
                                        </div>
    
                                    </div>
    
                                </div>
    
    
    
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
        
                                <ul class="uk-slider-items uk-child-width-1-3@m uk-grid-small uk-grid sl_pro_users" style="transform: translate3d(-280.775px, 0px, 0px);">
                                    <li tabindex="-1" class="">
                                        <a class="user" href="#">
                                            <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                            <span>Stella Johnson 1</span>
                                        </a>
                                    </li>
                                    <li tabindex="-1" class="">
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
                                <a href="#" class="sl_user_link_name">  Jonathan Madano </a>
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
                                <a href="#" class="sl_user_link_name">  Monera Khalifa </a>
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
                                <a href="#" class="sl_user_link_name">  Adrian Mohani </a>
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
                                <a href="#" class="sl_user_link_name">  Stella Johnson </a>
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
                                <a href="#" class="sl_user_link_name">  Suranna Brand </a>
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
                                <a href="#" class="sl_user_link_name">  Uk Brands  </a>
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
                                <a href="#" class="sl_user_link_name">  Coffee Addicts </a>
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
                                <a href="#" class="sl_user_link_name">  Architecture  </a>
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
                                <a href="#" class="sl_user_link_name">   Mountain Riders   </a>
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
                                <a href="#" class="sl_user_link_name">   Graphic Design   </a>
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
                                <button class="button small" title="Send Invitation"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M2,21L23,12L2,3V10L17,12L2,14V21Z"></path></svg></button>
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
                                <a href="#" class="sl_user_link_name">  Suranna Brand </a>
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
                                <a href="#" class="sl_user_link_name">  Uk Brands  </a>
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
                                <a href="#" class="sl_user_link_name">  Phase Designers  </a>
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
                                <p>  © 2020 Simplest.net</p>
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