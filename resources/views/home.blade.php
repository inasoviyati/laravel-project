<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    @foreach ($users as $user)
        <tr>
           <td>{{ $user['name'] }}</td>
           <td>{{ $user['email'] }}</td>
           <td>{{ $user['created_at'] }}</td>
           
        </tr>
        @endforeach
    </table>
</body>
</html>