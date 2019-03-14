<?php

$servername = "localhost";
$username = "tannerch_aceinthehole_user";
$password = "GN40Sgx68Ufb";
$dbname = "tannerch_aceinthehole";
$users_name = $_POST['name'];
$users_email = $_POST['email'];
$users_interest = $_POST['interest'];
$users_comment = $_POST['myComment'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ="
  INSERT INTO `tannerch_aceinthehole`.`contact` (`id`, `name`, `email`, `interest`,
        `comment`, `time_stamp`) VALUES (NULL, '$users_name',
        '$users_email', '$users_interest', '$users_comment',
        CURRENT_TIMESTAMP);";


if ($conn->query($sql) === TRUE) {
    echo "Your question or comment has been sent. Thanks for reaching out to us.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

