<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Login</title>
</head>
<body>
    
    <div class="main-grid">
        <div></div>
        <div class="center-grid">
            <h2 style ="text-align:center">Please enter your ID number</h2>
            <br>
            <form action="login_connect.php" method="post">
                <input type="text" name="u_idnum" placeholder="ID number" required><br>
                <button type="submit">Log in</button> 
                <a href='index.php'><button type='button' id='menu_btn'>Return to Menu</button></a>
        </div>
        <div></div>
        
    </div>
    
</body>
</html>