<?php require_once('components/instagram-feed.php'); ?>
<!DOCTYPE HTML>

<html>
    <head>
        <meta name="keywords" content="reservations, pet boarding, dog daycare, book appointment, urbandog client, holiday boarding, existing client, availability" />
        <meta name="description" content="Book your dog or cats vacation now! Download our forms." />
        <?php require_once('components/head.html'); ?>
        <style>
            .main-container span.bold { text-transform:uppercase; }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="content-wrapper" id="main">
                <?php require_once('components/header.html'); ?>
                <?php require_once('components/banner.html'); ?>
                <div class="content">
                    <div class="main-wrapper returning-client">
                        <div class="main-container">
                            <h2>Reservation Inquiry</h2>

                            <p>Please fill out the form below to submit your request.</p>

                            <form class="returning-client-form" id="returningForm" method="post" action="javascript:void(0)">
                                <div class="form-section" style="display:none;">
                                    <input name="required" type="hidden" value="Client_Type,Guardian_Name,Email_Address,Phone_Number,Booking_Multiples,Pet_Name">
                                    <input type="hidden" name="recipientemail" value="info@urbandog.ca">
                                    <input type="hidden" name="successmessage" value="Thank you for your inquiry.<br>We will be in touch with you shortly to iron out the details!">
                                    <input type="hidden" name="actiontype" value="submit_request">
                                    <input type="hidden" name="formtype" value="Client Inquiry Request">
                                </div>
                                <div class="form-section">
                                    <label for="Booking_Type">Type of Booking</label>
                                    <input type="radio" id="bt_dog" name="Booking_Type" value="Dog" checked><span class="interests">Dog</span><br>
                                    <input type="radio" id="bt_cat" name="Booking_Type" value="Cat"><span class="interests">Cat</span>
                                </div>
                                <div class="form-section">
                                    <label for="Client_Type">New or Returning Client?</label>
                                    <input type="radio" name="Client_Type" value="New" style="margin:0 10px 0 5px;"><span class="interests">New Client</span>

                                    <span style="display:block;margin-bottom:10px;font-size:12px;color:#7fbe00;padding-left:27px;">(You will be required at confirmation to fill out forms)</span>

                                    <input type="radio" name="Client_Type" value="Returning"><span class="interests">Returning Client</span>
                                </div>
                                <div class="form-section">
                                    <label for="Guardian_Name">Guardian Name</label>
                                    <input type="text" name="Guardian_Name" placeholder="Jane Smith">
                                </div>
                                <div class="form-section">
                                    <label for="Pet_Name"><span class="animal-type">Dog</span>'s Name(s)</label>
                                    <input type="text" name="Pet_Name" placeholder="Fido, Spot, Rover">
                                </div>
                                <div class="form-section">
                                    <label for="Email_Address">Email Address</label>
                                    <input type="text" name="Email_Address" placeholder="janesmith@example.com">
                                </div>
                                <div class="form-section">
                                    <label for="Phone_Number">Phone Number</label>
                                    <input type="text" name="Phone_Number" placeholder="(416) 123-4567">
                                </div>
                                <div class="form-section">
                                    <label for="Booking_Multiples">Are you Booking for more than one <span class="animal-type">Dog</span>?</label>
                                    <input type="radio" name="Booking_Multiples" value="Yes"><span class="interests">Yes</span><br>
                                    <input type="radio" name="Booking_Multiples" value="No"><span class="interests">No</span>
                                </div>
                                <div class="form-section">
                                    <label for="Services_Required">Service Required</label>
                                    <select id="Services_Required" name="Services_Required">
                                        <option value="" selected disabled>Select One...</option>
                                        <option value="Dog_Boarding" class="playcare-request">Boarding Request (includes Playcare)</span></option>
                                        <option value="Playcare" class="playcare-request">Playcare Request</option>
                                        <option value="Cat_Boarding" class="cat-option">Boarding Request</span></option>
                                    </select>
                                </div>
                                <div class="boarding-section">
                                    <h2 style="margin:15px 0 0;">Boarding Request</h2>
                                    <div class="form-section">
                                        <label for="Drop_Date">Drop off Date</label>
                                        <input type="text" id="Drop_Date" name="Drop_Date" class="datepicker" placeholder="mm/dd/yyyy">
                                    </div>
                                    <div class="form-section">
                                        <label for="Drop_Time">Drop off Time</label>
                                        <input type="text" id="Drop_Time" name="Drop_Time" placeholder="hh:mm" class="time">
                                    </div>
                                    <div class="form-section">
                                        <label for="Pick_Date">Pick up Date</label>
                                        <input type="text" id="Pick_Date" name="Pick_Date" class="datepicker" placeholder="mm/dd/yyyy">
                                    </div>
                                    <div class="form-section">
                                        <label for="Pick_Time">Pick up Time</label>
                                        <input type="text" id="Pick_Time" name="Pick_Time" placeholder="hh:mm" class="time">
                                    </div>
                                </div>
                                <div class="playcare-section">
                                    <h2 style="margin:15px 0 0;">Playcare Request</h2>
                                    <div class="form-section">
                                        <label for="Playcare_Date">Playcare Date</label>
                                        <input type="text" id="Playcare_Date" name="Playcare_Date" class="datepicker" placeholder="mm/dd/yyyy">
                                    </div>
                                    <div class="form-section">
                                        <input type="radio" name="Playcare_Length" value="Full Day"><span class="interests">Full Day</span><br>
                                        <input type="radio" name="Playcare_Length" value="Half Day"><span class="interests">Half Day</span><br>
                                        <input type="radio" name="Playcare_Length" value="3 Hour Stay"><span class="interests">3 Hour Stay</span><br>
                                    </div>
                                </div>
                                <div class="form-section">
                                    <input type="submit" name="submit" onclick="if ($('#bt_cat:checked').length + $('#bt_dog:checked').length == 0) { alert('Please choose Type of Booking.'); } else { return validateform('returningForm') }" class="site-btn">
                                </div>
                            </form>
                            <p><span class="bold orange">Please note : </span> <span class="bold">This is a reservation request only. A Park9 representative will contact you with 24 hours to confirm the details of your reservation. All requests are subject to availability.<br><br>
                            All dogs and cats must first be enrolled and all dogs must have been assessed for any confirmations to be confirmed.</span></p>
                        </div>
                    </div>
                    <div class="social-section quote">
                        <h3>"Dogs have a way of finding the people that need them and filling an emptiness we didn't know we had."</h3>
                        <h3 style="text-align:right;font-weight:400;color:#7fbe00;">- Thom Jones</h3>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <?php require_once('components/ig-feed.php'); ?>
            <?php require_once('components/footer.html'); ?>
        </div>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script src="js/webenquiry.js"></script>
    <script>
        $('.reserve').addClass('selected');
        $('.returning-client').addClass('selected');
        $('.returning-client-banner').removeClass('banner-hidden');
        $('#Services_Required').change(function(){
            var serviceChosen = $(this).val();
            if(serviceChosen == 'Dog_Boarding' || serviceChosen == 'Cat_Boarding') {
                $('.boarding-section').slideDown();
                $('.playcare-section').slideUp().find('input').val('');
            } else {
                $('.playcare-section').slideDown();
                $('.boarding-section').slideUp().find('input').val('');
            }
        });
    </script>
</html>