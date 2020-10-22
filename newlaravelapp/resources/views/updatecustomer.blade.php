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
    <form method="post" action="/updatecustomerdata">
    @csrf
    <input type="hidden" name="id" value="{{$data->id}}">
    <table border="1" width="300px" align="center">
        <tr>
        <td style="text-align:right">Name:</td>
        <td><input type="text" name="name" id="name" value="{{$data->name}}"></td>
        </tr>

        <tr>
        <td style="text-align:right">Mobile:</td>
        <td><input type="text" name="mob" id="mob" value="{{$data->mob}}"></td>
        </tr>

        <tr>
        <td style="text-align:right">Address:</td>
        <td><input type="text" name="addr" id="addr" value="{{$data->addr}}"></td>
        </tr>

        
        <tr>
        <td colspan="2" align="right"><button type="submit">Update</button></td>
        </tr>
    </table>
    </form>
    </div>
</body>
</html>