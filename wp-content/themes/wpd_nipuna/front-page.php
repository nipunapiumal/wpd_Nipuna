<?php

get_header();
?>

	<main id="primary" class="site-main">
        <div class="row slider-style">
            <div class="col-12">
            <div class="container">
                    <div class="custom-owl-style">
                        <div class="owl-carousel owl-theme">
                        <div class="item">
                            <h1 class="slider-sub-title">DEVIL'S</h1>
                            <h1 class="slider-title">STAIRECASE</h1>
                            <hr>
                            <h4 class="slider-des">Devil's way but end is heaven</h4>
                            <h5 class="slider-sub-des">It is a long established fact that a reader will be distracted by the readable content of a page when looking at <br>
                            The point of using Lorem Ipsum is that it has a more-or-less normal distributio</h5>
                        </div>
                        <div class="item">
                            <h1 class="slider-sub-title">DEVIL'S</h1>
                            <h1 class="slider-title">STAIRECASE</h1>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
	</main>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
    $( document ).ready(function() {
        $('.custom-owl-style .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    items:1
})
    });
    </script>
<?php
get_sidebar();
get_footer();
