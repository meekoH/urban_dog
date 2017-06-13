<?php require_once('components/instagram-feed.php'); ?>
<!DOCTYPE HTML>

<html>
    <head>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
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
                <?php require_once('components/banner.html'); ?>
                <div class="content">
                    <div class="main-wrapper our-facilities">
                        <div class="main-container">
                            <h2 style="text-align:center;">Our Facility</h2>

                            <p><span class="bold orange">We Care About the Details</span></p>

                            <p><i class="fa fa-circle bullet-point"></i> Permanently laid non-skid athletic flooring to protect dogs’ joints, sealed to promote a healthy and clean environment.</p>

                            <p><i class="fa fa-circle bullet-point"></i> AC in summer, radiant heated in the winter.</p>

                            <p><i class="fa fa-circle bullet-point"></i> Air filtration system to eliminate airborne illnesses.</p>

                            <p><i class="fa fa-circle bullet-point"></i> Fresh, filtered water at all times from automatic watering bowls.</p>

                            <p><i class="fa fa-circle bullet-point"></i> Lots of natural sunlight.</p>

                            <p><i class="fa fa-circle bullet-point"></i> Separate play for big and small dogs.</p>

                            <p><i class="fa fa-circle bullet-point"></i> Fully supervised- dogs are never left alone, not even for a minute.</p>

                            <p><i class="fa fa-circle bullet-point"></i> Play nice policy- every dog is assessed for matched play</p>

                            <p><i class="fa fa-circle bullet-point"></i> Web cams to watch while you're at work.</p>

                            <p class="bold orange">You can feel good about choosing UrbanDog.</p>
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