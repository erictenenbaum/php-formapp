@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Admin Login</h1>
          <p class="lead">Please enter your login credentials below.</p>
        </div>
      </div>
<div class="container">
    <form method="POST" action="">
        <div class="form-group">
            <label>Username</lable>
            <input type="text" name="username" class="form-control" value="">
        </div>     
        <div class="form-group">
            <label>Password</lable>
            <input type="text" name="password" class="form-control" value="">
        </div>              
        <br>
        <input type="submit" name="submit" value="submit" class="btn btn-primary">
    </form>
</div>
@endsection
