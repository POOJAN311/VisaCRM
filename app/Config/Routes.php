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
$routes->get('/', 'Home::index');
$routes->match(['get', 'post'], '/login', 'Home::login');
$routes->match(['get', 'post'], '/signup', 'Home::signup');

// Counsellor 
$routes->get('/counsellor/dashboard', 'Home::counsellorDashboard');
$routes->get('/counsellor/AddStudent', 'Home::counsellorAddStudent');
$routes->get('/counsellor/Application', 'Home::counsellorApplication');
$routes->get('/counsellor/CollegeSearch', 'Home::counsellorCollegeSearch');
$routes->get('/counsellor/Leads', 'Home::counsellorLeads');
$routes->get('/counsellor/Leave', 'Home::counsellorLeave');
$routes->get('/counsellor/StudentInfo', 'Home::counsellorStudentInfo');
$routes->get('/counsellor/VisaDetails', 'Home::counsellorVisaDetails');


// Student
$routes->get('/student/dashboard', 'Home::studentDashboard');
$routes->get('/student/ApplicationStatus', 'Home::ApplicationStatus');
$routes->get('/student/FeePayment', 'Home::FeePayment');


//admin
$routes->get('/admin/dashboard', 'Home::studentAnalysis');
$routes->get('/admin/CounsellorDetails', 'Home::CounsellorDetails');
$routes->get('/admin/leaveApprove', 'Home::leaveApprove');
$routes->get('/admin/AddUniversity', 'Home::AddUniversity');
$routes->get('/admin/UniversityList', 'Home::UniversityList');


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
