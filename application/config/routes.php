<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "shop";
$route['404_override'] = '';
//customer
$route[' '] = 'shop/index';
$route['deactivated'] = 'shop/deactivated';
$route['about'] = 'shop/about';
$route['menu'] = 'shop/menuGuest';
$route['contacts'] = 'shop/contacts';
$route['signup'] = 'shop/signup';
$route['login'] = 'shop/login_cust';
$route['verify'] = 'shop/verification';
$route['AdminLogin'] = 'shop/adminlogin';
//user
$route['menu/itemid/'] = 'shop/cartGuest/';
$route['Home'] = 'shop/indexCust';
$route['About'] = 'shop/aboutCust';
$route['Menu'] = 'shop/menuCust';
$route['Contacts'] = 'shop/contactUser';
$route['Profile'] = 'shop/profilecust';
$route['Confirm_Order'] = 'shop/payment4';
$route['Payment_Method'] = 'shop/payment3';
$route['Shipping_Information'] = 'shop/payment2';
$route['Payment'] = 'shop/payment';
$route['CartList'] = 'shop/cartView2';
$route['Cart'] = 'shop/cartView';
$route['logout'] = 'shop/logout';
//admin
$route['AdminPage'] = 'shop/indexAdmin';
$route['orderView'] = 'shop/orderView';
$route['verifyaccount/(:any)'] = 'shop/verifyaccount/$1';
$route['inventory'] = 'shop/inventory';
$route['SalesReport'] = 'shop/salesReport';
$route['notification/(:any)/(:any)'] = 'shop/notificationFunc/$1/$2';
$route['ManageContent/(:any)'] = 'shop/manageContent/$1';
$route['Article/(:any)'] = 'shop/articleShow/$1';
//staff
$route['StaffPage'] = 'shop/indexStaff';
$route['orderViewS'] = 'shop/orderViewS';
$route['inventoryS'] = 'shop/inventoryS';
$route['ManageContentS/(:any)'] = 'shop/manageContentS/$1';
/* End of file routes.php */
/* Location: ./application/config/routes.php */