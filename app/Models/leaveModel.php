<?php

namespace App\Models;

use CodeIgniter\Model;

class LeaveModel extends Model
{
    protected $table      = 'leave';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id', 'desc',  'emp_id', 'start_leave', 'end_leave', 'status', 'reduced_salary'];

    // Callbacks
    protected $allowCallbacks = true;
    public function getRecords(){
        $db=\config\Database::connect();
        // $data=$this->db->query("SELECT * from leave ");
        // print_r($data);
        $builder=$this->db->table(" counsellor");
        $builder->select('*');
        $builder->join('leave','counsellor.id=leave.emp_id');
        $builder->where('leave.status=','');
        $data=$builder->get()->getResultArray();
        // echo $this->db->getLastQuery();
        //   print_r($data[0]);
        // return $this->orderBy('id','DESC')->findAll();
        return $data;
     }
}
