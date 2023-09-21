<?php

// Load the blank template image
$template = imagecreatefrompng(MARKETING_TEMPLATE_DIRECTORY . 'banner.png');

// Set font and colors
$fontColor = imagecolorallocate($template, 0, 0, 0);
$white = imagecolorallocate($template, 255, 255, 255);
$fontPath_bold = 'assets/fonts/Poppins-Bold.ttf'; // Provide a path to a TrueType font file

// Assume PHP variables are used to store user data

$agent_name = $agent_details['name'];
$userJobTitle = 'Channel Partner';
$email = 'Email Id : support@techtionsolution.com';
$email2 = 'Email Id : director@techtionsolution.com';
$website = 'Website : https://techtionsolution.com';
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
imagettftext($template, 12, 0, 400, 30, $fontColor, $fontPath_bold, $contact);
imagettftext($template, 8, 0, 120, 96, $white, $fontPath_bold, $email);
// imagettftext($template, 14, 0, 480, 212, $white, $fontPath_bold, $email2);
// imagettftext($template, 8, 0, 280, 95, $white, $fontPath_bold, $website);
imagettftext($template, 12, 0, 140, 688, $white, $fontPath_bold, $address);



$outputPath = MARKETING_IMG_DIRECTORY . '/' . $agent_id . '_banner.png';
imagepng($template, $outputPath);

// Clean up
imagedestroy($template);

?>
