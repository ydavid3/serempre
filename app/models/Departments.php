<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $table = "sr_departments";
    public $timestamps = false;

    /**
     * Consult all the departments
     */
    public function allDepartments() {
        return Departments::get();
    }

}
