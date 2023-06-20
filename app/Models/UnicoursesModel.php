<?php

namespace App\Models;

use CodeIgniter\Model;

class UnicoursesModel extends Model
{
    protected $table      = 'unicourse';
    protected $primaryKey = 'id';
  
    protected $allowedFields = ['id', 'uid', 'cname',  'duration', 'Fees', 'commission'];

    // Callbacks
    protected $allowCallbacks = true;
    public function getuid($name){
        $db=\config\Database::connect();
        // $data=$this->db->query("SELECT * from leave ");
        // print_r($data);
        $builder=$this->db->table(" university");
        $builder->select('id');
        $builder->where('uname=',$name);
        $data=$builder->get()->getResultArray();
        // echo $this->db->getLastQuery();
        //   print_r($data[0]);
        // return $this->orderBy('id','DESC')->findAll();
        return $data[0];
     }
}
