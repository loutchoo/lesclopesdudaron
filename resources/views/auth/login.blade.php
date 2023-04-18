<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>LesClopesDuDaron</title>
</head>
<style>
    .colorbackground{
        background-color: #182235;
    }
</style>
<body class="colorbackground text-white text-2xl font-bold">
    <header class="bg-gray-900 text-white">
        <div class="container mx-auto flex justify-between items-center py-4">
          <div class="text-3xl font-bold flex"><img class="rounded-full" width="50" height="100" src="{{asset('images/daron.jpeg')}}" alt=""><a href="/" class="ml-2">Lesclopesdudaron</a></div>
          <nav>
            <ul class="flex space-x-4">
                <div class="rounded-lg border-2 border-white"><li class="mx-2"><a href="/" class="hover:text-gray-400 m-1">Accueil</a></li></div>
              <div class="rounded-lg border-2 border-white"><li class="mx-2"><a href="/#présentation" class="hover:text-gray-400 m-1">Présentation</a></li></div>
              <div class="rounded-lg border-2 border-white"><li class="mx-2"><a href="/#team" class="hover:text-gray-400 m-1">Equipe</a></li></div>
              <div class="rounded-full border-2 border-green-500"><li class="mx-2"><a href="/download" class="hover:text-green-400 m-1">Télecharger</a></li></div>
            </ul>
          </nav>
        </div>
      </header>
      <div class="bg-grey-lighter mt-20 flex flex-col animate__animated animate__bounceIn">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center">Se connecter</h1>
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="email" placeholder="Email"/>
                    <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="password" placeholder="Mot de passe"/>
                    <button type="submit" class="w-full text-center py-3 rounded-full bg-red-500 text-white hover:bg-green-dark focus:outline-none my-1">Se connecter</button>
                </form>
                @if($errors->has('error'))
                <div class="alert alert-danger flex justify-center text-sm mt-4">{{ $errors->first('error') }}</div>
                @endif
                <div class="text-grey-dark mt-6 flex justify-center">
                    <a href="/register" class="hover:text-red-500 text-red-800">Tu n'as pas de compte ?</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>