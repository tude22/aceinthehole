<?php

// Edit or Replace this try/catch statement to work with the current PHT configuration
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=tannerch_aceinthehole', 'tannerch_aceinthehole_user', 'GN40Sgx68Ufb');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include '../includes/error.html.php';
    exit();
}
// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['name']))
  {
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
      $name = $_POST['name'];
      $email = $_POST['email'];
      $age = $_POST['age'];
      $gender = $_POST['gender'];
      $emergencyname = $_POST['emergencyname'];
      $emergencynumber = $_POST['emergencynumber'];
      $satevent = $_POST['satevent'];
      $sunevent = $_POST['sunevent'];
      $registrationtype = $_POST['registrationtype'];
      $specialacc = $_POST['specialacc'];

    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try
    {
      $sql = 'INSERT INTO registration SET
          name = :name,
          email = :email,
          age = :age,
          gender = :gender,
          emergencyname = :emergencyname,
          emergencynumber = :emergencynumber,
          satevent = :satevent,
          sunevent = :sunevent,
          registrationtype = :registrationtype,
          specialacc = :specialacc';

      $s = $pdo->prepare($sql);
      $s->bindValue(':name', $name);
      $s->bindValue(':email', $email);
      $s->bindValue(':age', $age);
      $s->bindValue(':gender', $gender);
      $s->bindValue(':emergencyname', $emergencyname);
      $s->bindValue(':emergencynumber', $emergencynumber);
      $s->bindValue(':satevent', $satevent);
      $s->bindValue(':sunevent', $sunevent);    
      $s->bindValue(':registrationtype', $registrationtype);
      $s->bindValue(':specialacc', $specialacc);
      $s->bindValue(':specialacc', $specialacc);
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error fetching content: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
    // load the thank you page after the INSERT runs
      include 'success.html.php';
    // Add an else to load the initial page if the initial (line 19) if statement is false
    } else {

      include 'register.html.php'; //Modify this to include the initial file for this folder
    }

    ?>