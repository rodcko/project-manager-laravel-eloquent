<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function insertCompany() {
        $company = new Company;
        $company->name = 'Millicom, S.A.';
        $company->save();

        return "Compania Guardada";
    }
}
