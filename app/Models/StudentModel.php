<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table      = 'student';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id', 'name',  'email', 'password', 'role', 'stu_id', 'phone', 'gender', 'photo', 'dob', 'c_id', 'application_type', 'address', 'visa_type', 'country', 'prev_country', 'work_exp', 'company_name', 'job_type', 'IELTS_L', 'IELTS_R', 'IELTS_W', 'IELTS_S', 'IELTS_Overall', 'Gre_analytical', 'Gre_overall', 'TOFEL', 'PTE'];

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['beforeInsert'];
    protected $beforeUpdate   = ['beforeUpdate'];


    protected function beforeInsert(array $data)
    {
        $data = $this->passwordHash($data);

        return $data;
    }

    protected function beforeUpdate(array $data)
    {
        $data = $this->passwordHash($data);

        return $data;
    }

    protected function passwordHash(array $data)
    {
        if (isset($data['data']['password']))
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);


        return $data;
    }
}
