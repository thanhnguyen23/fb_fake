@extends('frontend.layout.home')

@section('title' ,'Albums')

@section('content')

<div class="main_content_inner">

        <div id="spinneroverlay"> </div>

        <h1> Photos </h1>
        <div class="uk-flex uk-flex-between uk-flex-middle mb-4">
            <ul class="uk-width-expand uk-tab" uk-tab="">
                <li class="uk-active"><a href="#">Photos of you</a></li>
                <li><a href="#"> Your photos</a></li>
                <li class="uk-visible@s"><a href="#">Albums</a></li>
            </ul>
            <a href="#" class="button primary small circle uk-visible@s"> <i class="uil-plus"> </i>
                Create New Album </a>

        </div>

        <div class="uk-child-width-1-4@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-collapse uk-overflow-hidden uk-grid" style="border-radius: 25px;  overflow: hidd en;" uk-lightbox="animation: scale" uk-grid="">
            <div class="uk-first-column">
                <a href="assets/images/post/img-1.jpg" data-caption="Image caption">
                    <div class="sl_photo_list" data-src="assets/images/post/img-1.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/post/img-1.jpg&quot;);">
                        <div class="sl_photo_list-content">
                            <div>
                                <h4> Image description </h4>
                                <p> <span>Like </span>
                                    <span> Comment </span>
                                    <span> Share</span>
                                </p>
                            </div>
                            <div>
                                <span class="uil-cloud-download btn-down"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="assets/images/post/img-3.jpg" data-caption="Image caption">
                    <div class="sl_photo_list" data-src="assets/images/post/img-3.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/post/img-3.jpg&quot;);">
                        <div class="sl_photo_list-content">
                            <div>
                                <h4> Image description </h4>
                                <p> <span>Like </span>
                                    <span> Comment </span>
                                    <span> Share</span>
                                </p>
                            </div>
                            <div>
                                <span class="uil-cloud-download btn-down"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="assets/images/post/img-2.jpg" data-caption="Image caption">
                    <div class="sl_photo_list" data-src="assets/images/post/img-2.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/post/img-2.jpg&quot;);">
                        <div class="sl_photo_list-content">
                            <div>
                                <h4> Image description </h4>
                                <p> <span>Like </span>
                                    <span> Comment </span>
                                    <span> Share</span>
                                </p>
                            </div>
                            <div>
                                <span class="uil-cloud-download btn-down"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="assets/images/post/img-4.jpg" data-caption="Image caption">
                    <div class="sl_photo_list" data-src="assets/images/post/img-4.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/post/img-4.jpg&quot;);">
                        <div class="sl_photo_list-content">
                            <div>
                                <h4> Image description </h4>
                                <p> <span>Like </span>
                                    <span> Comment </span>
                                    <span> Share</span>
                                </p>
                            </div>
                            <div>
                                <span class="uil-cloud-download btn-down"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="uk-grid-margin uk-first-column">
                <a href="assets/images/events/img-1.jpg" data-caption="Image caption">
                    <div class="sl_photo_list" data-src="assets/images/events/img-1.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/events/img-1.jpg&quot;);">
                        <div class="sl_photo_list-content">
                            <div>
                                <h4> Image description </h4>
                                <p> <span>Like </span>
                                    <span> Comment </span>
                                    <span> Share</span>
                                </p>
                            </div>
                            <div>
                                <span class="uil-cloud-download btn-down"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="uk-grid-margin">
                <a href="assets/images/events/img-2.jpg" data-caption="Image caption">
                    <div class="sl_photo_list" data-src="assets/images/events/img-2.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/events/img-2.jpg&quot;);">
                        <div class="sl_photo_list-content">
                            <div>
                                <h4> Image description </h4>
                                <p> <span>Like </span>
                                    <span> Comment </span>
                                    <span> Share</span>
                                </p>
                            </div>
                            <div>
                                <span class="uil-cloud-download btn-down"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="uk-grid-margin">
                <a href="assets/images/events/img-3.jpg" data-caption="Image caption">
                    <div class="sl_photo_list" data-src="assets/images/events/img-3.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/events/img-3.jpg&quot;);">
                        <div class="sl_photo_list-content">
                            <div>
                                <h4> Image description </h4>
                                <p> <span>Like </span>
                                    <span> Comment </span>
                                    <span> Share</span>
                                </p>
                            </div>
                            <div>
                                <span class="uil-cloud-download btn-down"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="uk-grid-margin">
                <a href="assets/images/events/img-4.jpg" data-caption="Image caption">
                    <div class="sl_photo_list" data-src="assets/images/events/img-4.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/events/img-4.jpg&quot;);">
                        <div class="sl_photo_list-content">
                            <div>
                                <h4> Image description </h4>
                                <p> <span>Like </span>
                                    <span> Comment </span>
                                    <span> Share</span>
                                </p>
                            </div>
                            <div>
                                <span class="uil-cloud-download btn-down"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="uk-grid-margin uk-first-column">
                <a href="assets/images/events/listing-1.jpg" data-caption="Image caption">
                    <div class="sl_photo_list" data-src="assets/images/events/listing-1.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/events/listing-1.jpg&quot;);">
                        <div class="sl_photo_list-content">
                            <div>
                                <h4> Image description </h4>
                                <p> <span>Like </span>
                                    <span> Comment </span>
                                    <span> Share</span>
                                </p>
                            </div>
                            <div>
                                <span class="uil-cloud-download btn-down"></span>
                            </div>
                        </div>
                    </div>

                </a>
            </div>
            <div class="uk-grid-margin">
                <a href="assets/images/events/listing-2.jpg" data-caption="Image caption">
                    <div class="sl_photo_list" data-src="assets/images/events/listing-2.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/events/listing-2.jpg&quot;);">
                        <div class="sl_photo_list-content">
                            <div>
                                <h4> Image description </h4>
                                <p> <span>Like </span>
                                    <span> Comment </span>
                                    <span> Share</span>
                                </p>
                            </div>
                            <div>
                                <span class="uil-cloud-download btn-down"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="uk-grid-margin">
                <a href="assets/images/events/listing-3.jpg" data-caption="Image caption">
                    <div class="sl_photo_list" data-src="assets/images/events/listing-3.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/events/listing-3.jpg&quot;);">
                        <div class="sl_photo_list-content">
                            <div>
                                <h4> Image description </h4>
                                <p> <span>Like </span>
                                    <span> Comment </span>
                                    <span> Share</span>
                                </p>
                            </div>
                            <div>
                                <span class="uil-cloud-download btn-down"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="uk-grid-margin">
                <a href="assets/images/events/listing-4.jpg" data-caption="Image caption">
                    <div class="sl_photo_list" data-src="assets/images/events/listing-4.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/events/listing-4.jpg&quot;);">
                        <div class="sl_photo_list-content">
                            <div>
                                <h4> Image description </h4>
                                <p> <span>Like </span>
                                    <span> Comment </span>
                                    <span> Share</span>
                                </p>
                            </div>
                            <div>
                                <span class="uil-cloud-download btn-down"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="uk-grid-margin uk-first-column">
                <a href="assets/images/events/listing-5.jpg" data-caption="Image caption">
                    <div class="sl_photo_list" data-src="assets/images/events/listing-5.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/events/listing-5.jpg&quot;);">
                        <div class="sl_photo_list-content">
                            <div>
                                <h4> Image description </h4>
                                <p> <span>Like </span>
                                    <span> Comment </span>
                                    <span> Share</span>
                                </p>
                            </div>
                            <div>
                                <span class="uil-cloud-download btn-down"></span>
                            </div>
                        </div>
                    </div>

                </a>
            </div>
            <div class="uk-grid-margin">
                <a href="assets/images/events/listing-6.jpg" data-caption="Image caption">
                    <div class="sl_photo_list" data-src="assets/images/events/listing-6.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/events/listing-6.jpg&quot;);">
                        <div class="sl_photo_list-content">
                            <div>
                                <h4> Image description </h4>
                                <p> <span>Like </span>
                                    <span> Comment </span>
                                    <span> Share</span>
                                </p>
                            </div>
                            <div>
                                <span class="uil-cloud-download btn-down"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="uk-grid-margin">
                <a href="assets/images/category/img6.jpg" data-caption="Image caption">
                    <div class="sl_photo_list" data-src="assets/images/category/img6.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/category/img6.jpg&quot;);">
                        <div class="sl_photo_list-content">
                            <div>
                                <h4> Image description </h4>
                                <p> <span>Like </span>
                                    <span> Comment </span>
                                    <span> Share</span>
                                </p>
                            </div>
                            <div>
                                <span class="uil-cloud-download btn-down"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="uk-grid-margin">
                <a href="assets/images/category/img5.jpg" data-caption="Image caption">
                    <div class="sl_photo_list" data-src="assets/images/category/img5.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/category/img5.jpg&quot;);">
                        <div class="sl_photo_list-content">
                            <div>
                                <h4> Image description </h4>
                                <p> <span>Like </span>
                                    <span> Comment </span>
                                    <span> Share</span>
                                </p>
                            </div>
                            <div>
                                <span class="uil-cloud-download btn-down"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>

@endsection