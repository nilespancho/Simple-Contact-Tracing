<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a action="index.php"></a>
    <?php
        $ID = $_POST['new_id_num'];
        $names = explode(" ", $_POST['new_name']);
        $FirstName = $names[0];
        $MiddleName = $names[1];
        $LastName = $names[2];
        $address = explode(" ", $_POST['new_address']);
        $Barangay = $address[0];
        $City = $address[1];
        $Province = $address[2];
        $Contact = $_POST['new_num'];
        $Email = $_POST['new_email'];
        date_default_timezone_set("Asia/Singapore");
        $date = date('Y-m-d H:i:sa');

        //Database Connection
        $server = 'localhost';
        $username = 'root';
        $pass = '';
        $database = 'cpect';
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $conn = new mysqli($server,$username,$pass,$database);
        if($conn->connect_error) {
            die('Connection Failed : ' .$conn->connect_error);
        }
        else {
            $stmt = $conn->prepare("
            INSERT INTO registration(ID, FirstName, MiddleName,
            LastName, Barangay, City, Province, Contact, Email, Date)
            values(?,?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("issssssiss", $ID, $FirstName, $MiddleName,
            $LastName, $Barangay, $City, $Province, $Contact, $Email, $date);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            header("Location: index.php");
        }
    ?>
?>
</body>
</html>