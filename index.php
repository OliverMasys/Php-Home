<?php
// setup connection details
$dsn = "mysql:
        host=localhost;
        dbname=adv_php;
        charset=utf8;
        port=3306";

$username = "JimBelushi@mywebtraining.net";  // FTP username
$password = "adpujdB734kf3";  // FTP password
        

// create new PDO connection object with error messaging turned on
try {
  $pdo = new PDO($dsn, "adv_php_user", "Secret", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  echo " Database connection successful!";
} catch (PDOException $e) {
  die (" Database connection failed: " . $e->getMessage());
}
// create the db query in the PDO and assign it to a variable
$stmt = $pdo->query("SELECT * FROM `products`");

// run the query using the PDO connection and return the result to a variable
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= "<h1>Welcome to My Homepage</h1>"; ?>
    <?= "<h2>About Me</h2>"; ?>
    <?= "<p>My name is Oli, and I'm currently taking a web development class.
            I enjoy Learning about code, playing video games, reading manga, comics and hanging out with friends.
            Am interested in many things! Learning to mod my favorite games, excreting my body(doctor orders) and try to do Youtube.
            I hope to learn and understand more on web programming hopefully after taking class and practice on my own I can grow
            my skills and make better websites of my own.</p>"; ?>
    
    <?= "<h2> Projects and Goals</h2"; ?>
    <?= "<ul>
            <li>No Project at the moment</li>
            <li>Learn and Understand PHP as one of my Goals</il>
        </ul>"; ?>

</body>

</html>