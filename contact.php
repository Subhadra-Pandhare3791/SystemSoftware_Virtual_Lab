<?php
   $server = "localhost";
   $username = "root";
   $password = "";


   $con = mysqli_connect($server, $username, $password);

   if(!$con){
      die("not connected" . mysqli_connect_errno());
   }
 //  echo "Connected";
 $user = $_POST['user'];
 $email = $_POST['email'];
 $mobile = $_POST['mobile'];
 $comments = $_POST['comments'];


 $sql = "INSERT INTO `virtuallab` . `lab1` ( `name1`, `email1`, `phone1`, `comments1`) VALUES ('$user', '$email', '$mobile', '$comments');";

  echo $sql;

  if($con->query($sql) == true){
      echo "Successfully insereted";
  }
  else{
      echo "ERROR $sql <br> $conn->error";
  }
  // $con->close();
   header('location:indexC.php');
?>