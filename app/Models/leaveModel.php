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
}
