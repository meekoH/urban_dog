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
                            <h2>Sleepovers</h2>

                            <h2 style="font-weight:400;">You can sleep well knowing your best friend is in good hands.</h2>

                            <p>As an added service to our playcare clients only we offer just-like-home overnight care. Our slumber room has satellite TV, lots of comfy beds; even a big bed for sharing with the overnight attendant if that’s what you prefer.  Windows bring in lots of natural light to wake everyone up in the morning.</p>

                            <p>We offer around the clock in room supervision. That’s right: our staff sleep with dogs!</p>

                            <p>Your best friend will snuggle up with friends at night after a full day of play and you can sleep well knowing they are in good hands.</p>

                            <p><a href="contact.php" title="Contact" style="font-weight:700;font-style:italic;margin-right:3px;">Contact us</a> for more details or, better yet, drop by for a tour and let us tell you in person.</p>

                            <p>You can rest assured your dog is safe and having fun by logging in to our <a href="live-webcams.php">web cams</a> from your computer or phone. Our cameras run from 8am until 4pm, 7 days a week.</p>

                            <p>Don't be alarmed if you don't see your dog on camera. They may be having a nap on a comfy bed out of camera and action range, enjoying the sun outside, or having a snack in the lunch room.</p>
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
        $('.sleepovers').addClass('selected');
        $('.sleepovers-banner').removeClass('banner-hidden');
    </script>
</html>