<?php
    include 'config.php';

    if(isset($_GET['token'])){
        $token = $_GET['token'];

        $sql = "SELECT * FROM users WHERE token = '$token'";
        $rs = mysqli_query($conn, $sql);
        $arr = mysqli_fetch_assoc($rs);

        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <div class="container">
                <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]) ?>" method="post">
                    <h1>Curd Operation</h1>
                    <input type="text" name="name" value="<?php echo $arr['name'] ?>">
                    <input type="text" name="roll_no" value="<?php echo $arr['roll_no'] ?>">
                    <input type="text" name="age" value="<?php echo $arr['age'] ?>">
                    <input type="hidden" name="token" value="<?php echo $arr['token'] ?>">
                    <div class="btns">
                        <button type="submit" name="update">Update Record</button>
                    </div>
                </form>
            </div>
        </body>
        </html>
        <?php
    }
?>

<?php
    //update nam ke button per click hone ke bad ye query run hogi
    include 'config.php';

    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $roll_no = $_POST['roll_no'];
        $age = $_POST['age'];
        $token = $_POST['token'];

        $sql = "UPDATE users SET name = '$name', roll_no = '$roll_no', age = '$age' WHERE token = '$token'";
        $rs2 = mysqli_query($conn, $sql);
        header('location: index.php');
    }
?>
