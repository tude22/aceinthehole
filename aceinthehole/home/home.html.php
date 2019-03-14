<!DOCTYPE html> 

<!-- 
Assignment Name: Ace in the Hole Template
File Name: index.html.php
Date: 1/27/19
Programmer: tanner cheek
-->

<html lang="en">
<head>    
    <title>Ace in the Hole Multisport Events</title>
    <meta charset="utf-8" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Ace in the Hole</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/helper.css" type="text/css">
    <link rel="stylesheet" href="css/grid.css" type="text/css">
    <link rel="stylesheet" href="css/hamburger.css" type="text/css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

</head>
    <body>

<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

    <?php include 'includes/header.inc.html.php'; ?>

    <?php include 'includes/nav.inc.html.php'; ?>

        <div class="section group">
            <div class="racetimes">
            <div class="col span_1_of_3">
                
                    <br>

                    <h3>Saturday</h3>
                    <ul>
                    <li>Long Course Triathlon - 7:00 AM</li> 	  	
                    <li>Olympic Triathlon - 7:30 AM</li>	  	
                    <li>10K - 7:15 AM</li> 	  	
                    <li>Half Marathon - 7:15 AM</li>
                    </ul>
                </div>
            <div class="col span_1_of_3">
                    <br>
                    <h3>Sunday</h3>
                    <ul>
                    <li>Sprint Triathlon - 8:00 AM</li> 	  	
                    <li>Try-a-Tri - 8:20 AM</li>	  	
                    <li>Splash n Dash - 12:00 PM</li> 	  	
                    </ul> 
                </div>
            </div>
                <div class="col span_1_of_3">
                    <div id="weather">
                <!-- weather widget start --><div id="m-booked-bl-simple-17503"> <div class="booked-wzs-160-110 weather-customize" style="background-color:#ff0000;width:160px;" id="width1"> <div class="booked-wzs-160-110_in"> <a target="_blank" class="booked-wzs-top-160-110" href="https://www.booked.net/"><img src="//s.bookcdn.com/images/letter/s5.gif" alt="booked.net" /></a> <div class="booked-wzs-160-data"> <div class="booked-wzs-160-left-img wrz-01"></div> <div class="booked-wzs-160-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>40</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">F</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d"><span class="plus">+</span>43&deg;</div> <div class="booked-wzs-day-n"><span class="plus">+</span>20&deg;</div> </div> </div> <div class="booked-wzs-160-info"> <div class="booked-wzs-160-city">Portland</div> <div class="booked-wzs-160-date">Tuesday, 05</div> </div> </div> </div> <a target="_blank" href="https://www.booked.net/weather/portland-1095" class="booked-wzs-bottom-160-110"> <div class="booked-wzs-center"><span class="booked-wzs-bottom-l"> See 7-Day Forecast</span></div> </a> </div> </div> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-160.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-bl-simple-17503'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=1095&type=1&scode=2&ltid=3458&domid=w209&anc_id=21085&cmetric=0&wlangID=1&color=ff0000&wwidth=160&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->
                    </div>
                </div>
                </div>
        
        <img id="mobile-hero" src="images/run.jpg" alt="Woman running a race">

        
        <div class="diy-slideshow">
            <figure class="show"><img src="images/run.jpg" alt="" width="100%" /></figure>
            <figure><img src="images/bike.jpg" alt="" width="100%" /></figure>
            <figure><img src="images/swim.jpg" alt="" width="100%" /></figure>
                <span class="prev">«</span>
                <span class="next">»</span>
        </div>
  

    <main>
        
    <div class="section group">

        <div class="col span_1_of_2">
                <article class="card">
                    <h1>ABOUT ACE IN THE HOLE MULTISPORT EVENTS</h1>
                        <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer Events for Every Body.
                        </p>
                    <br>
                </article>
        </div>

        <div class="col span_1_of_2">
                <article class="card">
                    <h1>ABOUT THE EVENT</h1>
                        <p>The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.<br>
                            <br>
                        
                        </p>
                </article>
        </div>
    </div>
        <div class="section group card">
            <div class="col span_1_of_2">
                <div class="fb-feed">
                    <h1>Facebook</h1>
                    <div class="fb-page" data-href="https://www.facebook.com/cas222cascade" data-tabs="timeline, events" data-width="250" data-height="350" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cas222cascade" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cas222cascade">CAS 222</a></blockquote></div>
                </div>
            </div>
                
                <div class="col span_1_of_2">
                    <div class="fb-feed">
                        <h1>Twitter</h1>
                        <a class="twitter-timeline" data-width="250" data-height="350" data-link-color="#E81C4F" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
        </div>
    
 <div class="container">   
    
    <div class="section group">
            <div class="col span_2_of_2">
                <p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!
                </p>

                <h1>What to Bring</h1>

                <p>Watch the weather closely.  The show goes on no matter what the weather is doing.</p> 

                <p>You must wear your chip timing piece during the entire event.  You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</p>
            </div>
    </div>        
                
            <div class="section group">
                
                <div class="col span_1_of_3">
                    <p>Swim:  Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries.  We will provide you with a swim cap but you will want to bring your own goggles.</p>
                </div>
                <div class="col span_1_of_3">    
                    <p>Bike:  A biking helmet is mandatory.  You will also receive 2 stickers in your package with your race number on them.  The small sticker should go on the front of your helmet.  The bigger sticker will wrap around your bike frame.  Road or mountain bikes are acceptable.  For safety reasons, be sure to have end-caps on the end of your handle-bars.</p>
                </div>
            
                <div class="col span_1_of_3">
                    <p>Run:  You must finish the race with your bib number on the front of you.  Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don't have to worry about it.  Others pin it on a singlet that they put on once they finish the swim before they head out for the bike.  Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run.  Use whatever option feels best for you.</p>
                </div>
    
            <p>Remember to bring a change of clothing so you can enjoy the post-event festivities.</p>
            </div>
</div>
        
    </main>

    <?php include 'includes/footer.inc.html.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="scripts/script.js"></script>

    </body>    
</html>
