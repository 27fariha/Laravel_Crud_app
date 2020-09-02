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
 <div class="bg-dark text-white">
 <h2 align="center" >Employee Data</h2></div><br>

 <a href="{{action ('EmployeeController@create')}}" class="btn btn-outline-info"> Add Employee</a><br><br>
@include('Alerts\message')
   <br>
    <table border=1 align="center" class="table table-stripped table-hover">

    <tr> 
    <th>Id</th>
    <th>Name</th>
    <th>Gender</th>
    <th>Designation</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>

    @foreach($emp as $e)
    <tr>
    <td>{{$e['id']}}</td>
    <td>{{$e['name']}}</td>
    <td>{{$e['gender']}}</td>
    <td>{{$e['designation']}}</td>
    <td>
    <a href="employee/{{$e['id']}}/edit" class="btn btn-info text-center">Edit</a>
    </td>
    <td>
    <form action="{{action ('EmployeeController@destroy',$e['id'])}}" method="post" onsubmit="return CheckDelete()" >
   @csrf
   @method('delete')
    <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    </td>
    </tr>
    @endforeach
    </table>
    {{$emp->links() }}
    </div>

<script>
function CheckDelete(){
    return confirm('Are You Sure You Want to This Data???');
}

</script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>