<?php
require 'config.php';
  $msg ="";

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $comment = $_POST['comment'];
  $date = date("Y-m-d");
  
  $sql = "INSERT INTO comment_table(name,comment,cur_date)VALUES('$name','$comment','$date')";
  
  if ($conn->query($sql)) {
    $msg = "Mesaage posted successfully";
    $msg ="";
    
  }
  else {
    $msg = " Failed to post Message.";
    $msg ="";
  }
}
?>