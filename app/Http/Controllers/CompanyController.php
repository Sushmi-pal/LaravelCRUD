<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    function AddCompany(Request $req)
    {
        $company = new Company;
        $company->CompanyName = $req->cname;
        $company->Address = $req->address;
        $company->ContactNumber = $req->phone;
        $company->Email = $req->email;
        $company->City = $req->city;
        $company->save();
        return redirect('/company/show');

    }

    function ShowCompany(Company $company)
    {
        return view('Company/CompanyList')->with('CompanyArr', Company::all());
    }

    function DeleteCompany(Company $company, $id)
    {
        Company::destroy($id);
        return redirect('/company/show');
    }

    function UpdateCompany(Company $company, Request $request, $id)
    {
        $result = Company::find($id);
        $result->CompanyName = $request->input('cname');
        $result->save();

    }
}
