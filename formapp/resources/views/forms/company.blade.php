@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Rebate Form</h1>
        <p class="lead">Please complete the form below and click submit when finished.</p>
    </div>
</div>
      <div class="container">   
    <h1>Company Information (2/2)</h1>
    {!! Form::open(['action' => 'CompaniesController@store', 'method' => 'POST']) !!}
        <div class="form-row">
            <div class="form-group col-md-6">
                {{Form::label('company-name', 'Company Name')}}
                {{Form::text('company-name', '', ['class' => 'form-control', 'placeholder' => 'ABC Company'])}}
            </div>
            <div class="form-group col-md-6">
                    {{Form::label('company-phone', 'Company Phone')}}
                    {{Form::text('company-phone', '', ['class' => 'form-control', 'placeholder' => '800-888-888'])}}
            </div>
        </div>       
        <div class="form-row">
            <div class="form-group col-md-12">                  
                {{Form::label('company-address', 'Address')}}
                {{Form::text('company-address', '', ['class' => 'form-control', 'placeholder' => '123 Corporate Way'])}}
            </div>            
        </div> 
        <div class="form-row">
            <div class="form-group col-md-6">                    
                {{Form::label('company-city', 'City')}}
                {{Form::text('company-city', '', ['class' => 'form-control', 'placeholder' => 'Anytown'])}}
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
                    {{Form::label('company-zip', 'Zip')}}
                    {{Form::text('company-zip', '', ['class' => 'form-control', 'placeholder' => '12345'])}}  
            </div>
        </div>
            <br>
                <div class="g-recaptcha" data-sitekey="6LdsNFAUAAAAAHw3E7k4CFBIHx3ZVpJOhCvaRlz4"></div> 
            <br>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}        
            {!! Form::close() !!}
      </div>

@endsection