<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Thank You!</title>
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
        <div id="wrapper">
            <?php include '../includes/header.inc.html.php'; ?>
            <?php include '../includes/nav.inc.html.php'; ?>
            <main>
                <h1>Thank you!</h1>
                <p>Our records show you submitted the following:<br>
                  Name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br>
                  Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br>
                  Age: <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?><br>
                  Gender Indentification: <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?><br>
                  Emergency Contact Name: <?php echo htmlspecialchars($emergencyname, ENT_QUOTES, 'UTF-8'); ?><br>
                  Emergency Contact Phone Number: <?php echo htmlspecialchars($emergencynumber, ENT_QUOTES, 'UTF-8'); ?><br>
                  Event(s): Saturday: <?php echo htmlspecialchars($satevent, ENT_QUOTES, 'UTF-8'); ?>, Sunday: <?php echo htmlspecialchars($sunevent, ENT_QUOTES, 'UTF-8'); ?><br>
                  Registration Type: <?php echo htmlspecialchars($registrationtype, ENT_QUOTES, 'UTF-8'); ?><br>
                  Special Accommodations: <?php echo htmlspecialchars($specialacc, ENT_QUOTES, 'UTF-8'); ?><br>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../scripts/script.js"></script>
            
        </div>
    </body>
</html>