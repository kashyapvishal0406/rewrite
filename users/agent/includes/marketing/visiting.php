<?php
// Load the blank template image
// $template = imagecreatefrompng(MARKETING_TEMPLATE_DIRECTORY.'visit.png');
$template = imagecreatefrompng('assets/images/marketing_templates/visit.png');
// Set font and colors
$fontColor = imagecolorallocate($template, 0, 0, 0);
$white = imagecolorallocate($template, 255, 255, 255);
$fontPath_bold = 'assets/fonts/Poppins-Bold.ttf'; // Provide a path to a TrueType font file

// Assume PHP variables are used to store user data
$agent_name = $agent_details['name'];
$userJobTitle = 'Channel Partner';
$email = $agent_details['email'];
$contact = $agent_details['mobile'];
$address = $agent_details['address'];
// ... other user data

// Calculate text width using user's name
$fontSize = 32; // Adjust the font size
$textWidth = imagettfbbox($fontSize, 0, $fontPath_bold, $agent_name);
$textWidth = $textWidth[2] - $textWidth[0]; // Calculate the width of the text

// Define the width of your image or template
$imageWidth = imagesx($template);

// Calculate the starting x-coordinate to position text from the right
$xFromRightName = $imageWidth - $textWidth - 50; // 50 is a margin
$xFromRightJobTitle = $imageWidth - $textWidth - 50; // 50 is a margin

// Add user-specific content to the image
imagettftext($template, 32, 0, $xFromRightName, 45, $fontColor, $fontPath_bold, $agent_name);
imagettftext($template, 20, 0, $xFromRightJobTitle, 75, $fontColor, $fontPath_bold, $userJobTitle);
// ... add other content
imagettftext($template, 22, 0, 410, 396, $fontColor, $fontPath_bold, $email);
imagettftext($template, 22, 0, 420, 495, $fontColor, $fontPath_bold, $contact);
imagettftext($template, 22, 0, 90, 598, $white, $fontPath_bold, $address);

$outputPath = MARKETING_IMG_DIRECTORY . '/'.$agent_id.'_visiting_card.png';
imagepng($template, $outputPath);

// Clean up
imagedestroy($template);

?>