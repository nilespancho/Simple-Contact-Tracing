<?php
    $ID = $_POST['u_idnum'];
    date_default_timezone_set("Asia/Singapore");
    $date = date('Y-m-d H:i:sa');

    //Database Connection
    $server = 'localhost';
    $username = 'root';
    $pass = '';
    $database = 'cpect';
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = new mysqli($server,$username,$pass,$database); 
    
    if($conn-> connect_error) {
        die("Connection Failed");
    }
    else {
        $stmt = $conn->prepare( "SELECT * FROM registration where ID = '$ID'");
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            if($data['ID'] == $ID) {
                $sql = "UPDATE registration SET Date ='$date' WHERE ID = '$ID'";
                mysqli_query($conn,$sql);
                header("Location: login_confirm.php");
            
                
            }
            else {
                echo "Invalid";
            }
        }
        else {
            echo "Invalid!";
        }
    }
?>
