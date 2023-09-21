<?php
// Load the blank template image
$template = imagecreatefrompng(MARKETING_TEMPLATE_DIRECTORY . 'id_card.png');


$fontColor = imagecolorallocate($template, 0, 0, 0);
$white = imagecolorallocate($template, 255, 255, 255);
$fontPath_bold = 'assets/fonts/Poppins-Bold.ttf'; // Provide a path to a TrueType font file
$fontPath_regular = 'assets/fonts/Poppins-Medium.ttf'; // Provide a path to a TrueType font file
// Assume PHP variables are used to store user data

$id = $agent_details['id'];
$agent_name = $agent_details['name'];
$userJobTitle = 'Channel Partner';
$email = 'Email Id : support@techtionsolution.com';
$email2 = 'Email Id : director@techtionsolution.com';
$website = 'Website : https://techtionsolution.com';
$contact = $agent_details['mobile'];
$address = $agent_details['address'];
$dob = $agent_details['dob'];
if($agent_details['profile_img']==NULL)
{
$profilePicture_name = 'default.png';
}
else{
$profilePicture_name = $agent_details['profile_img'];  
}

$profilePicture_path = '../../data/user_images/'.$profilePicture_name;
// $profilePicture = imagecreatefrompng($profilePicture_path);

$fileExtension = strtolower(pathinfo($profilePicture_path, PATHINFO_EXTENSION));

switch ($fileExtension) {
    case 'png':
        $profilePicture = imagecreatefrompng($profilePicture_path);
        break;
    case 'jpeg':
    case 'jpg':
        $profilePicture = imagecreatefromjpeg($profilePicture_path);
        break;
    case 'webp':
        $profilePicture = imagecreatefromwebp($profilePicture_path);
        break;
    // Add more cases for other supported formats as needed
    default:
        // Handle unsupported image formats or errors here
        // For example, you can log an error or provide a default image
        break;
}



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
imagettftext($template, 19, 0, 220, 465, $fontColor, $fontPath_regular, $agent_name);
// imagettftext($template, 19, 0, 220, 465, $fontColor, $fontPath_regular, $agent_name);
imagettftext($template, 14, 0, 220, 526, $fontColor, $fontPath_regular, $id);
imagettftext($template, 14, 0, 220, 494, $fontColor, $fontPath_regular, $userJobTitle);
imagettftext($template, 14, 0, 220, 557, $fontColor, $fontPath_regular, $dob);
imagettftext($template, 14, 0, 220, 591, $fontColor, $fontPath_regular, $contact);
imagettftext($template, 14, 0, 220, 620, $fontColor, $fontPath_regular, $address);


$profileWidth = imagesx($profilePicture);
$profileHeight = imagesy($profilePicture);

// Calculate the position to overlay the profile picture
$profileX = 208; // Adjust as needed
$profileY = 194; // Adjust as needed

// Calculate the size you want for the resized profile picture
$newProfileWidth = 174; // Adjust as needed
$newProfileHeight = 228; // Adjust as needed

// Create a new image to hold the resized profile picture
$resizedProfile = imagecreatetruecolor($newProfileWidth, $newProfileHeight);

// Resize and copy the profile picture onto the new image
imagecopyresampled($resizedProfile, $profilePicture, 0, 0, 0, 0, $newProfileWidth, $newProfileHeight, $profileWidth, $profileHeight);

// Overlay the resized profile picture on the template
imagecopy($template, $resizedProfile, $profileX, $profileY, 0, 0, $newProfileWidth, $newProfileHeight);

// $outputPath = 'assets/images' . '/'.$agent_id.'_id_card.png';
$outputPath = MARKETING_IMG_DIRECTORY . '/' . $agent_id . '_id_card.png';
imagepng($template, $outputPath);

// Clean up
// imagedestroy($template);

?>
