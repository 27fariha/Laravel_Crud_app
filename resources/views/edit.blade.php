<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-6 mx-auto">
<div class="jumbotron text-center bg-dark text-white"><h1>Edit/Update Employee</h1></div>

<form action="{{action('EmployeeController@update',$emp->id)}}" method="post">
@csrf
@method('put')
<label for="">Enter Your Name</label>
<input type="text" name="name" id="" class="form-control" value="{{$emp->name}}">
@error('name')
<span class="text-danger"> {{$message}}</span>
@enderror
<br>
<label for="">Select Your Gender</label>
<select name="gender" id="" class="form-control">
    <option value="">Select gender</option>
    <option value="Male" @if($emp ->gender == 'Male') selected   @endif>Male</option>
    <option value="Female" @if($emp ->gender == 'Female') selected   @endif>Female</option>
</select>
@error('gender')
<span class="text-danger"> {{$message}}</span>
@enderror
<br>
<label for="">Enter Your Designation</label>
<input type="text" name="desig" id="" class="form-control" value="{{$emp->designation}}">
@error('desig')
<span class="text-danger"> {{$message}}</span>
@enderror
<br>
<input type="submit" value="Update Data" name="insertBtn" class="btn btn-block btn-primary">
</form>
</div>
</div>
</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
</body>
</html>