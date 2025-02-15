<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>

    @vite('resources/css/app.css')
</head>
<body>
     {{-- I personally addedd this line --}}
     @if(session('success'))
     <div id="flash" class="bg-green-100 border border-green-400 text-green-700 p-4 text-center font-bold rounded-md">
         {{ session('success') }}
     </div>
 @endif

    <header>
        <nav>
            <h1>Ninja Network</h1>
            <a href="{{route('ninjas.index')}}">All Ninjas</a>
            <a href="{{route('ninjas.create')}}">Create New Ninjas</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>