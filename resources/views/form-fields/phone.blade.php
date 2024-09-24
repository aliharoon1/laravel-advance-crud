<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phone</title>
    @vite('resources/css/app.css')
</head>
<body>
<form action="{{ route('phone.store') }}" method="post">
    @csrf
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone">
    <button type="submit">Submit</button>
</form>

</body>
</html>
