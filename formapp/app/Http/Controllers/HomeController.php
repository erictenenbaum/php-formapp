<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Customer;
use App\Company;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Check for admin user
        $user = auth()->user()->id;

        // if admin render admin dashboard view, otherwise render customer form
        // Could refactor this to create additional admins or other specifications 
        if($user === 1){

            $allCompanies = Company::with('customers')->get()->toArray();            

            // Helper code snippet to visualize data

            // echo "<pre>";
            // print_r($allCompanies);
            // exit;            

            return view('pages.dashboard')->with('companies', $allCompanies);
        }
        else {
            return view('forms.customer');
        }

        
    }
}
