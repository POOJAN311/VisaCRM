<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\StudentModel;
use App\Models\CounsellorModel;
use App\Models\ReceptionistModel;
use App\Models\UniversityModel;
use App\Models\LeaveModel;
use App\Models\EducationModel;

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
                                return view('login', $data);
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

        return view('login', $data);
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
        $session = \Config\Services::session();

        helper('form');
        $data = [];


        if ($this->request->getMethod() == 'post') {
            $input = $this->validate([
                'name' => 'required|min_length[2]',
                'email' => 'required|valid_email|is_unique[student.email]'
            ]);

            if ($input == true) {
                $model2 = new EducationModel();
                $datae = [
                    '10_score' => $this->request->getPost('10_score'),
                    'stu_id' => $this->request->getPost('stu_id'),
                    '10_passing' => $this->request->getPost('10_passing'),
                    'college_name' => $this->request->getPost('college_name'),
                    'course_name' => $this->request->getPost('course_name'),
                    '12_score' => $this->request->getPost('12_score'),
                    'board' => $this->request->getPost('board'),
                    '12_passing' => $this->request->getPost('12_passing'),
                    'cgpa' => $this->request->getPost('cgpa'),
                    'sgpa' => $this->request->getPost('sgpa'),
                ];
                $modelst = new StudentModel();
                $data = [
                    'name' => $this->request->getPost('name'),
                    'email' => $this->request->getPost('email'),
                    'phone' => $this->request->getPost('phone'),
                    'gender' => $this->request->getPost('gender'),
                    'dob' => $this->request->getPost('DOB'),
                    'address' => $this->request->getPost('address'),
                    'company_name' => $this->request->getPost('company_name'),
                    'work_exp' => $this->request->getPost('work_exp'),
                    'job_type' => $this->request->getPost('job_type'),
                    'country' => $this->request->getPost('country'),
                    'visa_type' => $this->request->getPost('visa_type'),
                    'prev_country' => $this->request->getPost('prev_country'),
                    'IELTS_L' => $this->request->getPost('IELTS_L'),
                    'IELTS_R' => $this->request->getPost('IELTS_R'),
                    'IELTS_W' => $this->request->getPost('IELTS_W'),
                    'IELTS_S' => $this->request->getPost('IELTS_S'),
                    'IELTS_Overall' => $this->request->getPost('IELTS_Overall'),
                    'Gre_analytical' => $this->request->getPost('Gre_analytical'),
                    'Gre_overall' => $this->request->getPost('Gre_overall'),
                    'TOFEL' => $this->request->getPost('TOFEL'),
                    'PTE' => $this->request->getPost('PTE')
                ];
                $model2->save($datae);
                $modelst->save($data);

                // $session->setFlashdata('success', 'record added');
                $datae['session1'] = 'Data added';
                $data['session1'] = 'Data added';
                // print_r(($data));
                return view('counsellor/Addstudent', $data, $datae);
            } else {
                $data['validation'] = $this->validator;
            }
        }
        return view('counsellor/Addstudent');
    }
    public function counsellorApplication()
    {
        $model = new UniversityModel();
        $data['universityList'] = $model->findAll();
        return view('counsellor/application', $data);
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
        $session = session();
        // $data=[];
        if ($this->request->getMethod() == 'post') {


            $model = new LeaveModel();
            $newData = array(
                'desc' => $this->request->getVar('desc'),
                'emp_id' => $this->request->getVar('emp_id'),
                'start_leave' => $this->request->getVar('start_leave'),
                'end_leave' => $this->request->getVar('end_leave'),
            );

            $model->save($newData);
            $data['session1'] = 'Data added';
            return view('counsellor/leave', $data);
        }
        $model1 = new LeaveModel();
        $id = $session->get('id');
        $data['de'] = $model1->where('emp_id', $id)->first();
        // print_r($data);
        return view('counsellor/leave', $data);
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
        $session = \Config\Services::session();
        $model1 = new StudentModel();
        $id = $session->get('id');
        $data['details'] = $model1->where('id', $id)->getRecords();
        return view('student/studentdetails', $data);
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
        $session = \Config\Services::session();

        helper('form');
        $data = [];


        if ($this->request->getMethod() == 'post') {
            $input = $this->validate([
                'name' => 'required|min_length[2]',
                'phone' => 'required|numeric|max_length[10]',
                'email' => 'required|valid_email|is_unique[counsellor.email]'
            ]);

            if ($input == true) {

                $model = new CounsellorModel();
                $data = [
                    'name' => $this->request->getPost('name'),
                    'phone' => $this->request->getPost('phone'),
                    'email' => $this->request->getPost('email'),
                    'join_date' => $this->request->getPost('date'),
                    'commission' => $this->request->getPost('commission'),
                    'salary' => $this->request->getPost('salary'),
                    'Predefined_lead' => $this->request->getPost('leads'),
                    'c_id' => $this->request->getPost('c_id')
                ];

                $model->save($data);

                // $session->setFlashdata('success', 'record added');
                $data['session1'] = 'Data added';
                // print_r(($data));
                return view('admin/counsellorDetails', $data);
            } else {
                $data['validation'] = $this->validator;
            }
        }
        $model1 = new CounsellorModel();
        $counsellorarray = $model1->getRecords();
        $data['details'] = $counsellorarray;
        return view('admin/counsellorDetails', $data);
    }
    public function leaveApprove()
    {
        $model = new LeaveModel();
        $counsellorarray = $model->getRecords();
        $data['details'] = $counsellorarray;
        return view('admin/leaveApproval', $data);
    }
    public function leavestatus($id)
    {
        $model = new LeaveModel();
        $model->update($id, [
            'status' => 'accepted'
        ]);
        $counsellorarray = $model->getRecords();
        $data['details'] = $counsellorarray;
        return view('admin/leaveApproval', $data);
    }
    public function AddUniversity()
    {
        $session = \Config\Services::session();

        helper('form');
        $data = [];


        if ($this->request->getMethod() == 'post') {
            $input = $this->validate([
                'name' => 'required|min_length[2]',
                'phone' => 'required|numeric|max_length[10]',
                'email' => 'required|valid_email|is_unique[counsellor.email]'
            ]);

            if ($input == true) {

                $model = new UniversityModel();
                $data = [
                    'university_code' => $this->request->getPost('university_code'),
                    'map_loc' => $this->request->getPost('map_loc'),
                    'uname' => $this->request->getPost('uname'),
                    'phone' => $this->request->getPost('phone'),
                    'Logo' => $this->request->getPost('Logo'),
                    'Country' => $this->request->getPost('Country'),
                    'Email' => $this->request->getPost('Email')
                ];

                $model->save($data);

                // $session->setFlashdata('success', 'record added');
                $data['session1'] = 'Data added';
                // print_r(($data));
                return view('admin/AddUniversity', $data);
            } else {
                $data['validation'] = $this->validator;
            }
        }
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
    public function Counselloredit($id)
    {
        $session = \Config\Services::session();
        helper('form');
        $data = [];
        // $model = new CounsellorModel();
        // $detail = $model->getRow($id);
        //    print_r($book);
        // if (empty($detail)) {
        //     $session->setFlashdata('error', 'record not found');
        //     return redirect()->to('/admin/dashboard');
        // }
        // $data['detail'] =  $detail;
        //    echo view('books/create');

        if ($this->request->getMethod() == 'post') {
            $input = $this->validate([
                'name' => 'required|min_length[2]',
                'phone' => 'required|numeric|max_length[10]',
                // 'email' => 'required|valid_email|is_unique[counsellor.email]'
            ]);

            if ($input == true) {
                $model = new CounsellorModel();
                $model->update($id, [
                    'name' => $this->request->getPost('name'),
                    'phone' => $this->request->getPost('phone'),
                    'email' => $this->request->getPost('email'),
                    'join_date' => $this->request->getPost('date'),
                    'commission' => $this->request->getPost('commission'),
                    'salary' => $this->request->getPost('salary'),
                    'Predefined_lead' => $this->request->getPost('leads')
                ]);

                $session->setFlashdata('data', 'record updates');
                // $data['session2'] = 'Data updated';
                // print_r(($data));
                $counsellorarray = $model->getRecords();
                $data['details'] = $counsellorarray;
                return redirect()->to('admin/CounsellorDetails');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        echo 'shail';
        // return view('admin/counsellorDetails', $data);
    }

    // logout
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
