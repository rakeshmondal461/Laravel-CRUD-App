<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <div style="width:60%;margin:0 auto;">
    <h3 align="center">Add Customer</h3>
    <form method="post" action="customer">
    @csrf
    <table border="1" width="300px" align="center">
        <tr>
        <td style="text-align:right">Name:</td>
        <td><input type="text" name="name" id="name"></td>
        </tr>

        <tr>
        <td style="text-align:right">Mobile:</td>
        <td><input type="text" name="mob" id="mob"></td>
        </tr>

        <tr>
        <td style="text-align:right">Address:</td>
        <td><input type="text" name="addr" id="addr"></td>
        </tr>

        
        <tr>
        <td colspan="2" align="right"><button type="submit">Submit</button></td>
        </tr>
    </table>
    </form>
    <br/>
    <h3 align="center">Customer List</h3>
    <table border="1" width="700px" align="center">
    <tr>
        <td>#</td>
        <td><b>Name</b></td>
        <td><b>Mobile</b></td>
        <td><b>Address</b></td>
        <td><b>Edit</b></td>
        <td><b>Delete</b></td>
    </tr>

        @foreach($customers as $student)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td> {{$student->name}}</td>
            <td>{{$student->mob}}</td>
            <td>{{$student->addr}}</td>
            <td><a href="/upadtecustomer/{{$student->id}}" target="_blank">Click here</a></td>
            <td><a href="/deletecustomer/{{$student->id}}">Click here</a></td>
        </tr>
        @endforeach
 
   

    </table>
    
    </div>
</body>
</html>