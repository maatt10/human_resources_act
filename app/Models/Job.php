<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $primaryKey = 'job_id';

    public function employees() {
        return $this->hasMany(Employee::class, 'employee_id', 'employee_id');
    }
}
