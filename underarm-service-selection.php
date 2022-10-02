<head>
        <title>Services | Harryette - Beauty Clinic</title>
    </head>
<?php include('partialpages/header.php') ?>

    <style>
        @media screen and (max-width: 576px) {
            .services-details{
                padding: 30px;
            }
            
            .service-details-image{
                display: none;
            }
        }

        @media screen and (min-width: 576px){
            .services-details{
                padding-top: 100px; 
                padding-bottom: 25px;
            }
        }

        .service-card{
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
        }
        .service-card-title{
            padding-top: 25px;
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            line-height: 1;
        }
        .discover-treatments-wrapper{
            font-family: 'Playfair Display', serif;
            font-size: 28px;
        }
    </style>

    <body onload="init()">
        <div class="services-wrapper">
            <div class="col-sm-12 services-details">
                <img src="./images/Clinic Image 1.jpg" class="img-responsive service-details-image" style="width: 100%; height: 400px">
            </div>

            <div class="col-sm-12 py-5" id="service-body">
                <div class="container">
                    <div class="row">
                        <div class="discover-treatments-wrapper text-center">
                            <p>UNDERARM TREATMENTS</p>
                        </div>

                        <div class="col-sm-4 py-3">
                            <div class="service-card">
                                <div class="border-0 shadow">
                                <a href="./services.php?service=UnderarmWhitening">
                                        <img src="./images/UnderarmWhitening.jpg" height="330px" width="330px" class="img-responsive" alt="Whitening">
                                    </a>
                                </div>
                                <div class="service-card-title text-center">
                                    <p>Whitening</p>
                                </div> 
                            </div>  
                        </div>

                        <div class="col-sm-4 py-3">
                            <div class="service-card">
                                <div class="border-0 shadow">
                                <a href="./services.php?service=UnderarmWaxing">
                                        <img src="./images/UnderarmWaxing.jpg" height="330px" width="330px" class="img-responsive" alt="Waxing">
                                    </a>
                                </div>
                                <div class="service-card-title text-center">
                                    <p>Waxing</p>
                                </div> 
                            </div>  
                        </div>

                        <div class="col-sm-4 py-3">
                            <div class="service-card">
                                <div class="border-0 shadow">
                                <a href="./services.php?service=UnderarmLaser">
                                        <img src="./images/UnderarmLaser.jpg" height="330px" width="330px" class="img-responsive" alt="Laser">
                                    </a>
                                </div>
                                <div class="service-card-title text-center">
                                    <p>Laser</p>
                                </div> 
                            </div>  
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>

<?php include('partialpages/footer.php') ?>