<head>
        <title>Services | Harryette - Beauty Clinic</title>
    </head>
<?php include('partialpages/header.php') ?>

    <style>
        .services-wrapper{
            background: #F5F5F5;
        }
        .service-title{
            font-family: 'Playfair Display', serif;
            font-size: 32px;
        }
        .service-description{
            font-family: 'Playfair Display', serif;
            font-size: 18px;
        }
        .service-description-content{
            display: none;
        }
        .service-additional-info-title{
            font-family: 'Playfair Display', serif;
            font-size: 22px;
        }

        #serviceImageSegment{
            width: 100%;
            height: 95%;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            position: relative;
            }

        .priceDetails {
            text-align: center;
            padding-top: 100%;
            padding-bottom: 10%;
        }

        .priceDetails .btn, .reserveDetails .btn{
            color: white;
            border-color:  #F6DDCC;
            background-color: #F6DDCC;
        }
        
        .priceDetails .btn:hover, .reserveDetails .btn:hover{
            border-color: #F6DDCC;
            outline: none !important;
            border:2px solid #F6DDCC;
            background-color: white;
            color: #F6DDCC;
        }

        .cardFront, .cardBack {
            width: 90%;
            height: 75%;
            margin-left: 5%;
            margin-top: 3%;
            box-sizing: border-box;
            position: absolute;
            transition: transform 0.5s ease;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background-color: #ebf4ff;
        }
        .cardBack {
            transform: perspective(1000px) rotateY(180deg);
            filter: blur(8px);
            -webkit-filter: blur(8px);
        }

        .cardBack.flipped {
            transform: perspective(1000px) rotateY(0deg);
        }

        .cardFront {
            transform: perspective(1000px) rotateY(0deg);
        }

        .cardFront.flipped {
            transform: perspective(1000px) rotateY(-180deg);
        }

        .service-additional-info-content{
            font-family: 'Playfair Display', serif;
            font-size: 18px;
            line-height: .5;
            display: none;
        }

        .price-prior-notice{
            color: grey; 
        }


    </style>

    <script>

        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
                name = name.replace(/[\[\]]/g, "\\$&");
                var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';

            return decodeURIComponent(results[2].replace(/\+/g, " "));
        }

        function init(){
            const serviceTitleMap = new Map([
                ['ClassicBrazillian' , 'Classic Brazillian'],
                ['PremiumBrazillian', 'Premium Brazillian (Wavy & Curly)'],
                ['DeluxeHair', 'Deluxe Hair'],
                ['BotoxBrazillian', 'Botox Brazillian'],
                ['HifuFacial', 'HIFU w/ Harryette' + "'" + 's Facial'],
                ['Microneedling', 'Microneedling w/ Harryette' + "'" + 's Facial'],
                ['Mesoestetic', 'Mesoestetic Chemical Peeling'],
                ['ChemicalPeeling', 'Chemical Peeling and Microneedling'],
                ['CarbonLaser', 'Carbon Laser w/ Harryette' + "'" + 's Facial'],
                ['WartsRemoval', 'Warts Removal (Per Area)'],
                ['HydraFacial', 'Hydra Facial'],
                ['LightChemicalPeel', 'Light Chemical Peel'],
                ['Dermaplaning', 'Dermaplaning'],
                ['KoreanMask', 'Korean Mask Glutathione, Hyaluronic and Niacinamide'],
                ['LEDTherapy', 'LED Therapy'],
                ['OzoneTherapy', 'Ozone Therapy'],
                ['UnderarmWhitening', 'Underarm Whitening Treatment'],
                ['UnderarmWaxing', 'Underarm Waxing'],
                ['UnderarmLaser', 'Underarm Laser'],
                ['LashLift', 'Eyelash Lift w/ Tint'],
                ['EMSculpt', 'EM Sculpt']
            ]);

            var serviceNameVariable = getParameterByName('service');
            var imageSource = './images/' + serviceNameVariable +'.jpg';

            document.getElementById("serviceImageId").src = imageSource;
            document.getElementById("serviceImageIdBack").src = imageSource;
            document.getElementById("service-title-id").innerHTML = serviceTitleMap.get(serviceNameVariable);

            if (serviceNameVariable != '') {
                $('#' + serviceNameVariable).show();
                $('#' + serviceNameVariable + '-Price').show();
            } 
        }

    </script>
    <body onload="init()">
        <div class="services-wrapper" >
            <div class="col-sm-12 services-details" style="padding-left: 0px; padding-right: 0px; padding-top: 100px; padding-bottom: 25px;">
            </div>

            <div class="col-sm-12 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">

                                <div class="service-title pt-2">
                                    <p id="service-title-id"></p>    
                                </div>

                                <div class="service-description pb-5 pt-3">
                                    <div id="ClassicBrazillian" class="service-description-content">
                                        <p>The Brazilian treatment is a hair care treatment that helps to control frizz and leaves hair hydrated and resistant to heat styling. It is safe for colored hair, lasts for three to four months, and can be used alongside other hair care products that do not contain sulfates and chorine.</p>
                                    </div>

                                    <div id="PremiumBrazillian" class="service-description-content">
                                        <p>Designed for Wavy , frizzy and curly hair, this thermo-potentiated treatment for damaged hair offers a rejuvenation cure, an instant reconstruction.
                                        It also gives 80% straight and smooth hair, with long-lasting results, controls frizz, even in humid weather. Premium Brazilian treatment making it softer, shinier, smoother and stiffer.</p>
                                    </div>

                                    <div id="DeluxeHair" class="service-description-content">
                                        <p>Revitalizing and highly restorative treatment for dry and damaged hair
                                            This product is enriched with keratin and collagen which allows the hair to be smooth, shine, softness and lightness to the hair fiber  and repair in depth.</p>
                                    </div>

                                    <div id="BotoxBrazillian" class="service-description-content">
                                        <p>
                                            is a non-chemical conditioning treatment that infuses your hair with ceramides derived from Meadow’s Foam providing a protective barrier for all hair types. Meaning it will reduce frizziness and repair any damage to your hair. It is an excellent option for both men and women if you are looking for a treatment that does not involve any harsh chemicals.
                                        </p>
                                    </div>
                                </div>

                                <div class="service-additional-info pt-3">
                                    <div class="service-additional-info-title">
                                        <p>AT A GLANCE</p>
                                        <div id="ClassicBrazillian-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 2 hours</p>
                                            <p><b>PRICE:</b> Starts at: 60€ per session</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>

                                        <div id="PremiumBrazillian-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 2 &#189 hours</p>
                                            <p><b>PRICE:</b> Starts at: 70€ per session</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>

                                        <div id="DeluxeHair-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 2 hours</p>
                                            <p><b>PRICE:</b> 80€ per session</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>

                                        <div id="BotoxBrazillian-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 2 &#189 hours</p>
                                            <p><b>PRICE:</b> 60€ per session</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <div class="col-sm-2"></div>            
                        <div class="service-image col-sm-4">
                            <div id="serviceImageSegment">
                                    <img id="serviceImageId" src="" class="img-responsive cardFront">
                                    <img id="serviceImageIdBack" src="" class="img-responsive cardBack">
                                <div class="d-grid gap-2 col-6 mx-auto priceDetails">
                                    <button type="button" id="btn-price" class="btn btn-outline-primary">PRICE</button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"data-bs-toggle="modal" data-bs-target="#myModal">RESERVE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>

            const front = document.getElementById('serviceImageId')
            const back = document.getElementById('serviceImageIdBack')
            const btn = document.getElementById('btn-price')

            function handleFlip() {
                front.classList.toggle('flipped')
                back.classList.toggle('flipped')
            }

            btn.addEventListener('click', handleFlip)

        </script>
    </body>

<?php include('partialpages/footer.php') ?>