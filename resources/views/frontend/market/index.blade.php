

@extends('frontend.layout.home')

@section('title' ,'Market')

@section('content')


<div class="main_content_inner">


<h2> Newest Products</h2>

<div class="uk-position-relative mt-4 uk-slider" uk-slider="finite: true">

    <div class="uk-slider-container pb-3">

        <ul class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid" style="transform: translate3d(0px, 0px, 0px);">
            <li tabindex="-1" class="uk-active">
                <div class="product">
                    <div class="product_info">
                        <div class="product-image">
                            <a href="#">
                                <img src="assets/images/product/1.jpg" alt="">
                            </a>
                        </div>
                        <div class="produc_info">
                            <div class="product-by">
                                <a href="#"> Autos &amp; Vehicles</a>
                            </div>
                            <div class="product-title">
                                <a href="#">Big Shot Boxing</a>
                            </div>
                            <div class="product-price"> $29 </div>
                        </div>
                    </div>
                </div>
            </li>
            <li tabindex="-1" class="uk-active">
                <div class="product">
                    <div class="product_info">
                        <div class="product-image">
                            <a href="#">
                                <img src="assets/images/product/13.jpg" alt="">
                            </a>
                        </div>
                        <div class="produc_info">
                            <div class="product-by">
                                <a href="#"> Parfums </a>
                            </div>
                            <div class="product-title">
                                <a href="#"> Autos &amp; Vehicles</a>
                            </div>
                            <div class="product-price"> $29 </div>
                        </div>
                    </div>
                </div>
            </li>
            <li tabindex="-1" class="uk-active">
                <div class="product">
                    <div class="product_info">
                        <div class="product-image">
                            <a href="#">
                                <img src="assets/images/product/2.jpg" alt="">
                            </a>
                        </div>
                        <div class="produc_info">
                            <div class="product-by">
                                <a href="#"> Electronics </a>
                            </div>
                            <div class="product-title">
                                <a href="#">  Wireless headphones </a>
                            </div>
                            <div class="product-price"> $29 </div>
                        </div>
                    </div>
                </div>
            </li>
            <li tabindex="-1" class="uk-active">
                <div class="product">
                    <div class="product_info">
                        <div class="product-image">
                            <a href="#">
                                <img src="assets/images/product/16.jpg" alt="">
                            </a>
                        </div>
                        <div class="produc_info">
                            <div class="product-by">
                                <a href="#"> Furniture </a>
                            </div>
                            <div class="product-title">
                                <a href="#">  Paper Coffee Cup </a>
                            </div>
                            <div class="product-price"> $29 </div>
                        </div>
                    </div>
                </div>
            </li>
            <li tabindex="-1" class="uk-active">
                <div class="product">
                    <div class="product_info">
                        <div class="product-image">
                            <a href="#">
                                <img src="assets/images/product/15.jpg" alt="">
                            </a>
                        </div>
                        <div class="produc_info">
                            <div class="product-by">
                                <a href="#"> Herbals</a>
                            </div>
                            <div class="product-title">
                                <a href="#"> Herbal Shampoo </a>
                            </div>
                            <div class="product-price"> $29 </div>
                        </div>
                    </div>
                </div>
            </li>
            <li tabindex="-1" class="">
                <div class="product">
                    <div class="product_info">
                        <div class="product-image">
                            <a href="#">
                                <img src="assets/images/product/1.jpg" alt="">
                            </a>
                        </div>
                        <div class="produc_info">
                            <div class="product-by">
                                <a href="#"> Autos &amp; Vehicles</a>
                            </div>
                            <div class="product-title">
                                <a href="#">Big Shot Boxing</a>
                            </div>
                            <div class="product-price"> $29 </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <a class="uk-position-center-left-out uk-position-small uk-hidden-hover slidenav-prev uk-invisible" href="#" uk-slider-item="previous"></a>
        <a class="uk-position-center-right-out uk-position-small uk-hidden-hover slidenav-next" href="#" uk-slider-item="next"></a>

    </div>

</div>

<div class="section-small pt-0">
    <div class="uk-child-width-1-2@m uk-grid-match uk-grid" uk-grid="">
        <div class="uk-first-column">
            <a href="m-single-product.html">
                </a><div class="uk-background-cover rounded p-5 uk-light uk-flex uk-flex-middle" data-src="assets/images/product/7.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/product/7.jpg&quot;);"><a href="m-single-product.html">
                    </a><div class="uk-width-2-3@m"><a href="m-single-product.html">
                        <h2 class="mb-0">$120.99</h2>
                        <h2 class="my-2">Strawberries Fresh</h2>
                        <p> Eiusmod sit amet tempor incidunt sed diam nonummy nibh  </p>
                        </a><a href="#" class="button outline-white circle mt-4">Shop</a>
                    </div>
                </div>
            
        </div>
        <div>
            <a href="m-single-product.html">
                </a><div class="uk-background-cover rounded p-5 uk-light uk-flex uk-flex-middle" style="background-position-x: 52px; background-repeat: repeat; background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/product/2.jpg&quot;);" data-src="assets/images/product/2.jpg" uk-img=""><a href="m-single-product.html">
                    </a><div class="uk-width-2-3@m"><a href="m-single-product.html">
                        <p class="uk-text-small uk-text-danger uk-text-uppercase uk-text-bold mb-0">
                            Limited
                            time
                            only</p>
                        <h4 class="uk-heading-small uk-text-bold my-2">50% OFF</h4>
                        <p>Eiusmod sit amet tempor incidunt sed diam nonummy nibh  !</p>
                        </a><a href="#" class="button white circle">Shop</a>
                    </div>
                </div>
            
        </div>
    </div>
</div>

<div class="section-header">
    <div class="section-header-left">
        <h3> Categories </h3>
    </div>
    <div class="section-header-right">
        <a href="#" class="see-all"> See all</a>
    </div>
</div>

<div class="uk-position-relative uk-slider" uk-slider="finite: true">

    <div class="uk-slider-container pb-3">

        <ul class="uk-slider-items uk-child-width-1-6@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid" style="transform: translate3d(0px, 0px, 0px);">

            <li tabindex="-1" class="uk-active">

                <a href="#">
                    <div class="group-catagroy-card" data-src="assets/images/product/11.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/product/11.jpg&quot;);">
                        <div class="group-catagroy-card-content">
                            <h4> Shoes </h4>
                        </div>
                    </div>
                </a>
            </li>
            <li tabindex="-1" class="uk-active">
                <a href="#">
                    <div class="group-catagroy-card" data-src="assets/images/product/1.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/product/1.jpg&quot;);">
                        <div class="group-catagroy-card-content">
                            <h4> headphones </h4>
                        </div>
                    </div>
                </a>

            </li>
            <li tabindex="-1" class="uk-active">

                <a href="#">
                    <div class="group-catagroy-card" data-src="assets/images/product/7.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/product/7.jpg&quot;);">
                        <div class="group-catagroy-card-content">
                            <h4> Fruits </h4>
                        </div>
                    </div>
                </a>

            </li>
            <li tabindex="-1" class="uk-active">

                <a href="#">
                    <div class="group-catagroy-card" data-src="assets/images/product/4.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/product/4.jpg&quot;);">
                        <div class="group-catagroy-card-content">
                            <h4> Mobiles </h4>
                        </div>
                    </div>
                </a>

            </li>
            <li tabindex="-1" class="uk-active">

                <a href="#">
                    <div class="group-catagroy-card" data-src="assets/images/product/13.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/product/13.jpg&quot;);">
                        <div class="group-catagroy-card-content">
                            <h4> Parfums </h4>
                        </div>
                    </div>
                </a>

            </li>
            <li tabindex="-1" class="uk-active">

                <a href="#">
                    <div class="group-catagroy-card" data-src="assets/images/product/15.jpg" uk-img="" style="background-image: url(&quot;file:///E:/Simplest%20-%20Online%20Community%20HTML%20Template/Simplest%20-%20Online%20Community%20HTML%20Template/main/assets/images/product/15.jpg&quot;);">
                        <div class="group-catagroy-card-content">
                            <h4> Oils </h4>
                        </div>
                    </div>
                </a>

            </li>
            <li tabindex="-1" class="">

                <a href="#">
                    <div class="group-catagroy-card" data-src="assets/images/product/3.jpg" uk-img="">
                        <div class="group-catagroy-card-content">
                            <h4> Laptops </h4>
                        </div>
                    </div>
                </a>

            </li>
        </ul>

        <a class="uk-position-center-left-out uk-position-small uk-hidden-hover slidenav-prev uk-invisible" href="#" uk-slider-item="previous"></a>
        <a class="uk-position-center-right-out uk-position-small uk-hidden-hover slidenav-next" href="#" uk-slider-item="next"></a>

    </div>
</div>

<hr class="my-3 my-sm-2">

<div uk-slider="finite: true" class="uk-slider uk-slider-container">

    <div class="grid-slider-header">
        <div>
            <h3> Brand Collection </h3>
        </div>
        <div class="grid-slider-header-link">

            <a href="#" class="button transparent uk-visible@m"> View all </a>
            <a href="#" class="slide-nav-prev uk-invisible" uk-slider-item="previous"></a>
            <a href="#" class="slide-nav-next" uk-slider-item="next"></a>
        </div>
    </div>

    <ul class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid" style="transform: translate3d(0px, 0px, 0px);">
        <li tabindex="-1" class="uk-active">
            <div class="product">
                <div class="product_info">
                    <div class="product-image">
                        <a href="#">
                            <img src="assets/images/product/2.jpg" alt="">
                        </a>
                    </div>
                    <div class="produc_info">
                        <div class="product-by">
                            <a href="#"> Electronics </a>
                        </div>
                        <div class="product-title">
                            <a href="#">  Wireless headphones </a>
                        </div>
                        <div class="product-price"> $29 </div>
                    </div>
                </div>
            </div>
        </li>
        <li tabindex="-1" class="uk-active">
            <div class="product">
                <div class="product_info">
                    <div class="product-image">
                        <a href="#">
                            <img src="assets/images/product/16.jpg" alt="">
                        </a>
                    </div>
                    <div class="produc_info">
                        <div class="product-by">
                            <a href="#"> Furniture </a>
                        </div>
                        <div class="product-title">
                            <a href="#">  Paper Coffee Cup </a>
                        </div>
                        <div class="product-price"> $29 </div>
                    </div>
                </div>
            </div>
        </li>
        <li tabindex="-1" class="uk-active">
            <div class="product">
                <div class="product_info">
                    <div class="product-image">
                        <a href="#">
                            <img src="assets/images/product/15.jpg" alt="">
                        </a>
                    </div>
                    <div class="produc_info">
                        <div class="product-by">
                            <a href="#"> Herbals</a>
                        </div>
                        <div class="product-title">
                            <a href="#"> Herbal Shampoo </a>
                        </div>
                        <div class="product-price"> $29 </div>
                    </div>
                </div>
            </div>
        </li>
        <li tabindex="-1" class="uk-active">
            <div class="product">
                <div class="product_info">
                    <div class="product-image">
                        <a href="#">
                            <img src="assets/images/product/1.jpg" alt="">
                        </a>
                    </div>
                    <div class="produc_info">
                        <div class="product-by">
                            <a href="#"> Autos &amp; Vehicles</a>
                        </div>
                        <div class="product-title">
                            <a href="#">Big Shot Boxing</a>
                        </div>
                        <div class="product-price"> $29 </div>
                    </div>
                </div>
            </div>
        </li>
        <li tabindex="-1" class="uk-active">
            <div class="product">
                <div class="product_info">
                    <div class="product-image">
                        <a href="#">
                            <img src="assets/images/product/13.jpg" alt="">
                        </a>
                    </div>
                    <div class="produc_info">
                        <div class="product-by">
                            <a href="#"> Parfums </a>
                        </div>
                        <div class="product-title">
                            <a href="#"> Autos &amp; Vehicles</a>
                        </div>
                        <div class="product-price"> $29 </div>
                    </div>
                </div>
            </div>
        </li>
        <li tabindex="-1" class="">
            <div class="product">
                <div class="product_info">
                    <div class="product-image">
                        <a href="#">
                            <img src="assets/images/product/2.jpg" alt="">
                        </a>
                    </div>
                    <div class="produc_info">
                        <div class="product-by">
                            <a href="#"> Electronics </a>
                        </div>
                        <div class="product-title">
                            <a href="#">  Wireless headphones </a>
                        </div>
                        <div class="product-price"> $29 </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>

</div>

<hr class="my-3 my-sm-2">

<div uk-slider="finite: true" class="uk-slider uk-slider-container">

    <div class="grid-slider-header">
        <div>
            <h3> Fresh Fruit </h3>
        </div>
        <div class="grid-slider-header-link">

            <a href="#" class="button transparent uk-visible@m"> View all </a>
            <a href="#" class="slide-nav-prev uk-invisible" uk-slider-item="previous"></a>
            <a href="#" class="slide-nav-next" uk-slider-item="next"></a>
        </div>
    </div>

    <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid" style="transform: translate3d(0px, 0px, 0px);">
        <li tabindex="-1" class="uk-active">
            <div class="product">
                <div class="product_info">
                    <div class="product-image">
                        <a href="#">
                            <img src="assets/images/product/6.jpg" alt="">
                        </a>
                    </div>
                    <div class="produc_info">
                        <div class="product-by">
                            <a href="#">Fruits</a>
                        </div>
                        <div class="product-title">
                            <a href="#">Yogurt Fruit Vanil</a>
                        </div>
                        <div class="product-price"> $29 </div>
                    </div>
                </div>
            </div>
        </li>
        <li tabindex="-1" class="uk-active">
            <div class="product">
                <div class="product_info">
                    <div class="product-image">
                        <a href="#">
                            <img src="assets/images/product/7.jpg" alt="">
                        </a>
                    </div>
                    <div class="produc_info">
                        <div class="product-by">
                            <a href="#"> Fresh Fruits</a>
                        </div>
                        <div class="product-title">
                            <a href="#">awberries Fresh Ripe</a>
                        </div>
                        <div class="product-price"> $29 </div>
                    </div>
                </div>
            </div>
        </li>
        <li tabindex="-1" class="uk-active">
            <div class="product">
                <div class="product_info">
                    <div class="product-image">
                        <a href="#">
                            <img src="assets/images/product/8.jpg" alt="">
                        </a>
                    </div>
                    <div class="produc_info">
                        <div class="product-by">
                            <a href="#">Fresh  Fruits </a>
                        </div>
                        <div class="product-title">
                            <a href="#">Fruit Basket Grapes</a>
                        </div>
                        <div class="product-price"> $29 </div>
                    </div>
                </div>
            </div>
        </li>
        <li tabindex="-1" class="">
            <div class="product">
                <div class="product_info">
                    <div class="product-image">
                        <a href="#">
                            <img src="assets/images/product/9.jpg" alt="">
                        </a>
                    </div>
                    <div class="produc_info">
                        <div class="product-by">
                            <a href="#"> baby oil </a>
                        </div>
                        <div class="product-title">
                            <a href="#">  Cocooil baby oil on desk </a>
                        </div>
                        <div class="product-price"> $29 </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>


</div>
<div class="load-more">
    <button class="btn button">Load more Products</button>
</div>


</div>

@endsection