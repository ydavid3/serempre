<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\models\Departments;

class Municipalities extends Model
{
    protected $table = "sr_municipalities";
    public $timestamps = false;

    /**
     * Consult municipality by department
     */
    public function municipalityByDepartment($deparment_id) { 
        return Municipalities::where("department", $deparment_id)->get();
    }

    /**==============================================
     * Relations with other tables of the database
     *===============================================*/
    public function departmentTable()
    {
        return $this->belongsTo(Departments::class, "department");
    }
}
