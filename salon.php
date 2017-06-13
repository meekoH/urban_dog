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
                            <h2>Salon &amp; Spa</h2>

                            <h2 style="font-weight:400;">A Little TLC goes a long way.</h2>

                            <p>Treat your best friend to a spa-like experience. Our expertly trained and passionate pros will attend to whatever is needed. We use only premium, all natural, biodegradable products that are healthy for your dog and the planet.</p>

                            <p class="bold orange">Try out our low stress environment and see for yourself. Your dog will thank you.</p>

                            <p>Building a bond of trust is paramount to our spa services. We are cage free and all dogs are dried by hand. Each dog is groomed or bathed at its scheduled appointment time and goes home after we’re done. Dogs enjoy the experience much more when it involves the shortest stay in the spa we can manage! Our goal is to make the spa experience as gentle and stress free as possible for even the most nervous of dogs.</p>

                            <p class="bold orange">Can’t always make a midday appointment? Join our playcare program and combine a bath or groom for a full day at UrbanDog. Ask us for details.</p>

                            <hr>

                            <h2>The Ultimate Haircut</h2>

                            <p>When your dog needs a great haircut, we offer full grooming services 7 days a week. This service includes a soothing bath, coat conditioning, hand blow dry, brush out, nail trim and ear cleaning. The works! Rates vary by breed, size and coat. Please call for more details and to reserve.</p>

                            <hr>

                            <h2>The Touch Up</h2>

                            <p>Only need some tidying between haircuts? We offer a range of a la carte services ranging from face trims to paw trims to brush out services between appointments.</p>

                            <p class="bold orange">No haircut necessary? Just need a clean dog? Try our Massaging bath.</p>

                            <p>We use the <a href="blog_detailed.php?blogid=16">Patented Hydrosurge bathing system</a>. This system combines water, shampoo and air. By pulsating away dead skin, dirt and debris, it leaves every coat thoroughly clean and the skin beneath healthier than ever. It’s as close to a massage as it gets. This service includes our signature bath, brush out, by hand blow dry and ear cleaning. Rates are based on the breed, size and coat condition of your dog. Rates start as low as <span class="bold orange">$35</span>.</p>

                            <hr>

                            <h2>A la Carte Services</h2>

                            <p>We may not paint nails or dye hair but we offer premium no nonsense a la carte services to keep your dog feeling, looking and smelling great.</p>

                            <p>Nail trims - <span class="bold orange">$16</span> (combine with a bath and it’s only <span class="bold orange">$10</span>)<br>
                                Keeping nails trimmed every 4 - 6 weeks will prevent splitting, breaking and smashing. It also lessens the pressure on your dogs nail bed while walking.</p>

                            <p>Nail grinding - <span class="bold orange">$20</span><br>
                                Great for dogs with long quiks, to round sharp edges and to smooth brittle ails.  Dogs with feet sensitivity may also benefit from the slow vibrating sensation rather than the pressure of traditional nail trimming.</p>

                            <p>Deshedding, brush out services - <span class="bold orange">$25</span> per &frac12; hour<br>
                                We can help control unwanted excess hair and mats in between baths and grooms</p>

                            <p>Blueberry facials - <span class="bold orange">$10</span><br>
                                Let your dog enjoy the relaxing aroma of blueberries while this treatment brightens faces and detoxifies those tricky folds on those flatter faced friends.</p>

                            <p>Specialized bath treatments (Fleas? Smell like skunk?...) We’ll do what we do best for an added - <span class="bold orange">$25</span></p>

                            <p><span class="bold orange">Please ask us about our Puppy Packages for dogs under 4 months of age.</span><br>
                                We’ll help make their first experience a stress free and happy one!</p>
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
        $('.salon').addClass('selected');
        $('.salon-banner').removeClass('banner-hidden');
    </script>
</html>