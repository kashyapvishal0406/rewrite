<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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

if (isset($_POST['update_profile'])) {

  $agent_object = json_decode($_POST['agent_object'], true);
  $agent_id = $_SESSION['agent_id'];

  $full_name = $agent_object['full_name'];
  $shop_name = $agent_object['shop_name'];
  $phone_number = $agent_object['phone_number'];
  $whatsapp = $agent_object['whatsapp'];
  $email = $agent_object['email'];
  $address = $agent_object['address'];
  $state = $agent_object['state'];
  $city = $agent_object['city'];
  $pincode = $agent_object['pincode'];
  $aadhaar_number = $agent_object['aadhaar_number'];
  $pan_number = $agent_object['pan_number'];
  $benificiary_name = $agent_object['benificiary_name'];
  $benificiary_account_number = $agent_object['benificiary_account_number'];
  $bank_name = $agent_object['bank_name'];
  $ifsc = $agent_object['ifsc'];
  $dob = $agent_object['dob'];

  $aadhaar_front = isset($_FILES['aadhaar_front_img']) ? $_FILES['aadhaar_front_img'] : null;
  $aadhaar_back = isset($_FILES['aadhaar_back_img']) ? $_FILES['aadhaar_back_img'] : null;
  $pan_card = isset($_FILES['pan_img']) ? $_FILES['pan_img'] : null;
  $profile_img = isset($_FILES['profile_img']) ? $_FILES['profile_img'] : null;

  if ($profile_img !== null) {
    $profileImgFilename = $agent_id . "_profile_img." . pathinfo($profile_img['name'], PATHINFO_EXTENSION);
    $profileImgPath = "../../../data/user_images/" . $profileImgFilename;
    move_uploaded_file($profile_img['tmp_name'], $profileImgPath);
    $sql = "UPDATE `agent` SET  `profile_img` = '$profileImgFilename' WHERE `id` = '$agent_id'";
    mysqli_query($conn, $sql);
  }

  if ($aadhaar_front !== null) {
    $aadhaarFrontFilename = $agent_id . "_aadhaar_front_img." . pathinfo($aadhaar_front['name'], PATHINFO_EXTENSION);
    $aadhaarFrontPath = "../../../data/user_images/" . $aadhaarFrontFilename;
    move_uploaded_file($aadhaar_front['tmp_name'], $aadhaarFrontPath);
    $sql = "UPDATE `agent` SET  `aadhaar_front_img` = '$aadhaarFrontFilename' WHERE `id` = '$agent_id'";
    mysqli_query($conn, $sql);
  }

  if ($aadhaar_back !== null) {
    $aadhaarBackFilename = $agent_id . "_aadhaar_back_img." . pathinfo($aadhaar_back['name'], PATHINFO_EXTENSION);
    $aadhaarBackPath = "../../../data/user_images/" . $aadhaarBackFilename;
    move_uploaded_file($aadhaar_back['tmp_name'], $aadhaarBackPath);
    $sql = "UPDATE `agent` SET  `aadhaar_back_img` = '$aadhaarBackFilename' WHERE `id` = '$agent_id'";
    mysqli_query($conn, $sql);
  }

  if ($pan_card !== null) {
    $panCardFilename = $agent_id . "_pan_img." . pathinfo($pan_card['name'], PATHINFO_EXTENSION);
    $panCardPath = "../../../data/user_images/" . $panCardFilename;
    move_uploaded_file($pan_card['tmp_name'], $panCardPath);
    $sql = "UPDATE `agent` SET  `pan_img` = '$panCardFilename' WHERE `id` = '$agent_id'";
    mysqli_query($conn, $sql);
  }

  $sql = "UPDATE `agent` SET 
  `whatsapp` = '$whatsapp',
  `email` = '$email',
  `name` = '$full_name',
  `address` = '$address',
  `shop_name` = '$shop_name',
  `city` = '$city',
  `pincode` = '$pincode',
  `state` = '$state',
  `aadhar_number` = '$aadhaar_number',
  `pan_number` = '$pan_number',
  `benificiary_name` = '$benificiary_name',
  `benificiary_account_number` = '$benificiary_account_number',
  `bank_name` = '$bank_name',
  `ifsc` = '$ifsc',
  `dob` = '$dob'
WHERE `id` = '$agent_id';
";


  if (mysqli_query($conn, $sql)) {
    echo 1;
  }

}


if (isset($_POST['order_object'])) {
  $order_object = $_POST['order_object'];
  $customer_name = mysqli_real_escape_string($conn, $order_object['customer_name']);
  $customer_mobile = mysqli_real_escape_string($conn, $order_object['customer_mobile']);
  $service_id = mysqli_real_escape_string($conn, $order_object['service_id']);
  $agent_id = mysqli_real_escape_string($conn, $order_object['agent_id']);

  $img_array = $order_object['img_array'];

  $sql = "INSERT INTO `orders`(`customer_name`,`customer_mobile`,`service_id`,`agent_id`) VALUES ('$customer_name','$customer_mobile','$service_id','$agent_id')";

  mysqli_query($conn, $sql);
  if (mysqli_affected_rows($conn)) {
    $counter = 1;
    $sql = "select last_insert_id()";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $order_id = $row[0];

    foreach ($img_array as $key => $value) {
      $source_name = $value;
      $source_file = TEMP_IMG_DIRECTORY . $source_name;
      $explode_array = explode(".", $source_name);
      $ext = end($explode_array);

      $timestamp = time(); // Or use any other unique identifier
      $random_component = mt_rand(1000, 9999); // Add a random component
      $target_name = $order_id . $timestamp . "_" . $random_component . "." . $ext;

      // $target_name = $order_id . "_$counter" . "." . $ext;
      $target_file = ORDER_IMG_DIRECTORY . $target_name;
      copy($source_file, $target_file);
      unlink($source_file);
      $counter++;

      $sql = "INSERT INTO `order_documents`(`order_id`, `image_name`) VALUES ('$order_id', '$target_name')";
      $result = mysqli_query($conn, $sql);
    }
    $files = glob(TEMP_IMG_DIRECTORY . '*'); // get all file names
    foreach ($files as $file) { // iterate files
      if (is_file($file)) {
        unlink($file); // delete file
      }
    }
    $post_data = array('order_id' => $order_id, 'status' => 1);
    $post_data = json_encode($post_data);
    print_R($post_data);
    // echo $post_data['status'];
  } else {
    echo 0;
  }
}

if (isset($_POST['fetch_docs'])) {
  $service_id = $_POST['service_id'];

  $sql = "SELECT * FROM required_docs WHERE service_id = '$service_id'";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $document_name = $row['document_name'];
    echo "<li>$document_name</li>";
  }


}



##################add order ###################
if (isset($_POST['my_order_object'])) {
  $error = 0;
  $agent_id = $_SESSION['agent_id'];

  $order_object = json_decode($_POST['my_order_object'], true);

  $service_id = $order_object['service_id'];

  //putting data sub-object into php customer object
  $customer_object = $order_object['data'];

  $customer_name = $customer_object['Full Name'];
  $customer_mobile = $customer_object['Mobile'];
  $customer_email = $customer_object['Email'];

  $sql = "INSERT INTO `orders`(`customer_name`, `customer_mobile`, `service_id`, `agent_id`, `status`) 
  VALUES ('$customer_name','$customer_mobile','$service_id','$agent_id','2')"; //status 2 for payment pending
  if (mysqli_query($conn, $sql)) {
    $sql = "select last_insert_id()";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $order_id = $row[0];

    //uploading images to database and filesystem
    if (isset($_FILES)) {
      foreach ($_FILES as $key => $file) {
        if ($file['error'] === UPLOAD_ERR_OK) {
          $tempFile = $file['tmp_name'];
          $file_name = $file['name'];
          $explode_array = explode(".", $file_name);
          $ext = end($explode_array);
          $document_name = $key;
          $uniqueFileName = $order_id . '_' . time() . '_' . mt_rand(1000, 9999) . $ext;
          // Move the uploaded file to a destination directory
          $destinationDirectory = ORDER_IMG_DIRECTORY; // Replace with your desired directory
          $destinationPath = $destinationDirectory . $uniqueFileName;
          move_uploaded_file($tempFile, $destinationPath);
          $sql = "INSERT INTO `order_details`(`name`, `value`, `order_id`, `type`) VALUES ('$document_name','$uniqueFileName','$order_id','2')";
          if (!mysqli_query($conn, $sql)) {
            $error = 1;
          }
        }
      }
    }

    //inserting data from order object to mysql
    foreach ($customer_object as $key => $value) {
      if ($key == 'Full Name' || $key == 'Email' || $key == 'Mobile') {
        continue;
      }
      $sql = "INSERT INTO `order_details`(`name`, `value`, `order_id`, `type`) VALUES ('$key','$value','$order_id','1')";
      if (!mysqli_query($conn, $sql)) {
        $error = 1;
      }
    }
  } else {
    $error = 1;
  }
  if ($error == 0) {
    // Your PHP code generates some data
    $responseData = array(
      'status' => 1,
      'order_id' => $order_id
    );

    // Encode the data as JSON
    $responseJSON = json_encode($responseData);

    // Send the JSON response back to the client
    header('Content-Type: application/json'); // Specify JSON content type
    echo $responseJSON;
  }
}
##################add order###################
if (isset($_POST['order_payment'])) {
  $order_id = $_POST['order_id'];

  if (isset($_FILES['payment_proof'])) {
    $file = $_FILES['payment_proof'];
    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);

    // Check if the file was uploaded successfully
    if ($file['error'] === UPLOAD_ERR_OK) {
      $uniqueFileName = $order_id . '_' . time() . '_' . mt_rand(1000, 9999) . $ext;
      $destinationDirectory = ORDER_IMG_DIRECTORY;
      $destinationPath = $destinationDirectory . $uniqueFileName;
      move_uploaded_file($file['tmp_name'], $destinationPath);

      $sql = "UPDATE `orders` SET `payment_image`='$uniqueFileName' WHERE id = '$order_id'";
      mysqli_query($conn, $sql);
      echo 1;
    }
  }

}


if (isset($_POST['loan_order_object'])) {
  $error = 0;
  $order_object = json_decode($_POST['loan_order_object'], true);


  $service_id = $order_object['service_id'];
  $agent_id = $order_object['agent_id'];
  $details = $order_object['details'];
  $order_id = $order_object['order_id'];

  // sending details to database
  foreach ($details as $key => $value) {
    if ($key == 'customer_mobile') {
      $sql = "INSERT INTO `orders`(`customer_mobile`, `service_id`, `agent_id`,`order_type`) VALUES ('$value','$service_id',$agent_id,2)";
      if (mysqli_query($conn, $sql)) {
        $sql = "select last_insert_id()";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $order_id = $row[0];
      } else {
        $error = 1;
      }
    }
    if ($key == 'customer_name') {
      $sql = "UPDATE `orders` SET `customer_name` = '$value' WHERE id = $order_id";
      if (!mysqli_query($conn, $sql)) {
        $error = 1;
      }
    } else {
      $sql = "INSERT INTO `order_details`(`name`, `value`, `order_id`, `type`) VALUES ('$key','$value','$order_id',0)";
      mysqli_query($conn, $sql);
    }

    //update ki query likho
  }

  if ($error == 0) {
    //uploading files
    if (isset($_FILES)) {
      foreach ($_FILES as $key => $file) {
        if ($file['error'] === UPLOAD_ERR_OK) {
          $tempFile = $file['tmp_name'];
          $file_name = $file['name'];
          $explode_array = explode(".", $file_name);
          $ext = end($explode_array);
          $name = $key;
          $uniqueFileName = $order_id . '_' . time() . '_' . mt_rand(1000, 9999) . '.' . $ext;
          $destinationDirectory = ORDER_IMG_DIRECTORY; // Replace with your desired directory
          $destinationPath = $destinationDirectory . $uniqueFileName;
          move_uploaded_file($tempFile, $destinationPath);
          $sql = "INSERT INTO `order_details`(`name`, `value`, `order_id`, `type`) VALUES ('$key','$uniqueFileName','$order_id',0)";
          if (!mysqli_query($conn, $sql)) {
            $error = 1;
          }
        }
      }
    }
  }
  if ($error == 0) {
    $response = array('order_id' => $order_id, 'status' => 1);
    echo json_encode($response);
  }


}


if (isset($_POST['link_order_details'])) {
  $error = 0;
  $link_order_details = $_POST['link_order_details'];
  $service_id = $link_order_details['service_id'];
  $agent_id = $link_order_details['agent_id'];
  $vendor_name = $link_order_details['vendor_name'];

  $customer_name = $link_order_details['customer_name'];
  $customer_mobile = $link_order_details['customer_mobile'];

  $customer_whatsapp = $link_order_details['whatsapp'];
  $customer_email = $link_order_details['email'];
  $customer_dob = $link_order_details['customer_dob'];


  $sql = "INSERT INTO `orders`(`customer_name`, `customer_mobile`, `service_id`, `agent_id`,`order_type`) VALUES ('$customer_name','$customer_mobile','$service_id',$agent_id,3)";
  if (mysqli_query($conn, $sql)) {
    $sql = "select last_insert_id()";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $order_id = $row[0];
  } else {
    $error = 1;
  }

  $sql = "INSERT INTO `order_details`(`name`, `value`, `order_id`, `type`) VALUES ('whatsapp','$customer_whatsapp','$order_id',0)";
  if(!mysqli_query($conn, $sql))
  {
    $error = 0;
  }

  $sql = "INSERT INTO `order_details`(`name`, `value`, `order_id`, `type`) VALUES ('email','$customer_email','$order_id',0)";
  if (!mysqli_query($conn, $sql)) {
    $error = 0;
  }

  $sql = "INSERT INTO `order_details`(`name`, `value`, `order_id`, `type`) VALUES ('dob','$customer_dob','$order_id',0)";
  if (!mysqli_query($conn, $sql)) {
    $error = 0;
  }
  $sql = "INSERT INTO `order_details`(`name`, `value`, `order_id`, `type`) VALUES ('vendor_name','$vendor_name','$order_id',0)";
  if (!mysqli_query($conn, $sql)) {
    $error = 0;
  }

  if($error==0)
  {
    echo 1;
  }
  
}
?>