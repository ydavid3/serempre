<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Departments;
use App\models\Municipalities;

class GeneralController extends Controller
{
    /**
     * Consult all the deparments
     */
    public function consultAllDepartments() {

        $departments = new Departments();
        return $departments->allDepartments();
    }

    /**
     * Consult all the municipalities by department
     */
    public function consultMunicipalitiesByDeparment($department_id) {

        $municipality = new Municipalities();
        return $municipality->municipalityByDepartment($department_id);
    }

}
