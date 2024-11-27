<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NINJA NETWORK | Home</title>
</head>
<body>
    <h1>Currently Available Ninjas</h1>


    @if ($greeting == "Hello")
        <p>Hi from inside the if statement</p>
    @endif

    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <p>{{ $ninja['name'] }}</p>
                <a href="/ninjas/{{ $ninja['id'] }}">View Details</a>
            </li>
        @endforeach
    </ul>


</body>
</html>