<?php

  session_start();
  $con = mysqli_connect('sql304.epizy.com', 'epiz_27206896', 'zPpgAH6rJy', 'epiz_27206896_codeit_message');
  $fname = $_SESSION['username'];
  $info_array = mysqli_fetch_assoc('$fname');
  $id = $info_array['sno'];
  $query = " DELETE FROM registration where sno = '$id' ";
  $result = mysqli_query($con, $query);
  session_destroy();
  header('location:../index.php');

?>