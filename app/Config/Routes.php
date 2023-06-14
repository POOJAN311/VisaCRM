<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index', ['filter' => 'noauth']);
$routes->match(['get', 'post'], '/login', 'Home::login', ['filter' => 'noauth']);
$routes->match(['get', 'post'], '/signup', 'Home::signup', ['filter' => 'noauth']);
$routes->match(['get'], '/logout', 'Home::logout');

// Counsellor 
$routes->get('/counsellor/dashboard', 'Home::counsellorDashboard', ['filter' => 'auth']);
$routes->get('/counsellor/AddStudent', 'Home::counsellorAddStudent', ['filter' => 'auth']);
$routes->post('/counsellor/AddStudent', 'Home::counsellorAddStudent');

$routes->get('/counsellor/Application', 'Home::counsellorApplication', ['filter' => 'auth']);
$routes->get('/counsellor/CollegeSearch', 'Home::counsellorCollegeSearch', ['filter' => 'auth']);
$routes->get('/counsellor/Leads', 'Home::counsellorLeads', ['filter' => 'auth']);
$routes->match(['get', 'post'], '/counsellor/Leave', 'Home::counsellorLeave', ['filter' => 'auth']);
$routes->get('/counsellor/StudentInfo', 'Home::counsellorStudentInfo', ['filter' => 'auth']);
$routes->get('/counsellor/VisaDetails', 'Home::counsellorVisaDetails', ['filter' => 'auth']);
$routes->get('/counsellor/StudentSearch', 'Home::StudentSearch', ['filter' => 'auth']);


// Student
$routes->get('/student/dashboard', 'Home::studentDashboard', ['filter' => 'auth']);
$routes->get('/student/ApplicationStatus', 'Home::ApplicationStatus', ['filter' => 'auth']);
$routes->get('/student/FeePayment', 'Home::FeePayment', ['filter' => 'auth']);


//admin
$routes->get('/admin/dashboard', 'Home::studentAnalysis', ['filter' => 'auth']);
$routes->get('/admin/CounsellorDetails', 'Home::CounsellorDetails', ['filter' => 'auth']);
$routes->post('/admin/CounsellorDetails', 'Home::CounsellorDetails');
$routes->get('/admin/leaveApprove', 'Home::leaveApprove', ['filter' => 'auth']);
$routes->get('/admin/AddUniversity', 'Home::AddUniversity', ['filter' => 'auth']);
$routes->post('/admin/AddUniversity', 'Home::AddUniversity');

$routes->get('/admin/UniversityList', 'Home::UniversityList', ['filter' => 'auth']);
$routes->post('/admin/edit/(:num)', 'Home::Counselloredit/$1');
$routes->get('/admin/edit/(:num)', 'Home::Counselloredit/$1');
// receptionist
$routes->get('/receptionist/dashboard', 'Home::receptionist_dashboard', ['filter' => 'auth']);
$routes->get('/receptionist/Leave', 'Home::receptionistLeave', ['filter' => 'auth']);
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
