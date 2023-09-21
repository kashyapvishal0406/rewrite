<?php
$profile_complete_status = 1;
$_SESSION['profile_complete_status'] = 1;

$profile_picture = $agent_details['profile_img'];
$phone_number = $agent_details['mobile'];
$dob = $agent_details['dob'];
$address = $agent_details['address'];
$email = $agent_details['email'];
$aadhaar_number = $agent_details['aadhar_number'];
$aadhar_front = $agent_details['aadhaar_front_img'];
$aadhar_back = $agent_details['aadhaar_back_img'];
$pan_number = $agent_details['pan_number'];
$pan_img = $agent_details['pan_img'];

if($profile_picture == NULL||
$phone_number == NULL||
$dob == NULL||
$address == NULL||
$email == NULL||
$aadhaar_number == NULL||
$aadhar_front == NULL||
$aadhar_back == NULL||
$pan_number == NULL||
$pan_img == NULL)
{
    $profile_complete_status = 0;
    $_SESSION['profile_complete_status'] = 0;
}

?>
<script>
    var profile_complete_status = <?php echo $profile_complete_status; ?>
</script>
<?php
if( $profile_complete_status == 0)
{
    header('Location: ' . 'profile.php');

}
?>