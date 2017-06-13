<?php require_once('components/instagram-feed.php'); ?>
<!DOCTYPE HTML>

<html>
    <head>
        <meta name="keywords" content="live feed, webcam, dropcam, supervised dog play, dog daycare, dog cameras, dog pool, Urbandog" />
        <meta name="description" content="Never miss a thing. Watch your best friend play with their friends in our playground and pool." />
        <?php require_once('components/head.html'); ?>
    </head>
    <body>
    	<div class="wrapper">
    		<div class="content-wrapper" id="main">
                <?php require_once('components/header.html'); ?>
                <?php require_once('components/banner.html'); ?>
                <div class="content">
                    <div class="main-wrapper service-webcam">
                        <div class="main-container">
                            <h2>Live Webcams</h2>

                            <h2 style="font-weight:400;">You don't have to miss a thing</h2>
                            <p>You can rest assure your dog is safe and having fun by logging into our web cams from your computer or mobile device.<br>
                                Our cameras run from 8am until 4pm, 7 days a week.</p>

                            <!-- <p>Don't be alarmed if you don't see your dog on camera. They may be having a nap on a comfy bed out of camera and action range, enjoying the sun outside, or having a snack in the lunch room.</p> -->

                            <h2 style="font-weight:400;">To watch from your iPhone or Android</h2>
                            <p>From your <span class="bold">Mac</span> or <span class="bold">PC</span>, click the <span class="bold">Green Link Button</span> below for the camera you wish to watch<br>
                                Click the follow button in the lower left hand corner<br>
                                You'll be prompted to create or log into your Dropcam account</p>

                            <p>From your mobile device, go to <a href="https://www.dropcam.com/" title="Dropcam" target="_blank" style="font-weight:700;font-style:italic;margin-right:3px;">Dropcam.com</a>.  Download and install the Dropcam app<br>
                                Using the Dropcam app, log into your Dropcam account. Your "followed" camera feeds should now show up within your app.</p>

                            <div class="main-container">
                                <div class="left-side">
                                    <img src="img/webcam1.jpg" alt="Park9 Webcam 1">
                                </div>
                                <div class="right-side">
                                    <img src="img/webcam2.jpg" alt="Park9 Webcam 2">
                                </div>
                                <div class="clear"></div>
                            </div>

                            <p class="bold orange">You will need Adobe Flash to view the cameras from your computer.</p>

                            <p class="bold orange">Please note: We are in a very underserved business internet area in the city. We apologize if you experience any dropping or freezing. We continue to work with our service provider to try and improve the situation.</p>
                        </div>
                    </div>
                    <div class="social-section quote">
                        <h3>"Happiness is when you look at your dog play and forget all your problems."</h3>
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
        $('.services').addClass('selected');
        $('.webcam').addClass('selected');
        $('.webcam-banner').removeClass('banner-hidden');
    </script>
</html>