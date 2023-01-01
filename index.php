<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURD Operation in PHP</title>
    <meta name="keywords" content="php curd operation, php crud operation using mysql, php crud operation source code, php crud operation using mysqli, php crud operation using ajax, php crud operation using mysql source code, php crud operation using mysql github, php crud operation with validation, php crud operation in php, php crud api example, php oop crud example, php crud operation step by step, crud operation in php bholu singh, php crud application source code, crud operation in php freeprojects1, crud operation in php using classes, php crud operation with mysql, php crud operation using mysqli download, delete crud operation in php, php crud operation demo, php crud operation code, db crud operations, php crud operation example, php slim crud example, php crud update example, php crud form example, php crud mysql example, best php crud generator, php crud, php crud operation source code free download, php form crud operation, php code for crud operations, php crud operation github, php crud application generator, crud php github, crud operation in php in hindi, crud operation in php using html, php mysql crud generator, php crud operations, crud operation in php source code, crud operation in php, crud operations meaning, crud operations definition, php crud operation using mysqli github, simple php crud operation with mysqli, oop php crud operation using mysqli, crud operation in mvc php, crud operation in php mysql, how to crud operation in php, php crud operation in one page, php crud operation project, php rest crud, php simple crud operation, crud operation in php source code github, crud operation in php using session, php crud operation using sql server, php crud sample, php crud script, php crud operation tutorial, php crud operation using mysqli tutorial, crud operation using php">
    <meta name="description" content="CRUD Operations are generally performed on databases, hence, during this PHP CRUD Operations tutorial, you may implement CRUD techniques on MySQL databases with the assistance of PHP">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include 'config.php';

        // $token = rand(11111, 99999);
        // $sql = "INSERT INTO users(name, roll_no, age, token) 
        // VALUES('ram', '101', '19', '12345'),
        // ('Radha', '102', '21', '23456'),
        // ('Preeti', '103', '18', '34567')";

        // $rs = mysqli_query($conn, $sql);
        // if($rs){
        //     echo "data inserted successfully";
        // } else{
        //     echo "data not inserted successfully";
        // }



        // now we are going to print all data on screen


        $sql = "SELECT * FROM users";
        $rs = mysqli_query($conn, $sql);

    ?>
    <div class="container">
        <table>
            <tr><td colspan="7"><a href="insert.php" class="btn add_record">Add New Record</a></td></tr>
            <tr>
                <th>Sn</th>
                <th>Name</th>
                <th>Roll No</th>
                <th>Age</th>
                <th>Token</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php
            while($arr = mysqli_fetch_assoc($rs)){
                ?>
                <tr>
                    <td><?php echo $arr['sn'] ?></td>
                    <td><?php echo $arr['name'] ?></td>
                    <td><?php echo $arr['roll_no'] ?></td>
                    <td><?php echo $arr['age'] ?></td>
                    <td><?php echo $arr['token'] ?></td>
                    <td><a class="btn update_record" href="update.php?token=<?php echo $arr['token'] ?>">Update</a></td>
                    <td><a class="btn delete_record" href="delete.php?token=<?php echo $arr['token'] ?>">Delete</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</body>
</html>
