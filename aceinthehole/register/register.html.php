<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css" type="text/css">
    <link rel="stylesheet" href="../css/helper.css" type="text/css">
    <link rel="stylesheet" href="../css/grid.css" type="text/css">
    <link rel="stylesheet" href="../css/hamburger.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
    
    <?php include '../includes/header.inc.html.php'; ?>

    <?php include '../includes/nav.inc.html.php'; ?>
    
    <main>
        <div class="container">
        <div class="col span_2_of_2">
            <section>
            <h1>Register</h1>

            <p>Fill out the form below to register as an athlete or a volunteer.</p>
            </section>    
        </div>
        
        
        <table>
            <tr>
                <td>Long Course</td>
                <td>$240</td>
            </tr>    
               
            <tr>
                <td>Olympic</td>
                <td>$110</td>
            </tr>    
                
            <tr>    
                <td>10k</td>
                <td>$50</td>
            </tr>   
                
            <tr>    
                <td>Half Marathon</td>
                <td>$75</td>
            </tr>    
                
            <tr>    
                <td>Sprint</td>
                <td>$90</td>
            </tr>    
                
            <tr>    
                <td>Try-a-Tri</td>
                <td>$65</td>
            </tr>

        </table>
        
        <div class="container">
        <h1>Cost Includes</h1>
        
            <ul>
                <li>Food & Beer</li>
                <li>Access to the weekend is live entertainment & Fitness Expo</li>
                <li>Commemorative Finisher medal</li>
                <li>Accurate Chip Timing for competitive races</li>
                <li>Ace in the Hole MultiSport Weekend Tech Shirt</li>
                <li>Post-event party & entertainment</li>
            </ul>
        
        <h1>PACKET PICK UP</h1>
        
        <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.</p>
        </div>    
        
        <div class="form">
        <form action=" " method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name...">

            <label for="email">E-mail</label>
            <input type="text" id="email" name="email" placeholder="Your e-mail...">

            <label for="age">Age</label>
            <input type="number" id="age" name="age">

            <label for="gender">Gender Identification</label>
            <select id="gender" name="gender">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="nonbinary">Non-binary</option>
                </select>

            <label for="emergencyname">Emergency Contact Name</label>
            <input type="text" id="emergencyname" name="emergencyname">

            <label for="emergencynumber">Emergency Contact Number</label>
            <input type="tel" id="emergencynumber" name="emergencynumber">

            <label for="event">Event</label>
            <h1>Saturday</h1>
                <select id="satevent" name="satevent">
                  <option value="none">None</option>    
                  <option value="longcourse">Long Course</option>
                  <option value="olympic">Olympic</option>
                  <option value="10kcourse">10k Course</option>
                  <option value="halfmarathon">Half Marathon</option>
                  
                </select>
            <h1>Sunday</h1>
                <select id="sunevent" name="sunevent">
                  <option value="none">None</option>    
                  <option value="sprint">Sprint</option>
                  <option value="tryatri">Try-a-tri</option>
                  <option value="splashndash">Splash n Dash</option>
                </select>

            <label for="registrationtype">Athlete or Volunteer?</label>
                <select id="registrationtype" name="registrationtype">
                  <option value="athlete">Athlete</option>
                  <option value="volunteer">Volunteer</option>
                </select>

            <label for="specialacc">Special Accommodations</label>
            <textarea id="specialacc" name="specialacc"></textarea>

            <input type="submit" value="Submit">
        </form>
        </div>
    </div>        
    </main>
    
    <?php include '../includes/footer.inc.html.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../scripts/script.js"></script>
    
</body>
</html>