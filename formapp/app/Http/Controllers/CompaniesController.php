<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Customer;

class CompaniesController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('forms.company');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'company-name' => 'required',
            'company-address' => 'required',
            'company-city' => 'required',
            'company-state' => 'required',
            'company-zip' => 'required',
            'company-phone' => 'required',
            'invoice' => 'required|mimes:pdf|max:1999'
        ]);


        $db_company = Company::where('company_name', $request->input('company-name'))->get();
        $num = count($db_company);      

        // I'm getting "Undefined offset: 0" error when I try to confirm company doesn't already exist
        // was using ($num == 0)
        // Switch to 1 == 1 to get a true to get the rest of the app working, need to come back to this
        if($num == 0){
          // Handle File Upload
          if($request->hasFile('invoice')){
            // Get file name with the extension
            $fileNameWithExt = $request->file('invoice')->getClientOriginalName();

            // Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just extension
            $extension = $request->file('invoice')->getClientOriginalExtension();

            // Filename to Store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            // Upload file
            $path = $request->file('invoice')->storeAs('public/invoices', $fileNameToStore);
        }
        else {
            $fileNameToStore = 'nodocument.pdf';
        }

        $company = new Company;

        // Adding company row
        $company->company_name = $request->input('company-name');
        $company->company_address = $request->input('company-address');
        $company->company_city = $request->input('company-city');
        $company->company_state = $request->input('company-state');
        $company->company_zip = $request->input('company-zip');
        $company->company_phone = $request->input('company-phone');
        $company->invoice = $fileNameToStore;
        $company->save();

    
            // Add company to customer table as a foreign key
            // $db_company = Company::where('company_name', $fileNameToStore)->get();
            $db_company_new = Company::where('company_name', $request->input('company-name'))->get();
            $db_company_id = $db_company_new[0]->id;
            
            // echo($db_company);
            $currentUser = auth()->user()->id;
        
            $db_customer = Customer::where('user_id', $currentUser)->get();
            // echo($db_customer);
            
            $db_customer[0]->company_id = $db_company_id;
            $db_customer[0]->save();

            return view('pages.formsuccess');
            
        }
        else{
            $db_company_id = $db_company[0]->id;           
            $currentUser = auth()->user()->id;       
            
            $db_customer = Customer::where('user_id', $currentUser)->get();              
            
            $db_customer[0]->company_id = $db_company_id;
            $db_customer[0]->save();

            return view('pages.formsuccess');
        } 

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
