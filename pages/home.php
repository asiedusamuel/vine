<link href="./assets/styles/layerSlider/layerslider.css" rel="stylesheet" type="text/css">
<script src="./assets/scripts/layerSlider/greensock.js"></script>
<script src="./assets/scripts/layerSlider/layerslider.transitions.js"></script>
<script src="./assets/scripts/layerSlider/layerslider.kreaturamedia.jquery.js"></script>
<?php
$controller->set("page-title", "Home");
include 'inc/slider.php';
// Include Slider
$slider = new Slider;
?>
<?=$slider->slide()?>
<style>
    .about-the-church {
        background-color: #eee;

    }

    .about-the-church h2.listening-title {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .about-the-church h2.listening-title::before,
    .about-the-church h2.listening-title::after {
        background-color: #ddd;
        content: "";
        display: inline-block;
        height: 1px;
        position: relative;
        vertical-align: middle;
        width: 30%;
    }

    .about-the-church h2.listening-title::before {
        margin-right: 10px;
    }

    .about-the-church h2.listening-title::after {
        margin-left: 10px;
    }

    .about-the-church .article-image {
        background-position: center center;
        background-size: cover;
        padding: 30%;
    }

    div[data-id="2918786742"] {
        z-index: 10;
    }

    .upcoming-events .listing-title {
        background: rgba(128, 0, 128, 0.897);
        color: #ffffff;
        padding-top: 66px;
        padding-bottom: 66px;
        padding-left: 60px;
        text-transform: uppercase;
        font-size: 15px;
    }

    .upcoming-events .listing-title h1 {
        font-family: "Montserrat", Arial, Helvetica, sans-serif;
        font-size: 40px;
        font-weight: 500;
    }

    .upcoming-events .entry-template {
        padding: 0;
    }

    /*
    .upcoming-events  .article-content {
        padding-top: 133px;
        padding-bottom: 0;
        transition: padding-top 1s ease;
    }
    */

    .upcoming-events .article-content:hover {
        
    }

    .upcoming-events .article-content:hover .article-content-inner {
        margin-top: 0;
    }

    .upcoming-events .article-content:hover .article-short-content {
        display: block;
    }

    .upcoming-events .article-short-content {
        display: none;
        transition: all .5s ease-in-out;
    }

    .upcoming-events .article-content-inner {
        background: rgba(255, 255, 255, 0.76);
        padding: 10px;
        height: 100%;
        margin-top: 133px;
        transition: margin-top 1s ease;
    }

    .upcoming-events .article-content {
        background-position: center center;
        background-size: cover;
        height: 203px;
        overflow: hidden;
        transition: all 0.5s ease;
    }

    .upcoming-events .article-date {
        font-weight: 300;
        text-transform: uppercase;
    }

    .upcoming-events .article-date,
    .upcoming-events .article-title {
        color: #494949;
    }

    .upcoming-events .article-title {
        font-weight: 500;
        font-size: 18px;
        text-transform: uppercase;
    }

    /*
    .upcoming-events  .article-short-content {
        display: none;
    }
    */

</style>
<div class="row pb-5 about-the-church">
    <div class="col-md-8 offset-md-2 text-center wow fadeInUp  animated" style="visibility: visible; animation-name: fadeInUp;">
        <h2 class="listening-title">
            About The Church
        </h2>
    </div>
    <div class="container entry-template">
        <div class="row">
            <div class="col-md-4 wow fadeInRight  animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
                <div class="article-image" style="background-image: url(./assets/images/articles/art-our-community.jpg);"></div>
                <h3>Vine Bezaleel</h3>
                We are a Pentecostal, Charismatic Christian ministry founded in April 4,1994 focusing on sharing information related to the Church and our preparation for the Second-Coming of our Lord Jesus Christ...
                <br>
                <br>
                <br>
                <a href="./vine-bezaleel/" class="ui button" style="font-weight: 300;background-color: rgba(128, 0, 128, 0.597); color:#ffffff;">Read More</a>
            </div>
            <div class="col-md-4 wow fadeInRight  animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                <div class="article-image" style="background-image: url(./assets/images/articles/chris-yarney-2.jpg);"></div>
                <h3>Chris Yarney</h3>
                I gave my life to the Lord Jesus Christ in 1975 while in Middle school. I attended my first Scripture Union Youth Camp in 1976 at Tamale, Ghana.

In 1980, I was made Scripture Union Prayer Secretary...
                <br>
                <br>
                <br>
                <a href="./chris-yarney-cj/" class="ui button" style="font-weight: 300;background-color: rgba(128, 0, 128, 0.597); color:#ffffff;">Read More</a>
            </div>
            <div class="col-md-4 wow fadeInRight  animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                <div class="article-image" style="background-image: url(./assets/images/articles/evelyn-yarney.jpg);"></div>
                <h3>Evelyn Yarney</h3>
                Evelyn (Sarpong) Yarney, a Ghanaian born American is married to Christopher Yarney with two children, Madeleine and Caleb. Evelyn grew up and started a Carrier in Business Administration in Ghana...
                <br>
                <br>
                <br>
                <a href="./evelyn-yarney/" class="ui button" style="font-weight: 300;background-color: rgba(128, 0, 128, 0.597); color:#ffffff;">Read More</a>
            </div>
        </div>
    </div>

</div>
<div class="row upcoming-events">
    <div class="col-lg-3 p-0">
        <div class="listing-title wow fadeInLeft  animated" style="visibility: visible; animation-name: fadeInLeft;">
            Upcoming<h1>Events</h1>
        </div>
    </div>
    <div class="col-lg-9 p-0 entry-template">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-4 p-0 wow fadeInRight  animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
                    <div class="article-content" style="background-image: url(./assets/images/articles/news2.jpg);">
                        <div class="article-content-inner">
                            <div class="article-date">Friday, 30th Nov, 2018</div>
                            <h2 class="article-title">Transforming Life</h2>
                            <p class="article-short-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
								Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...
                                <br>
                                <br>
                                <a href="./test-news/" class="ui button mini" style="margin-bottom:5px;font-weight: 300;background-color: rgba(128, 0, 128, 0.897); color:#ffffff;">Read
                                    More</a>
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 p-0 wow fadeInRight  animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                    <div class="article-content" style="background-image: url(./assets/images/articles/news3.jpg);">
                        <div class="article-content-inner">
                            <div class="article-date">Thursday, 1st Jan, 1970</div>
                            <h2 class="article-title">Relationship With God</h2>
                            <p class="article-short-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
								Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...
                                <br>
                                <br>
                                <a href="./relationship-with-god/" class="ui button mini" style="margin-bottom:5px;font-weight: 300;background-color: rgba(128, 0, 128, 0.897); color:#ffffff;">Read
                                    More</a>
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 p-0 wow fadeInRight  animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                    <div class="article-content" style="background-image: url(./assets/images/articles/news4.jpg);">
                        <div class="article-content-inner">
                            <div class="article-date">Thursday, 1st Jan, 1970</div>
                            <h2 class="article-title">Abundant Life</h2>
                            <p class="article-short-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
								Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...
                                <br>
                                <br>
                                <a href="./abundant-life/" class="ui button mini" style="margin-bottom:5px;font-weight: 300;background-color: rgba(128, 0, 128, 0.897); color:#ffffff;">Read
                                    More</a>
                            </p>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<div style="position:absolute; z-index:1000;">
<div class="ui buttons inverted mini bg-black">
    <button class="ui button play-puase"><i class="icon pause"></i></button>
    <a title="Download Transcript" target="_blank" href="./assets/narration - transcript.txt" class="ui button"><i class="icon download"></i></a>
</div>
<audio controls="" id="narrator" style="display:none;" autoplay src="./assets/audio/narrator.mp3"></audio>
</div>