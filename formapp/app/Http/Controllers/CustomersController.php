<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
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

        return redirect('/company/create');

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
