<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <form action="{{route("add.post")}}" method="post">
        @csrf

        @method("POST")

        <button type="submit">add</button>

    </form>
</body>
</html>
