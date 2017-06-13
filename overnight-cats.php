<?php require_once('components/instagram-feed.php'); ?>
<!DOCTYPE HTML>

<html>
    <head>
        <meta name="keywords" content="cat boarding, cat lofts, cat suites, loft style boarding, cage free boarding, Urbandog toronto, pet sitting, chemical-free boarding, cat hotel, cat kennel, senior cat boarding, kitten boarding, cuddle time, climbing wall, private, clean air, quiet, minibar, catnip, playtime, skylofts, medications, pills" />
        <meta name="description" content="We recognize that cats have very different and distinctive needs. Our boutique style feline wing offers your feline friend a safe and fun place to hang out while you’re away." />
        <?php require_once('components/head.html'); ?>
    </head>
    <body>
    	<div class="wrapper">
    		<div class="content-wrapper" id="main">
                <?php require_once('components/header.html'); ?>
                <?php require_once('components/banner.html'); ?>
                <div class="content">
                    <div class="main-wrapper cats">
                        <div class="main-container">
                            <h2>Overnight Care for Cats</h2>

                            <p>We recognize that cats have very different and distinctive needs.<br>
                                Risk of airborne disease is far more prevalent and the need for mental as well as physical stimulation is key to a happy and healthy cat.</p>

                            <p>Our hospital grade air exchange means there is 100% pure air circulated every moment.</p>

                            <p>Our boutique style accommodations offers your four legged friend a safe and fun place to hang out while you’re away.</p>

                            <p>Our staff are well trained to provide the individual care your cat may need such as medications or special needs.</p>

                            <p>We track food intake, weight , eliminations ,medications and behaviour to ensure a safe and healthy visit each time.</p>

                            <p>Our private and stress free cat lofts are located just off reception, far away from the dog playrooms and any noise from the pool or dog lofts.</p>

                            <p>Each loft has a private elimination area, with its own litter box.  (Cats love their privacy!)</p>

                            <p>In each loft are plenty of climbing/resting perches strategically placed, a comfy bed, and  a separate skyloft.</p>

                            <p>These skylofts overlook the main play space. It’s a great high vantage point to watch the world go by or take in the aquarium.</p>

                            <p>Our play area has a cat climbing wall, scratching posts, a skylight for lots of natural light and even comfy chairs to curl up for some one on one time with our caring staff.</p>

                            <p>Each booking includes two 20 minutes of one on one cuddle time each day in the play space.</p>

                            <p>Classic lofts - approx. 100 cubic ft. of private space<br>
                                <span class="overnight-price bold">$40 per night. Stays over 7 nights $35 per night</span></p>

                            <p>Classic lofts with private window - approx. 100 cubic ft. of private space<br>
                                <span class="overnight-price bold">$45 per night. Stays over 7 nights $40 per night</span></p>

                            <p>Luxury lofts - larger in size, these suites are ideal for multiple cats from the same family or for those lucky felines who want more space to hang out. Private windows to outdoor bird feeders included.<br>
                                <span class="overnight-price bold">$50 per night. Stays over 7 nights $45 per night</span></p>

                            <p><span class="bold orange">Peak season rates add $5</span></p>

                            <p><span class="bold">Note:</span> cats from the same family that share a suite receive a <span class="bold">25% discount</span> on their stay.</p>

                            <p><span class="bold">Added services available:</span><br>
                                Additional pamper time-scratches are included<br>
                                Brush out for those cats that are used to this type of pampering<br>
                                Nail trims</p>

                            <p><span class="bold">Mini bar services:</span><br>
                                Organic Catnip / cat grass<br>
                                Cat treats<br>
                                Organic Catnip toy</p>

                            <p>We also offer Privilege Memberships for those clients that expect to need us more often.<br>
                                <a href="contact.php" title="Contact" style="font-weight:700;font-style:italic;margin-right:3px;">Contact us</a> for more details or, better yet, drop by for a tour and let us tell you in person.</p>
                        </div>
                    </div>
                    <div class="social-section quote">
                        <h3>"Cats have it all - admiration, an endless sleep and company only when they want it."</h3>
                        <h3 style="text-align:right;font-weight:400;color:#7fbe00;">- Rod McKuen</h3>
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
        $('.overnight-cats').addClass('selected');
        $('.overnight-cats-banner').removeClass('banner-hidden');
    </script>
</html>