<div class="main_sidebar">
           <div class="side-overlay" uk-toggle="target: #wrapper ; cls: collapse-sidebar mobile-visible"></div>
       
           <!-- sidebar header -->
           <div class="sidebar-header">
               <!-- Logo-->
               <div id="logo">
                   <a href="{{url('/')}}"> <img src="assets/images/logo-light.png" alt=""></a>
               </div>
               <span class="btn-close" uk-toggle="target: #wrapper ; cls: collapse-sidebar mobile-visible"></span>
           </div>
       
           <!-- sidebar Menu -->
           <div class="sidebar">
               <div class="sidebar_innr" data-simplebar>
       
                   <div class="sections">
                       <ul>
                           <li class="{{ (request()->segment(1) == '') ? 'active' : '' }}">
                               <a href="{{url('/')}}">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path fill="#047cac" d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z"></path>
                                   </svg>
                                   News Feed </a>
                           </li>
                           <li class="{{ (request()->segment(1) == 'albums') ? 'active' : '' }}">
                               <a href="{{url('albums')}}">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path fill="#8bc34a"
                                           d="M22,16V4A2,2 0 0,0 20,2H8A2,2 0 0,0 6,4V16A2,2 0 0,0 8,18H20A2,2 0 0,0 22,16M11,12L13.03,14.71L16,11L20,16H8M2,6V20A2,2 0 0,0 4,22H18V20H4V6">
                                       </path>
                                   </svg> Albums </a>
                           </li>
                          
                          
                           <li class="{{ (request()->segment(1) == 'popular-post') ? 'active' : '' }}">
                               <a href="{{url('popular-post')}}">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path fill="#8d73cc"
                                           d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1zm-1-2V4H5v16h14zM7 6h4v4H7V6zm0 6h10v2H7v-2zm0 4h10v2H7v-2zm6-9h4v2h-4V7z">
                                       </path>
                                   </svg> Popular Posts </a>
                           </li>
                           <li class="{{ (request()->segment(1) == 'event') ? 'active' : '' }}">
                               <a href="{{url('event')}}">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path fill="#f25e4e"
                                           d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M17,12H12V17H17V12Z">
                                       </path>
                                   </svg> Events </a>
                           </li>
                           <li class="{{ (request()->segment(1) == 'game') ? 'active' : '' }}">
                               <a href="{{url('game')}}">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path fill="#03A9F4"
                                           d="M16.5,9L13.5,12L16.5,15H22V9M9,16.5V22H15V16.5L12,13.5M7.5,9H2V15H7.5L10.5,12M15,7.5V2H9V7.5L12,10.5L15,7.5Z">
                                       </path>
                                   </svg> Games </a>
                           </li>
                           <li class="{{ (request()->segment(1) == 'offer') ? 'active' : '' }}">
                               <a href="{{url('offer')}}">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path fill="#e91e63"
                                           d="M5.5,7A1.5,1.5 0 0,1 4,5.5A1.5,1.5 0 0,1 5.5,4A1.5,1.5 0 0,1 7,5.5A1.5,1.5 0 0,1 5.5,7M21.41,11.58L12.41,2.58C12.05,2.22 11.55,2 11,2H4C2.89,2 2,2.89 2,4V11C2,11.55 2.22,12.05 2.59,12.41L11.58,21.41C11.95,21.77 12.45,22 13,22C13.55,22 14.05,21.77 14.41,21.41L21.41,14.41C21.78,14.05 22,13.55 22,13C22,12.44 21.77,11.94 21.41,11.58Z">
                                       </path>
                                   </svg> Offers </a>
                           </li>
                           <li class="{{ (request()->segment(1) == 'findfriend') ? 'active' : '' }}">
                               <a href="{{url('findfriend')}}">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path fill="#b2c17c"
                                           d="M15.5,12C18,12 20,14 20,16.5C20,17.38 19.75,18.21 19.31,18.9L22.39,22L21,23.39L17.88,20.32C17.19,20.75 16.37,21 15.5,21C13,21 11,19 11,16.5C11,14 13,12 15.5,12M15.5,14A2.5,2.5 0 0,0 13,16.5A2.5,2.5 0 0,0 15.5,19A2.5,2.5 0 0,0 18,16.5A2.5,2.5 0 0,0 15.5,14M10,4A4,4 0 0,1 14,8C14,8.91 13.69,9.75 13.18,10.43C12.32,10.75 11.55,11.26 10.91,11.9L10,12A4,4 0 0,1 6,8A4,4 0 0,1 10,4M2,20V18C2,15.88 5.31,14.14 9.5,14C9.18,14.78 9,15.62 9,16.5C9,17.79 9.38,19 10,20H2Z">
                                       </path>
                                   </svg> Find friends </a>
                           </li>
                           
                           <li id="more-veiw" hidden="" class="{{ (request()->segment(1) == 'job') ? 'active' : '' }}">
                               <a href="{{url('job')}}">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path fill="#4caf50"
                                           d="M10,2H14A2,2 0 0,1 16,4V6H20A2,2 0 0,1 22,8V19A2,2 0 0,1 20,21H4C2.89,21 2,20.1 2,19V8C2,6.89 2.89,6 4,6H8V4C8,2.89 8.89,2 10,2M14,6V4H10V6H14Z">
                                       </path>
                                   </svg> Jobs </a>
                           </li>
                           <li id="more-veiw" hidden="" class="{{ (request()->segment(1) == 'funding') ? 'active' : '' }}">
                               <a href="{{url('funding')}}">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path fill="#673AB7"
                                           d="M12.75,3.94C13.75,3.22 14.91,2.86 16.22,2.86C16.94,2.86 17.73,3.05 18.59,3.45C19.45,3.84 20.13,4.3 20.63,4.83C21.66,6.11 22.09,7.6 21.94,9.3C21.78,11 21.22,12.33 20.25,13.27L12.66,20.86C12.47,21.05 12.23,21.14 11.95,21.14C11.67,21.14 11.44,21.05 11.25,20.86C11.06,20.67 10.97,20.44 10.97,20.16C10.97,19.88 11.06,19.64 11.25,19.45L15.84,14.86C16.09,14.64 16.09,14.41 15.84,14.16C15.59,13.91 15.36,13.91 15.14,14.16L10.55,18.75C10.36,18.94 10.13,19.03 9.84,19.03C9.56,19.03 9.33,18.94 9.14,18.75C8.95,18.56 8.86,18.33 8.86,18.05C8.86,17.77 8.95,17.53 9.14,17.34L13.73,12.75C14,12.5 14,12.25 13.73,12C13.5,11.75 13.28,11.75 13.03,12L8.44,16.64C8.25,16.83 8,16.92 7.73,16.92C7.45,16.92 7.21,16.83 7,16.64C6.8,16.45 6.7,16.22 6.7,15.94C6.7,15.66 6.81,15.41 7.03,15.19L11.63,10.59C11.88,10.34 11.88,10.11 11.63,9.89C11.38,9.67 11.14,9.67 10.92,9.89L6.28,14.5C6.06,14.7 5.83,14.81 5.58,14.81C5.3,14.81 5.06,14.71 4.88,14.5C4.69,14.3 4.59,14.06 4.59,13.78C4.59,13.5 4.69,13.27 4.88,13.08C7.94,10 9.83,8.14 10.55,7.45L14.11,10.97C14.5,11.34 14.95,11.53 15.5,11.53C16.2,11.53 16.75,11.25 17.16,10.69C17.44,10.28 17.54,9.83 17.46,9.33C17.38,8.83 17.17,8.41 16.83,8.06L12.75,3.94M14.81,10.27L10.55,6L3.47,13.08C2.63,12.23 2.15,10.93 2.04,9.16C1.93,7.4 2.41,5.87 3.47,4.59C4.66,3.41 6.08,2.81 7.73,2.81C9.39,2.81 10.8,3.41 11.95,4.59L16.22,8.86C16.41,9.05 16.5,9.28 16.5,9.56C16.5,9.84 16.41,10.08 16.22,10.27C16.03,10.45 15.8,10.55 15.5,10.55C15.23,10.55 15,10.45 14.81,10.27V10.27Z">
                                       </path>
                                   </svg> Fundings </a>
                           </li>
                       </ul>
                       <a href="#" class="button secondary px-5 btn-more"
                           uk-toggle="target: #more-veiw; animation: uk-animation-fade">
                           <span id="more-veiw">See More <i class="icon-feather-chevron-down ml-2"></i></span>
                           <span id="more-veiw" hidden>See Less<i class="icon-feather-chevron-up ml-2"></i> </span>
                       </a>
                   </div>
       
                   <div class="sections">
                       <h3> Explore </h3>
                       <ul>
                           <li class="{{ (request()->segment(1) == 'group') ? 'active' : '' }}">
                               <a href="{{url('group')}}">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path fill="#03A9F4"
                                           d="M5 3A2 2 0 0 0 3 5H5M7 3V5H9V3M11 3V5H13V3M15 3V5H17V3M19 3V5H21A2 2 0 0 0 19 3M3 7V9H5V7M7 7V11H11V7M13 7V11H17V7M19 7V9H21V7M3 11V13H5V11M19 11V13H21V11M7 13V17H11V13M13 13V17H17V13M3 15V17H5V15M19 15V17H21V15M3 19A2 2 0 0 0 5 21V19M7 19V21H9V19M11 19V21H13V19M15 19V21H17V19M19 19V21A2 2 0 0 0 21 19Z">
                                       </path>
                                   </svg> Groups </a>
                           </li>
                           <li class="{{ (request()->segment(1) == 'page') ? 'active' : '' }}">
                               <a href="{{url('page')}}">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path fill="#f79f58" d="M14.4,6L14,4H5V21H7V14H12.6L13,16H20V6H14.4Z">
                                       </path>
                                   </svg> Pages </a>
                           </li>
                           <li class="{{ (request()->segment(1) == 'market') ? 'active' : '' }}">
                               <a href="{{url('market')}}">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path fill="#7d8250"
                                           d="M12,18H6V14H12M21,14V12L20,7H4L3,12V14H4V20H14V14H18V20H20V14M20,4H4V6H20V4Z">
                                       </path>
                                   </svg> Market </a>
                           </li>
                           <li class="{{ (request()->segment(1) == 'blog') ? 'active' : '' }}">
                               <a href="{{url('blog')}}">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path fill="#f35d4d"
                                           d="M20,11H4V8H20M20,15H13V13H20M20,19H13V17H20M11,19H4V13H11M20.33,4.67L18.67,3L17,4.67L15.33,3L13.67,4.67L12,3L10.33,4.67L8.67,3L7,4.67L5.33,3L3.67,4.67L2,3V19A2,2 0 0,0 4,21H20A2,2 0 0,0 22,19V3L20.33,4.67Z">
                                       </path>
                                   </svg> Blog </a>
                           </li>
                           <li class="{{ (request()->segment(1) == 'job') ? 'active' : '' }}">
                               <a href="{{url('job')}}">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path fill="#4caf50"
                                           d="M10,2H14A2,2 0 0,1 16,4V6H20A2,2 0 0,1 22,8V19A2,2 0 0,1 20,21H4C2.89,21 2,20.1 2,19V8C2,6.89 2.89,6 4,6H8V4C8,2.89 8.89,2 10,2M14,6V4H10V6H14Z">
                                       </path>
                                   </svg> Jobs </a>
                           </li>
       
                       </ul>
       
                   </div>
       
                   <!--  Optional Footer -->
                   <div id="foot">
       
                       <ul>
                           <li> <a href="/"> About Us </a></li>
                           <li> <a href="/"> Setting </a></li>
                           <li> <a href="/"> Privacy Policy </a></li>
                           <li> <a href="/"> Terms - Conditions </a></li>
                       </ul>
       
       
                       <div class="foot-content">
                           <p>© 2020 <strong>Simplest</strong>. All Rights Reserved. </p>
                       </div>
       
                   </div>
       
       
       
               </div>
       
       
           </div>
       
       </div>