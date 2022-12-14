<?php include('partialpages/header.php') ?>
            <!-- Menu Content Section Starts-->

            <style>
                @media screen and (max-width: 1199.98px) {
                    .home-details{
                        padding: 30px;
                    }
                    
                    .home-details-image{
                        display: none;
                    }

                    .btn-treatments{
                        display: none;
                    }

                    .discover-treatments-wrapper{
                        font-size: 28px;
                        padding-top: 0px;
                    }

                    .home-intro{
                        font-size: 38px;
                        padding-top: 4rem!important;
                    }
                }

                @media screen and (min-width: 1200px){
                    .home-details{
                        padding-top: 100px; 
                        
                    }

                    .second-home-details{
                        padding-top: 25px;
                    }
                    
                    .discover-treatments-wrapper{
                        padding-top: 0px;
                    }
                    
                    .home-intro{
                        font-size: 35px;
                        padding-top: 6rem!important;
                    }
                }

                .body-wrapper{
                    background: #F5F5F5;
                }

                .fb-post, .reviews-wrapper{
                    background: #F6DDCC;
                }

                .home-intro{
                    font-family: 'Amatic SC';
                    font-weight: bold;
                    color: black;
                }
                
                .fs-5{
                    font-family: 'Amatic SC';
                }
                h5{
                    font-family: 'Amatic SC';
                    font-size: 26px;
                }
                .treatments-card{
                    width: fit-content;    
                    margin-left: auto;
                    margin-right: auto;
                }
                .treatments-card-image{
                    width: 90%;
                    height: 100%;
                    margin:auto;
                    padding-top:15px;
                }
                .treatment-card-title{
                    padding-top: 25px;
                }

                .carousel-indicators-reviews {
                    bottom: -3.5rem;
                    
                }

                .carousel-caption {
                    top: auto;
                    bottom: 0;
                    padding-bottom: 0;
                }

            </style>

                <div class="body-wrapper">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-8 home-details">

                                <img src="./images/Office Pic 1.jpg" class="home-details-image img-responsive" style="width: 100%; height: 400px;">

                            </div>

                            <div class="col-sm-4 align-self-center">
                                <div class="container">
                                    <div class="home-intro text-center">
                                        <p>"Harryette specializes in making your hair and skin healthy and beautiful.</p>
                                        <p>Our mission is to enhance your beauty and to make you feel more confident.</p>
                                        <p>Our vision is a BEYOUTHIFUL YOU!"</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row second-home-details">

                            <div class="col-sm-4 align-self-center">
                                <div class="btn-bookAppointment  pt-2 d-flex justify-content-center">
                                    <a href="#treatments">
                                        <button type="button" class="btn btn-outline-primary btn-lg btn-treatments" >Explore Treatments ???</button>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <img src="./images/Office Pic 2.jpg" class="home-details-image img-responsive" style="width: 100%; height: 400px;">
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-12" style="margin-top: 1.5em;" id="treatments">
                        <div class="hiddentext" style="visibility:hidden">This text is hidden</div>
                    </div>

                    <div class="col-sm-12 py-5">
                        <div class="container">
                            <div class="row">
                                <div class="discover-treatments-wrapper text-center">
                                    <p>DISCOVER THE RIGHT TREATMENTS FOR YOU</p>
                                </div>
                                <div class="col-sm-6 py-3">
									<div class="treatments-card">
                                        <div class="border-0 shadow">
                                            <a href="./hair-service-selection.php#service-body">
                                                <img src="./images/Hair-Service-Line-Image.jpg" height="300px" width="300px" class="img-responsive rounded">
                                            </a>
                                        </div>
                                        <div class="treatment-card-title text-center">
                                            <h5>HAIR SERVICES</h5>
                                        </div> 
                                    </div>  
                                </div>

                                <div class="col-sm-6 py-3">
									<div class="treatments-card">
                                        <div class="border-0 shadow">
                                            <a href="./facial-service-selection.php#service-body">
                                                <img src="./images/Facial-Service-Line-Image.jpg" height="300px" width="300px" class="img-responsive rounded ">
                                            </a>
                                        </div>
                                        <div class="treatment-card-title text-center">
                                            <h5>FACIAL SERVICES</h5>
                                        </div>
                                    </div>                                 
                                </div>
                                <div class="col-sm-6 py-3">
                                    <div class="treatments-card">
                                        <div class="border-0 shadow">
                                            <a href="./underarm-service-selection.php#service-body">
                                                <img src="./images/Underarm-Service-Line-Image.jpg" height="300px" width="300px" class="img-responsive rounded">
                                            </a>
                                        </div>
                                        <div class="treatment-card-title text-center">
                                            <h5>UNDERARM TREATMENTS</h5>
                                        </div>   
                                    </div>          
                                </div>
                                <div class="col-sm-6 py-3">
                                    <div class="treatments-card">
                                        <div class="border-0 shadow">
                                            <a href="./other-service-selection.php#service-body">
                                                <img src="./images/Other-Service-Line-Image.jpg" height="300px" width="300px" class="img-responsive rounded ">
                                            </a>
                                        </div>
                                        <div class="treatment-card-title text-center">
                                            <h5>OTHER SERVICES</h5>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    


                    <div class="col-sm-12 py-5 reviews-wrapper">
                        <div class="discover-treatments-wrapper text-center">
                            <p>FACEBOOK REVIEWS</p>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div id="owl-carousel-reviews" class="owl-carousel owl-theme ">
                                    <div class="item" style="height: 165px">
                                        <div class="card border-0 shadow">                                
                                            <div class="fb-post d-flex justify-content-center" data-href="https://www.facebook.com/tejpal.singh.545arwgetwfk/posts/pfbid028U8EYUyavxNJr3GUtUzmvxSi4ZWRL2pC9ki6EyZg8GCoR5NyjSxngGcKhcqMNWC8l" data-width="750" data-show-text="true"><blockquote cite="https://www.facebook.com/tejpal.singh.545arwgetwfk/posts/7626193997405851" class="fb-xfbml-parse-ignore"><p>Kindest and trustworthy beautician... truly recommended</p>Posted by <a href="#" role="button">Tejpal Singh</a> on&nbsp;<a href="https://www.facebook.com/tejpal.singh.545arwgetwfk/posts/7626193997405851">Wednesday, April 13, 2022</a></blockquote></div>                            
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="card border-0 shadow">
                                        <div class="fb-post d-flex justify-content-center" data-href="https://www.facebook.com/GinebraDurano/posts/pfbid026HUALmHDxL4wWUcSjJWaXoLLdfPKTQn9XUYZwpTCkdvpzkuKsr2zcZF9TtSJUAWRl" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/GinebraDurano/posts/5110058935704134" class="fb-xfbml-parse-ignore"><p>I had my derma-planning treatment at Harryette&#039;s salon last week and I would say, it&#039;s worth it.
                                                Harryette is also the...</p>Posted by <a href="#" role="button">Gin Durano-Delcourt</a> on&nbsp;<a href="https://www.facebook.com/GinebraDurano/posts/5110058935704134">Friday, April 15, 2022</a></blockquote></div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card border-0 shadow">
                                            <div class="fb-post d-flex justify-content-center" data-href="https://www.facebook.com/jhaawn/posts/pfbid0bvC5yS3MyJh2C84s8Z8pH8ckCda34kaCCAPvPASiZuZE97gWc7kKKNm75msRXUwNl" data-width="750" data-show-text="true"><blockquote cite="https://www.facebook.com/jhaawn/posts/10226142686940270" class="fb-xfbml-parse-ignore"><p>Highly Recommended aesthetician ????????????????????????</p>Posted by <a href="https://www.facebook.com/jhaawn">Pariss Ji-yon</a> on&nbsp;<a href="https://www.facebook.com/jhaawn/posts/10226142686940270">Wednesday, April 21, 2021</a></blockquote></div>                                

                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card border-0 shadow">
                                            <div class="fb-post d-flex justify-content-center" data-href="https://www.facebook.com/reygiedelasalaspatal/posts/pfbid0RGpvykXPuC2qKX3rfc55V71TYTptWdnKDEqEy8LZYvDzZzu6AqWViSQ3w6wYhTCdl" data-width="750" data-show-text="true"><blockquote cite="https://www.facebook.com/reygiedelasalaspatal/posts/2032938506846269" class="fb-xfbml-parse-ignore"><p>thank you very much my dear Hayette  napaka husay at napakaganda ng result ng microneedling  babalik at babalik ka...</p>Posted by <a href="#" role="button">Ma Ch??rie</a> on&nbsp;<a href="https://www.facebook.com/reygiedelasalaspatal/posts/2032938506846269">Saturday, February 27, 2021</a></blockquote></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <!-- Menu Content Section Ends-->
            <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0" nonce="SyB9ZZoc"></script>
<?php include('partialpages/footer.php') ?>

<script>
    $('.owl-carousel').owlCarousel({
        items:1,
        margin:10,
        loop: true,
        autoHeight:true,
        autoplayHoverPause:true,
        autoplay:true,
        autoplayTimeout: 2500,
        autoplayHoverPause:true,

    });
</script>
