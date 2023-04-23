<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/daron.ico')}}" />
    <title>LesClopesDuDaron</title>
</head>
<style>
    .colorbackground{
        background-color: #182235;
    }
</style>
<body class="colorbackground text-white text-2xl font-bold">
  <div class="mb-4"></div>
    <header class="bg-gray-900 text-white rounded-full mx-8 shadow-lg">
        <div class="container flex justify-center sm:mx-auto sm:flex sm:justify-between sm:items-center py-4 animate__animated animate__bounceIn">
          <div class="text-3xl font-bold flex"><a href="/"><img class="rounded-full" width="50" height="100" src="{{asset('images/daron.jpeg')}}" alt=""></a><a href="/" class="ml-2 sm:text-2xl text-xl">Lesclopesdudaron</a></div>
          <nav>
            <ul class="hidden sm:flex space-x-4">
                <div class="rounded-full border- border-white"><li class="mx-2"><a href="/" class="hover:text-gray-400 m-1">Accueil</a></li></div>
              <div class="rounded-full border- border-white"><li class="mx-2"><a href="#présentation" class="hover:text-gray-400 m-1">Présentation</a></li></div>
              <div class="rounded-full border- border-white"><li class="mx-2"><a href="#team" class="hover:text-gray-400 m-1">Equipe</a></li></div>
              <div class="rounded-full border-2 bg-red-500 text-black border-red-500"><li class="mx-2"><a href="/download" class="hover:text-gray-800 m-1">Télecharger</a></li></div>
            </ul>
          </nav>
        </div>
      </header>
      <div class="flex justify-center mt-8">
      </div>
      <div class="mt-4 animate__animated animate__lightSpeedInRight">
        <h1 class="text-center">Bienvenue {{ Auth::user()->name }} !</h1>
        <h1 class="text-center text-lg text-red-500">Votre identifiant de joueur est : {{ Auth::user()->id }}</h1>
      </div>
      <div>
        <div class="flex justify-center mt-20">
            <div>
                <h1 class="text-center text-3xl">Statistiques :</h1>
                <h1 class="inline-block mt-2 sm:text-2xl text-lg text-center">💰 Argent récolté jusqu'à présent : {{$stats->pieces}}</h1>
                <h1 class="sm:text-2xl text-lg">☠ Personnes tuées jusqu'à présent : {{$stats->kills}}</h1>
            </div>       
        </div>
        <div class="flex justify-center mt-40">
          <div class="flex">
            <a href="/logout"><div class="rounded-full border-2 border-red-500 mx-2 hover:text-red-500 hover:border-red-700"><h1 class="m-2">Logout</h1></div></a>
        </div>
        </div>
    </div>
</body>
</html>