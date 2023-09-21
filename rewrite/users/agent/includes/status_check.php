<?php

$sql = "SELECT status FROM agent WHERE id = '$agent_id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$status = $row['status'];

if ($status == 2) {
    header("Location:id_deactivated.php");
}
?>