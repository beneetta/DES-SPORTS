<?php

// session_start();
//  if(!isset($_SESSION['login_status']))
//  {
//       echo"Illegal Login";
//       die;
//   }
//   if($_SESSION['login_status']==false)
//   {
//       echo"Login Failed, Unauthorised attempt";
//   }



//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}



$conn=new mysqli("localhost","root","","bolt");

$pid=$_GET['id'];

// $status=mysqli_query($conn,"delete from products where id=$pid");
 
$sql = "DELETE FROM products WHERE id=$pid";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();




// if($status)
// {
//     echo "Deleted Product Successfully";
//     header("location: vendorproducts.php");
// }
// else
// {
//     echo "Failed to delete";
//     mysqli_error($conn);
// }
?>