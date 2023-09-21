<?php
$appPath = dirname(__DIR__);
define('DB_CONFIG_PATH', $appPath . '/configs/db-config.php');
define('TEMP_IMG_DIRECTORY', $appPath . '/data/temp_images/');
define('ORDER_IMG_DIRECTORY', $appPath . '/data/order_images/');
define('MARKETING_IMG_DIRECTORY', $appPath . '/data/marketing/');
define('MARKETING_TEMPLATE_DIRECTORY', $appPath . '/users/agent/assets/images/marketing_templates/');




#####order Status####
//create an array of order status with integer keys
$order_status_array = array(
  '0' => 'Pending',
  '1' => 'In Progress',
  '2' => 'Completed',
  '3' => 'Cancelled'
);

$order_status_light = array(
  '0' => 'danger',
  '1' => 'warning',
  '2' => 'success',
  '3' => 'danger'
);

?>
