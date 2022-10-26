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
                height: 200px;
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
                            <p>HIFU SERVICES</p>
                        </div>

                        <div class="col-sm-4 py-3">
                            <div class="service-card">
                                <div class="border-0 shadow">
                                    <a href="./services.php?service=HifuFacial">
                                        <img src="./images/harryette-service-image.png" height="330px" width="330px" class="img-responsive" alt="HIFU w/ Facial">
                                    </a>
                                </div>
                                <div class="service-card-title text-center">
                                    <p>HIFU w/ Facial</p>
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
                                <a href="./services.php?service=ChemicalPeeling">
                                        <img src="./images/harryette-service-image.png" height="330px" width="330px" class="img-responsive" alt="Chemical Peeling">
                                    </a>
                                </div>
                                <div class="service-card-title text-center">
                                    <p>Chemical Peeling</p>
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

                        <div class="col-sm-4 py-3">
                            <div class="service-card">
                                <div class="border-0 shadow">
                                <a href="./services.php?service=WartsRemoval">
                                        <img src="./images/WartsRemoval.jpg" height="330px" width="330px" class="img-responsive rounded" alt="Warts Removal">
                                    </a>
                                </div>
                                <div class="service-card-title text-center">
                                    <p>Warts Removal</p>
                                </div> 
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

<?php include('partialpages/footer.php') ?>