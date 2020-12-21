<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Jay's CS 008 Homepage</title>
        <meta name="author" content="Jay Hwasung Jung">
        <meta name="description" content="This is my first Website, designed for submiting my assignments">
        <style>
            /* basic CSS with a little extra for the figure element */
            body{
                margin: auto;
                padding: 3%;
                width: 90%;
            }

            figure {
                border: thin solid darkslategray;
                border-radius: 3%;
                padding: 3%;
                text-align: center;
            }

            figcaption {
                color: #839e99;
                font-style: italic;
                text-align: center;
            }

            img{
                border-radius: 3%;
                max-width: 100%
            }

            .right{
                float: right;
                margin-left: 3%;
            }

            .small {
                width: 20%;
            }
            /* 
                           advanced css for future labs 
                           you may use this format for lab 1 if you like 
            */
            .header{
                grid-area: header;
                grid-column: 1 / 3;
                padding: .3em;
                margin: .3em;
            }  
            .public-files{
                grid-area: public-files;
                padding: .3em;
                margin: .3em;
            }

            .supporting-files{
                grid-area: supporting-files;
                padding: .3em;
                margin: .3em;
            }
            .grader-notes{
                grid-area: grader-notes;
                padding: .3em;
                margin: .3em;
            }
            .grid-layout{
                border-bottom: thin dashed navy;
                display: inline-grid;
                grid-template-columns: 25% 25% 50%;
                grid-template-areas: "header header header"
                    "public-files supporting-files grader-notes"; 
                padding: .3em;
                margin: .3em;
                width: 100%;    
            }
            li{margin-bottom: 0.5em;}

        </style>
    </head>

    <body>
        <figure style="float: right; text-align: center; width: 10em;">
            <img alt="Jay Hwasung Jung in the GYM restroom" src="image/lab01/Gymboy.jpg" style="max-width: 100%;">
            <figcaption>Being happy due to the excitement of working out</figcaption>
        </figure>

        <h1>CS 008-<em>OL1</em></h1>
        <h2>Jay Hwasung Jung - Site map</h2>

        <h2>Lab one - Setting up the main index page.</h2>
        <p><a href="test-page.php">Testing Page</a></p>
        <p><a href="ADMIN/admin.php">My Admin Folder</a></p>
        <section class="grid-layout">
            <h2 class="header">Final Project: Gym Recoder</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="final/index.php">index.php</a></p> 
                <p><a href="final/detail.php">detail.php</a></p>
                <p>routine.php (GET METHOD)</p>
                <ul>
                    <li><a href="https://jjung2.w3.uvm.edu/cs008/final/routine.php?display_routine=Legs">Legs</a></li>
                    <li><a href="https://jjung2.w3.uvm.edu/cs008/final/routine.php?display_routine=Chest">Chest</a></li>
                    <li><a href="https://jjung2.w3.uvm.edu/cs008/final/routine.php?display_routine=Back">Back</a></li> 
                </ul>   
                <p><a href="final/form.php">form.php</a> : email textbox + three more textboxes (SAVE in DB)</p>
                <p><a href="final/createTable.php">createTable.php</a> : radiobutton, table, textbox</p>
                <p><a href="final/recordExercise.php">recordExercise.php</a> : adiobutton, checkbox, option list (SAVE in DB)</p>
                <p><a href="final/runningWeather.php">runningWeather.php</a> : API</p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="final/sql.php">SQL Statements</a> </p>
                <p><a href="final/css/custom.css">custom.css</a> </p>
                <p><a href="final/css/custom-tablet.css">custom-tablet.css</a> </p>
                <p><a href="final/css/custom-phone.css">custom-phone.css</a> </p>
                <p><a href="final/image/wireframe01.png">wireframe01.png</a> : index.php, detail.php, routine.php</p>
                <p><a href="final/image/wireframe02.png">wireframe02.png</a> : form.php, createTable.php, recordExercise.php, runningWeather.php</p>
                <p><a href="final/image/phone_wireframe01.png">phone_wireframe01.png</a> : index.php, detail.php, routine.php</p>
                <p><a href="final/image/phone_wireframe02.png">phone_wireframe02.png</a> : form.php, createTable.php, recordExercise.php, runningWeather.php</p>
                <p><a href="final/image/tablet_wireframe01.png">tablet_wireframe01.png</a> : index.php, detail.php, routine.php</p>
                <p><a href="final/image/tablet_wireframe02.png">tablet_wireframe02.png</a> : form.php, createTable.php, recordExercise.php, runningWeather.php</p>                   
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <ul>
                    <li>I spread the form box to facilitate the website's purpose </li>
                    <li>The image that does not have citation is my drawing</li>
                    <li>Three sites that I use more than to meet 100 letters are index.php, detail.php, routine.php</li>
                    <li>I did use max-width:50em to meet the criteria</li>
                    <li>Please use userID "jhs9104" to check (my id)</li>
                    <li>Table will be able if you type on jhs9104 and the duration 11/12/2020-12/01/2020 in createTable.php</li>
                </ul>
            </section>
        </section>
        <section class="grid-layout">
            <h2 class="header">Lab Nine - Saving forms data</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab9/index.php">index.php</a></p> 
                <p><a href="lab9/detail.php">detail.php</a></p> 
                <p><a href="lab9/form.php">form.php</a></p>
                <p><a href="lab9/extra.php">extra.php</a></p>
                <p><a href="lab9/contest.php">contest.php</a></p>    
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab9/image/records.png">records.png</a> </p>
                <p><a href="lab9/sql.php">SQL Statements</a> </p>
                <p><a href="lab9/css/custom.css">custom.css</a> </p>
                <p><a href="lab9/css/custom-tablet.css">custom-tablet.css</a> </p>
                <p><a href="lab9/css/custom-phone.css">custom-phone.css</a> </p>
                <p><a href="lab9/image/wireframe.png">wireframe.png</a></p>
                <p><a href="lab9/image/phone_wireframe.png">phone_wireframe.png</a></p>
                <p><a href="lab9/image/tablet_wireframe.png">tablet_wireframe.png</a></p>                
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>
        <section class="grid-layout">
            <h2 class="header">Lab Eight - Database to display data</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab8/index.php">index.php</a></p> 
                <p><a href="lab8/detail.php">detail.php</a></p> 
                <p><a href="lab8/form.php">form.php</a></p>
                <p><a href="lab8/extra.php">extra.php</a></p>
                <p><a href="lab8/contest.php">contest.php</a></p>    
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab8/image/records.png">records.png</a> </p>
                <p><a href="lab8/sql.php">SQL Statements</a> </p>
                <p><a href="lab8/css/custom.css">custom.css</a> </p>
                <p><a href="lab8/css/custom-tablet.css">custom-tablet.css</a> </p>
                <p><a href="lab8/css/custom-phone.css">custom-phone.css</a> </p>
                <p><a href="lab8/image/wireframe.png">wireframe.png</a></p>
                <p><a href="lab8/image/phone_wireframe.png">phone_wireframe.png</a></p>
                <p><a href="lab8/image/tablet_wireframe.png">tablet_wireframe.png</a></p>                
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>
        <section class="grid-layout">
            <h2 class="header">Lab Seven - Joes Pond</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab7/index.php">index.php</a></p> 
                <p><a href="lab7/detail.php">detail.php</a></p> 
                <p><a href="lab7/form.php">form.php</a></p>
                <p><a href="lab7/extra.php">extra.php</a></p>
                <p><a href="lab7/contest.php">contest.php</a></p>    
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab7/css/custom.css">custom.css</a> </p>
                <p><a href="lab7/css/custom-tablet.css">custom-tablet.css</a> </p>
                <p><a href="lab7/css/custom-phone.css">custom-phone.css</a> </p>
                <p><a href="lab7/image/wireframe.png">wireframe.png</a></p>
                <p><a href="lab7/image/phone_wireframe.png">phone_wireframe.png</a></p>
                <p><a href="lab7/image/tablet_wireframe.png">tablet_wireframe.png</a></p>                
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>
        <section class="grid-layout">
            <h2 class="header">Lab Six - Making the world a better place</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab6/index.php">index.php</a> Transitions, Animations</p> 
                <p><a href="lab6/detail.php">detail.php</a> Gradients</p> 
                <p><a href="lab6/form.php">form.php</a> Box Shadows, Text Shadows</p>
                <p><a href="lab6/extra.php">extra.php</a> fluid-layout</p>  
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab6/css/custom.css">custom.css</a> </p>
                <p><a href="lab6/css/custom-tablet.css">custom-tablet.css</a> </p>
                <p><a href="lab6/css/custom-phone.css">custom-phone.css</a> </p>
                <p><a href="lab6/image/wireframe.png">wireframe.png</a></p>
                <p><a href="lab6/image/phone_wireframe.png">phone_wireframe.png</a></p>
                <p><a href="lab6/image/tablet_wireframe.png">tablet_wireframe.png</a></p>                
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>
        <section class="grid-layout">
            <h2 class="header">Lab Five - Making the world a better place</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab5/index.php">index.php</a> Transitions, Animations</p> 
                <p><a href="lab5/detail.php">detail.php</a> Gradients</p> 
                <p><a href="lab5/form.php">form.php</a> Box Shadows, Text Shadows</p>
                <p><a href="lab5/extra.php">extra.php</a> fluid-layout</p>  
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab5/css/custom.css">custom.css</a> </p>
                <p><a href="image/lab05/wireframe.png">wireframe.png</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>
        <section class="grid-layout">
            <h2 class="header">Lab Four - Making the world a better place</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab4/index.php">index.php</a></p> 
                <p><a href="lab4/detail.php">detail.php</a></p> 
                <p><a href="lab4/form.php">form.php</a></p> 
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab4/css/custom.css">custom.css</a> </p>
                <p><a href="image/lab04/wireframe.png">wireframe.png</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>


        <section class="grid-layout">
            <h2 class="header">Lab Three - Making the world a better place</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab3/index.php">index.php</a></p> 
                <p><a href="lab3/detail.php">detail.php</a></p> 
                <p><a href="lab3/form.php">form.php</a></p> 
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab3/css/custom.css">custom.css</a> </p>
                <p><a href="image/lab03/wireframe.png">wireframe.png</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p>Please ask questions in the Blackboard discussions</p>
            </section>
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab Two - Making the world a better place</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab2/index.php">index.php</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab2/css/custom.css">custom.css</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>
    </body>
</html>