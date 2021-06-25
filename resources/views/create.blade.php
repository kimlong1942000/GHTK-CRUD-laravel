<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Create shark</h2>
    <form action="/sharks/create" method="post">
        @csrf
        <label for="Name">
            Name:
            <input type="text" name="name">
        </label><br><br>
        <label for="Email">
            Email:
            <input type="text" name="email">
        </label><br><br>
        <label for="level">
            level:
            <input type="text" name="level">
        </label><br><br>
        <button type="submit">Create shark</button>
    </form>
</body>
</html>