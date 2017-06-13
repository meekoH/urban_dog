<?php require_once('components/instagram-feed.php'); ?>
<!DOCTYPE HTML>

<html>
    <head>
        <meta name="keywords" content="pet professionals, urbandog toronto, skilled staff, experienced dog handlers, pet first aid, cat specialist, dog specialist, Downtown core, Corporate pet services" />
        <meta name="description" content="We brought together the best in the industry so we can provide you with the world class care and attention your best friend deserves. Inspired by our own dogs and cats." />
        <?php require_once('components/head.html'); ?>
    </head>
    <body>
        <div class="wrapper">
            <div class="content-wrapper" id="main">
                <?php require_once('components/header.html'); ?>
                <?php require_once('components/banner.html'); ?>
                <div class="content">
                    <div class="main-wrapper our-promise">
                        <div class="main-container">
                            <h2 style="text-align:center;">Our Team</h2>
                            <p>With our 10+ years' experience and an excellent reputation in the industry, we have the unique ability to bring together the best in the industry to provide world class care and attention your best friend deserves.</p>

                            <p>Our team lives by these leading company principles:</p>

                            <h2 style="font-weight:400;">We believe in integrity</h2>
                            <p><i class="fa fa-circle bullet-point"></i> Honesty and transparency are the cornerstones of our business. We offer a large viewing window into our playrooms and spa so you can see where your best friend will be hanging out. We provide web cam access 8 hours a day, every day. We take pride in what we do and we welcome you to visit us and are happy to give you a full tour of the facility.</p>

                            <h2 style="font-weight:400;">We put clients first</h2>
                            <p><i class="fa fa-circle bullet-point"></i> We have a "whatever it takes" attitude to provide the highest level of service striving to exceed expectations, every time. We invest in every relationship we make.</p>

                            <h2 style="font-weight:400;">We provide quality care</h2>
                            <p><i class="fa fa-circle bullet-point"></i> We make it our mission to care for dogs and cats as if they were our own. This core value rules all of our decisions in every part of our business. We have high standards just like you. We take pride in everything we do.</p>

                            <h2 style="font-weight:400;">We invest in our people</h2>
                            <p><i class="fa fa-circle bullet-point"></i> Our professional staff are provided with over 80 hours of in house training in dog body language, behaviour and pet first aid when hired. We believe in continuing education so we can better our skills. Inquiring minds make us great.</p>

                            <h2 style="font-weight:400;">We are good to the environment</h2>
                            <p><i class="fa fa-circle bullet-point"></i> We use all natural, biodegradable products throughout the facilities wherever possible.  We sell and use as many locally sourced, recycled and environmentally friendly products we can find. We will continually strive to lessen our environmental impact.</p>

                            <p class="orange bold" style="font-size:16px;">Are you interested in becoming part of a <a href="employment.php" title="Employment" style="color:#666;">winning team</a>?</p>
                        </div>
                    </div>
                    <div class="social-section quote">
                        <h3>"No matter how little money and how few possessions you own, having a dog makes you rich."</h3>
                        <h3 style="text-align:right;font-weight:400;color:#7fbe00;">- Louis Sabin</h3>
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
        $('.promise').addClass('selected');
        $('.team-banner').removeClass('banner-hidden');
    </script>
</html>