<head>
        <title>Contact Us | Harryette Salon</title>
</head>
<?php include('partialpages/header.php') ?>

        <style>
                @media screen and (max-width: 576px) {

                        .contact-details-image{
                                height: 200px;
                        }

                        .clinic-info-details{
                                font-size: 20px;
                        }

                        .questions-message{
                                font-size: 20px;
                        }

                        .col-sm-2{
                                padding: 0px;
                        }

                        .col-sm-10{
                                padding: 0px;
                        }

                        .clinic-info-details div img{
                                width: 25px;
                                height: 25px;
                        }
                } 
                
                @media screen and (min-width: 576px){
                        .contact-details-image{
                                height: 400px;
                        }

                        .clinic-info-details{
                                font-size: 24px;
                        }

                        .questions-message{
                                font-size: 24px;
                        }

                        .clinic-info-details div img{
                                width: 30px;
                                height: 30px;
                        }
                }
                
                .contact-page-wrapper{
                        background: #F5F5F5;
                        font-family: 'Amatic SC';
                        font-size: 20px;
                }

                input[type=text], select, textarea {
                        width: 100%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;
                }

                input[type=text]:hover, input[type=text]:focus, textarea:hover, textarea:focus, select:hover, select:focus{
                        border-color: #F6DDCC;
                        outline: none !important;
                        border:1px solid #F6DDCC;
                }

                input[type=submit] {
                        width: 100%;
                        background-color: white;
                        color: #F6DDCC;
                        padding: 14px 20px;
                        margin: 8px 0;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        border:2px solid #F6DDCC;

                }

                input[type=submit]:hover {
                        background-color: #F6DDCC;
                        color: white;
                        border-color: #F6DDCC;
                        outline: none !important;
                }

                .input-form{
                        padding-bottom: 30px;
                }

                label{
                        font-size: 18px;
                        color: #888;
                }
                
        </style>
            <!-- Menu Content Section Starts-->
        <div class="contact-page-wrapper">
                <div class="col-sm-12" style="padding-left: 0px; padding-right: 0px; padding-top: 100px; padding-bottom: 25px;">
                        <img src="./images/Clinic Image 2.jpg" class="img-responsive contact-details-image" style="width: 100%;">
                </div>

                <div class="container pt-3"  id="contact-body">
                        <div class="col-sm-12 text-center">
                                <h2><b>Contact Us</b></h2>
                        </div>
                </div>
                
                <div class="container py-4">
                        <div class="row">
                                <div class="col-sm-8">
                                        <div class="mapouter">
                                                <div class="gmap_canvas" style="width: 100%">
                                                        <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=30%20Rue%20du%20Bailly%2093210%20La%20Plaine%20Saint-Denis&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                                        </iframe>
                                                        <br>
                                                        <style>
                                                        .mapouter{
                                                                position:relative;
                                                                text-align:right;
                                                                height:500px;
                                                                width:100%;
                                                        }
                                                        </style>
                                                        <a href="https://www.embedgooglemap.net">
                                                        </a>
                                                        <style>
                                                        .gmap_canvas {
                                                                overflow:hidden;
                                                                background:none!important;height:500px;
                                                                width:665px;
                                                        }
                                                        </style>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-sm-4 align-self-center py-3">
                                        <div class="container">
                                                <div class="clinic-info-details py-4">
                                                        <h3><b>Clinic Location</b></h3>
                                                        <div class="col-sm-12 py-3 ">
                                                                <img class="d-inline" src="./images/address-location-icon.svg">

                                                                <p class="d-inline" style="padding-left: 5%">#30 Rue du Bailly 93210 La Plaine Saint-Denis</p>
                                                        </div>
                                                        <div class="col-sm-12">
                                                                <img class="d-inline" src="./images/calendar-icon.svg" >

                                                                <p class="d-inline" style="padding-left: 5%">Monday - Sunday: 9:00am - 6:00pm</p>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="container align-self-end">
                                                <div class="clinic-info-details py-2">
                                                        <h3><b>Contact Information</b></h3>
                                                        <div class="col-sm-12 py-3 ">
                                                                <img class="d-inline" src="./images/phone-ringing-icon.svg">

                                                                <p class="d-inline call-button" style="color:black; padding-left: 5%">
                                                                        <a href="tel:+33758703821" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});" style="color:#EDBB99; text-decoration: none"> +33 7 58 70 38 21</a>
                                                                </p> 
                                                        </div>

                                                        <div class="col-sm-12">
                                                                <img src="./images/email-address-icon.svg">

                                                                <p class="d-inline" style="padding-left: 5%"><a href="#questionsPage" style="color:#EDBB99; text-decoration: none">harryetteinfo@gmail.com</a></p>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
                <!--
                <div class="questions-wrapper" id="questionsPage">
                        <div class="container pt-3">
                                <div class="row">
                                        <div class="col-sm-6">
                                                <h2><b>Questions?</b></h2>
                                                <p class="questions-message">
                                                If you are ready to start your beauty journey, and have a few unanswered questions. Contact us by filling out the form!
                                                </p>
                                        </div>

                                        <div class="col-sm-6">
                                                <form class="questionForm" action="" method="post">
                                                        <div class="input-form">
                                                                <label for="selectServices">SERVICES</label>
                                                                <select id="selectServices" name="services">
                                                                        <option value="Hair Services">Hair Services</option>
                                                                        <option value="HIFU Services">Facial Services</option>
                                                                        <option value="Underarm Treatment">Underarm Treatment</option>
                                                                        <option value="Other Services">Other Services</option>
                                                                </select>
                                                        </div>

                                                        <div class="input-form">
                                                                <label for="fullName">FULL NAME</label>
                                                                <input type="text" id="fullName" name="fullNameInput" required>
                                                        </div>

                                                        <div class="input-form">
                                                                <label for="emailAddress">EMAIL ADDRESS</label>
                                                                <input type="text" id="emailAddress" name="emailAddressInput" required>
                                                        </div>

                                                        <div class="input-form">
                                                                <label for="contactNumber">CONTACT NUMBER</label>
                                                                <input type="text" id="contactNumber" name="contactNumberInput" required>
                                                        </div>

                                                        <div class="input-form">
                                                                <label for="description">DESCRIPTION</label>
                                                                <textarea type="text" id="description" name="descriptionInput" required></textarea>
                                                        </div>

                                                        <div class="input-form">
                                                                <input type="submit" value="Submit" name="submit">
                                                        </div>
                                                </form>

                                                <span class="output_message"></span>
                                        </div>
                                </div>
                        </div>
                </div>-->
        </div>

            <!-- Menu Content Section Ends-->
        <script>
                function sendEmail(){
                        $(document).ready(function() {
                        $('.questionForm').on('submit',function(e){
                        e.preventDefault();
                        alert('Loading'); 

                        var form = $(this);
                                        $.ajax({
                                        type: 'post',
                                        url: "sendEmail.php",
                                        data: form.serialize(),
                                        success: function(result){
                                        if (result == 'success'){
                                                alert('Success');
                                        } else {
                                                alert('Error');
                                        }
                                }
                        });
                });
        });

                }
        </script>
<?php include('partialpages/footer.php') ?>