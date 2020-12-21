<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Let's Recycle!</title>
        <meta name="author" content="Jay Hwasung Jung">
        <meta name="description" content="breifly introducing how we, human, can make a better world by recycling.">
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
    </head>

    <body>
        <!-- the earth img and the main title of the webpage-->
        <header>
            <figure>
                <img class="rounded" alt="the earth" src="image/earth.png">
                <figcaption><cite><a href="http://pngimg.com/imgs/nature/earth/" target="_blank">photo by http://pngimg.com/</a></cite></figcaption>
            </figure>
            <h1>Let's save the earth!</h1>
        </header>
        <figure class="animation1">
            <img alt="turtle moving" src="image/turtlemoving.png">
            <figcaption><cite><a href="https://pnghunter.com/png/turtle-3/" target="_blank">photo by https://pnghunter.com/png/turtle-3/</a></cite></figcaption>
        </figure>
        <figure class="animation2">
            <img alt="turtle moving" src="image/turtlemoving_reverse.png">
            <figcaption><cite><a href="https://pnghunter.com/png/turtle-3/" target="_blank">photo by https://pnghunter.com/png/turtle-3/</a></cite></figcaption>
        </figure>                   
        <!-- navigation section-->
        <nav id="menuLine">
            <a href="index.php" class="activePage">Home</a>
            <a href="detail.php" class="activePage">Solutions</a>
            <a href="form.php" class="activePage">Donation form</a>
            <a href="extra.php" class="activePage">About me</a>
        </nav>
        
        <main>
            <!-- first section 'introduction'-->
            <article>
                <h2>Intro to recycling</h2>
                <section id="wordIntroduction">         
                    <h3>Problems caused by not Recycling</h3>
                    <p class="main">Dumping trash to the ocean has been a big problem since it breaks the ocean life. For example, ocean has been contaminated by garbage, 
                    especially with plastic bags, and turtles are suffering from it. According to <a href='https://www.worldwildlife.org/stories/what-do-sea-turtles-eat-unfortunately-plastic-bags/' target="_blank">
                    <em>worldwildlife.org</em></a>, <mark>turtles do not know whether the object they eat is a jelifish or a plastic bag.</mark> In addition, 
                    if they eat plastic product, it might be fatal to them. That is the only one part of the problems; there are far more serious 
                    problems out there. We might not know right now, but I am sure that it will eventually affect human as well. <mark>What should we do?<strong> 
                    Recycle!</strong></mark><!--word count: 106 --> </p>
                </section>       

                <aside id="picIntroduction">
                    <figure class="left" id="explanation1">
                        <img class="rounded" alt="turtle eating plastic bag" src="image/turtle1.jpg">
                        
                        <!--source information of the image01 -->
                        <figcaption>The turtle is eating plastic bag since he/she cannot recognize plastic bags <a href="https://www.worldwildlife.org/stories/what-do-sea-turtles-eat-unfortunately-plastic-bags" 
                            target = "_blank"><em><cite>[source: worldwildlife.org]</cite></em></a>
                        </figcaption>
                    </figure>

                    <figure class="right" id="explanation2">
                        <img class="rounded" alt="altered turtle" src="image/turtle2.jpg">
                        <!--source information of the image02 --> 
                        <figcaption>The turtle grows up with the plastic strip, and it changes his/her shape
                            <a href="https://educateinspirechange.org/nature/25-animal-photos-illustrate-how-painfully-obvious-it-is-we-should-recycle/" target = '_blank'><em><cite>[source: educateinspirechange.org]</cite></em></a>
                        </figcaption>
                    </figure>
                </aside>

                <!-- second section 'sort'-->
                <section id="sort">
                    <!--desciption what I am going to introduce-->

                    <h3>How can we sort the trash?</h3>
                    <p class="main">Before we take an action, recycling, we better know the breif definition of what the recycle is. What I mean by <mark><strong>Recycle</strong>
                    is to convert into resusable material(google search)</mark>. In fact, recycling is a good way to reduce the trash that we, human, dump 
                    to the ocean because we collect the reusable items and convert that items, what it is used to be, to a new item that we can use again. However, recycling does not work 
                    automatically. In other words, in order to recycle, we need to make an effort to sort it. Here is the sorts that you can refer to:<!--word count: 103--></p>
                    <!--Main table that I have to organize-->
                    <table>
                        <caption>How to Solve the trash?</caption>
                        <!--table header elements-->
                        <tr>
                            <th></th>
                            <th>Compost</th>
                            <th>Recycle</th>
                            <th>Landfill</th>
                        </tr>
                        <!--defintion-->
                        <tr class="rowOdd">
                            <th>Definition</th>
                            <td>trash that can be decayed </td>
                            <td>trash that can be used and converted into reusable material</td>
                            <td>trash that is neither compostable nor recyclable</td>
                        </tr>
                        <!--pictures-->
                        <tr class="rowEven">
                            <th>Pictures</th>
                            <td>
                                <figure>
                                    <img class="rounded" alt="compost" src="image/compost.jpg">
                                    <figcaption>compost is the trash that can be decayed.<a href="https://www.gardeningknowhow.com/composting/basics/composting-basics.htm" target="_blank"><cite>gardeningknow.com</cite></a>
                                    </figcaption>
                                </figure>
                            </td><!--https://www.gardeningknowhow.com/composting/basics/composting-basics.htm-->
                            <td>
                                <figure>
                                    <img class="rounded" alt="recycle" src="image/recycle_plastic.jpg">
                                    <figcaption>recycle is the trash that can be converted.<a href="https://www.forgerecycling.co.uk/blog/why-cant-all-plastic-be-recycled/" target="_blank"><cite>forgerecycling.co.uk</cite></a>
                                    </figcaption>
                                </figure>
                            </td><!--https://www.forgerecycling.co.uk/blog/why-cant-all-plastic-be-recycled/-->
                            <td>
                                <figure>
                                    <img class="rounded" alt="landfill" src="image/landfill.jpeg">
                                    <figcaption>landfill is the trash that can be neither decayed nor converted.<a href="https://www.businessinsider.com/unwashed-recyclables-go-to-landfill-2015-9" target="_blank"><cite>businessinsider.com</cite></a>
                                    </figcaption>
                                </figure>
                            </td><!--https://www.businessinsider.com/unwashed-recyclables-go-to-landfill-2015-9-->
                        </tr>

                        <!--examples: I will make a list here-->
                        <tr class="rowOdd">
                            <th>Examples</th>
                            <td>
                                <ul>
                                    <li>Food scraps</li>
                                    <li>Napkins</li>
                                    <li>Flowers & Plant</li>
                                    <li>Coffee filters</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Plastics
                                        <ol>
                                            <li class="oddList">Any bottles w/o label</li>
                                            <li class="evenList">Products made of plastics</li>
                                        </ol>
                                    <li>Paper                            
                                        <ol>
                                            <li class="oddList">Magazines</li>
                                            <li class="evenList">Cardboard</li>
                                        </ol>
                                    </li>
                                    <li>Glass</li>
                                    <li>Metal</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Foam trays & containters</li>
                                    <li>Kitchen grease</li>
                                    <li>Non-recyclable materials</li>
                                </ul>
                            </td>
                        </tr>
                        <!--my sources-->
                        <tr class="rowEven">
                            <td colspan = "4">
                                <a href="//www.gardeningknowhow.com/composting/basics/composting-basics.htm" target="_blank" class="source"><mark><strong>(compost pic)</strong></mark>(www.gardeningknowhow.com/composting/basics/composting-basics.htm)</a>
                                <a href="//www.forgerecycling.co.uk/blog/why-cant-all-plastic-be-recycled/" target="_blank" class="source"><mark><strong>(recycling pic)</strong></mark>(www.forgerecycling.co.uk/blog/why-cant-all-plastic-be-recycled/)</a>
                                <a href="//www.businessinsider.com/unwashed-recyclables-go-to-landfill-2015-9" target="_blank" class="source"><mark><strong>(landfill pic)</strong></mark>(//www.businessinsider.com/unwashed-recyclables-go-to-landfill-2015-9)</a>
                                <a href="//www.seattle.gov/utilities/your-services/collection-and-disposal/multi-family-properties/for-managers-and-owners/help-residents" target="_blank" class="source"><mark><strong>(examples)</strong></mark>(www.seattle.gov/utilities/your-services/collection-and-disposal/multi-family-properties/for-managers-and-owners/help-residents)</a>     
                            </td>
                        </tr>
                        <!-- 
                            <tr> elements : 4 (above table: 2, total: 6)
                            <th> elements : 5 (above table: 0, total: 5)
                            <td> elements : 10 (above table: 3, total: 13)
                        -->
                    </table>
                </section>
                <h3 id="organization">Organization</h3>
                <section class="grid-layout">
                    <h4 id="title_orgType">Organization type</h4>
                    <h4 id="title_name">name</h4>
                    <h4 id="title_states">states</h4>
                    <h4 id="title_info">more info</h4>
                    <p id="orgType_nonprofit">non-profit</p>         
                    <p id="ARC">Alabama Recycleing Coalition</p>
                    <p id="Alabama">Alabama</p>                                
                    <p id="ARCinfo"><a href="tel:+18005162120">1(800)516-2120</a></p>
                    <p id="NRC">Northest Recyling Council</p>
                    <p id="Vermont">Vermont</p>                                
                    <p id="NRCinfo"><a href="//www.nerc.org" target="_blank">www.nerc.org</a></p>
                    <p id="orgType_profit">profit</p>         
                    <p id="AOR">Association of Ohio Recyclers</p>
                    <p id="Ohio">Ohio</p>                                
                    <p id="AORinfo"><a href="//www.ohiorecycles.org" target="_blank">www.ohiorecycles.org</a></p>
                    <p id="source"><a href="https://www.hometowndumpsterrental.com/blog/big-list-of-recycling-organizations-helping-america-go-green" target="_blank">[source] to see more organization...</a></p>         
                </section>
                
                <!--conclusion-->
                <section id="conclusion">
                    <h3>To make a better world</h3>
                    <p class="main"><mark><strong>The more recycle we do, the less painful turtle will suffer.</strong></mark> We cannot recycle 100%, to be honest, but we can at least make an effort
                    to make a better world for every single creatures in the world. We are living together!</p>
                </section>

            </article>
        </main>

        <footer>
            <p><a href="../index.php">Site map (Main index)</a></p>
        </footer>
    </body>
</html>
