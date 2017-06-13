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
                            <h2>Training</h2>

                            <h2 style="font-weight:400;">Be Cool. Go to school.</h2>

                            <p>Just got a puppy, adopted a new dog or just need some help bringing up your best friend? Want to learn a few tricks or try your hand at agility?</p>

                            <p>UrbanDog hosts Who’s Walking Who training classes weeknights in our large playroom.</p>

                            <p>Learn more or just register for classes, by visiting <a href="http://www.whoswalkingwho.ca">whoswalkingwho.ca</a>.</p>
                        </div>
                    </div>
                    <div class="social-section quote">
                        <h3>"Need Quote Here"</h3>
                        <h3 style="text-align:right;font-weight:400;color:#7fbe00;">- Evan Paradis</h3>
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
        $('.training').addClass('selected');
        $('.training-banner').removeClass('banner-hidden');
    </script>
</html>