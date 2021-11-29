@extends('frontend.layout.home')

@section('title' ,'Jobs')

@section('content')


<div class="main_content_inner">

                <div id="spinneroverlay"> </div>



                <h2> Browse jobs </h2>


                    <!-- pages   -->
                    <div class="uk-child-width-1-2@s uk-grid" uk-grid="">
                        <div class="uk-first-column">
                            <div class="sl_jobs_list">
                                <div class="sl_jobs_list_media">
                                    <a href="#">  <img src="assets/images/jobs/img-1.jpg" alt=""> </a>
                                </div>
                                <div class="sl_jobs_list_info">
                                    <span class="sl_jobs_list_info_price">$900 - $670</span>
                                    <h3><a href="#">Technical Event Support</a></h3>
                                    <ul>
                                        <li><a href="#">Technical</a></li>
                                        <li class="middot">·</li>
                                        <li><a href="#">Suranna Brand</a></li>
                                    </ul>
                                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed quis nostrud exerci diam nonummy ...</p>
                                    <div class="sl_jobs_list_info_tags">
                                        <span> Turkey</span>
                                        <span class="ajax-time" title="12 days ago">12 days ago</span>
                                        <span> Full Time</span>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div>
                            <div class="sl_jobs_list">
                                <div class="sl_jobs_list_media">
                                    <a href="#">  <img src="assets/images/jobs/img-2.jpg" alt=""> </a>
                                </div>
                                <div class="sl_jobs_list_info">
                                    <span class="sl_jobs_list_info_price">$300 - $250</span>
                                    <h3><a href="#">IT Department Manager &amp; Blogger-Entrepenour</a></h3>
                                    <ul>
                                        <li><a href="#">Marketing</a></li>
                                        <li class="middot">·</li>
                                        <li><a href="#">Suranna Brand</a></li>
                                    </ul>
                                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed quis nostrud exerci diam nonummy ...</p>
                                    <div class="sl_jobs_list_info_tags">
                                        <span> Istanbul</span>
                                        <span class="ajax-time" title="12 days ago">12 days ago</span>
                                        <span> Full Time</span>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="uk-grid-margin uk-first-column">
                            <div class="sl_jobs_list">
                                <div class="sl_jobs_list_media">
                                    <a href="#">  <img src="assets/images/jobs/img-3.jpg" alt=""> </a>
                                </div>
                                <div class="sl_jobs_list_info">
                                    <span class="sl_jobs_list_info_price">$230 - $320</span>
                                    <h3><a href="#">Are you good For Writting Article </a></h3>
                                    <ul>
                                        <li><a href="#">Technical</a></li>
                                        <li class="middot">·</li>
                                        <li><a href="#">Suranna Brand</a></li>
                                    </ul>
                                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed quis nostrud exerci diam nonummy ...</p>
                                    <div class="sl_jobs_list_info_tags">
                                        <span> Turkey</span>
                                        <span class="ajax-time" title="12 days ago">12 days ago</span>
                                        <span> Full Time</span>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="uk-grid-margin">
                            <div class="sl_jobs_list">
                                <div class="sl_jobs_list_media">
                                    <a href="#">  <img src="assets/images/jobs/img-4.jpg" alt=""> </a>
                                </div>
                                <div class="sl_jobs_list_info">
                                    <span class="sl_jobs_list_info_price">$300 - $250</span>
                                    <h3><a href="#"> Creative Adea For Online Marketing  </a></h3>
                                    <ul>
                                        <li><a href="#">Marketing</a></li>
                                        <li class="middot">·</li>
                                        <li><a href="#">Suranna Brand</a></li>
                                    </ul>
                                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed quis nostrud exerci diam nonummy ...</p>
                                    <div class="sl_jobs_list_info_tags">
                                        <span> Turkey</span>
                                        <span class="ajax-time" title="12 days ago">12 days ago</span>
                                        <span> Full Time</span>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>

                    <div class="load-more">
                        <button class="btn button">Load more jobs</button>
                    </div>


            </div>

@endsection