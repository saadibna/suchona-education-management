<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Data</title>
    <style>
        table{
            width: 60%;
            margin: 0 auto;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        tr,td{
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th> ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Action</th>
        </tr>
        @foreach($data as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->first_name}}</td>
          <td>{{$item->last_name}}</td>
          <td><a href="">Edit</a></td>
        </tr>
        @endforeach
      </table>
</body>
</html>


