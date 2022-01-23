<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    //
    function index(){
        return response(Company::all(),200);
    }
}
