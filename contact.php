        <head>
                <title>Contact Us | Harryette - Beauty Clinic</title>
        </head>
<?php include('partialpages/header.php') ?>

        <style>
        .contact-page-wrapper{
                background: #F5F5F5;
                font-family: 'Playfair Display', serif;
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

        .input-form-wrapper {
                border-radius: 5px;
                padding: 20px;
        }

        .input-form{
                padding-bottom: 30px;
        }

        h2{
                font-weight: bold;
        }

        label{
                font-size: 16px;
                color: #888;
        }
        </style>
            <!-- Menu Content Section Starts-->
        <div class="contact-page-wrapper">
                <div class="col-sm-12" style="padding-left: 0px; padding-right: 0px; padding-top: 100px; padding-bottom: 25px;">
                        <img src="./images/Clinic Image 2.jpg" class="img-responsive" style="width: 100%; height: 400px">
                </div>

                <div class="container">
                        <div class="row">
                                <div class="col-sm-4">
                                        <h2>Contact Us</h2>
                                </div>
                                <div class="col-sm-8">
                                        <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.                                                </p>
                                </div>
                        </div>
                </div>
                
                <div class="container py-4">
                        <div class="row">
                                <div class="col-sm-7">
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
                                <div class="col-sm-5 align-self-center">
                                        <div class="container">
                                                <div class="py-4">
                                                        <h4>Clinic Location</h4>
                                                        <div class="row mt-4">
                                                                <div class="col-sm-2" style="width: fit-content">
                                                                        <img src="./images/address-location-icon.svg" width="30px" height="30px">
                                                                </div>
                                                                <div class="col-sm-10">
                                                                        <p>#30 Rue du Bailly 93210 La Plaine Saint-Denis</p>
                                                                </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                                <div class="col-sm-2" style="width: fit-content">
                                                                        <img src="./images/calendar-icon.svg" width="30px" height="30px">
                                                                </div>
                                                                <div class="col-sm-10">
                                                                        <p>Monday - Sunday: 9:00am - 6:00pm</p>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="container align-self-end">
                                                <div class="py-4">
                                                        <h4>Contact Information</h4>
                                                        <div class="row mb-1">
                                                                <div class="col-sm-2" style="width: fit-content">
                                                                        <img src="./images/phone-ringing-icon.svg" width="30px" height="30px">
                                                                </div>
                                                                <div class="col-sm-10">
                                                                        <div class="phoneLink">
                                                                                <p class="call-button" style="color:black">Landline:
                                                                                        <a href="tel:+33758703821" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});" style="color:#EDBB99; text-decoration: none"> +33 7 58 70 38 21</a>
                                                                                </p> 
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                                <div class="col-sm-2" style="width: fit-content">
                                                                        <img src="./images/email-address-icon.svg" width="30px" height="30px">
                                                                </div>
                                                                <div class="col-sm-10">
                                                                        <p>Email Address: <a href="#questionsPage" style="color:#EDBB99; text-decoration: none">harryetteinfo@gmail.com</a></p>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="questions-wrapper" id="questionsPage">
                        <div class="py-4">                                                
                                <div class="container ">
                                        <div class="row">
                                                <div class="input-form-wrapper">
                                                                <h2>Questions?</h2>
                                                </div>
                                                <div>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="container d-flex justify-content-center">
                                <div class="row">
                                        <div class="col-sm-12">
                                                <form class="questionForm" action="" method="post">
                                                        <div class="input-form">
                                                                <label for="selectServices">SERVICES</label>
                                                                <select id="selectServices" name="services">
                                                                        <option value="Hair Services">Hair Services</option>
                                                                        <option value="HIFU Services">HIFU Services</option>
                                                                        <option value="Skin Treatments">Skin Treatments</option>
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
                </div>
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