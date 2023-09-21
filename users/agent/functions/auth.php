<?php
session_start();
require_once '../../../configs/paths.php';
require_once DB_CONFIG_PATH;

if (isset($_POST['login'])) {
  $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);


  $sql = "SELECT id, password FROM agent WHERE mobile = '$mobile' AND password = '$password'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['agent_id'] = $row['id'];
    echo 1;
    
  } else {
    echo 0;
  }

}


?>
