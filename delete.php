<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Query page </title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include 'config.php';

        if(isset($_GET['token'])){
            $token = $_GET['token'];

            $sql = "DELETE FROM users WHERE token = '$token' ";
            $rs = mysqli_query($conn, $sql);

            header('location: index.php');
        }
    ?>
</body>
</html>