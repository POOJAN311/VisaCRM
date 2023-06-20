<?php

namespace App\Models;

use CodeIgniter\Model;

class EducationModel extends Model
{
    protected $table      = 'educational_details';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id', 'stu_id',  '10_score', 'board', '12_score', '10_passing', '12_passing', 'course_name', 'college_name', 'cgpa', 'sgpa'];

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
    public function getRecords()
    {
        return $this->orderBy('id', 'DESC')->findAll();
    }
}
