<?php

namespace App\Models;

use CodeIgniter\Model;

class DocumentationModel extends Model
{
    protected $table      = 'documentation';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id', 'sid',  '10th', '12th', 'grad_marksheet', 'LOR', 'SOP1', 'SOP2', 'Finance', 'Workexp', 'Status', 'uploadtime'];

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
