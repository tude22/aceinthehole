<!DOCTYPE html> 

<!-- 
Assignment Name: Ace in the Hole Template
File Name: index.html.php
Date: 1/27/19
Programmer: tanner cheek
-->

<html lang="en">
<head>    
    <title>Template</title>
    <meta charset="utf-8" content="width=device-width, initial-scale=1">
    <title>Ace in the Hole</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/helper.css" type="text/css">
    <link rel="stylesheet" href="css/grid.css" type="text/css">
    <link rel="stylesheet" href="css/style.css">

</head>
    <body>

    <?php include 'includes/header.inc.html.php'; ?>

    <?php include 'includes/nav.inc.html.php'; ?>


        
    <div class="diy-slideshow">
        <figure class="show"><img src="images/run.jpg" alt="" width="100%" /></figure>
        <figure><img src="images/bike.jpg" alt="" width="100%" /></figure>
        <figure><img src="images/swim.jpg" alt="" width="100%" /></figure>
            <span class="prev">«</span>
            <span class="next">»</span>
    </div>

            

        
     
       

    <main>
        
        <div class="section group">
            <div class="col span_4_of_4">
                <div class="racetimes">
                    <h2>Race Times</h2>

                    <h3>Saturday</h3>
                    <ul>
                    <li>Long Course Triathlon - 7:00 AM</li> 	  	
                    <li>Olympic Triathlon - 7:30 AM</li>	  	
                    <li>10K - 7:15 AM</li> 	  	
                    <li>Half Marathon - 7:15 AM</li>
                    </ul>

                    <h3>Sunday</h3>
                    <ul>
                    <li>Sprint Triathlon - 8:00 AM</li> 	  	
                    <li>Try-a-Tri - 8:20 AM</li>	  	
                    <li>Splash n Dash - 12:00 PM</li> 	  	
                    </ul> 
                    
                </div>
            </div>
        </div>

        <div class="section group">

            <div class="col span_1_of_4">
                <div class="card">
                    <article>
                        <h1>About the Event</h1>
                        <p>The Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon
                            triathlon and running community. It has become a traditional destination race for
                            athletes from across the nation.

                            There is something for every level of athletic
                            ability. The weekend includes a first timer triathlon, a sprint, Olympic, and
                            Half-Iron triathlons and 10K and Half marathon runs. Come to experience your
                            first race or come to compete to win, but make sure you come to have fun!
                        </p>
                    </article>
                </div>
            </div>

            <div class="col span_1_of_4">
                <div class="card">
                    <article>
                        <h1>What to Bring</h1>
                        <p>Watch the weather closely.  The show goes on no matter what the weather is doing.

                            You must wear your chip timing piece during the entire event.  You will be given
                            a band that will hold your chip timing piece around your ankle throughout the
                            entire event. Be sure that it is snapped tightly. Be sure to have your Chip
                            Timing piece on before you start the race and be sure to step over the timing
                            mats after each segment of the race. If you are wearing a wet-suit, make sure
                            the timing piece goes under your wetsuit otherwise, you will have a very difficult
                            time getting off your wet suit.
                        </p>
                    </article>
                </div>
            </div>

            <div class="col span_1_of_4">
                <div class="card">
                    <article>
                        <p>
                            <b>Swim:</b>  Wetsuits are optional for the swim but will provide buoyancy and warmth.
                            However, many people opt for no wetsuit for a triathlon so no worries.
                            We will provide you with a swim cap but you will want to bring your own goggles.

                            <b>Bike:</b>  A biking helmet is mandatory.  You will also receive 2 stickers in your
                            package with your race number on them.  The small sticker should go on the front
                            of your helmet.  The bigger sticker will wrap around your bike frame.  Road or
                            mountain bikes are acceptable.  For safety reasons, be sure to have end-caps on
                            the end of your handle-bars.
                        </p>
                    </article>
                </div>
            </div>
            <div class="col span_1_of_4"> 
                <div class="card">
                    <article>
                        <p>
                            Run:  You must finish the race with your bib number on the front of you.
                            Some people choose to pin it on at the beginning of the race and have it
                            on for the whole event so they donít have to worry about it.  Others pin
                            it on a singlet that they put on once they finish the swim before they
                            head out for the bike.  Others use an elastic racing strap that they pin
                            their bib number to and then quickly strap it on before they leave for
                            the run.  Use whatever option feels best for you.

                            Remember to bring a change of clothing so you can enjoy the post-event festivities.
                        </p>
                    </article>
                </div>
            </div>
                
        </div>

        
    </main>

    <?php include 'includes/footer.inc.html.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scripts/script.js"></script>

    </body>    
</html>
