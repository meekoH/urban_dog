<?php require_once('components/instagram-feed.php'); ?>
<!DOCTYPE HTML>

<html>
    <head>
        <meta name="keywords" content="dog boarding, dog suites, loft style boarding, cage free boarding, Urbandog toronto, webcams, pet sitting, chemical-free boarding, dog hotel, dog kennel, boarding kennels, senior dog boarding, puppy boarding, dog sleepover, medications, pills, fully supervised, in room attendant, pool side suite" />
        <meta name="description" content="We offer a choice of accommodations to best suit your needs and those of your best friends. Your dogs’ stay will be a fun, enriching experience." />
        <?php require_once('components/head.html'); ?>
    </head>
    <body>
    	<div class="wrapper">
    		<div class="content-wrapper" id="main">
                <?php require_once('components/header.html'); ?>
                <?php require_once('components/banner.html'); ?>
                <div class="content">
                    <div class="main-wrapper dogs">
                        <div class="main-container">
                            <h2>Overnight Care for Dogs</h2>

                            <p>All our overnight stays include playcare in both our secure outdoor and indoor playgrounds.<br>
                                Our rates are based on a 24 hr visit. Check in and out when it works for you! We’re staffed 24/7.</p>

                            <p>Our hospital grade HVAC and UV air filtration system means 100% fresh air every 10 minutes, every room.</p>

                            <p>Choose slumber style accommodations in one of our spacious size appropriate lounges with a dedicated overnight staff in the room.<br>
                                Your dog will share his or her night with other dogs of similar size.  We let our guests choose either a comfy dog bed or to sleep with the attendant.<br>
                                <span class="overnight-price bold">$79 per night. Stays over 7 nights $75 per night</span></p>

                            <hr>

                            <p>For a more private and relaxing option after a full day of fun, we offer a choice of guest rooms for a good nights’ sleep.<br>
                                <span class="bold">Note:</span> dogs from the same family that share a suite receive a <span class="bold">20% discount</span> on their stay.</p>

                            <p>Our Premiere loft (for small to medium sized dogs) -  24 sq ft., choice of elevated Kuranda bed with fleece bedding or soft cushioned bed.<br>
                                <span class="overnight-price bold">$65 per night. Stays over 7 nights $59 per night</span></p>

                            <p>Our larger Signature loft - 36 sq ft. (for large breed dogs or 2 small dogs from the same family), choice of elevated Kuranda bed with fleece lining.<br>
                                <span class="overnight-price bold">$75 per night. Stays over 7 nights $69 per night</span></p>

                            <p>Our Excecutive suite - 48 sq ft., Park 9 exclusive premium dog beds with private web cam.<br>
                                <span class="overnight-price bold">$95 per night. Stays over 7 nights $89 per night</span></p>

                            <p>Our Luxury suite - 64 sq ft., Park 9 exclusive premium dog beds, flat screen TV, private web cam.<br>
                                <span class="overnight-price bold">$129 per night. Stays over 7 nights $119 per night</span></p>

                            <p>Poolside suites are available for a special few. These suites are off the pool area in a private evening setting and offer penthouse amenities including a private webcam that allows you to connect with your dog by video. Talk to your best friend in person from wherever you may be. You can even dispense a treat from your computer!<br>
                                <span class="overnight-price bold">$199 per night. Stays over 7 nights $179 per night</span></p>

                            <p><span class="bold orange">Peak season rates add $10</span></p>

                            <p>Seniors - We offer a private sanctuary for our "long in the tooth" friends. These rooms are in a quieter part of our building, close to staff. Each room offers individually controlled in-floor heating for those who need it. Special bedding is also provided. Rates for these suites are dependent on suite size and amenities.</p>

                            <p>Rates dependant on suite size.</p>

                            <p><span class="bold">In addition, we offer these add-on services:</span><br>
                                Private or semi private splash sessions at our indoor pool -  <span class="overnight-price bold">Starting at $15 for 30 minutes</span><br>
                                One on one play or fetch sessions -  <span class="overnight-price bold">$20 per 30 minutes</span><br>
                                Departure baths/grooms - <span class="overnight-price bold">Starting at $35</span><br>
                                A la carte spa services - Nail trims, brush out - <span class="overnight-price bold">Prices vary</span><br>
                                Even added one on one cuddle time</p>

                            <p><span class="bold">Mini bar options:</span><br>
                                Choose from our selection of dog chews<br>
                                Snack filled kong toy<br>
                                Special holiday meals<br>
                                Ice cream / frozen yoghurt<br>
                                Personalized services are available on request</p>

                            <p>We also offer Privilege Memberships for those clients that expect to need us more often. We have a number of discounted packages available.<br>
                                <a href="contact.php" title="Contact" style="font-weight:700;font-style:italic;margin-right:3px;">Contact us</a> for more details or, better yet, drop by for a tour and let us tell you in person.</p>
                        </div>
                    </div>
                    <div class="social-section quote">
                        <h3>"No one appreciates the very special genius of your conversation as much as the dog does."</h3>
                        <h3 style="text-align:right;font-weight:400;color:#7fbe00;">- Christopher Morley</h3>
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
        $('.services').addClass('selected');
        $('.overnight-dogs').addClass('selected');
        $('.overnight-dogs-banner').removeClass('banner-hidden');
    </script>
</html>