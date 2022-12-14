<html>
    <head>
        <title>Harryette Salon</title>
        <link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png">
        <link rel="manifest" href="./images/site.webmanifest">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
            crossorigin="anonymous" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
            integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
            crossorigin="anonymous" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic SC">

        
        

        <!--<link rel="stylesheet" href="../css/styles.css">-->

        <script>
            function bookAnAppointment()
            {
                location.href = "https://www.appointfix.com/book/HARRYETTE";
            };
        </script>



        <style>
            @media screen and (max-width: 1199.98px) {
                .col-sm-2{
                    flex: 0 0 auto;
                    width: max-content;  
                    font-size: 5px;
                }
                .justify-content-start{
                    justify-content: center!important;
                }

                .navbar-logo{
                    margin-left: -60px;
                }

                .service-additional-info{
                    padding-bottom: 25px;
                }
                
            }

            @media screen and (min-width: 1200px){
                .col-sm-2{
                    flex: 0 0 auto;
                    width: max-content;

                }
            }

            #dropdownMenuLink{
                background-color: #F6DDCC;
            }

            .nav-link{
                text-align: -webkit-center;
                font-size: 28px;
                font-family: 'Amatic SC';
                font-weight: bold;
            }

            body{
                background-color: #F5F5F5;
            }
            
            .header-wrapper{
                transition: top 0.5s;
            }

            .discover-treatments-wrapper{
                font-family: 'Amatic SC';
                font-size: 32px;
                font-weight: bold;
            }

            .service-card-title{
                padding-top: 25px;
                font-family: 'Amatic SC';
                font-size: 26px;
            }

            .dropdown-menu{
                font-family: 'Amatic SC';
                font-size: 20px;
            }
            


            
        </style>
    </head>
    
    <header>
            <div id="navbar" class="header-wrapper fixed-top" style="background: #F6DDCC;">
                <div class="col-sm-12">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="navbar-logo d-flex justify-content-start">
                                <img src="./images/Harryette-Plain-Logo.svg" height="60px !important" width="300px">
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon">
                                    </span>
                                </button>
                            </div> 
                            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Services
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="./hair-service-selection.php#service-body">Hair Services</a>
                                            <!--<a class="dropdown-item" href="./hifu-service-selection.php#service-body">HIFU Services</a>-->
                                            <a class="dropdown-item" href="./facial-service-selection.php#service-body">Facial Services</a>
                                            <a class="dropdown-item" href="./underarm-service-selection.php#service-body">Underarms Treatment</a>
                                            <a class="dropdown-item" href="./other-service-selection.php#service-body">Other Services</a>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#myModal">Book</a>
                                    </li>
                                    <!--
                                    <li class="nav-item">
                                        <a class="nav-link" href="./gallery.php">Gallery</a>
                                    </li>
                                    -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="./contact.php#contact-body">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>   
                </div> 
            </div>
        </header>
        <body>
