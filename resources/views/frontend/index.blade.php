@extends('frontend.layout.home')


@section('title' ,'Home')

@section('content')

<div class="main_content_inner">
      <div uk-grid>
         <div class="uk-width-2-3@m fead-area">
            <div class="uk-position-relative" uk-slider="finite: true">
               <div class="uk-slider-container pb-3">
                  <ul
                     class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-3 story-slider uk-grid">
                     <li>
                        <a href="#" uk-toggle="target: body ; cls: is-open">
                           <div class="story-card" data-src="assets/images/avatars/avatar-lg-1.jpg"
                              uk-img>
                              <i class="uil-plus"></i>
                              <div class="story-card-content">
                                 <h4> Dennis </h4>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#" uk-toggle="target: body ; cls: is-open">
                           <div class="story-card" data-src="assets/images/events/listing-5.jpg"
                              uk-img>
                              <img src="assets/images/avatars/avatar-5.jpg" alt="">
                              <div class="story-card-content">
                                 <h4> Jonathan </h4>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#" uk-toggle="target: body ; cls: is-open">
                           <div class="story-card" data-src="assets/images/avatars/avatar-lg-3.jpg"
                              uk-img>
                              <img src="assets/images/avatars/avatar-6.jpg" alt="">
                              <div class="story-card-content">
                                 <h4> Stella </h4>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#" uk-toggle="target: body ; cls: is-open">
                           <div class="story-card" data-src="assets/images/avatars/avatar-lg-4.jpg"
                              uk-img>
                              <img src="assets/images/avatars/avatar-4.jpg" alt="">
                              <div class="story-card-content">
                                 <h4> Alex </h4>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#" uk-toggle="target: body ; cls: is-open">
                           <div class="story-card" data-src="assets/images/avatars/avatar-lg-2.jpg"
                              uk-img>
                              <img src="assets/images/avatars/avatar-2.jpg" alt="">
                              <div class="story-card-content">
                                 <h4> Adrian </h4>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="#" uk-toggle="target: body ; cls: is-open">
                           <div class="story-card" data-src="assets/images/avatars/avatar-lg-5.jpg"
                              uk-img>
                              <img src="assets/images/avatars/avatar-5.jpg" alt="">
                              <div class="story-card-content">
                                 <h4> Dennis </h4>
                              </div>
                           </div>
                        </a>
                     </li>
                  </ul>
                  <div class="uk-visible@m">
                     <a class="uk-position-center-left-out slidenav-prev" href="#"
                        uk-slider-item="previous"></a>
                     <a class="uk-position-center-right-out slidenav-next" href="#"
                        uk-slider-item="next"></a>
                  </div>
                  <div class="uk-hidden@m">
                     <a class="uk-position-center-left slidenav-prev" href="#"
                        uk-slider-item="previous"></a>
                     <a class="uk-position-center-right slidenav-next" href="#"
                        uk-slider-item="next"></a>
                  </div>
               </div>
            </div>
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
                        <span class="post-new-btn-close" uk-toggle="target: body ; cls: post-focus"
                           uk-tooltip="title:Close; pos: left "></span>
                     </div>
                     <div class="post-new-media">
                        <div class="post-new-media-user">
                           <img src="assets/images/avatars/avatar-2.jpg" alt="">
                        </div>
                        <div class="post-new-media-input">
                           <input type="text" class="uk-input"
                              placeholder="What's Your Mind ? Dennis!">
                        </div>
                     </div>
                     <div class="post-new-tab-nav">
                        <a href="#">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24">
                              <path fill="#4db3f6"
                                 d="M8.5,13.5L11,16.5L14.5,12L19,18H5M21,19V5C21,3.89 20.1,3 19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19Z">
                              </path>
                           </svg>
                           <span> Upload Image</span>
                        </a>
                        <a href="#">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 512 512">
                              <path fill="#71a257"
                                 d="M450.6 153.6c-3.3 0-6.5.9-9.3 2.7l-86.5 54.6c-2.5 1.6-4 4.3-4 7.2v76c0 2.9 1.5 5.6 4 7.2l86.5 54.6c2.8 1.7 6 2.7 9.3 2.7h20.8c4.8 0 8.6-3.8 8.6-8.5v-188c0-4.7-3.9-8.5-8.6-8.5h-20.8zM273.5 384h-190C55.2 384 32 360.8 32 332.6V179.4c0-28.3 23.2-51.4 51.4-51.4h190c28.3 0 51.4 23.2 51.4 51.4v153.1c.1 28.3-23 51.5-51.3 51.5z">
                              </path>
                           </svg>
                           <span> Upload Videos</span>
                        </a>
                        <a href="#">
                           <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                              viewBox="0 0 24 24">
                              <path fill="#f3c038"
                                 d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10c5.514,0,10-4.486,10-10S17.514,2,12,2z M8.5,8C9.328,8,10,8.896,10,10	s-0.672,2-1.5,2S7,11.104,7,10S7.672,8,8.5,8z M12,18c-1.905,0-3.654-0.874-4.8-2.399l1.599-1.201C9.563,15.417,10.73,16,12,16	c1.27,0,2.436-0.583,3.2-1.601l1.6,1.201C15.653,17.126,13.904,18,12,18z M15.5,12c-0.828,0-1.5-0.896-1.5-2s0.672-2,1.5-2	S17,8.896,17,10S16.328,12,15.5,12z">
                              </path>
                           </svg>
                           <span> Feeling </span>
                        </a>
                        <a href="#">
                           <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                              viewBox="0 0 24 24">
                              <path fill="#673ab7"
                                 d="M17.5,12A1.5,1.5 0 0,1 16,10.5A1.5,1.5 0 0,1 17.5,9A1.5,1.5 0 0,1 19,10.5A1.5,1.5 0 0,1 17.5,12M14.5,8A1.5,1.5 0 0,1 13,6.5A1.5,1.5 0 0,1 14.5,5A1.5,1.5 0 0,1 16,6.5A1.5,1.5 0 0,1 14.5,8M9.5,8A1.5,1.5 0 0,1 8,6.5A1.5,1.5 0 0,1 9.5,5A1.5,1.5 0 0,1 11,6.5A1.5,1.5 0 0,1 9.5,8M6.5,12A1.5,1.5 0 0,1 5,10.5A1.5,1.5 0 0,1 6.5,9A1.5,1.5 0 0,1 8,10.5A1.5,1.5 0 0,1 6.5,12M12,3A9,9 0 0,0 3,12A9,9 0 0,0 12,21A1.5,1.5 0 0,0 13.5,19.5C13.5,19.11 13.35,18.76 13.11,18.5C12.88,18.23 12.73,17.88 12.73,17.5A1.5,1.5 0 0,1 14.23,16H16A5,5 0 0,0 21,11C21,6.58 16.97,3 12,3Z">
                              </path>
                           </svg>
                           <span> Post Color </span>
                        </a>
                        <a href="#">
                           <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                              viewBox="0 0 24 24">
                              <path fill="#ff3a55"
                                 d="M12,2A3,3 0 0,1 15,5V11A3,3 0 0,1 12,14A3,3 0 0,1 9,11V5A3,3 0 0,1 12,2M19,11C19,14.53 16.39,17.44 13,17.93V21H11V17.93C7.61,17.44 5,14.53 5,11H7A5,5 0 0,0 12,16A5,5 0 0,0 17,11H19Z">
                              </path>
                           </svg>
                           <span> Recording </span>
                        </a>
                        <a href="#">
                           <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                              viewBox="0 0 512 512">
                              <path fill="#6bcfef"
                                 d="M312 155h91c2.8 0 5-2.2 5-5 0-8.9-3.9-17.3-10.7-22.9L321 63.5c-5.8-4.8-13-7.4-20.6-7.4-4.1 0-7.4 3.3-7.4 7.4V136c0 10.5 8.5 19 19 19z">
                              </path>
                              <path fill="#6bcfef"
                                 d="M267 136V56H136c-17.6 0-32 14.4-32 32v336c0 17.6 14.4 32 32 32h240c17.6 0 32-14.4 32-32V181h-96c-24.8 0-45-20.2-45-45z">
                              </path>
                           </svg>
                           <span> File </span>
                        </a>
                        <a href="#">
                           <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                              viewBox="0 0 24 24">
                              <path fill="#f07729"
                                 d="M3.572,5.572l4.506,10.813C8.233,16.757,8.597,17,9.001,17H18c0.417,0,0.79-0.259,0.937-0.648l3-8 c0.115-0.308,0.072-0.651-0.114-0.921C21.635,7.161,21.328,7,21,7H6.333L4.923,3.615C4.768,3.243,4.404,3,4,3H2v2h1L3.572,5.572z">
                              </path>
                              <circle fill="#f07729" cx="10.5" cy="20.5" r="1.5"></circle>
                              <circle fill="#f07729" cx="16.438" cy="20.5" r="1.5"></circle>
                           </svg>
                           <span> Product </span>
                        </a>
                        <a href="#">
                           <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                              viewBox="0 0 24 24">
                              <path fill="#31a38c"
                                 d="M17,17H15V13H17M13,17H11V7H13M9,17H7V10H9M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3Z">
                              </path>
                           </svg>
                           <span> Create Poll </span>
                        </a>
                        <a href="#">
                           <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                              viewBox="0 0 24 24">
                              <path fill="#f35369"
                                 d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z">
                              </path>
                           </svg>
                           <span> Location </span>
                        </a>
                     </div>
                     <div class="uk-flex uk-flex-between">
                        <button class="button outline-light circle" type="button" style="
                           border-color: #e6e6e6;  border-width: 1px;  ">Public</button>
                        <div uk-dropdown>
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
                     <span class="icon-more uil-ellipsis-h"></span>
                     <div class="mt-0 p-2" uk-dropdown="pos: top-right;mode:hover ">
                        <ul class="uk-nav uk-dropdown-nav">
                           <li><a href="#"> <i class="uil-share-alt mr-1"></i> Share</a> </li>
                           <li><a href="#"> <i class="uil-edit-alt mr-1"></i> Edit Post </a></li>
                           <li><a href="#"> <i class="uil-comment-slash mr-1"></i> Disable comments
                              </a>
                           </li>
                           <li><a href="#"> <i class="uil-favorite mr-1"></i> Add favorites </a>
                           </li>
                           <li><a href="#" class="text-danger"> <i class="uil-trash-alt mr-1"></i>
                              Delete </a>
                           </li>
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
                              volutpat.<strong> David !</strong> 
                           </p>
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
                     <span class="icon-more uil-ellipsis-h"></span>
                     <div class="mt-0 p-2" uk-dropdown="pos: top-right;mode:hover ">
                        <ul class="uk-nav uk-dropdown-nav">
                           <li><a href="#"> <i class="uil-share-alt mr-1"></i> Share</a> </li>
                           <li><a href="#"> <i class="uil-edit-alt mr-1"></i> Edit Post </a></li>
                           <li><a href="#"> <i class="uil-comment-slash mr-1"></i> Disable comments
                              </a>
                           </li>
                           <li><a href="#"> <i class="uil-favorite mr-1"></i> Add favorites </a>
                           </li>
                           <li><a href="#" class="text-danger"> <i class="uil-trash-alt mr-1"></i>
                              Delete </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="post-description">
                  <div class="uk-grid-small" uk-grid>
                     <div class="uk-width-1-1@m">
                        <img src="assets/images/post/img-4.jpg" class="rounded" alt="">
                     </div>
                     <div class="uk-width-1-2@m uk-width-1-2">
                        <img src="assets/images/post/img-2.jpg" class="rounded" alt="">
                     </div>
                     <div class="uk-width-1-2@m uk-width-1-2 uk-position-relative">
                        <img src="assets/images/post/img-3.jpg" class="rounded" alt="">
                        <div class="uk-position-center uk-light">
                           <a href="#">
                              <h3> + 15 more </h3>
                           </a>
                        </div>
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
                              volutpat.<strong> David !</strong> 
                           </p>
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
                     <span class="icon-more uil-ellipsis-h"></span>
                     <div class="mt-0 p-2" uk-dropdown="pos: top-right;mode:hover ">
                        <ul class="uk-nav uk-dropdown-nav">
                           <li><a href="#"> <i class="uil-share-alt mr-1"></i> Share</a> </li>
                           <li><a href="#"> <i class="uil-edit-alt mr-1"></i> Edit Post </a></li>
                           <li><a href="#"> <i class="uil-comment-slash mr-1"></i> Disable comments
                              </a>
                           </li>
                           <li><a href="#"> <i class="uil-favorite mr-1"></i> Add favorites </a>
                           </li>
                           <li><a href="#" class="text-danger"> <i class="uil-trash-alt mr-1"></i>
                              Delete </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="post-description">
                  <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                     euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                     Ut wisi enim ad minim laoreet dolore magna aliquam erat volutpat
                  </p>
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
            <div class="post">
               <div class="post-heading">
                  <div class="post-avature">
                     <img src="assets/images/avatars/avatar-2.jpg" alt="">
                  </div>
                  <div class="post-title">
                     <h4> Dennis Han </h4>
                     <p> 5 <span> hrs</span> <i class="uil-users-alt"></i> </p>
                  </div>
                  <div class="post-btn-action">
                     <span class="icon-more uil-ellipsis-h"></span>
                     <div class="mt-0 p-2" uk-dropdown="pos: top-right;mode:hover ">
                        <ul class="uk-nav uk-dropdown-nav">
                           <li><a href="#"> <i class="uil-share-alt mr-1"></i> Share</a> </li>
                           <li><a href="#"> <i class="uil-edit-alt mr-1"></i> Edit Post </a></li>
                           <li><a href="#"> <i class="uil-comment-slash mr-1"></i> Disable comments
                              </a>
                           </li>
                           <li><a href="#"> <i class="uil-favorite mr-1"></i> Add favorites </a>
                           </li>
                           <li><a href="#" class="text-danger"> <i class="uil-trash-alt mr-1"></i>
                              Delete </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="post-description">
                  <div class="fullsizevid">
                     <div class="embed-video">
                        <iframe src="https://www.youtube.com/embed/pQN-pnXPaVg" frameborder="0"
                           uk-video="automute: true" allowfullscreen uk-responsive></iframe>
                     </div>
                  </div>
                  <div class="post-state-details">
                     <div>
                        <img src="assets/images/icons/reactions_like.png" alt="">
                        <img src="assets/images/icons/reactions_love.png" alt="">
                        <p> 13 </p>
                     </div>
                     <p> <span class="mr-2"> <i class="uil-eye"></i> 38 Veiws </span> 212 Comments
                     </p>
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
            <div class="uk-position-relative" uk-slider="finite: true; autoplay:true">
               <div class="uk-slider-container pb-3">
                  <ul class="uk-slider-items uk-child-width-1-3@m uk-grid-small uk-grid sl_pro_users">
                     <li>
                        <a class="user" href="#">
                        <img src="assets/images/avatars/avatar-1.jpg" alt="">
                        <span>Stella Johnson 1</span>
                        </a>
                     </li>
                     <li>
                        <a class="user" href="#">
                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                        <span>Stella Johnson 2</span>
                        </a>
                     </li>
                     <li>
                        <a class="user" href="#">
                        <img src="assets/images/avatars/avatar-3.jpg" alt="">
                        <span>Stella Johnson 3</span>
                        </a>
                     </li>
                     <li>
                        <a class="user" href="#">
                        <img src="assets/images/avatars/avatar-4.jpg" alt="">
                        <span>Stella Johnson 4</span>
                        </a>
                     </li>
                     <li>
                        <a class="user" href="#">
                        <img src="assets/images/avatars/avatar-5.jpg" alt="">
                        <span>Stella Johnson 5</span>
                        </a>
                     </li>
                  </ul>
                  <a class="uk-position-center-left uk-hidden-hover slidenav-prev sl_pro_users_prev"
                     href="#" uk-slider-item="previous"></a>
                  <a class="uk-position-center-right-out uk-position-small uk-hidden-hover slidenav-next sl_pro_users_next"
                     href="#" uk-slider-item="next"></a>
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
                  <button class="button small" title="Send Invitation">
                     <svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M2,21L23,12L2,3V10L17,12L2,14V21Z"></path>
                     </svg>
                  </button>
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
                        <a href="#" class="dropdown-toggle">
                        More <span class="caret"></span>
                        </a>
                        <div uk-dropdown="pos: bottom-left ; mode:hover "
                           class="uk-dropdown uk-dropdown-bottom-right"
                           style="left: 745px; top: 87px;">
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