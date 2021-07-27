<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Http\Requests\UpdateRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Log;

class CompanyController extends Controller
{
    /**
     * Creates company details page
     *
     * @param Request $req
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    function AddCompany(Request $req)
    {
        try {

            return view('Company/CompanyForm');
        } catch (Exception $exception) {
            Log::error($exception);
        }
    }

    /**
     * Stores company details
     *
     * @param Request $req
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function StoreDetails(CompanyRequest $req)
    {
        try {
            $company = new Company;
            $company->CompanyName = $req->cname;
            $company->Address = $req->address;
            $company->ContactNumber = $req->phone;
            $company->Email = $req->email;
            $company->City = $req->city;
            $company->save();
            return redirect('/company/show')->with('status', 'New Company Created');


        } catch (Exception $exception) {
            Log::error($exception);
        }
    }

    /**
     * Shows all the details of company
     *
     * @param Company $company
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    function ShowCompany(Company $company)
    {
        try {
            return view('Company/CompanyList')->with('CompanyArr', Company::all());
        } catch (Exception $exception) {
            Log::error($exception);
        }

    }

    /**
     * Retrieves data of individual id for edit purpose
     *
     * @param Company $company
     * @param $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    function EditCompany($id)
    {
        try {
            $CompanyEditArr = Company::findorfail($id);
            return view('Company/CompanyEdit', compact('CompanyEditArr'));
        } catch (Exception $exception) {
            Log::error($exception);
        }

    }


    /**
     * Deletes details of company of respective id
     *
     * @param Company $company
     * @param $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function DeleteCompany(Company $company, $id)
    {
        try {
            Company::destroy($id);
            return redirect('/company/show');
        } catch (Exception $exception) {
            Log::error($exception);
        }

    }

    /**
     * Update company details of respective id
     *
     * @param Request $request
     * @param $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    function UpdateCompany(CompanyRequest $request, $id)
    {
        try {
            $company = Company::findorfail($id);
            $data = $request->validated();
            $company->update([
                'CompanyName' => $data['cname'],
                'Address' => $data['address'],
                'ContactNumber' => $data['phone'],
                'Email' => $data['email'],
                'City' => $data['city']
            ]);
            return redirect('/company/show');
        } catch (Exception $exception) {
            Log::error($exception);
        }
    }
}
