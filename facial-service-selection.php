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


    </style>

    <body onload="init()">
        <div class="services-wrapper">
            <div class="col-sm-12 services-details" >
                <img src="./images/Clinic Image 1.jpg" class="img-responsive service-details-image" style="width: 100%; height: 400px">
            </div>

            <div class="col-sm-12" id="service-body">
                <div class="hiddentext" style="visibility:hidden">This text is hidden</div>
            </div>  

            <div class="col-sm-12 py-5" >
                <div class="container">
                    <div class="row" >
                        <div class="discover-treatments-wrapper text-center">
                            <p>FACIAL SERVICES</p>
                        </div>
                        
                        <div class="col-sm-4 py-3">
                            <div class="service-card">
                                <div class="border-0 shadow">
                                <a href="./services.php?service=HarryetteFacial">
                                        <img src="./images/HarryetteFacial.jpg" height="330px" width="330px" class="img-responsive" alt="Harryette Facial">
                                    </a>
                                </div>
                                <div class="service-card-title text-center">
                                    <p>Harryette's Facial</p>
                                </div> 
                            </div>  
                        </div>

                        <div class="col-sm-4 py-3">
                            <div class="service-card">
                                <div class="border-0 shadow">
                                    <a href="./services.php?service=HifuFacial">
                                        <img src="./images/harryette-service-image.png" height="330px" width="330px" class="img-responsive" alt="HIFU">
                                    </a>
                                </div>
                                <div class="service-card-title text-center">
                                    <p>HIFU</p>
                                </div> 
                            </div>  
                        </div>

                        <div class="col-sm-4 py-3">
                            <div class="service-card">
                                <div class="border-0 shadow">
                                    <a href="./services.php?service=Microneedling">
                                        <img src="./images/Microneedling.jpg" height="330px" width="330px" class="img-responsive" alt="Microneedling">
                                    </a>
                                </div>
                                <div class="service-card-title text-center">
                                    <p>Microneedling</p>
                                </div> 
                            </div>  
                        </div>

                        <div class="col-sm-4 py-3">
                            <div class="service-card">
                                <div class="border-0 shadow">
                                    <a href="./services.php?service=RFMicroneedling">
                                        <img src="./images/harryette-service-image.png" height="330px" width="330px" class="img-responsive" alt="RF Microneedling">
                                    </a>
                                </div>
                                <div class="service-card-title text-center">
                                    <p>RF Microneedling</p>
                                </div> 
                            </div>  
                        </div>
                        

                        <div class="col-sm-4 py-3">
                            <div class="service-card">
                                <div class="border-0 shadow">
                                <a href="./services.php?service=Mesoestetic">
                                        <img src="./images/Mesoestetic.jpg" height="330px" width="330px" class="img-responsive" alt="Mesoestetic Chemical Peeling">
                                    </a>
                                </div>
                                <div class="service-card-title text-center">
                                    <p>Mesoestetic Chemical Peeling</p>
                                </div> 
                            </div>  
                        </div>

                        <div class="col-sm-4 py-3">
                            <div class="service-card">
                                <div class="border-0 shadow">
                                <a href="./services.php?service=ChanelTreatment">
                                        <img src="./images/ChanelTreatment.jpg" height="330px" width="330px" class="img-responsive" alt="Chanel Treatment">
                                    </a>
                                </div>
                                <div class="service-card-title text-center">
                                    <p>Chanel Treatment</p>
                                </div> 
                            </div>  
                        </div>

                        <div class="col-sm-4 py-3">
                            <div class="service-card">
                                <div class="border-0 shadow">
                                <a href="./services.php?service=CarbonLaser">
                                        <img src="./images/CarbonLaser.jpg" height="330px" width="330px" class="img-responsive" alt="Carbon Laser">
                                    </a>
                                </div>
                                <div class="service-card-title text-center">
                                    <p>Carbon Laser</p>
                                </div> 
                            </div>  
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>

<?php include('partialpages/footer.php') ?>