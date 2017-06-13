<?php require_once('components/instagram-feed.php'); ?>
<!DOCTYPE HTML>

<html>
    <head>
        <meta name="keywords" content="pet news, dog news, cat news, media, press, Toronto news, National Post, Toronto Star, Urbandog, Urbandog Fitness and spa" />
        <meta name="description" content="We’re in the news. See what the press has to say about us." />
        <?php require_once('components/head.html'); ?>
    </head>
    <body>
    	<div class="wrapper">
    		<div class="content-wrapper" id="main">
                <?php require_once('components/header.html'); ?>
                <?php require_once('components/banner.html'); ?>
                <div class="content">
                    <div class="main-wrapper about-media">
                        <div class="main-container">
                            <h2 style="text-align:center;">Media</h2>

                            <p style="text-transform:uppercase;font-size:24px;margin:7% 0;">Coming Soon...</p>
                            <!-- <div class="article-row">
                                <div class="article">
                                    <a href="http://news.nationalpost.com/2015/02/21/dog-hotel-a-luxury-resort-experience-that-offers-only-the-best-amenities/" title="National Post Article" target="_blank">
                                        <img src="img/article-national-post.png" alt="National Post Logo">
                                        <p>Elevated orthopedic beds, filtered water, a chemical-free pool, aromatherapy, spa treatments and the option of...</p>
                                        <div class="article-info">
                                            National Post<br>
                                            <span class="article-date">02/21/2015</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="article">
                                    <a href="http://www.blogto.com/sports_play/2015/02/toronto_to_get_its_first_luxury_dog_hotel/" title="BlogTO Article" target="_blank">
                                        <img src="img/article-blog-to.png" alt="BlogTO Logo">
                                        <p>Finally Toronto gets a dog hotel fit for the most pampered of pooches.</p>
                                        <div class="article-info">
                                            blogTO<br>
                                            <span class="article-date">02/21/2015</span>
                                        </div>
                                    </a>
                                </div> -->
                                <!-- <div class="article">
                                    <a href="#" target="_blank">
                                        <img src="img/article-national-post.jpg">
                                    </a>
                                </div> -->
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="social-section quote">
                        <h3>"He is your friend, your partner, your defender, your dog. You are his life, his love, his leader. He will be yours, faithful and true, to the last beat of his heart. You owe it to him to be worthy of such devotion."</h3>
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
        $('.media').addClass('selected');
        $('.media-banner').removeClass('banner-hidden');
    </script>
</html>