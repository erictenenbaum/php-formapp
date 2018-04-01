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
<h1>User Information (1/2)</h1>
<form>
    <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputFirstName">First Name</label>
        <input type="text" class="form-control" id="inputFirstName" name="first-name" placeholder="First name">
    </div>
    <div class="form-group col-md-6">
        <label for="inputLastName">Last Name</label>
        <input type="text" class="form-control" id="inputLastName" name="last-name" placeholder="Last Name">
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputEmail">Email</label>
        <input type="text" class="form-control" id="inputEmail" name="email" placeholder="email">
    </div>
    <div class="form-group col-md-6">
        <label for="inputPhone">Phone Number</label>
        <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="phone">
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputAddress1">Address</label>
        <input type="text" class="form-control" id="inputAddress1" name="address1" placeholder="1234 Main St">
    </div>
    <div class="form-group col-md-6">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Appartment, studio, or floor">
    </div>
    </div> 
    <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputUserCity">City</label>
        <input type="text" class="form-control" name="user-city" id="inputCity">
    </div>
    <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputUserState" class="form-control">
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
        <label for="inputUserZip">Zip</label>
        <input type="text" class="form-control" name="user-zip" id="inputUserZip">
    </div>
    </div>    
    <br>
    <div class="g-recaptcha" data-sitekey="6LdsNFAUAAAAAHw3E7k4CFBIHx3ZVpJOhCvaRlz4"></div> 
    <br>   
    <input type="submit" name="submit" value="submit" class="btn btn-primary">
    <a href="/company">Click</a> 
    <br> 
    <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
</form>  
</div>
@endsection