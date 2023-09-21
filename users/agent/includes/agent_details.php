<?php
$sql_agent_details = "SELECT * from agent WHERE id = $agent_id";
$result_agent_details = mysqli_query($conn, $sql_agent_details);
$agent_details = mysqli_fetch_assoc($result_agent_details);
$agent_state = $agent_details['state'];
?>
