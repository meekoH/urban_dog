<?php require_once('components/instagram-feed.php'); ?>
<!DOCTYPE HTML>

<html>
    <head>
        <meta name="keywords" content="pet professionals, urbandog toronto, skilled staff, experienced dog handlers, pet first aid, dog daycare, doggie daycare, doggy daycare, dog playgroups, canine fitness, supervised dog play, cage free, crate free, open concept, socialization, play nice, webcams, Toronto dog daycare, etobicoke dog daycare, Mississauga dog daycare" />
        <meta name="description" content="Crate free playcare that’s full of high quality, safe, and enriching play equipment and toys. Add lots of 2 legged supervision and interaction from our experienced team lots of friendly 4 legged playmates, and your best friend will surely have the best day ever." />
        <?php require_once('components/head.html'); ?>
    </head>
    <body>
    	<div class="wrapper">
    		<div class="content-wrapper" id="main">
                <?php require_once('components/header.html'); ?>
                <?php require_once('components/banner.html'); ?>
                <div class="content">
                    <div class="main-wrapper service-playcare">
                        <div class="main-container">
                            <h2>Playcare</h2>

                            <h2 style="font-weight:400;">Where Best Friends are Made</h2>

                            <p>There are times when you just can’t make it to the park AND that big meeting at work.<br>
                                For those times, and more, we provide crate free playcare that’s full of high quality, safe, and enriching play equipment and toys. Add lots of 2 legged supervision and interaction from our experienced team lots of friendly 4 legged playmates, and your best friend will surely have the best day ever.</p>

                            <p>Our indoor playgrounds are large, and full of natural light, so every dog has the space to play and run around, or just curl up for a nap away from the fun.</p>

                            <p>There’s an outdoor area for potty moments. When the weather’s nice, there are bone shaped splash pool for our friends to enjoy.<br>
                                We have a <a href="our-policies.php#playNice" title="Our Policy">Play Nice Policy</a> so you can feel comfortable that your dog is hanging with the right crowd of friends.</p>

                            <!-- <h2 style="font-weight:400;">We care about the details</h2>

                            <p><i class="fa fa-circle bullet-point"></i> Fresh, filtered water at all times from automatic watering bowls</p>

                            <p><i class="fa fa-circle bullet-point"></i> Hospital grade HVAC system that filters and eliminates all airborne illnesses while providing a comfortable space to play and hang out</p>

                            <p><i class="fa fa-circle bullet-point"></i> Lots of natural sunlight indoors from our installed skylights and big windows.</p>

                            <p><i class="fa fa-circle bullet-point"></i>Separate play for big and small dogs.</p>

                            <p><i class="fa fa-circle bullet-point"></i> Fully supervised- dogs are never left alone, not even for a minute</p>

                            <p><i class="fa fa-circle bullet-point"></i> Web cams to watch while you’re at work</p> -->

                            <h2 style="font-weight:400;">Extended Playcare Hours</h2>
                            <p>Monday - Friday : 7am - 8pm<br>
                                Saturday : 8am - 6pm<br>
                                Sunday : 10am - 6pm</p>

                            <h2 style="font-weight:400;">Pricing</h2>
                            <p>Up to 3 hours of play - <span class="orange">$22</span><br>
                                Up to 6 hours of play - <span class="orange">$34</span><br>
                                Up to 13 hours of play - <span class="orange">$41</span></p>

                            <p>We also offer discounted rates on multi-visit passes and monthly memberships.<br>
                                <a href="contact.php" title="Contact" style="font-weight:700;font-style:italic;margin-right:3px;">Contact us</a> for more details or, better yet, drop by for a tour and let us tell you in person.</p>
                        </div>
                    </div>
                    <div class="social-section quote">
                        <h3>"I think dogs are the most amazing creatures; they give unconditional love. For me they are the model for being alive."</h3>
                        <h3 style="text-align:right;font-weight:400;color:#7fbe00;">- Gilda Radner</h3>
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
        $('.playcare').addClass('selected');
        $('.playcare-banner').removeClass('banner-hidden');
    </script>
</html>