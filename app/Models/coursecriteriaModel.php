<?php

namespace App\Models;

use CodeIgniter\Model;

class coursecriteriaModel extends Model
{
    protected $table      = 'course_criteria';
    protected $primaryKey = 'id';
  
    protected $allowedFields = ['id','uid', 'courseid', 'IELTS_S',  'IELTS_L', 'IELTS_W', 'IELTS_R','IELTS_overall', 'GRE_analytical ', 'GRE_overall','TOFEL','PTE','workexp','12th'];

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
     public function getcid($cname){
        $db=\config\Database::connect();
        // $data=$this->db->query("SELECT * from leave ");
        // print_r($data);
        $builder=$this->db->table(" unicourse");
        $builder->select('id');
        $builder->where('cname=',$cname);
        $data=$builder->get()->getResultArray();
        // echo $this->db->getLastQuery();
        //   print_r($data[0]);
        // return $this->orderBy('id','DESC')->findAll();
        return $data[0];
     }
    
}
