<head>
        <title>Services | Harryette Salon</title>
    </head>
<?php include('partialpages/header.php') ?>

    <style>

        @media screen and (max-width: 576px) {

            .service-additional-info-content{
                line-height: 1;
            }
        }

        @media screen and (min-width: 576px){
            .service-additional-info-content{
                line-height: .5;
            }
        }
        
        .services-wrapper{
            background: #F5F5F5;
        }
        .service-title{
            font-family: 'Amatic SC';
            font-size: 32px;
            font-weight: bold;
        }
        .service-description{
            font-family: 'Amatic SC';
            font-size: 25px;
        }
        .service-description-content{
            display: none;
        }
        .service-additional-info-title{
            font-family: 'Amatic SC';
            font-size: 24px;
        }

        #serviceImageSegment{
            border-radius: 15px;
            width: 100%;
            height: max-content;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            position: relative;
            }

        .priceDetails {
            text-align: center;
            padding-top: 100%;
            padding-bottom: 5%;
        }

        .priceDetails .btn, .reserveDetails .btn{
            color: white;
            border-color:  #F6DDCC;
            background-color: #F6DDCC;
        }
        
        .priceDetails .btn:hover, .reserveDetails .btn:hover{
            border-color: #F6DDCC;
            background-color: white;
            color: #F6DDCC;
        }

        .serviceImage{
            width: 90%;
            height: 85%;
            margin: 5%; 
            box-sizing: border-box;
            position: absolute;
        }

        .cardFrontImage  {
            width: 100%;
            height: 95%;

        }

        .service-additional-info-content{
            font-family: 'Amatic SC';
            font-size: 25px;
            display: none;
            color: black;
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
                ['HifuFacial', 'HIFU'],
                ['Microneedling', 'Microneedling + <a href="/services.php?service=HarryetteFacial" style="color: black;">Harryette' + "'" + 's Facial</a>'],
                ['RFMicroneedling', 'RF Microneedling + <a href="/services.php?service=HarryetteFacial" style="color: black;">Harryette' + "'" + 's Facial</a>'],
                ['Mesoestetic', 'Mesoestetic Chemical Peeling'],
                ['ChanelTreatment', 'Chanel Treatment'],
                ['CarbonLaser', 'Carbon Laser + <a href="/services.php?service=HarryetteFacial" style="color: black;">Harryette' + "'" + 's Facial</a>'],
                ['HarryetteFacial', 'Harryette' + "'" + 's Facial'],
                ['LightChemicalPeel', 'Light Chemical Peel'],
                ['Dermaplaning', 'Dermaplaning'],
                ['KoreanMask', 'Korean Mask Glutathione, Hyaluronic and Niacinamide'],
                ['LEDTherapy', 'LED Therapy'],
                ['OzoneTherapy', 'Ozone Therapy'],
                ['UnderarmWhitening', 'Underarm Whitening Treatment'],
                ['UnderarmWaxing', 'Underarm Waxing'],
                ['UnderarmLaser', 'Underarm Laser'],
                ['LashLift', 'Eyelash Lift w/ Tint'],
                ['EMSculpt', 'EM Sculpt'],
                ['VAJACIAL', 'VAJACIAL']
            ]);

            var serviceNameVariable = getParameterByName('service');
            var imageSource = './images/' + serviceNameVariable +'.jpg';
            document.getElementById("serviceImageId").src = imageSource;
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
                        
                        <div class="service-title pt-2">
                            <p id="service-title-id"></p>    
                        </div>

                        <div class="col-sm-6">
                            <div class="row">

                                <div class="service-description pb-5 pt-3">
                                    <div id="ClassicBrazillian" class="service-description-content">
                                        <p>is a hair care treatment that helps to control frizz and leaves hair hydrated and resistant to heat styling. It is safe for colored hair, lasts for three to four months, and can be used alongside other hair care products that do not contain sulfates and chorine.</p>
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
                                            is a non-chemical conditioning treatment that infuses your hair with ceramides derived from Meadow???s Foam providing a protective barrier for all hair types. Meaning it will reduce frizziness and repair any damage to your hair. It is an excellent option for both men and women if you are looking for a treatment that does not involve any harsh chemicals.
                                        </p>
                                    </div>

                                    <div id="HarryetteFacial" class="service-description-content">
                                        includes:
                                        <ul>
                                            <li><b>Deep Cleaning</b> - Help improve overall skin texture, tone, and appearance. This is due to the deep exfoliation that cleans your pores, removing debris and allowing for better penetration of face serums tailored to your skin.</li>
                                            <li><b>Light Chemical Peel</b> - Helps removes dead skin cell,moisturizes and reduces inflammation of acne.</li>
                                            <li><b>Derma Planning</b> - Hair removal can leave your skin brighter and smoother. The treatment may soften fine lines and wrinkles and ease hyperpigmentation, or uneven skin tone. It's also used to treat deep acne scars.</li>
                                            <li><b>Korean Mask</b> - (Glutathione,Hyaluronic Acid and Niacinamide) Mask promote whitening,hydration,nourishment and skin clarity helping your skin achieve a dazzling look .</li>
                                            <li><b>LED Therapy</b> - The treatment uses varying wavelengths of light to trigger the skin???s natural healing processes to repair the skin. </li>
                                            <li><b>Ozone Therapy</b> - Benefits: Acne Removal, Inhibit bacterial inflammation and remove acne, Quickly kill bacteria and mites in skin, Tightening Skin, Balance skin, remove edema and repair scars, Fine pores and Go deep into the source and repair from the inside out</li>
                                        </ul>
                                    </div>

                                    <div id="HifuFacial" class="service-description-content">
                                        <p>
                                            is a non-surgical facial lifting and skin tightening procedure that uses ultrasound to boost the production of collagen and elastin that gives the skin a noticeable lift and tightness. This treatment is perfect to improve laxity in the eyes, jowl, and neck for a more defined feature.                                       
                                        </p>

                                        <p>
                                            Also Available:
                                            <ul>
                                                <li>w/ Harryette's Facial</li>
                                                <li>w/ Harryette's Facial and Skin Booster</li>
                                            </ul>
                                        </p>
                                    </div>

                                    <div id="Mesoestetic" class="service-description-content">
                                        <p>
                                            is a specially formulated chemical peel that can be used to address all types of hyperpigmentation on the face and body. Effectively fade unwanted excess pigment and also works to control melanocyte activity. Melanocytes are the skin cells that are responsible for producing melanin, which is the component of the skin that gives it pigment. Designed to treat and fade the appearance of visible skin discoloration, dark spots, and photo aging, in a gentle yet efficient manner. Delicate areas of the body such as the inner thighs, groin, axillae, face, and under eyes may be impacted by hyperpigmentation but can not be treated with traditional chemical peels, which are far too irritating for use on the sensitive skin in these areas.
                                        </p>
                                    </div>

                                    <div id="Microneedling" class="service-description-content">
                                        <p>
                                            Microneedling is a minimally invasive cosmetic procedure that???s used to treat skin concerns by stimulating collagen production. Also known as collagen induction therapy, this treatment creates micro-punctures in the skin using miniature, sterilized needles.
                                            <br><br>
                                            the skin???s healing process after microneedling can help reduce the appearance of scars and dark spots as well as improve skin elasticity.
                                        </p>
                                    </div>

                                    <div id="RFMicroneedling" class="service-description-content">
                                        <p>
                                            RF Microneedling is a skin rejuvenation treatment that uses a combination of microneedling and radiofrequency (RF) energy to stimulate collagen and elastin production. It can be used on your face, neck, or body, is ideal for any skin type, and it is especially helpful in reducing acne scarring and fine lines.
                                        </p>
                                    </div>

                                    <div id="ChanelTreatment" class="service-description-content">
                                        <p>
                                            Chanel Treatment a cocktail formula consisting of essential vitamins, minerals, and antioxidants for skin rejuvenation. It is also known as Filorga NCTF (New Cellular Treatment Factor), which has over 55 ingredients to trigger natural skin healing for better facial appearance.
                                            <br><br>
                                            The treatment is popular for the ones who seek a natural remedy for the anti-aging effect such as smoothening fine wrinkles, stimulating collagen production for firm skin, brightening dull skin tone, re-hydrating skin dryness, and boosting overall healthy skin condition.
                                        </p>

                                        Includes:
                                        <ul>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <li>Deep Cleaning</li>
                                                    <li>Chemical Peel</li>
                                                    <li>Derma Planning</li>
                                                    <li>Oxygen  Scaling</li>
                                                </div>

                                                <div class="col-sm-6">
                                                    <li>Microneedling</li>
                                                    <li>Korean Mask</li>
                                                    <li>Led Therapy</li>
                                                    <li>Ozone Treatment</li>
                                                </div>
                                            </div>
                                        </ul>

                                        <div class="row pt-3">
                                            <div class="col-sm-6">
                                                <p style="color: green; font-weight: bold;">Advantages:</p>
                                                <ul>
                                                    <li>Rejuvenates skin</li>
                                                    <li>Brightens and smoothens skin</li>
                                                    <li>Rehydrates and maintain moistured skin</li>
                                                    <li>Enhances natural glowing effect</li>
                                                    <li>Shrinks pores opening</li>
                                                    <li>Lightens wrinkles and fine lines</li>
                                                </ul>
                                            </div>

                                            <div class="col-sm-6">
                                                <p style="color: red; font-weight: bold;">Limitation:</p>
                                                <ul>
                                                    <li>Tiny round bumpy marks may be noticed for a few days</li>
                                                    <li>Little scabs would form and fall off within 7 days</li>
                                                    <li>Face cleansing may be done the next day with lukewarm water</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="CarbonLaser" class="service-description-content">
                                        <p>
                                            Carbon Laser peel is a superficial treatment that helps with acne, enlarged pores, oily skin, and uneven skin tone. They're sometimes called carbon laser facials.
                                            a carbon laser peel isn???t a traditional chemical peel. Instead, your doctor uses a carbon solution and lasers to create a peeling effect. The lasers don???t penetrate the skin too deeply, so there's very little recovery time. The treatment takes about 30 minutes, and you can resume regular activity right away.                                        </p>
                                    </div>

                                    <div id="UnderarmLaser" class="service-description-content">
                                        <p>
                                            Underarms Laser Treatment which is revolutionary in many ways and which renders obsolete traditional hair removal methods such as shaving, plucking and waxing. Laser uses pulses of light to permanently remove undesired hair growth without stubble, ingrown hairs, redness or other irritation. Infinitely smooth skin, without any pain or irritation, 
                                            After every treatment, the number of hairs is reduced, resulting in beautiful, smooth results for life.
                                        </p>
                                    </div>

                                    <div id="UnderarmWhitening" class="service-description-content">
                                        <p>
                                            Be more confident in your underarm with the help of Underarm  Whitening! With underarm diamond peel that uses a whitening soap, bleaching scrub, whitening mask, and whitening solution, you can say goodbye to dark and dull underarm area. One shade lighter every after the session!
                                        </p>
                                    </div>

                                    <div id="UnderarmWaxing" class="service-description-content">
                                        <p>
                                            This semi-permanent hair removal treatment extracts hair by pulling its roots with warm wax. Hair regrowth occurs only after two to eight weeks. We offers waxing for virtually any area of the body, from the eyebrows, legs, arms to bikini, and back areas.
                                        </p>
                                    </div>

                                    <div id="EMSculpt" class="service-description-content">
                                        <p>
                                        EMSculpt is intended for all patients who wish to build muscle mass in their stomach and buttocks. There are very few contraindications, except for pacemakers or copper IUDs.

                                        The effects of EMSculpt may be observed straight after the session and are maximized one month after completing 4 sessions.
                                        </p>
                                    </div>

                                    <div id="LashLift" class="service-description-content">
                                        <p>
                                            A lash lift uses non-toxic chemicals to permanently curl your natural lashes until they grow out and fall off during their normal growth cycle. It turns the eyelashes upwards to give them length, height, volume, and the appearance of having longer lashes.
                                        </p>
                                    </div>

                                    <div id="VAJACIAL" class="service-description-content">
                                        <p>
                                            The perfect vajacial to combat and prevent ingrown hairs, breakouts, skin irritations, correct uneven color and texture, Acne scarring, as well as other pigmentation issues and prevent aging. Purify skin, extract impacted pores, and restore it to a healthy state. This treatment hydrates dry and sensitive skins, balances oil production, and will keep the skin youthful and feeling fresh. Great for waxers, shavers, or a nice relaxing treat for your peach!
                                        </p>
                                    </div>
                                </div>

                                <div class="service-additional-info pt-2">
                                    <div class="service-additional-info-title">
                                        <p>AT A GLANCE</p>
                                        <div id="ClassicBrazillian-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 2 to 3 hours</p>
                                            <p><b>PRICE:</b> Starts at 60??? per session</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>

                                        <div id="PremiumBrazillian-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 2 to 3 hours</p>
                                            <p><b>PRICE:</b> Starts at 70??? per session</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>

                                        <div id="DeluxeHair-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 2 to 3 hours</p>
                                            <p><b>PRICE:</b> 80??? per session</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>

                                        <div id="BotoxBrazillian-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 2 to 3 hours</p>
                                            <p><b>PRICE:</b> 60??? per session</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>

                                        <div id="HarryetteFacial-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 1 &#189 hours</p>
                                            <p><b>PRICE:</b> 60??? per session</p>
                                            <p>5 sessions get 1 free</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>

                                        <div id="HifuFacial-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 30 minutes (w/ Harryette's Facial 2 hours)</p>
                                            <p><b>PRICE:</b> Starts at 100??? per session</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>

                                        <div id="Mesoestetic-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 30 minutes</p>
                                            <p><b>PRICE:</b> 60??? per session</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>

                                        <div id="Microneedling-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 1 &#189 hours</p>
                                            <p><b>PRICE:</b> 60??? per session</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>

                                        <div id="RFMicroneedling-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 1 &#189 hours</p>
                                            <p><b>PRICE:</b> 80??? per session</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>

                                        <div id="ChanelTreatment-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 1 &#189 hours</p>
                                            <p><b>PRICE:</b> 125??? per session</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>

                                        <div id="CarbonLaser-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 1 &#189 hours</p>
                                            <p><b>PRICE:</b> 80??? per session</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>

                                        <div id="UnderarmLaser-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 20 minutes</p>
                                            <p><b>PRICE:</b> 25??? per session</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>

                                        <div id="UnderarmWhitening-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 1 hour</p>
                                            <p><b>PRICE:</b> 60??? per session</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>

                                        <div id="UnderarmWaxing-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 20 minutes</p>
                                            <p><b>PRICE:</b> 25??? per session</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>

                                        <div id="LashLift-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 20 minutes</p>
                                            <p><b>PRICE:</b> 35??? per session</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>

                                        <div id="EMSculpt-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 40 minutes</p>
                                            <p><b>PRICE:</b> 50??? per session</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>

                                        <div id="VAJACIAL-Price" class="service-additional-info-content">
                                            <p><b>TREATMENT DURATION:</b> 1 &#189 hours</p>
                                            <p><b>PRICE:</b> 60??? per session</p>
                                            <p class="price-prior-notice"><i>Prices may change without prior notice.</i></p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>    
                        <div class="col-sm-2">
                            <div class="hiddentext" style="visibility:hidden">This text is hidden</div>
                        </div>            
                        <div class="service-image col-sm-4">
                            <div id="serviceImageSegment">
                                <div class="serviceImage">
                                    <img id="serviceImageId" src="" class="img-responsive cardFrontImage">
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto priceDetails">
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