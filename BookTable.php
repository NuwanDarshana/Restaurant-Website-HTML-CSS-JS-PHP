<?php 

include "dbconfe.php";

  if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $person=$_POST['person'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $message = $_POST['message'];

    $sql = "INSERT INTO book_table (name,phone,person,date,time,message) VALUES ('$name', '$phone', '$person', '$date','$time','$message')";



    //die($sql);

    $result= mysqli_query($conn,$sql);

    if ($result == TRUE) {
      echo "New record created successfully.";
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    } 

    mysqli_close($conn); 
  }

?>