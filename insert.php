<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Query Page</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]) ?>" method="post">
            <h1>Insert Form</h1>
            <input type="text" name="name" placeholder="Username">
            <input type="text" name="roll_no" placeholder="Enter Roll No">
            <input type="text" name="age" placeholder="Enter Age">
            <div class="btns">
                <button type="submit" name="insert_record">Insert Record</button>
            </div>
        </form>
    </div>

    <?php
        // include config file
        include 'config.php';

        // first we will check button is clicked or not 
        // if button is clicked then run this query

        if(isset($_POST['insert_record'])){
            $name = $_POST['name'];
            $roll_no = $_POST['roll_no'];
            $age = $_POST['age'];

            // generate token
            $token = rand(11111, 99999);

            // now, we store our data into database
            $sql = "INSERT INTO users(name, roll_no, age, token) VALUES('$name', '$roll_no', '$age', '$token')";

            $rs = mysqli_query($conn, $sql);

            //if this query runs successfully then we redirect user to index page or home page
            if($rs){
                header('location:index.php');
            } else{
                // if this query failed then run this query
                ?>
                <script>
                    alert('Something went wrong, Try again!');
                </script>
                <?php
            }
            
        }
    ?>
</body>
</html>