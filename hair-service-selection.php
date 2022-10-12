<head>
        <title>Services | Harryette - Beauty Clinic</title>
    </head>
<?php include('partialpages/header.php') ?>

    <style>
        @media screen and (max-width: 576px) {

            .service-details-image{
                height: 200px;
            }
        }

        @media screen and (min-width: 576px){
            .services-details{
                padding-top: 100px; 
                padding-bottom: 25px;
            }

            .service-details-image{
                height: 400px;
            }
        }

        .service-card{
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
        }


    </style>

    <body onload="init()">
        <div class="services-wrapper">
            <div class="col-sm-12" style="padding-left: 0px; padding-right: 0px; padding-top: 100px; padding-bottom: 25px;">
                    <img src="./images/Clinic Image 1.jpg" class="img-responsive service-details-image" style="width: 100%;">
            </div>

            <div class="col-sm-12 py-5" id="service-body">
                <div class="container">
                    <div class="row">
                        <div class="discover-treatments-wrapper text-center">
                            <p>HAIR SERVICES</p>
                        </div>
                        <div class="col-sm-4 py-3">
                            <div class="service-card">
                                <div class="border-0 shadow">
                                    <a href="./services.php?service=ClassicBrazillian">
                                        <img src="./images/ClassicBrazillian.jpg" height="330px" width="330px" class="img-responsive" alt="Classic Brazillian Treatment">
                                    </a>
                                </div>
                                <div class="service-card-title text-center">
                                    <p>Classic Brazillian</p>
                                </div> 
                            </div>  
                        </div>

                        <div class="col-sm-4 py-3">
                            <div class="service-card">
                                <div class="border-0 shadow">
                                    <a href="./services.php?service=PremiumBrazillian">
                                        <img src="./images/PremiumBrazillian.jpg" height="330px" width="330px" class="img-responsive" alt="Premium Brazillian Treatment">
                                    </a>
                                </div>
                                <div class="service-card-title text-center">
                                    <p>Premium Brazillian</p>
                                </div> 
                            </div>  
                        </div>

                        <div class="col-sm-4 py-3">
                            <div class="service-card">
                                <div class="border-0 shadow">
                                    <a href="./services.php?service=DeluxeHair">
                                        <img src="./images/DeluxeHair.jpg" height="330px" width="330px" class="img-responsive" alt="Deluxe Hair Treatment">
                                    </a>
                                </div>
                                <div class="service-card-title text-center">
                                    <p>Deluxe Hair</p>
                                </div> 
                            </div>  
                        </div>

                        <div class="col-sm-4 py-3">
                            <div class="service-card">
                                <div class="border-0 shadow">
                                    <a href="./services.php?service=BotoxBrazillian">
                                        <img src="./images/BotoxBrazillian.jpg" height="330px" width="330px" class="img-responsive" alt="Botox Brazillian Treatment">
                                    </a>
                                </div>
                                <div class="service-card-title text-center">
                                    <p>Botox Brazilian</p>
                                </div> 
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
<?php include('partialpages/footer.php') ?>