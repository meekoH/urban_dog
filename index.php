<?php require_once('components/instagram-feed.php'); ?>
<!DOCTYPE HTML>

<html>
    <head>
        <meta name="keywords" content="UrbanDog, Toronto, toronto, urbandog, urban dog, urban dog, dog boarding, dog daycare, dog grooming, cat lofts, dog suites, loft style boarding, cage free boarding, Urbandog toronto, pet sitting, YYZ, Pearson Airport, chemical-free boarding, dog hotel, dog kennel, boarding kennels, dog pool, senior pet boarding, puppy boarding, dog sleepover, dog supervision, Downtown core, Corporate pet services , Dixon Rd, Carlingview, Hwy 427, Hwy 401, Hwy 409, Hwy 27, Keele St, Meteor Ave, Martin Grove Rd, Yonge St, Etobicoke, Rexdale, Luxury dog boarding, 5 star pet, 4 star pet, world class boarding,  pet friendly travel, short term pet residence, airport kennel, Toronto airport" />
        <meta name="description" content="We treat each animal in our care as if they were our own, with love, affection, attention and the utmost regard for their comfort. Convenient Pearson Airport location." />
        <?php require_once('components/head.html'); ?>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-59004379-1', 'auto');
          ga('send', 'pageview');

        </script>
    </head>
    <body>
    	<div class="wrapper">
    		<div class="content-wrapper" id="main">
                <?php require_once('components/header.html'); ?>
                <?php require_once('components/banner.html'); ?>
                <div class="content">
                    <div class="main-wrapper home">
                        <div class="main-container" style="border-bottom:1px solid #353535;">
                            <h2>Welcome to UrbanDog</h2>
                            <p>We are Toronto’s premiere canine fitness and spa located in the heart of downtown. For over a decade, we have been offering cage free services including daycare and grooming. We made it our mission to care for dogs as if they were own. This core value rules all of our decisions, in every part of the business. It’s the basis for everything that we do.</p>

                            <p>We are open 7 days a week, with extended hours to serve you.</p>

                            <p>Welcome to our family.</p>
                        </div>
                        <div class="main-container">
                            <h2>Live Webcams</h2>
                            <p>Our cameras in both our large and small playrooms stream live when in use from 8am to 4pm 7 days a week.</p>

                            <p>You can log in from your computer or your <a href="live-webcams.php" title="Live Webcams">mobile device</a>.</p>

                            <p>Don't be alarmed if you don't see your dog on camera.  They may be having a nap on a comfy bed out of camera range, enjoying the sun outside, or having a snack in the lunch room.</p>
                            <div class="main-container">
                                <div class="left-side">
                                    <object class="dropcam">
                                        <param name="movie" value="https://www.dropcam.com/e/3384275ee0f94c1596259353e995411b?autoplay=false">
                                        <param name="allowFullScreen" value="true">
                                        <param name="allowscriptaccess" value="always">
                                        <param name="wmode" value="opaque">
                                        <embed src="https://www.dropcam.com/e/3384275ee0f94c1596259353e995411b?autoplay=false" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" class="dropcam" wmode="opaque">
                                    </object>
                                    <a href="http://dropc.am/p/sXZ80F" target="_blank">
                                        <div class="cam-link">
                                            UrbanDog Playground
                                        </div>
                                    </a>
                                </div>
                                <div class="right-side">
                                    <object class="dropcam">
                                        <param name="movie" value="https://www.dropcam.com/e/3384275ee0f94c1596259353e995411b?autoplay=false">
                                        <param name="allowFullScreen" value="true">
                                        <param name="allowscriptaccess" value="always">
                                        <param name="wmode" value="opaque">
                                        <embed src="https://www.dropcam.com/e/3384275ee0f94c1596259353e995411b?autoplay=false" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" class="dropcam" wmode="opaque">
                                    </object>
                                    <a href="http://dropc.am/p/sXZ80F" target="_blank">
                                        <div class="cam-link">
                                            UrbanDog Pool
                                        </div>
                                    </a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="social-section quote">
                        <h3>"Dogs are not our whole life, but they make our lives whole."</h3>
                        <h3 style="text-align:right;font-weight:400;color:#7fbe00;">- Roger Caras</h3>
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
        $('.home').addClass('selected');
        $('.home-banner').removeClass('banner-hidden');
    </script>
</html>