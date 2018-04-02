<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\User;

class CustomersController extends Controller
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
        return view('forms.customer');
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'required',
            'customer-phone' => 'required',
            'customer-address1' => 'required',
            'customer-city' => 'required',
            'customer-state' => 'required',
            'customer-zip' => 'required'
        ]);

        // Check Captcha
            // Todo ->  get captcha implemented
        
        // Check if User already submitted an application 
        $currentUser = auth()->user()->id;
        $db_customer = Customer::where('user_id', $currentUser)->get();
         

        if(count($db_customer) >= 1){
            // If user has already submitted an application redirect them to success page
            return view('pages.formsuccess');
        }
        else{
            // If user hasn't already submitted an application
             // Create Customer
            $customer = new Customer;

            // Add Customer Fields
            $customer->first_name = $request->input('first-name');
            $customer->last_name = $request->input('last-name');
            $customer->customer_email = $request->input('email');
            $customer->customer_phone = $request->input('customer-phone');
            $customer->first_name = $request->input('first-name');
            $customer->customer_address1 = $request->input('customer-address1');
            $customer->customer_address2 = $request->input('customer-address2');
            $customer->customer_city = $request->input('customer-city');
            $customer->customer_state = $request->input('customer-state');
            $customer->customer_zip = $request->input('customer-zip');
            $customer->user_id = auth()->user()->id;

            // Save Customer
            $customer->save();

            // Redirect them to the company form
            return redirect('/company/create');
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
        //Update the customer for approval and redirect back to the admin dashboard
        $customer = Customer::find($id);
        $customer->approved = 1;
        $customer->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*
            I also added a nullable denied collumn to the customer table if the company would
            rath keep the customer in the database and just mark them as denied
        */

        //delete customer and redirect back to home page        
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('/home');
    }
}
