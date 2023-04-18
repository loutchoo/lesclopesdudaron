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
      <div class="flex justify-center mt-8">
        <div class="flex">
            <a href="/logout"><div class="rounded-full border-2 border-red-500 mx-2 hover:text-red-500 hover:border-red-700"><h1 class="m-2">Logout</h1></div></a>
        </div>
      </div>
      <div class="flex justify-center mt-4">
        <h1>Bienvenue {{ Auth::user()->name }} !</h1>
      </div>
      <div>
        <div class="flex justify-center mt-20">
            <div>
                <h1 class="text-center text-3xl">Statistiques :</h1>
                <h1 class="inline-block mt-2">💰 Argent récolté jusqu'à présent : {{$stats->pieces}}</h1>
                <h1>☠ Personnes tuées jusqu'à présent : {{$stats->kills}}</h1>
            </div>       
        </div>
    </div>
</body>
</html>