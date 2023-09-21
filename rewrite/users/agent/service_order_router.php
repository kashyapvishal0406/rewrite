<?php
$service_id = $_GET['service_id'];
$service_name = $_GET['service_name'];
$category_id = $_GET['category_id'];
$page = '';

switch ($service_id) {
	case '254':
		$page_link = 'service_vendors.php';
		break;
	case '255':
		$page_link = 'service_vendors.php';
		break;
	case '256':
		$page_link = 'service_vendors.php';
		break;
	case '257':
		$page_link = 'service_vendors.php';
		break;
	case '258':
		$page_link = 'service_vendors.php';
		break;
	case '259':
		$page_link = 'service_vendors.php';
		break;
	case '260':
		$page_link = 'service_vendors.php';
		break;
	case '261':
		$page_link = 'service_vendors.php';
		break;
	case '262':
		$page_link = 'service_vendors.php';
		break;
	case '263':
		$page_link = 'service_vendors.php';
		break;
	case '264':
		$page_link = 'service_vendors.php';
		break;
	case '265':
		$page_link = 'service_vendors.php';
		break;
	case '266':
		$page_link = 'service_vendors.php';
		break;
	case '267':
		$page_link = 'service_vendors.php';
		break;
	case '268':
		$page_link = 'service_vendors.php';
		break;
	case '269':
		$page_link = 'service_vendors.php';
		break;
		case '310':
			$page_link = 'service_vendors.php';
			break;
	case '316':
		$page_link = 'service_vendors.php';
		break;
	case '332':
		$page_link = 'license.php';
		break;
	case '333':
		$page_link = 'license.php';
		break;
	case '368':
		$page_link = 'state_government_services.php';
		break;
	case '334':
		$page_link = 'accounts.php';
		break;
	case '335':
		$page_link = 'accounts.php';
		break;
	case '336':
		$page_link = 'accounts.php';
		break;
	case '340':
		$page_link = 'https://pmfby.gov.in/';
		break;
	case '341':
		$page_link = 'https://sspy-up.gov.in/HindiPages/oldage_h.aspx';
		break;

	case '369':
		$page_link = 'https://sspy-up.gov.in/HindiPages/oldage_h.aspx';
		break;
	case '370':
		$page_link = 'accounts.php';
		break;
	case '371':
		$page_link = 'accounts.php';
		break;
	case '372':
		$page_link = 'accounts.php';
		break;
	case '373':
		$page_link = 'accounts.php';
		break;
	case '374':
		$page_link = 'accounts.php';
		break;
	case '375':
		$page_link = 'accounts.php';
		break;
	case '376':
		$page_link = 'accounts.php';
		break;
	case '337':
		$page_link = 'https://sbm.gov.in/sbm_dbt/secure/login.aspx';
		break;
	case '338':
		$page_link = 'http://pmaymis.gov.in/';
		break;
	case '339':
		$page_link = 'accounts.php';
		break;




}
switch ($category_id) {
	case '19':
		$page_link = 'insurance.php';
		break;
	case '20':
		$page_link = 'state_government_services.php';
		break;
	case '15':
		$page_link = 'accounts.php';
		break;
	case '21':
		$page_link = 'buy_page.php';
		break;
	case '28':
		$page_link = 'credit_card.php';
		break;
		case '26':
			$page_link = 'accounts.php';
			break;
	case '29':
		$page_link = 'accounts.php';
		break;
	// case '30':
	// 	$page_link = 'license.php';
	// 	break;
	// case '31':
	// 	$page_link = 'accounts.php';
	// 	break;
}

switch ($category_id) {
	case '1':
		$page_link = 'buy_page.php';
		$page = 'mobile_login';
		break;
	case '2':
		$page_link = 'buy_page.php';
		$page = 'mobile_login';
		break;
	case '3':
		$page_link = 'buy_page.php';
		$page = 'mobile_login';
		break;
	case '4':
		$page_link = 'buy_page.php';
		$page = 'mobile_login';
		break;
	case '5':
		$page_link = 'buy_page.php';
		$page = 'mobile_login';
		break;
	case '6':
		$page_link = 'buy_page.php';
		$page = 'mobile_login';
		break;
	case '7':
		$page_link = 'buy_page.php';
		$page = 'mobile_login';
		break;
	case '8':
		$page_link = 'buy_page.php';
		$page = 'mobile_login';
		break;
	case '9':
		$page_link = 'buy_page.php';
		$page = 'mobile_login';
		break;
	case '10':
		$page_link = 'buy_page.php';
		$page = 'mobile_login';
		break;
	case '11':
		$page_link = 'buy_page.php';
		$page = 'mobile_login';
		break;
	case '12':
		$page_link = 'buy_page.php';
		$page = 'mobile_login';
		break;
	case '13':
		$page_link = 'buy_page.php';
		$page = 'mobile_login';
		break;

	case '8':
		$page_link = 'order_form.php';
		$page = 'mobile_login';
		break;
	case '10':
		$page_link = 'order_form.php';
		$page = 'mobile_login';
		break;
	case '7':
		$page_link = 'order_form.php';
		$page = 'mobile_login';
		break;

	case '6':
		$page_link = 'order_form.php';
		$page = 'mobile_login';
		break;

	case '5':
		$page_link = 'order_form.php';
		$page = 'mobile_login';
		break;

	default:
		# code...
		break;
}
if ($page != '') {
	$redirection_url = $page_link . '?service_id=' . $service_id . '&service_name=' . $service_name . '&category_id=' . $category_id;
	// header('Location: ' . $page_link.'?service_id='. $service_id.'&service_name='. $service_name.'&page='.$page);
} else {
	$redirection_url = $page_link . '?service_id=' . $service_id . '&service_name=' . $service_name . '&category_id=' . $category_id;
}
header('Location: ' . $redirection_url);
?>
