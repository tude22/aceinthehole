<!DOCTYPE html>
<html lang="en">
<head>
   <title>Contact</title>
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
    
    <section>
        <h1>Contact</h1>
        <p>Fill out the form below with any questions or comments and we will get back to you as soon as possible.</p>
    </section>
    
    <div class="form">
    <form action="contact_form.php" method="post">
        <label for="cname">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name..">

        <label for="cemail">E-mail</label>
        <input type="text" id="email" name="email" placeholder="Your e-mail..">

        <label for="cinterest">Are you participating in the race?</label>
        <select name="interest">
          <option value="athlete">I'm an athlete</option>
          <option value="volunteer">I'm a volunteer</option>
          <option value="myInterest">I'm just an interested Party</option>
        </select>

        <label for="myComment">Comment</label>
        <textarea id="myComment" name="myComment">Put your question or comment here.</textarea>

        <input type="submit" value="Submit">
    </form>
    </div>
</main>
    
    <?php include '../includes/footer.inc.html.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../scripts/script.js"></script>
</body>
</html>