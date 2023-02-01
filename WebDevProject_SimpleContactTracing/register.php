<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Registration</title>
</head>
<body>
    <div class="main-grid">
        <div></div>
        <div class="center-grid">
            <h2 style="text-align:center;line-height:0">Personal Information Registration</h2>
            <form action="regis_connect.php" method="post">
                <label>ID number</label>
                <input type="text" name="new_id_num" placeholder="ID number">

                <label>Name</label>
                <input type="text" name="new_name" placeholder="First Middle Last">

                <label>Address</label>
                <input type="text" name="new_address" placeholder="Barangay, City, Province">

                <label>Contact number</label>
                <input type="text" name="new_num" placeholder="09xxxxxxxxx">

                <label>Email address</label>
                <input type="text" name="new_email" placeholder="abc@email.com"><br>

                <button type="submit">Register</button> 
                <a href='index.php'><button type='button' id='menu_btn'>Return to Menu</button></a>
            </form>
        <div></div> 
    
</body>
</html>