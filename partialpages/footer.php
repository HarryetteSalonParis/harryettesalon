         <!-- Footer Section Starts-->
        <style>
            @media screen and (max-width: 1199.98px) {
                .footer-details{
                    font-size: 18px;
                    font-family: 'Amatic SC';
                    font-weight: bold;
                    padding-top: 1.5rem!important;
                    padding-bottom: 1.5rem!important;
                }

                .harryette-image-footer{
                    padding-top: 10px;
                }
            }

            @media screen and (min-width: 1200px){

                .footer-details{
                    font-size: 30px;
                    font-weight: bold;
                    font-family: 'Amatic SC';
                    padding-top: 2.5rem!important;
                }
            }

           .btn-bookAppointment .btn, .modal-footer .btn{
                color: white;
                border-color:  #F6DDCC;
                background-color: #F6DDCC;
           }
           
           .btn-bookAppointment .btn:hover, .modal-footer .btn:hover{
                border-color: #F6DDCC;
                outline: none !important;
                border:2px solid #F6DDCC;
                background-color: white;
                color: #F6DDCC;
           }

           .logo{
                width: fit-content;
                height: fit-content;
                display: flex;
                flex-wrap: wrap;
                margin-left: auto;
                margin-right: auto; 
            }

            .logo a{
                width: 40px;
                height: 40px;
            }

            .harryette-image-footer{
                width: 285px;
                height: 100%;
                margin: auto;
            }

            footer{
                background-color: white;
            }
            
            .modal-title{
                font-family: 'Amatic SC';
                font-size: 28px;
                font-weight: bold;
            }
            .modal-dialog{
                font-family: 'Amatic SC';
                font-size: 28px;
            }

            .modal-footer .btn{
                font-family: 'Amatic SC';
                font-size: 22px;
            }




            
            
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous">
        </script>
        </body>
        <footer>
            <div class="col-sm-12">
                <div class="container">
                    <div class="row" style="text-align: -webkit-center;">

                        <div class="col-sm-3 harryette-image-footer">
                            <img src="./images/Image.jpg" class="img-responsive" width="100%">
                        </div>
                        
                        <div class="footer-details col-sm-6">
                            <p>Harryette Salon</p>
                            <p>#30 Rue du Bailly 93210 La Plaine Saint-Denis</p>
                            <div class="phoneLink">
                            <p class="call-button" style="color:black">Call:
                                <a href="tel:+33758703821" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});" style="color:#EDBB99; text-decoration: none"> +33 7 58 70 38 21</a>
                            </p> 
                            </div>
                            <div class="logo justify-content-center">
                                <a href="https://www.facebook.com/harryettesalon" target="_blank" rel="noopener noreferrer">
                                    <img src="./images/fbLogo.png" class="img-responsive" width="30" height="30">
                                </a>
                                <a href="https://www.instagram.com/harryettesalon/" target="_blank" rel="noopener noreferrer">
                                    <img src="./images/igLogo.png" class="img-responsive" width="30" height="30">
                                </a>
                                <a href="https://www.tiktok.com/@harryettesalon" target="_blank" rel="noopener noreferrer">
                                    <img src="./images/tiktokLogo.png" class="img-responsive" width="30" height="30">
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-sm-3 align-self-center">
							<div class="btn-bookAppointment">
								<button type="button" class="btn btn-outline-primary btn-lg" data-bs-toggle="modal" data-bs-target="#myModal"data-bs-toggle="modal" data-bs-target="#myModal">BOOK AN APPOINTMENT</button>
							</div>
                        </div>
                    </div>
					<!-- MODAL -->
						<div class="modal fade" id="myModal" role="dialog" tabindex="-1">
							<div class="modal-dialog">
								<div class="modal-content">
								<div class="modal-header">
									<center><p class="modal-title text-center">Book Appointment</p></center>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<center><p><b>ADVANCE BOOKING POLICY.</b></p>
									<p>An Online Reservation Fee of 20% will be deducted from your treatment fee.</p></center>
									<p>No call No show Policy:</p>
									<center><p>&#8864; No refund on Saturdays and Sundays.</p>
									<p>&#8864; During weekdays, BOOKING can be rescheduled.</p></center>
									<br>
									<center><p>This feature is currently under construction. Please click the OK button to be redirected to our booking site.</p></center>
								</div>
								<div class="modal-footer" >
									<button type="button" class="btn btn-primary btn-md" onclick="bookAnAppointment()">OK</button>
								</div>
								</div>
							</div>
						</div>
					<!-- MODAL -->
                </div> 
            </div>
            <div class="row">
                <div class="col-sm-12" style="border-top: 1px solid #E6E6E6; margin-top: 1.5em;">
                    <div class="hiddentext" style="visibility:hidden">This text is hidden</div>
                </div>  
            </div> 
        </footer>
        <!-- Footer Section Ends-->
</html>