<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Admin Page</title>
</head>
<body>
<?php
    $admin_pass_static = "danmarl bayot";
    if (isset($_POST['admin_pass'])){

            $admin_pass = $_POST['admin_pass'];

            if(empty($admin_pass)){
                header("Location: admin_password.php");
                exit();
            }
            else if($admin_pass == $admin_pass_static) {
                header("Location: admin.php");
                exit();
            }
            else {
                header("Location: admin_password.php");
                exit();
            }
    }
    else{
        header("Location: admin_password.php");
        exit();
    }
?>  
</body>
</html>