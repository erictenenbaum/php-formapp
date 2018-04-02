@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Administrator Dashboard</h1>        
    </div>
</div>
<div class="container">
    {{-- Checks if companies are in the database --}}
        @if(count($companies) > 0) 
    {{-- Iterates over all the companies in the database --}}
            @foreach($companies as $company)
            {{-- If the company has any customers in database, If they are approved they currently wont show but they exist --}}
                @if(count($company['customers']) > 0)                        
                    <h1><strong>{{$company['company_name']}}</strong></h1>
                        <h6>{{$company['company_address']}}</h6>
                        <h6>{{$company['company_city']}}, {{$company['company_state']}} {{$company['company_zip']}}</h6>
                        <h6>{{$company['company_phone']}}</h6><hr>           
                        @foreach($company['customers'] as $customer)
                            @if($customer['approved'] || $customer['denied'])
                            {{-- Currently approved customers are removed from the dashboard --}}
                                <div class='approved'>    
                                    {{-- <h1>{{$customer['first_name']}}</h1> --}}
                                <div>
                            @else
                                <h3>{{$customer['first_name']}} {{$customer['last_name']}}</h3>                                  
                                    <h5><strong>Phone:</strong> {{$customer['customer_phone']}}</h5>                                    
                                    <h5><strong>Email:</strong> {{$customer['customer_email']}}</h5>                                                                                              
                                <h5><a href="/storage/invoices/{{$company['invoice']}}">Invoice</a></h5>
                                    <div class='form-row'>
                                            {{-- <div class="form-group col-md-6"></div> --}}
                                        <div class='<div class="form-group col-md-1'>
                                    {!!Form::open(['action' => ['CustomersController@update', $customer['id']], 'method' => 'PUT', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'PUT')}}
                                    {{Form::submit('Approve', ['class' => 'btn btn-success'])}}
                                    {!!Form::close()!!}
                                        </div>

                                    {{-- This button will delete customer, but I also added a nullable denied collumn to customer table for possible refactoring --}}
                                        <div class='form-group col-md-1'>
                                    {!!Form::open(['action' => ['CustomersController@destroy', $customer['id']], 'method' => 'DELETE', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Deny', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                        </div>
                                    </div>
                            @endif                        
                        @endforeach
                        <br><hr>               
                @endif
            @endforeach
        @else
        <h2>You have no applications to review</h2>
        @endif
</div>
@endsection