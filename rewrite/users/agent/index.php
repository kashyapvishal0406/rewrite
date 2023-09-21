<?php
session_start();
if (!isset($_SESSION['agent_id'])) {
    header('Location: ' . 'login.php');
} else {
    header('Location: ' . 'dashboard.php');
}
?>