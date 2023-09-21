<?php
session_start();
if (!isset($_SESSION['agent_id'])) {
    header('Location: ' . 'login.php');
} else {
    $agent_id = $_SESSION['agent_id'];


}
?>