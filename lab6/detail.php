<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Let's Recycle!-Solutions</title>
        <meta name="author" content="Jay Hwasung Jung">
        <meta name="description" content="breifly introducing how we, human, can make a better world by recycling.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 648px)" href="css/custom-tablet.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 500px)" href="css/custom-phone.css?version=<?php print time(); ?>" type="text/css">
    </head>

    <body class="grid-layout-body">
        <!-- the earth img and the main title of the webpage-->
        <header>
            <figure>
                <!--I did not use responsive images, since this is not an important picture-->
                <img class="rounded" alt="the earth" src="image/earth.png">
                <figcaption><cite><a href="http://pngimg.com/imgs/nature/earth/" target="_blank">photo by http://pngimg.com/</a></cite></figcaption>
            </figure>
            <h1>Let's save the earth!</h1>
        </header>

        <!-- navigation section-->
        <nav id="menuLine">
            <a href="index.php" class="activePage">Home</a>
            <a href="detail.php" class="activePage">Solutions</a>
            <a href="form.php" class="activePage">Donation form</a>
            <a href="extra.php" class="activePage">About me</a>
        </nav>

        <!--Solutions which can deal with the ocean trash problem-->
        <main>
            <h2>Turtle is suffering!</h2>
            <!--iframe: youtube video!-->
            <section id="youtube">
                <h3>youtube video</h3>
                <iframe src="https://www.youtube.com/embed/JIklRSR0ov4?rel=0&autoplay=1&mute=1">
                </iframe>
                <p class="source">Source : <a href="//www.youtube.com/embed/JIklRSR0ov4" target="_blank">Australian academy of sicence(youtube)</a></p>
            </section>
            <article>
                <h2>What can we do for them?</h2>
                <ol>
                    <li class="oddList">
                        <h4>Not Using the Single-Use Plastics</h4>
                        <aside class="flexbox-layout">
                            <p class="main"> Single-Use Plastics such as plastic bags, water bottles, and straws have made human's life convenient and effective throughout our life; 
                                when we go to the cafe,when we go to our famous resturant, and when we go on a picnic, we have been using it, and we might not be hard to 
                                live without it. However, have you ever thought of the effects after we use it once? Usually, those Single-Use plastics are dumped into the 
                                ocean. Those trash devestate the ocean life; ocean life such as turtle cannot recognize the differences between jellyfish and plastic bags,
                                and eating those items are fatal to those ocean lifes. The best way to solve this problem is not to use a Single-Use Plastics. Instead, we
                                can bring our own mug or tumbler to the cafe, buy a reusable container, and not to use a straw.
                            </p>
                            <figure>
                                <img class="rounded" alt="plastic" src="image/plastic-small.jpg" srcset="image/plastic-medium.jpg 2x,image/plastic-large.jpg 3x">
                                <figcaption><cite><a href="https://www.google.com/search?q=single+use+plastic&client=safari&rls=en&sxsrf=ALeKk00y1bfsWEDIeZQbXnu2onFKl-Od-A:1601391344585&source=lnms&tbm=isch&sa=X&ved=2ahUKEwia2_XRz47sAhVzl3IEHR_tCv4Q_AUoAnoECCkQBA&biw=1398&bih=789#imgrc=lp-QeyUPaw1J5M" target="_blank">photo by happymug.tv</a></cite></figcaption>
                            </figure>
                        </aside>
                    </li>
                    <li class="evenList">
                        
                        <h4>Try to Learn How to Sort the Trash and Recycle in a right way</h4>

                        <aside class="flexbox-layout">
                            <figure>
                                <img class="rounded" alt="recycle" src="image/recycle-small.jpeg" srcset="image/recycle-medium.jpeg 2x,image/recycle-large.jpeg 3x">
                                <figcaption><cite><a href="https://www.cnbc.com/2020/02/19/getting-serious-about-recycling-means-starting-with-truly-recyclable-products.html" target="_blank">photo by cnbc.com</a></cite></figcaption>
                            </figure>
                            <p class="main"> Recycle is the way that we can deal with the trash problems. By recycling, trash can be used and converted into reusable material, so it regards
                                as a good solution for the ocean trash problem. However, because many people are not willing to do so, the problem became serious, and the ocean
                                life is still suffering. If we do not recycle properly, the trash will be dumped into the ocean since it is treated as a landfill. As a result, 
                                we need to learn how to sort the trash that we produce. <a href="index.php#sort" target="_blank"> Click the link </a> to learn how you can sort the trash properly.
                            </p>
                        </aside>
                    </li>
                </ol>
                <p class="source">
                    Source: <a href="//www.oceanicsociety.org/blog/1720/7-ways-to-reduce-ocean-plastic-pollution-today" target="_blank"> Oceanic Society(Click to read the original article)</a>
                </p>
            </article>
        </main>

        <!-- navigation section-->
        <footer>
            <p><a href="../index.php">Site map (Main index)</a></p>
        </footer>
    </body>
</html>
