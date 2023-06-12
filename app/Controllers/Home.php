<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\StudentModel;
use App\Models\CounsellorModel;
use App\Models\ReceptionistModel;

class Home extends BaseController
{

    // Authentication
    public function index()
    {
        return view('welcome_message');
    }

    public function login()
    {

        $data = [];
        helper(['form']);
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]'
            ];

            $errors = [
                'password' => [
                    'validateUser' => 'Email or Password don\'t match'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {

                $model = new AdminModel();
                $admin = $model->where('email', $this->request->getVar('email'))->first();

                if (!$admin) {
                    $model = new CounsellorModel();
                    $admin = $model->where('email', $this->request->getVar('email'))->first();
                    if (!$admin) {
                        $model = new StudentModel();
                        $admin = $model->where('email', $this->request->getVar('email'))->first();
                        if (!$admin) {
                            $model = new ReceptionistModel();
                            $admin = $model->where('email', $this->request->getVar('email'))->first();
                            if (!$admin) {
                                $data['doesNotMatch'] = TRUE;
                                return view('login',  $data);
                            }
                        }
                    }
                }
                if ($this->verifyMypassword($this->request->getVar('password'), $admin['password'])) {
                    $this->setUserSession($admin);
                    if ($admin['role'] == 'admin') {
                        return redirect()->to('admin/dashboard');
                    } else if ($admin['role'] == 'counsellor') {
                        return redirect()->to('counsellor/dashboard');
                    } else if ($admin['role'] == 'receptionist') {
                        return redirect()->to('receptionist/dashboard');
                    } else if ($admin['role'] == 'student') {
                        return redirect()->to('student/dashboard');
                    } else {
                        echo $admin['role'];
                        exit;
                    }
                } else {
                    $data['flashMessage'] = TRUE;
                }
            }
        }

        return view('login',  $data);
    }

    private function setUserSession($admin)
    {
        $data = [
            'id' => $admin['id'],
            'name' => $admin['name'],
            'email' => $admin['email'],
            'role' => $admin['role'],

            'isLoggedIn' => true
        ];

        session()->set($data);
        return true;
    }

    public function signup()
    {
        $data = [];
        helper('form');
        if ($this->request->getMethod() == 'post') {


            $model = new ReceptionistModel();
            $newData = array(
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => $this->request->getVar('password')
            );

            $model->save($newData);
        }
        return view('signup');
    }

    private function verifyMypassword($enterpassword, $databasepassword)
    {
        return password_verify($enterpassword, $databasepassword);
    }


    // counsellor
    public function counsellorDashboard()
    {
        return view('counsellor/index');
    }

    public function counsellorAddStudent()
    {
        return view('counsellor/Addstudent');
    }

    public function counsellorApplication()
    {
        return view('counsellor/application');
    }

    public function counsellorCollegeSearch()
    {
        return view('counsellor/collegeSearch');
    }

    public function counsellorLeads()
    {
        return view('counsellor/leads');
    }

    public function counsellorLeave()
    {
        return view('counsellor/leave');
    }

    public function counsellorStudentInfo()
    {
        return view('counsellor/studentinfo');
    }

    public function counsellorVisaDetails()
    {
        return view('counsellor/visadetails');
    }
    public function StudentSearch()
    {
        return view('counsellor/StudentSearch');
    }


    // student
    public function studentDashboard()
    {
        return view('student/studentdetails');
    }
    public function ApplicationStatus()
    {
        return view('student/applicationstatus');
    }
    public function FeePayment()
    {
        return view('student/feepayment');
    }



    // admin
    public function studentAnalysis()
    {
        return view('admin/studentanalysis');
    }
    public function CounsellorDetails()
    {
        return view('admin/counsellorDetails');
    }
    public function leaveApprove()
    {
        return view('admin/leaveApproval');
    }
    public function AddUniversity()
    {
        return view('admin/AddUniversity');
    }
    public function UniversityList()
    {
        return view('admin/UniversityList');
    }
    //receptionist
    public function receptionist_dashboard()
    {
        return view('receptionist/dashboard');
    }
    public function receptionistLeave()
    {
        return view('receptionist/leave');
    }


    // logout
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
