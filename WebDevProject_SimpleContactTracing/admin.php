<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Admin</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                        <a href='index.php'><button type='button' id='menu_btn'>Return to Menu</button></a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table style = "background: rgba(255, 255, 255, 0.6); width: 100%; box-shadow: 4px 2px 16px rgba(0, 0, 0, 0.4)">
                            <thead>
                                <tr>
                                    <th style = "border: 1px solid #dddddd; padding: 8px;">ID</th>
                                    <th style = "border: 1px solid #dddddd; padding: 8px;">FirstName</th>
                                    <th style = "border: 1px solid #dddddd; padding: 8px;">MiddleName</th>
                                    <th style = "border: 1px solid #dddddd; padding: 8px;">LastName</th>
                                    <th style = "border: 1px solid #dddddd; padding: 8px;">Barangay</th>
                                    <th style = "border: 1px solid #dddddd; padding: 8px;">City</th>
                                    <th style = "border: 1px solid #dddddd; padding: 8px;">Province</th>
                                    <th style = "border: 1px solid #dddddd; padding: 8px;">Contact</th>
                                    <th style = "border: 1px solid #dddddd; padding: 8px;">Email</th>
                                    <th style = "border: 1px solid #dddddd; padding: 8px;">Date Entered</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    //Database Connection
                                    $server = 'localhost'; $username = 'root'; $pass = ''; $database = 'cpect';
                                    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                    $conn = new mysqli($server,$username,$pass,$database); 

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM registration WHERE CONCAT(ID,FirstName,MiddleName,LastName,Barangay,City,Province,Contact,Email,'Date') LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td style = "border: 1px solid #dddddd; padding: 8px;"><?= $items['ID']; ?></td>
                                                    <td style = "border: 1px solid #dddddd; padding: 8px;"><?= $items['FirstName']; ?></td>
                                                    <td style = "border: 1px solid #dddddd; padding: 8px;"><?= $items['MiddleName']; ?></td>
                                                    <td style = "border: 1px solid #dddddd; padding: 8px;"><?= $items['LastName']; ?></td>
                                                    <td style = "border: 1px solid #dddddd; padding: 8px;"><?= $items['Barangay']; ?></td>
                                                    <td style = "border: 1px solid #dddddd; padding: 8px;"><?= $items['City']; ?></td>
                                                    <td style = "border: 1px solid #dddddd; padding: 8px;"><?= $items['Province']; ?></td>
                                                    <td style = "border: 1px solid #dddddd; padding: 8px;"><?= $items['Contact']; ?></td>
                                                    <td style = "border: 1px solid #dddddd; padding: 8px;"><?= $items['Email']; ?></td>
                                                    <td style = "border: 1px solid #dddddd; padding: 8px;"><?= $items['Date']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>