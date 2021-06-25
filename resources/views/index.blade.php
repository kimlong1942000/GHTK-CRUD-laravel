<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>List sharks</h2>
    <a href="/sharks/create">Create new shark</a> <hr>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
        @foreach($sharks as $shark)
            <tr>
                <td>{{ $shark->id }}</td>
                <td>{{ $shark->name }}</td>
                <td>{{ $shark->email }}</td>
                <td>
                    <a href="/sharks/update/{{ $shark->id }}">Update</a> <br> 
                    <a href="/sharks/delete/{{ $shark->id }}">Delete</a>
                <td>
            </tr>
        @endforeach
        
    </table>
    
</body>
</html>