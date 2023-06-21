<?php

namespace App\Models;

use CodeIgniter\Model;

class UniversityModel extends Model
{
    protected $table      = 'university';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id', 'map_loc',  'uname', 'phone', 'Logo', 'Country', 'Email'];

    // Callbacks
    protected $allowCallbacks = true;
    public function getRecords(){
        return $this->orderBy('id','DESC')->findAll();
     }
     public function getcourse($id){
        $db=\config\Database::connect();
      
      $builder=$this->db->table(" unicourse");
      $builder->where('uid=',$id);
      $data=$builder->get()->getResultArray();
      // echo $this->db->getLastQuery();
      //   print_r($data[0]);
      // return $this->orderBy('id','DESC')->findAll();
      return $data;
       

   }
}
