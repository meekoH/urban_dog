<?php require_once('components/instagram-feed.php'); ?>
<?php include_once 'db_connection.php'; ?>
<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <style>
            .main-container span.bold { text-transform:uppercase; }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="content-wrapper" id="main">
                <?php require_once('components/header.html'); ?>
                <?php require_once('components/banner.html'); ?>
                <div class="content">
                    <div class="main-wrapper blog">
                        <div class="main-container">
                            <h2>Blog</h2>
                            <a href="blog.php" title="Back to Blog" class="backtoblog">&lt; &nbsp; Back to All Posts</a>
                            <div class="blog-main"></div>
                        </div>
                    </div>
                    <div class="social-section quote">
                        <h3>"Acquiring a dog may be the only opportunity a human ever has to choose a relative."</h3>
                        <h3 style="text-align:right;font-weight:400;color:#7fbe00;">- Mordecai Siegal</h3>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <?php require_once('components/ig-feed.php'); ?>
            <?php require_once('components/footer.html'); ?>
        </div>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script src="js/scripts.js"></script>
    <script>blogdetails(<?= $_REQUEST['blogid'] ?>);</script>
    <script>
        $('.blog').addClass('selected');
        $('.blog-banner').removeClass('banner-hidden');
    </script>
</html>