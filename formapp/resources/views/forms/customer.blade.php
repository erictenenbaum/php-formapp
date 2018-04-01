@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Rebate Form</h1>
        <p class="lead">Please complete the form below and click submit when finished.</p>
    </div>
</div>
<div class="container">  
    <h1>User Information (1/2)</h1>
    {!! Form::open(['action' => 'CustomersController@store', 'method' => 'POST']) !!}
        <div class="form-row">
            <div class="form-group col-md-6">
                {{Form::label('first-name', 'First Name')}}
                {{Form::text('first-name', '', ['class' => 'form-control', 'placeholder' => 'John'])}}
            </div>
            <div class="form-group col-md-6">
                    {{Form::label('last-name', 'Last Name')}}
                    {{Form::text('last-name', '', ['class' => 'form-control', 'placeholder' => 'Smith'])}}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">                  
                {{Form::label('email', 'Email')}}
                {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'customer@example.com'])}}
            </div>
            <div class="form-group col-md-6">                  
                {{Form::label('customer-phone', 'Phone Number')}}
                {{Form::text('customer-phone', '', ['class' => 'form-control', 'placeholder' => '800-888-8888'])}}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">                  
                {{Form::label('customer-address1', 'Address')}}
                {{Form::text('customer-address1', '', ['class' => 'form-control', 'placeholder' => '123 Main Street'])}}
            </div>
            <div class="form-group col-md-6">                   
                {{Form::label('customer-address2', 'Address2')}}
                {{Form::text('customer-address2', '', ['class' => 'form-control', 'placeholder' => 'Appartment, studio, or floor'])}}
            </div>
        </div> 
        <div class="form-row">
            <div class="form-group col-md-6">                    
                {{Form::label('customer-city', 'City')}}
                {{Form::text('customer-city', '', ['class' => 'form-control', 'placeholder' => 'Anytown'])}}
            </div>
            <div class="form-group col-md-4">
                {{Form::label('company-state', 'State')}}
                {{Form::select('customer-state', ['Alabama' => 'Alabama', 'Alaska' => 'Alaska', 
                    'Arizona' => 'Arizona',
                    'Arkansas' => 'Arkansas',
                    'California' => 'California',
                    'Colorado' => 'Colorado',
                    'Connecticut' => 'Connecticut',
                    'Delaware' => 'Delaware',
                    'Florida' => 'Florida',
                    'Georgia' => 'Georgia',
                    'Hawaii' => 'Hawaii',
                    'Idaho' => 'Idaho',
                    'Illinois' => 'Illinois',
                    'Indiana' => 'Indiana',
                    'Iowa' => 'Iowa',
                    'Kansas' => 'Kansas',
                    'Kentucky' => 'Kentucky',
                    'Louisiana' => 'Louisiana',
                    'Maine' => 'Maine',
                    'Maryland' => 'Maryland',
                    'Massachusetts' => 'Massachusetts',
                    'Michigan' => 'Michigan',
                    'Minnesota' => 'Minnesota',
                    'Mississippi' => 'Mississippi',
                    'Missouri' => 'Missouri',
                    'Montana' => 'Montana',
                    'Nebraska' => 'Nebraska',
                    'Nevada' => 'Nevada',
                    'New Hampshire' => 'New Hampshire',
                    'New Jersey' => 'New Jersey',
                    'New Mexico' => 'New Mexico',
                    'New York' => 'New York',
                    'North Carolina' => 'North Carolina',
                    'North Dakota' => 'North Dakota',
                    'Ohio' => 'Ohio',
                    'Oklahoma' => 'Oklahoma',
                    'Oregon' => 'Oregon',
                    'Pennsylvania' => 'Pennsylvania',
                    'Rhode Island' => 'Rhode Island',
                    'South Carolina' => 'South Carolina',
                    'South Dakota' => 'South Dakota',
                    'Tennessee' => 'Tennessee',
                    'Texas' => 'Texas',
                    'Utah' => 'Utah',
                    'Vermont' => 'Vermont',
                    'Virginia' => 'Virginia',
                    'Washington' => 'Washington',
                    'West Virginia' => 'West Virginia',
                    'Wisconsin' => 'Wisconsin',
                    'Wyoming' => 'Wyoming'
            ], null, ['class' => 'form-control', 'placeholder' => 'State'])}}
            </div>
            <div class="form-group col-md-2">                    
                    {{Form::label('customer-zip', 'Zip')}}
                    {{Form::text('customer-zip', '', ['class' => 'form-control', 'placeholder' => '12345'])}}  
            </div>
        </div>
        <br>        
            <div class="g-recaptcha" data-sitekey="6LdsNFAUAAAAAHw3E7k4CFBIHx3ZVpJOhCvaRlz4"></div> 
        <br>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</div>

@endsection