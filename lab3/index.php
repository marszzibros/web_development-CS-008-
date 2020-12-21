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
        <!-- introduction with two turtles pics.-->
        <header>
            <h1>Let's save the earth!</h1>
        </header>
        <nav>
            <a href="index.php">Home&nbsp;</a>
            <a href="detail.php">Solutions&nbsp;</a>
            <a href="form.php">Donation form&nbsp;</a>
        </nav>
        <main>
            <!-- first section 'introduction'-->
            <article>
                <section id="introduction">
                    <h2>Problems caused by not Recycling</h2>
                    <!--a table that might make my page better(I want to make it a bit organized)-->
                    <table>
                        <tr>
                            <!--the first turtle pic-->
                            <td>
                                <figure>
                                    <img alt='Turtle eating plastic bag' src='../image/lab03/turtle1.jpg'>
                                    
                                    <!--source information of the image01 -->
                                    <figcaption>The turtle is eating plastic bag since he/she cannot recognize plastic bags 
                                    <a href="https://www.worldwildlife.org/stories/what-do-sea-turtles-eat-unfortunately-plastic-bags" 
                                    target = '_blank'><em>[source: worldwildlife.org]</em></a>
                                    </figcaption>
                                </figure>
                            </td>

                            <!--the second turtle pic-->
                            <td>
                                <figure>
                                    <img alt='altered turtle' src='../image/lab03/turtle2.jpg'>

                                    <!--source information of the image02 -->
                                    <figcaption>The turtle grows up with the plastic strip, and it changes his/her shape
                                    <a href="https://educateinspirechange.org/nature/25-animal-photos-illustrate-how-painfully-obvious-it-is-we-should-recycle/" 
                                    target = '_blank'><em>[source: educateinspirechange.org]</em></a>
                                    </figcaption>
                                </figure>
                            </td>
                        </tr>
                        <!--description of the above pics-->
                        <tr>
                            <!--since I have made two columes above, I better combine two columes in the description part-->
                            <td colspan='2'>
                            <p>Dumping trash to the ocean has been a big problem since it breaks the ocean life. For example, ocean has been contaminated by garbage, 
                            especially with plastic bags, and turtles are suffering from it. According to <a href='https://www.worldwildlife.org/stories/what-do-sea-turtles-eat-unfortunately-plastic-bags/'>
                            <em>worldwildlife.org</em></a>, <mark>turtles do not know whether the object they eat is a jelifish or a plastic bag.</mark> In addition, 
                            if they eat plastic product, it might be fatal to them. That is the only one part of the problems; there are far more serious 
                            problems out there. We might not know right now, but I am sure that it will eventually affect human as well. <mark>What should we do?<strong> 
                            Recycle!</strong></mark><!--word count: 106--> </p></td>
                        </tr>
                    </table>
                    <!-- 
                        <tr> elements : 2
                        <th> elements : 0
                        <td> elements : 3
                        (continue below...) 
                    -->
                </section>

                <!-- Q: I want to know the differences between px, em, cm... in addition, I am not sure if I can use the attribution like below... -->
                <!-- second section 'sort'-->
                <section style="max-width: 1000px;" id="sort">
                    <!--desciption what I am going to introduce-->
                    <h3>How can we sort the trash?</h3>
                    <p>Before we take an action, recycling, we better know the breif definition of what the recycle is. What I mean by <mark><strong>Recycle</strong>
                    is to convert into resusable material(google search)</mark>. In fact, recycling is a good way to reduce the trash that we, human, dump 
                    to the ocean because we collect the reusable items and convert that items, what it is used to be, to a new item that we can use again. However, recycling does not work 
                    automatically. In other words, in order to recycle, we need to make an effort to sort it. Here is the sorts that you can refer to:<!--word count: 103--></p>
                    <!--Main table that I have to organize-->
                    <table>
                        <caption> <strong>How to Sort the trash?</strong></caption>
                        <!--table header elements-->
                        <tr>
                            <th></th>
                            <th>Compost</th>
                            <th>Recycle</th>
                            <th>Landfill</th>
                        </tr>
                        <!--defintion-->
                        <tr>
                            <th>Definition</th>
                            <td style="text-align: center;">trash that can be decayed </td>
                            <td style="text-align: center;">trash that can be used and converted into reusable material</td>
                            <td style="text-align: center;">trash that is neither compostable nor recyclable</td>
                        </tr>
                        <!--pictures-->
                        <tr>
                            <th>Pictures</th>
                            <td>
                                <figure style="width: 12em;">
                                    <img alt='compost' src='../image/lab03/compost.jpg'>
                                    <figcaption>compost is the trash that can be decayed.</figcaption>
                                </figure>
                            </td><!--https://www.gardeningknowhow.com/composting/basics/composting-basics.htm-->
                            <td>
                                <figure style="width: 10em;">
                                    <img alt='recycle' src='../image/lab03/recycle_plastic.jpg'>
                                    <figcaption>recycle is the trash that can be converted.</figcaption>
                                </figure>
                            </td><!--https://www.forgerecycling.co.uk/blog/why-cant-all-plastic-be-recycled/-->
                            <td>
                                <figure style="width: 12em;">
                                    <img alt='landfill' src='../image/lab03/landfill.jpeg'>
                                    <figcaption>landfill is the trash that can be neither decayed nor converted.</figcaption>
                                </figure>
                            </td><!--https://www.businessinsider.com/unwashed-recyclables-go-to-landfill-2015-9-->
                        </tr>

                        <!--examples: I will make a list here-->
                        <tr>
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
                                            <li>Any bottles w/o label</li>
                                            <li>Products made of plastics</li>
                                        </ol>
                                    <li>Paper                            
                                        <ol>
                                            <li>Magazines</li>
                                            <li>Cardboard</li>
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
                        <tr>
                            <td colspan = '4'>
                                <a href='//www.gardeningknowhow.com/composting/basics/composting-basics.htm' target='_blank'><mark><strong>(compost pic)</strong></mark>(www.gardeningknowhow.com/composting/basics/composting-basics.htm)</a><p></p>
                                <a href='//www.forgerecycling.co.uk/blog/why-cant-all-plastic-be-recycled/' target='_blank'><mark><strong>(recycling pic)</strong></mark>(www.forgerecycling.co.uk/blog/why-cant-all-plastic-be-recycled/)</a><p></p>
                                <a href='//www.businessinsider.com/unwashed-recyclables-go-to-landfill-2015-9' target='_blank'><mark><strong>(landfill pic)</strong></mark>(//www.businessinsider.com/unwashed-recyclables-go-to-landfill-2015-9)</a><p></p>
                                <a href='//www.seattle.gov/utilities/your-services/collection-and-disposal/multi-family-properties/for-managers-and-owners/help-residents' target='_blank'><mark><strong>(examples)</strong></mark>(www.seattle.gov/utilities/your-services/collection-and-disposal/multi-family-properties/for-managers-and-owners/help-residents)</a><p></p>          
                            </td>
                        </tr>
                        <!-- 
                            <tr> elements : 4 (above table: 2, total: 6)
                            <th> elements : 5 (above table: 0, total: 5)
                            <td> elements : 10 (above table: 3, total: 13)
                        -->
                    </table>
                </section>

                <!--conclusion-->
                <section id="conclusion">
                    <h2>To make a better world</h2>
                    <p><mark><strong>The more recycle we do, the less painful turtle will suffer.</strong></mark> We cannot recycle 100%, to be honest, but we can at least make an effort
                    to make a better world for every single creatures in the world. We are living together!</p>
                </section>

            </article>
        </main>

        <footer>
            <p>
                <a href="../">return to home</a>&nbsp;&nbsp;
                <a href="#introduction">introduction</a>&nbsp;&nbsp;
                <a href="#sort">sort</a>&nbsp;&nbsp;
                <a href="#conclusion">conclusion</a>&nbsp;&nbsp;
            </p>
            <p>
                <a href="../index.php">Site map (Main index)</a>
            </p>
        </footer>
    </body>
</html>
