<?php

namespace App\Models;

use CodeIgniter\Model;

class CounsellorModel extends Model
{
    protected $table      = 'counsellor';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id', 'name',  'email', 'password','c_id','salary','join_date','phone','commission','Predefined_lead'];

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
    public function getRecords(){
        return $this->orderBy('id','DESC')->findAll();
     }
}
