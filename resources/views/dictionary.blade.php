<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dictionary</title>
</head>
<body>
<form method="post" action="{{route('translate')}}">
    @csrf
    <h3>Simple Dictionary</h3>
    <input type="text" name="word" placeholder="Enter word">
    <select name="select">
        <option value="Vie">English to VietNamese</option>
        <option value="Eng">VietNamese to English</option>
    </select>
    <input type="submit" value="translate">
</form>
</body>
</html>