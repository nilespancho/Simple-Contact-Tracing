<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Registration Confirmation</title>
</head>
<body>
<?php
    if (isset($_POST['new_id_num']) && isset($_POST['new_name']) && isset($_POST['new_address']) 
        && isset($_POST['new_num']) && isset($_POST['new_email'])){

            $id_num = $_POST['new_id_num'];
            $name = $_POST['new_name'];
            $address = $_POST['new_address'];
            $num = $_POST['new_num'];
            $email = $_POST['new_email'];

            if(empty($id_num)){
                header("Location: register.php");
                exit();
            }
            else if(empty($name)){
                header("Location: register.php");
                exit();
            }
            else if(empty($address)){
                header("Location: register.php");
                exit();
            }
            else if(empty($num)){
                header("Location: register.php");
                exit();
            }
            else if(empty($email)){
                header("Location: register.php");
                exit();
            }
            else{
                echo "<table align='center'>
                            <tr>
                                <td><h1>Successfully registered!</h1></td>    
                            </tr>
                            <tr>
                                <td><a href='index.php'><button type='button' id='menu_btn'>Return to Menu</button></a></td>
                            </tr>
                        </table>";
            }
    }
    else{
        header("Location: register.php");
        exit();
    }
?>  
</body>
</html>
