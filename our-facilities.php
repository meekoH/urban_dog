<?php require_once('components/instagram-feed.php'); ?>
<!DOCTYPE HTML>

<html>
    <head>
        <meta name="keywords" content="dog boarding, large dog, cage free, cat wing, cat boarding, clean air, UV filters, dog pool, dog slumber, dog suites, dog lofts, kitty condos, cat lofts, senior pet, Dog sleepover, dog daycare, chemical free, UV pool, kennel, natural light, open concept dog play, safe pet boarding, YYZ, Pearson Airport" />
        <meta name="description" content="Our facility was designed and built from the ground up to meet the many differing needs of cats and dogs. A number of "green" initiatives are in place to help keep everyone healthy, including the environment." />
        <?php require_once('components/head.html'); ?>
        <style>
            .main-container span.bold {
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
    	<div class="wrapper">
    		<div class="content-wrapper" id="main">
                <?php require_once('components/header.html'); ?>
                <div class="content">
                    <?php require_once('components/banner.html'); ?>

                    <div class="main-wrapper our-facilities">
                        <div class="main-container">
                            <h2 style="text-align:center;">Our Facilities</h2>

                            <p>Our facility was built to meet the many differing needs of cats and dogs.</p>

                            <p>Our accommodations offer a variety of choices to make your cat or dog’s stay with us as comfortable as possible.</p>

                            <p>We offer day lounges for those dogs that need a bit of down time during the day away from the play.</p>

                            <p>We have a separate senior dog wing that offers heated floors and accommodations in a quieter location in the building close to the watchful eye of reception staff.</p>

                            <p>Ask us to help you select the best fit for your dog or cat.</p>

                            <p>We have implemented a number of "green" initiatives into our building to help keep everyone healthy, including the environment.</p>

                            <p>Hospital grade UV air filtration system throughout including a separate air exchange for our cat wing.</p>

                            <p><span class="bold orange">Lighting</span><br><br>
                                <i class="fa fa-circle bullet-point"></i> Low voltage and LED lighting throughout.<br><br>
                                <i class="fa fa-circle bullet-point"></i> A tubular daylighting system- this system is electricity-free, operating instead by focusing natural sunlight through reflective tubing into the playgrounds and pool and dispersing the light using a diffuser.</p>

                            <p><span class="bold orange">Pool</span><br><br>
                                <i class="fa fa-circle bullet-point"></i> UV technology filters the pool so no harmful chemicals or salt is used that can dry out sensitive skin and coats.<br><br>
                                <i class="fa fa-circle bullet-point"></i> Woven K9 Grass around the pool is specifically made for dogs and features a flushing system under the raised grass that removes all waste and water from around the pool.</p>

                            <p>Filtered watering system for dogs and cats.</p>

                            <p>Chemical free room cleaning using hot water steam.</p>

                            <p>You can feel good about choosing Park9.</p>
                        </div>
                    </div>
                    <div class="social-section quote">
                        <h3>"A day at the pool isn't complete until your dog shakes themselves off right next to you."</h3>
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
        $('.about').addClass('selected');
        $('.pool').addClass('selected');
        $('.pool-banner').removeClass('banner-hidden');
    </script>
</html>