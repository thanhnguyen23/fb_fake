
@extends('frontend.layout.home')

@section('title' ,'User Name')

@section('content')


<div class="main_content_inner">

    <div id="spinneroverlay"> </div>


    <div class="profile">
        <div class="profile-cover">

            <!-- profile cover -->
            <img src="assets/images/avatars/profile-cover.jpg" alt="">

            <a href="#"> <i class="uil-camera"></i> Edit </a>

        </div>

        <div class="profile-details">
            <div class="profile-image">
                <img src="assets/images/avatars/avatar-2.jpg" alt="">
                <a href="#"> </a>
            </div>
            <div class="profile-details-info">
                <h1> Josephine Williams </h1>
                <p> Family , Food , Fashion , Fourever <a href="#">Edit </a></p>
            </div>

        </div>


        <div class="nav-profile uk-sticky" uk-sticky="media : @s">
            <div class="py-md-2 uk-flex-last">
                <a href="#" class="button primary mr-2"> <i class="uil-plus"></i> Add your story</a>
                <a href="#" class="button light button-icon mr-2"> <i class="uil-list-ul"> </i> </a>
                <a href="#" class="button light button-icon mr-lg-3" aria-expanded="false"> <i class="uil-ellipsis-h"> </i> </a>
                <div uk-dropdown="pos: bottom-left ; mode:hover" class="display-hidden uk-dropdown">
                    <ul class="uk-nav uk-dropdown-nav">
                        <li><a href="#"> View as guast </a></li>
                        <li><a href="#"> Bloc this person </a></li>
                        <li><a href="#"> Report abuse</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <nav class="responsive-tab ml-lg-3">
                    <ul>
                        <li class="uk-active"><a class="active" href="#">Timeline</a></li>
                        <li><a href="timeline-friends.html">About</a></li>
                        <li><a href="timeline-friends.html">Friend</a></li>
                        <li><a href="timeline-friends.html">Photoes</a></li>
                        <li><a href="timeline-friends.html">Videos</a></li>
                    </ul>
                </nav>
                <div class="uk-visible@s">
                    <a href="#" class="nav-btn-more" aria-expanded="false"> More</a>
                    <div uk-dropdown="pos: bottom-left" class="display-hidden uk-dropdown">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li><a href="#">Moves</a></li>
                            <li><a href="#">Likes</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Groups</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Gallery</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><div class="uk-sticky-placeholder" hidden="" style="height: 62px; margin: 0px;"></div>

    </div>


    <div class="section-small">

        <div uk-grid="" class="uk-grid">

            <div class="uk-width-2-3@m fead-area uk-first-column">

                <div class="post-newer mt-lg-2">

                    <div class="post-new" uk-toggle="target: body ; cls: post-focus">
                        <div class="post-new-media">
                            <div class="post-new-media-user">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            </div>
                            <div class="post-new-media-input">
                                <input type="text" class="uk-input" placeholder="What's Your Mind ? Hamse!">
                            </div>
                        </div>
                        <hr>
                        <div class="post-new-type">

                            <a href="#">
                                <img src="assets/images/icons/live.png" alt="">
                                Go Live
                            </a>

                            <a href="#">
                                <img src="assets/images/icons/photo.png" alt="">
                                Photo/Video
                            </a>

                            <a href="#" class="uk-visible@s">
                                <img src="assets/images/icons/tag-friend.png" alt="">
                                Tag Friend
                            </a>

                            <a href="#"><img src="assets/images/icons/reactions_wow.png" alt="">
                                Fealing
                            </a>

                        </div>
                    </div>

                    <div class="post-pop">

                        <div class="post-new-overyly" uk-toggle="target: body ; cls: post-focus"></div>

                        <div class="post-new uk-animation-slide-top-small">


                            <div class="post-new-header">

                                <h4> Create new post</h4>

                                <!-- close button-->
                                <span class="post-new-btn-close" uk-toggle="target: body ; cls: post-focus" uk-tooltip="title:Close; pos: left " title="" aria-expanded="false"></span>

                            </div>

                            <div class="post-new-media">
                                <div class="post-new-media-user">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                </div>
                                <div class="post-new-media-input">
                                    <input type="text" class="uk-input" placeholder="What's Your Mind ? Dennis!">
                                </div>
                            </div>
                            <div class="post-new-tab-nav">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="#4db3f6" d="M8.5,13.5L11,16.5L14.5,12L19,18H5M21,19V5C21,3.89 20.1,3 19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19Z">
                                        </path>
                                    </svg>
                                    <span> Upload Image</span>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                                        <path fill="#71a257" d="M450.6 153.6c-3.3 0-6.5.9-9.3 2.7l-86.5 54.6c-2.5 1.6-4 4.3-4 7.2v76c0 2.9 1.5 5.6 4 7.2l86.5 54.6c2.8 1.7 6 2.7 9.3 2.7h20.8c4.8 0 8.6-3.8 8.6-8.5v-188c0-4.7-3.9-8.5-8.6-8.5h-20.8zM273.5 384h-190C55.2 384 32 360.8 32 332.6V179.4c0-28.3 23.2-51.4 51.4-51.4h190c28.3 0 51.4 23.2 51.4 51.4v153.1c.1 28.3-23 51.5-51.3 51.5z">
                                        </path>
                                    </svg>
                                    <span> Upload Videos</span>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24">
                                        <path fill="#f3c038" d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10c5.514,0,10-4.486,10-10S17.514,2,12,2z M8.5,8C9.328,8,10,8.896,10,10	s-0.672,2-1.5,2S7,11.104,7,10S7.672,8,8.5,8z M12,18c-1.905,0-3.654-0.874-4.8-2.399l1.599-1.201C9.563,15.417,10.73,16,12,16	c1.27,0,2.436-0.583,3.2-1.601l1.6,1.201C15.653,17.126,13.904,18,12,18z M15.5,12c-0.828,0-1.5-0.896-1.5-2s0.672-2,1.5-2	S17,8.896,17,10S16.328,12,15.5,12z">
                                        </path>
                                    </svg>
                                    <span> Feeling </span>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                        <path fill="#673ab7" d="M17.5,12A1.5,1.5 0 0,1 16,10.5A1.5,1.5 0 0,1 17.5,9A1.5,1.5 0 0,1 19,10.5A1.5,1.5 0 0,1 17.5,12M14.5,8A1.5,1.5 0 0,1 13,6.5A1.5,1.5 0 0,1 14.5,5A1.5,1.5 0 0,1 16,6.5A1.5,1.5 0 0,1 14.5,8M9.5,8A1.5,1.5 0 0,1 8,6.5A1.5,1.5 0 0,1 9.5,5A1.5,1.5 0 0,1 11,6.5A1.5,1.5 0 0,1 9.5,8M6.5,12A1.5,1.5 0 0,1 5,10.5A1.5,1.5 0 0,1 6.5,9A1.5,1.5 0 0,1 8,10.5A1.5,1.5 0 0,1 6.5,12M12,3A9,9 0 0,0 3,12A9,9 0 0,0 12,21A1.5,1.5 0 0,0 13.5,19.5C13.5,19.11 13.35,18.76 13.11,18.5C12.88,18.23 12.73,17.88 12.73,17.5A1.5,1.5 0 0,1 14.23,16H16A5,5 0 0,0 21,11C21,6.58 16.97,3 12,3Z">
                                        </path>
                                    </svg>
                                    <span> Post Color </span>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24">
                                        <path fill="#ff3a55" d="M12,2A3,3 0 0,1 15,5V11A3,3 0 0,1 12,14A3,3 0 0,1 9,11V5A3,3 0 0,1 12,2M19,11C19,14.53 16.39,17.44 13,17.93V21H11V17.93C7.61,17.44 5,14.53 5,11H7A5,5 0 0,0 12,16A5,5 0 0,0 17,11H19Z">
                                        </path>
                                    </svg>
                                    <span> Recording </span>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 512 512">
                                        <path fill="#6bcfef" d="M312 155h91c2.8 0 5-2.2 5-5 0-8.9-3.9-17.3-10.7-22.9L321 63.5c-5.8-4.8-13-7.4-20.6-7.4-4.1 0-7.4 3.3-7.4 7.4V136c0 10.5 8.5 19 19 19z">
                                        </path>
                                        <path fill="#6bcfef" d="M267 136V56H136c-17.6 0-32 14.4-32 32v336c0 17.6 14.4 32 32 32h240c17.6 0 32-14.4 32-32V181h-96c-24.8 0-45-20.2-45-45z">
                                        </path>
                                    </svg>
                                    <span> File </span>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                                        <path fill="#f07729" d="M3.572,5.572l4.506,10.813C8.233,16.757,8.597,17,9.001,17H18c0.417,0,0.79-0.259,0.937-0.648l3-8 c0.115-0.308,0.072-0.651-0.114-0.921C21.635,7.161,21.328,7,21,7H6.333L4.923,3.615C4.768,3.243,4.404,3,4,3H2v2h1L3.572,5.572z">
                                        </path>
                                        <circle fill="#f07729" cx="10.5" cy="20.5" r="1.5"></circle>
                                        <circle fill="#f07729" cx="16.438" cy="20.5" r="1.5"></circle>
                                    </svg>
                                    <span> Product </span>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24">
                                        <path fill="#31a38c" d="M17,17H15V13H17M13,17H11V7H13M9,17H7V10H9M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3Z">
                                        </path>
                                    </svg>
                                    <span> Create Poll </span>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24">
                                        <path fill="#f35369" d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z">
                                        </path>
                                    </svg>
                                    <span> Location </span>
                                </a>

                            </div>
                            <div class="uk-flex uk-flex-between">

                                <button class="button outline-light circle" type="button" style="
                                border-color: #e6e6e6;  border-width: 1px;  " aria-expanded="false">Public</button>
                                <div uk-dropdown="" class="uk-dropdown">
                                    <ul class="uk-nav uk-dropdown-nav">
                                        <li class="uk-active"><a href="#">Only me</a></li>
                                        <li><a href="#">Every one</a></li>
                                        <li><a href="#"> People I Follow </a></li>
                                        <li><a href="#">I People Follow Me</a></li>
                                    </ul>
                                </div>

                                <a href="#" class="button primary px-6"> Share </a>
                            </div>
                        </div>

                    </div>

                </div>

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
                            <div class="mt-0 p-2 uk-dropdown" uk-dropdown="pos: top-right;mode:hover ">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li><a href="#"> <i class="uil-share-alt mr-1"></i> Share</a> </li>
                                    <li><a href="#"> <i class="uil-edit-alt mr-1"></i> Edit Post </a></li>
                                    <li><a href="#"> <i class="uil-comment-slash mr-1"></i> Disable comments
                                        </a></li>
                                    <li><a href="#"> <i class="uil-favorite mr-1"></i> Add favorites </a>
                                    </li>
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
                        <div class="post-state-btns"> <i class="uil-share-alt"></i> 193 <span> Shared
                            </span>
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
                                    <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                                    </a>
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
                                    <a href="#" class="text-primary mr-1"> <i class="uil-thumbs-up"></i>
                                        Like
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
                                    <p> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                        aliquam
                                        erat
                                        volutpat.<strong> David !</strong> </p>
                                </div>
                                <div class="uk-text-small">
                                    <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                                    </a>
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

                <div class="post">
                    <div class="post-heading">
                        <div class="post-avature">
                            <img src="assets/images/avatars/avatar-3.jpg" alt="">
                        </div>
                        <div class="post-title">
                            <h4> Erica Jones </h4>
                            <p> 5 <span> hrs</span> <i class="uil-users-alt"></i> </p>
                        </div>
                        <div class="post-btn-action">
                            <span class="icon-more uil-ellipsis-h" aria-expanded="false"></span>
                            <div class="mt-0 p-2 uk-dropdown" uk-dropdown="pos: top-right;mode:hover ">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li><a href="#"> <i class="uil-share-alt mr-1"></i> Share</a> </li>
                                    <li><a href="#"> <i class="uil-edit-alt mr-1"></i> Edit Post </a></li>
                                    <li><a href="#"> <i class="uil-comment-slash mr-1"></i> Disable comments
                                        </a></li>
                                    <li><a href="#"> <i class="uil-favorite mr-1"></i> Add favorites </a>
                                    </li>
                                    <li><a href="#" class="text-danger"> <i class="uil-trash-alt mr-1"></i>
                                            Delete </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="post-description">
                        <div class="uk-grid-small uk-grid" uk-grid="">
                            <div class="uk-width-1-1@m uk-first-column">
                                <img src="assets/images/post/img-4.jpg" class="rounded" alt="">
                            </div>
                            <div class="uk-width-1-2@m uk-width-1-2 uk-grid-margin uk-first-column">
                                <img src="assets/images/post/img-2.jpg" class="rounded" alt="">
                            </div>
                            <div class="uk-width-1-2@m uk-width-1-2 uk-position-relative uk-grid-margin">
                                <img src="assets/images/post/img-3.jpg" class="rounded" alt="">
                                <div class="uk-position-center uk-light">
                                    <a href="#">
                                        <h3> + 15 more </h3>
                                    </a></div>
                            </div>
                        </div>

                        <div class="post-state-details">
                            <div>
                                <img src="assets/images/icons/reactions_like.png" alt="">
                                <img src="assets/images/icons/reactions_love.png" alt="">
                                <p> 13 </p>
                            </div>
                            <p> <span class="mr-2"> <i class="uil-eye"></i> Veiws </span> 212 Comments </p>
                        </div>

                    </div>

                    <div class="post-state">
                        <div class="post-state-btns"> <i class="uil-thumbs-up"></i> 126<span> Liked </span>
                        </div>
                        <div class="post-state-btns"> <i class="uil-heart"></i> 18 <span> Coments</span>
                        </div>
                        <div class="post-state-btns"> <i class="uil-share-alt"></i> 193 <span> Shared
                            </span>
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
                                    <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                                    </a>
                                    <a href="#" class=" mr-1"> Replay </a>
                                    <span> 3d</span>
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
                                    <a href="#" class="text-primary mr-1"> <i class="uil-thumbs-up"></i>
                                        Like
                                    </a>
                                    <a href="#" class=" mr-1"> Replay </a>
                                    <span> 3d</span>
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
                                    <p> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                        aliquam
                                        erat
                                        volutpat.<strong> David !</strong> </p>
                                </div>
                                <div class="uk-text-small">
                                    <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                                    </a>
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

                <div class="post">
                    <div class="post-heading">
                        <div class="post-avature">
                            <img src="assets/images/avatars/avatar-4.jpg" alt="">
                        </div>
                        <div class="post-title">
                            <h4> Stella Johnson </h4>
                            <p> 5 <span> hrs</span> <i class="uil-users-alt"></i> </p>
                        </div>
                        <div class="post-btn-action">
                            <span class="icon-more uil-ellipsis-h" aria-expanded="false"></span>
                            <div class="mt-0 p-2 uk-dropdown" uk-dropdown="pos: top-right;mode:hover ">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li><a href="#"> <i class="uil-share-alt mr-1"></i> Share</a> </li>
                                    <li><a href="#"> <i class="uil-edit-alt mr-1"></i> Edit Post </a></li>
                                    <li><a href="#"> <i class="uil-comment-slash mr-1"></i> Disable comments
                                        </a></li>
                                    <li><a href="#"> <i class="uil-favorite mr-1"></i> Add favorites </a>
                                    </li>
                                    <li><a href="#" class="text-danger"> <i class="uil-trash-alt mr-1"></i>
                                            Delete </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="post-description">

                        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            Ut wisi enim ad minim laoreet dolore magna aliquam erat volutpat</p>
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
                        <div class="post-state-btns"> <i class="uil-share-alt"></i> 193 <span> Shared
                            </span>
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
                                    <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                                    </a>
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
                                    <a href="#" class="text-primary mr-1"> <i class="uil-thumbs-up"></i>
                                        Like
                                    </a>
                                    <a href="#" class=" mr-1"> Replay </a>
                                    <span> 2d</span>
                                </div>
                            </div>
                            <a href="#" class="post-comment-opt"></a>
                        </div>

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

                <div class="load-more">
                    <button class="btn button">Load more post</button>
                </div>

            </div>

            <!-- sidebar -->
            <div class="uk-width-expand ml-lg-2">

                <div class="sl_user-widget">
                    <div class="sl_user-widget-wrap-header pb-0">
                        <div class="sl_user-widget-wrap-header-left">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M13,9H11V7H13M13,17H11V11H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z">
                                    </path>
                                </svg></span>
                            <h4> Info </h4>
                        </div>
                    </div>
                    <ul class="sl_right_user_info">
                
                        <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z">
                                </path>
                            </svg>
                            <span class="text-success"> Online </span>
                        </li>
                        <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1zm-1-2V4H5v16h14zM7 6h4v4H7V6zm0 6h10v2H7v-2zm0 4h10v2H7v-2zm6-9h4v2h-4V7z">
                                </path>
                            </svg>
                            <span id="user_post_count">27</span> posts </li>
                
                        <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M3.9,12C3.9,10.29 5.29,8.9 7,8.9H11V7H7A5,5 0 0,0 2,12A5,5 0 0,0 7,17H11V15.1H7C5.29,15.1 3.9,13.71 3.9,12M8,13H16V11H8V13M17,7H13V8.9H17C18.71,8.9 20.1,10.29 20.1,12C20.1,13.71 18.71,15.1 17,15.1H13V17H17A5,5 0 0,0 22,12A5,5 0 0,0 17,7Z">
                                </path>
                            </svg>
                            <a href="#" target="_blank">https://mydomain.com</a>
                        </li>
                
                        <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M9,11.75A1.25,1.25 0 0,0 7.75,13A1.25,1.25 0 0,0 9,14.25A1.25,1.25 0 0,0 10.25,13A1.25,1.25 0 0,0 9,11.75M15,11.75A1.25,1.25 0 0,0 13.75,13A1.25,1.25 0 0,0 15,14.25A1.25,1.25 0 0,0 16.25,13A1.25,1.25 0 0,0 15,11.75M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,20C7.59,20 4,16.41 4,12C4,11.71 4,11.42 4.05,11.14C6.41,10.09 8.28,8.16 9.26,5.77C11.07,8.33 14.05,10 17.42,10C18.2,10 18.95,9.91 19.67,9.74C19.88,10.45 20,11.21 20,12C20,16.41 16.41,20 12,20Z">
                                </path>
                            </svg>
                            Male </li>
                
                        <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z">
                                </path>
                            </svg>
                            Single </li>
                        <hr class="my-2">
                        
                        <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M10,2H14A2,2 0 0,1 16,4V6H20A2,2 0 0,1 22,8V19A2,2 0 0,1 20,21H4C2.89,21 2,20.1 2,19V8C2,6.89 2.89,6 4,6H8V4C8,2.89 8.89,2 10,2M14,6V4H10V6H14Z">
                                </path>
                            </svg>
                            <span>Working at Envanto Market</span>
                        </li>
                        <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12,3L1,9L12,15L21,10.09V17H23V9M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18Z"></path>
                            </svg>
                            <span>Studied at Albahrain schools</span>
                        </li>
                
                        <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M17.9,17.39C17.64,16.59 16.89,16 16,16H15V13A1,1 0 0,0 14,12H8V10H10A1,1 0 0,0 11,9V7H13A2,2 0 0,0 15,5V4.59C17.93,5.77 20,8.64 20,12C20,14.08 19.2,15.97 17.9,17.39M11,19.93C7.05,19.44 4,16.08 4,12C4,11.38 4.08,10.78 4.21,10.21L9,15V16A2,2 0 0,0 11,18M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z">
                                </path>
                            </svg>
                            Living in Turkey </li>
                        <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z">
                                </path>
                            </svg>
                            <span>Located in Turkey</span>
                            <iframe width="100%" class="user-location-frame" frameborder="0" style="border:0;margin-top: 10px;" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBOfpaMO_tMMsuvS2T4zx4llbtsFqMuT9Y&amp;q=Turkey&amp;language=en"></iframe>
                        </li>
                
                    </ul>
                </div>

                <!-- Albums -->
                <div class="sl_user-widget">
                    <div class="sl_user-widget-wrap-header">
                        <div class="sl_user-widget-wrap-header-left">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M22,16V4A2,2 0 0,0 20,2H8A2,2 0 0,0 6,4V16A2,2 0 0,0 8,18H20A2,2 0 0,0 22,16M11,12L13.03,14.71L16,11L20,16H8M2,6V20A2,2 0 0,0 4,22H18V20H4V6">
                                    </path>
                                </svg></span> 
                                <a href="#">Albums</a>&nbsp;<div style="font-weight: 600">12</div>
                        </div>
                        <div class="sl_user-widget-wrap-right"> <a href="#" class="see-all"> See all</a></div>
                    </div>
                
                    <ul class="sidebar-user-data-container">
                        <div class="sidebar-user-data">
                            <a href="#" title="" uk-tooltip="My album 1" aria-expanded="false">
                                <div class="sidebar-listed-user-avatar">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="sidebar-user-data">
                            <a href="#" title="" uk-tooltip="My album 2" aria-expanded="false">
                                <div class="sidebar-listed-user-avatar">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="sidebar-user-data">
                            <a href="#" title="" uk-tooltip="My album 3" aria-expanded="false">
                                <div class="sidebar-listed-user-avatar">
                                    <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="sidebar-user-data">
                            <a href="#" title="" uk-tooltip="My album 4" aria-expanded="false">
                                <div class="sidebar-listed-user-avatar">
                                    <img src="assets/images/avatars/avatar-4.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="sidebar-user-data">
                            <a href="#" title="" uk-tooltip="My album 5" aria-expanded="false">
                                <div class="sidebar-listed-user-avatar">
                                    <img src="assets/images/avatars/avatar-5.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="sidebar-user-data">
                            <a href="#" title="" uk-tooltip="My album 6" aria-expanded="false">
                                <div class="sidebar-listed-user-avatar">
                                    <img src="assets/images/avatars/avatar-6.jpg" alt="">
                                </div>
                            </a>
                        </div>
                    </ul>
                
                </div>

                <!-- Following -->
                <div class="sl_user-widget">
                    <div class="sl_user-widget-wrap-header">
                        <div class="sl_user-widget-wrap-header-left">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M22,16V4A2,2 0 0,0 20,2H8A2,2 0 0,0 6,4V16A2,2 0 0,0 8,18H20A2,2 0 0,0 22,16M11,12L13.03,14.71L16,11L20,16H8M2,6V20A2,2 0 0,0 4,22H18V20H4V6">
                                    </path>
                                </svg></span> 
                                <a href="#">Following</a>&nbsp;<div style="font-weight: 600">124</div>
                        </div>
                        <div class="sl_user-widget-wrap-right"> <a href="#" class="see-all"> See all</a></div>
                    </div>
                
                    
                    <ul class="sidebar-user-data-container">
                
                        <li class="sidebar-user-data">
                            <div class="sidebar-listed-user-avatar">
                                <a href="#">
                                    <img src="assets/images/avatars/avatar-4.jpg">
                                    <div class="sidebar-listed-user-name">Adrian Moh</div>
                                </a>
                            </div>
                        </li>
                        <li class="sidebar-user-data">
                            <div class="sidebar-listed-user-avatar">
                                <a href="#">
                                    <img src="assets/images/avatars/avatar-5.jpg">
                                    <div class="sidebar-listed-user-name">Alex Dolgo</div>
                                </a>
                            </div>
                        </li>
                        <li class="sidebar-user-data">
                            <div class="sidebar-listed-user-avatar">
                                <a href="#">
                                    <img src="assets/images/avatars/avatar-6.jpg">
                                    <div class="sidebar-listed-user-name">Stella Joh</div>
                                </a>
                            </div>
                        </li>
                        <li class="sidebar-user-data">
                            <div class="sidebar-listed-user-avatar">
                                <a href="#">
                                    <img src="assets/images/avatars/avatar-7.jpg">
                                    <div class="sidebar-listed-user-name">Alex Dolgo</div>
                                </a>
                            </div>
                        </li>
                        <li class="sidebar-user-data">
                            <div class="sidebar-listed-user-avatar">
                                <a href="#">
                                    <img src="assets/images/avatars/avatar-2.jpg">
                                    <div class="sidebar-listed-user-name">Adrian Moh</div>
                                </a>
                            </div>
                        </li>
                        <li class="sidebar-user-data">
                            <div class="sidebar-listed-user-avatar">
                                <a href="#">
                                    <img src="assets/images/avatars/avatar-1.jpg">
                                    <div class="sidebar-listed-user-name">Alex Dolgo</div>
                                </a>
                            </div>
                        </li>
                            
                        </ul>
                    <a class="sl_user-widget-see-all button block light small px-0">  See all </a>
                
                </div>

                <div class="sl_user-widget">
                    <div class="sl_user-widget-wrap-header">
                        <div class="sl_user-widget-wrap-header-left">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M22,16V4A2,2 0 0,0 20,2H8A2,2 0 0,0 6,4V16A2,2 0 0,0 8,18H20A2,2 0 0,0 22,16M11,12L13.03,14.71L16,11L20,16H8M2,6V20A2,2 0 0,0 4,22H18V20H4V6">
                                    </path>
                                </svg></span> 
                                <a href="#">groups</a>&nbsp;<div style="font-weight: 600">2</div>
                        </div>
                        <div class="sl_user-widget-wrap-right"> <a href="#" class="see-all"> See all</a></div>
                    </div>
                
                    <ul class="sidebar-user-data-container">
                
                        <div class="sidebar-user-data">
                    <a href="http://foxthemes.net/demo/simplest/Graphic_Design" data-ajax="?link1=timeline&amp;u=Graphic_Design">
                        <div class="sidebar-listed-user-avatar">
                            <img src="http://foxthemes.net/demo/simplest/upload/photos/2020/08/ja5jkxOx5go3Cw3rbWVm_24_79d6c762f2bcb118f9f187822f1d190f_avatar.jpg">
                        </div>
                        <div class="sidebar-listed-user-name">Graphic De</div>
                    </a>
                </div><div class="sidebar-user-data">
                    <a href="http://foxthemes.net/demo/simplest/uk_brands" data-ajax="?link1=timeline&amp;u=uk_brands">
                        <div class="sidebar-listed-user-avatar">
                            <img src="http://foxthemes.net/demo/simplest/upload/photos/d-group.jpg ">
                        </div>
                        <div class="sidebar-listed-user-name">Uk Brands</div>
                    </a>
                </div>		</ul>
                </div>

                <ul class="sl_user-widget sidebar-conatnier sl_user-widget_text" id="sidebar-group-list-container">

                    <div class="sl_user-widget-wrap-header">
                        <div class="sl_user-widget-wrap-header-left">
                            <h4> Suggested groups </h4>
                        </div>
                    </div>

                    <div class="sidebar-group-may-know-container">

                        <div class="sl_sidebar_sugs">
                            <div class="sl_sidebar_sugs_avatar">
                                <img src="assets/images/group/group-1.jpg" alt=""> 
                            </div>
                            <div class="sl_sidebar_sugs_text">
                                <a href="#" class="wow_user_link_name"> Architecture </a>
                                <span>6 Members</span>
                            </div>
                            <div class="user-follow-button sl_sidebar_sugs_btns">
                                <div class="user-follow-button sl_sidebar_sugs_btns">
                                    <button type="button" class="button small">
                                        <span> Join</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="sl_sidebar_sugs">
                            <div class="sl_sidebar_sugs_avatar">
                                <img src="assets/images/group/group-2.jpg" alt=""> 
                            </div>
                            <div class="sl_sidebar_sugs_text">
                                <a href="#" class="wow_user_link_name"> Coffee Addicts </a>
                                <span>23 Members</span>
                            </div>
                            <div class="user-follow-button sl_sidebar_sugs_btns">
                                    <div class="user-follow-button sl_sidebar_sugs_btns">
                                        <button type="button" class="button small">
                                            <span> Join</span>
                                        </button>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </ul>


                <!-- Footer menus-->
                <div class="footer-wrapper-sidebar">
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





</div>



@endsection
