<?php require_once('components/instagram-feed.php'); ?>
<!DOCTYPE HTML>

<html>
    <head>
        <meta name="keywords" content="urbandog clients, email us, telephone number, fax, inquiries, boarding questions, Park9, YYZ dog, YYZ cat, questions, help, Dixon Rd, Carlingview, Hwy 427, Hwy 401, Hwy 409, Hwy 27, Keele St, Meteor Ave, Martin Grove Rd, Yonge St, Etobicoke, Rexdale" />
        <meta name="description" content="Get in touch with us. We are happy to address any questions or concerns you may have." />
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
                    <div class="main-wrapper contact">
                        <div class="main-container">
                            <h2>Contact Us</h2>

                            <p>Our 7500 sq ft facility is located in the heart of downtown Toronto, adjacent to the Historic Distillery District. We have parking on site and are just off the DVP/ Gardiner and Lakeshore.</p>

                            <div class="main-container">
                                <div class="left-side">
                                    <h2 style="font-weight:400;margin:0;">UrbanDog</h2>
                                    <p>37 Parliament St. Toronto, ON<br>
                                        Tel : (416) 361-1037<br>
                                        Fax : (416) 850-9077<br>
                                        <a href="mailto:info@urbandog.ca" title="Email UrbanDog" style="font-weight:700;font-style:italic;">info@urbandog.ca</a></p>
                                </div>
                                <div class="right-side">
                                    <h2 style="margin:0 0 10px;">Overnight Pickup and Drop off Hours : 24/7</h2>
                                    <p><span class="bold orange">Our Daycare and Boutique Hours</span><br>
                                        Mon - Fri : 7am - 8pm<br>
                                        Sat : 8am - 6pm<br>
                                        Sun : 10am - 6pm<br>
                                        <span style="font-style:italic;">Closed all Public Holidays</span><br>
                                        </p>
                                    <!-- <table>
                                        <tr>
                                            <td>Monday to Friday</td>
                                            <td>7am - 8pm</td>
                                        </tr>
                                        <tr>
                                            <td>Saturday</td>
                                            <td>8am - 6pm</td>
                                        </tr>
                                        <tr>
                                            <td>Sunday</td>
                                            <td>10am - 6pm</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="font-style:italic;">Closed all Public Holidays</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Overnight Pickup and Drop off Hours : 24/7</td>
                                        </tr>
                                    </table> -->
                                </div>
                                <div class="clear"></div>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11547.766662609432!2d-79.361614!3d43.649382!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x364f299f1e0933a3!2sUrban+Dog+Fitness+%2B+Spa!5e0!3m2!1sen!2sca!4v1430688934191" width="100%" height="250" frameborder="0" style="border:0"></iframe>
                        </div>
                    </div>
                    <div class="social-section quote">
                        <h3>"To err is human, to forgive, canine."</h3>
                        <h3 style="text-align:right;font-weight:400;color:#7fbe00;">- Unknown</h3>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <?php require_once('components/ig-feed.php'); ?>
            <?php require_once('components/footer.html'); ?>
    	</div>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('.contact').addClass('selected');
        $('.contact-banner').removeClass('banner-hidden');
    </script>
</html>