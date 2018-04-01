@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Rebate Form</h1>
      <p class="lead">Please complete the form below and click submit when finished.</p>
    </div>
  </div>
  <div class="container">
  {{-- <form method="POST" action=""> --}}
        
            <h1>Company Information (2/2)</h1>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCompanyName">Company Name</label>
                <input type="text" class="form-control" id="inputCompanyName" name="company-name" placeholder="Company Name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCompanyNumber">Company Phone Number</label>
                <input type="text" class="form-control" id="inputCompanyNumber" name="company-number" placeholder="Company Phone Number">
            </div>
            </div>  
            <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputCompanyAddress">Address</label>
                <input type="text" class="form-control" id="inputCompanyAddress" name="company-address" placeholder="1234 Main St">
            </div>   
            </div> 
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCompanyCity">City</label>
                <input type="text" class="form-control" id="inputCompanyCity" name="company-city">
            </div>
            <div class="form-group col-md-4">
                <label for="inputCompanyState">State</label>
                <select id="inputCompanyState" class="form-control" name="company-state">
                <option selected>Choose...</option>
                <option>AL</option>
                <option>AK</option>
                <option>AZ</option>
                <option>AR</option>
                <option>CA</option>
                <option>CO</option>
                <option>CT</option>
                <option>DE</option>
                <option>FL</option>
                <option>GA</option>
                <option>HI</option>
                <option>ID</option>
                <option>IL</option>
                <option>IN</option>
                <option>IA</option>
                <option>KS</option>
                <option>KY</option>
                <option>LA</option>
                <option>ME</option>
                <option>MD</option>
                <option>MA</option>
                <option>MI</option>
                <option>MN</option>
                <option>MS</option>
                <option>MO</option>
                <option>MT</option>
                <option>NE</option>
                <option>NV</option>
                <option>NH</option>
                <option>NJ</option>
                <option>NM</option>
                <option>NY</option>
                <option>NC</option>
                <option>ND</option>
                <option>OH</option>
                <option>OK</option>
                <option>OR</option>
                <option>PA</option>
                <option>RI</option>
                <option>SC</option>
                <option>SD</option>
                <option>TN</option>
                <option>TX</option>
                <option>UT</option>
                <option>VT</option>
                <option>VA</option>
                <option>WA</option>
                <option>WV</option>
                <option>WI</option>
                <option>WY</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputCompanyZip">Zip</label>
                <input type="text" class="form-control" id="inputCompanyZip" name="company-zip">
            </div>
            </div>
            <div class="form-group">
            <label for="invoice">Invoice Attachment</label>
            <input type="file" name="invoice" class="form-control-file" id="invoice">
            </div> 
            <br>
            <div class="g-recaptcha" data-sitekey="6LdsNFAUAAAAAHw3E7k4CFBIHx3ZVpJOhCvaRlz4"></div> 
            <br>   
            <input type="submit" name="submit" value="submit" class="btn btn-primary"> 
            <br> 
            <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
        </form>  
        </div>
        @endsection