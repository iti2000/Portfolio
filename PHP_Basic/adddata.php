<?php
    include_once './conn.php';
   

    $sql = "INSERT INTO `contact`(`name`, `email`,`message`) VALUES ('".$_POST['namee']."','".$_POST['emaill']."','".$_POST['mesage']."')";

    if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>