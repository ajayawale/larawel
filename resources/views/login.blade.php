@extends('layout')
<title>login</title>
<html>
    @section('content')
    <form action="/login_submit" method="POST">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pass" placeholder="Enter password" id="pwd">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    @endsection
    </html>