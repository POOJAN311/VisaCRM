<?php

namespace App\Models;

use CodeIgniter\Model;

class UniversityModel extends Model
{
    protected $table      = 'university';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id', 'university_code', 'map_loc',  'uname', 'phone', 'Logo', 'Country', 'Email'];

    // Callbacks
    protected $allowCallbacks = true;
}
