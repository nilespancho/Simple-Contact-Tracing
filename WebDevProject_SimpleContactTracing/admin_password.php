<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Admin</title>
</head>
<body>
    <div class="main-grid">
        <div></div>
        <div class="center-grid">
            <h1>Admin</h1>
            <br>
            <form action="admin_confirm.php" method="post">
                <label>Admin Password</label>
                <input type="password" name="admin_pass" placeholder="******">
                <button type="submit">Log in</button> 
                <a href='index.php'><button type='button' id='menu_btn'>Return to Menu</button></a>
            </form>
        </div>
        <div></div>
        
    </div>
    
</body>
</html>