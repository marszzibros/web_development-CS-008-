<!DOCTYPE html>
<html lang="en">
    <head class="fluid-layout">
        <meta charset="UTF-8">
        <title>Let's Recycle!</title>
        <meta name="author" content="Jay Hwasung Jung">
        <meta name="description" content="breifly introducing how we, human, can make a better world by recycling.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 648px)" href="css/custom-tablet.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 500px)" href="css/custom-phone.css?version=<?php print time(); ?>" type="text/css">
    </head>

    <body class="fluid-layout grid-layout-body">
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
        
        <main>
            <aside>
                <figure>
                    <img alt="me sitting on a trash bin" src="image/trashme-small.jpg" srcset="image/trashme-medium.jpg 2x,image/trashme-large.jpg 3x">
                    <figcaption><cite>photo by myself</cite></figcaption>
                </figure>
            </aside>
            <article>
                <h3> my information </h3>
                <p> name: Jay Hwasung Jung</p>
                <p> school: Univerty of Vermont</p>
                <p> Today's feeling: I feel sad; in this morning, I just found that my LAB 05's grade was B. If I had not taken it sersiouly, I would not feel sad about it. I spent
                    more than four hours to finish it, I do not know what happened at the moment, but I just submitted right away without checking HTML validity check, so I got B+. 
                    CS 008 is really hard to study, especially study alone; I am taking an online course, and with lack of materials or instructions, I sometimes do not know what the
                    check mark on the lab is. I checked the all the thing that I got wrong on previous LAB. I hope I can get an A+ on this lab, LAB 05. </p>
                <h3>recent concern</h3>
                <ol>
                    <li>Test
                        <ul>
                            <li>CS 008</li>
                            <li>CS 021</li>
                            <li>MATH 122</li>
                        </ul>    
                    </li>
                    <li>Minor
                        <ul>
                            <li> I do not know if I can minor the Neuroscience</li>
                            <li> my schedule will be really busy...</li>
                        </ul>
                    </li>
                </ol>
            </article>
        </main>

        <footer>
            <p><a href="../index.php">Site map (Main index)</a></p>
        </footer>
    </body>
</html>
