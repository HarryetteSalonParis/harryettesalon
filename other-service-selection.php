<head>
        <title>Services | Harryette Salon</title>
    </head>
<?php include('partialpages/header.php') ?>

    <style>
        @media screen and (max-width: 576px) {
            .services-details{
                padding: 30px;
            }
            
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
            <div class="col-sm-12" style="padding-left: 0px; padding-right: 0px; padding-top: 100px;">
                    <img src="./images/Clinic Image 1.jpg" class="img-responsive service-details-image" style="width: 100%;">
            </div>

            <div class="col-sm-12" id="service-body">
                <div class="hiddentext" style="visibility:hidden">This text is hidden</div>
            </div>  

            <div class="col-sm-12 py-5">
                <div class="container">
                    <div class="row">
                        <div class="discover-treatments-wrapper text-center">
                            <p>OTHER SERVICES</p>
                        </div>

                        <div class="col-sm-4 py-3">
                            <div class="service-card">
                                <div class="border-0 shadow">
                                <a href="./services.php?service=LashLift">
                                        <img src="./images/LashLift.jpg" height="330px" width="330px" class="img-responsive" alt="Lash Lift">
                                    </a>
                                </div>
                                <div class="service-card-title text-center">
                                    <p>Lash Lift</p>
                                </div> 
                            </div>  
                        </div>

                        <div class="col-sm-4 py-3">
                            <div class="service-card">
                                <div class="border-0 shadow">
                                <a href="./services.php?service=EMSculpt">
                                        <img src="./images/EMSculpt.jpg" height="330px" width="330px" class="img-responsive" alt="EM Sculpt">
                                    </a>
                                </div>
                                <div class="service-card-title text-center">
                                    <p>EM Sculpt</p>
                                </div> 
                            </div>  
                        </div>

                        <div class="col-sm-4 py-3">
                            <div class="service-card">
                                <div class="border-0 shadow">
                                <a href="./services.php?service=VAJACIAL">
                                        <img src="./images/harryette-service-image.png" height="330px" width="330px" class="img-responsive" alt="VAJACIAL">
                                    </a>
                                </div>
                                <div class="service-card-title text-center">
                                    <p>VAJACIAL</p>
                                </div> 
                            </div>  
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>

<?php include('partialpages/footer.php') ?>