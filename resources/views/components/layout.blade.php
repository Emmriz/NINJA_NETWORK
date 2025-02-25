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
            @guest
            <a href="{{route('show.login')}}" class="btn">Login</a>
            <a href="{{route('show.register')}}" class="btn">Register</a>
            
            @endguest

            

            @auth
            <span class="border-r-2 border-l-2 pl-2 pr-2">
                Hi there,<b> {{ Auth::user()->name }}</b>
            </span>
            <a href="{{route('ninjas.create')}}">Create New Ninjas</a>
            <a href="{{route('ninjas.index')}}">All Ninjas</a>
            <form action="{{ route ('logout') }}" method="POST" class="m-0">
                @csrf
                <button class="btn">Logout</button>
            </form>
            @endauth
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>