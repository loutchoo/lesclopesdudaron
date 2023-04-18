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

    .imgmagique {
    float: left;
    width:  150px;
    height: 150px;
    object-fit: cover;
}
</style>

<body class="colorbackground text-white text-2xl font-bold">
    <header class="bg-gray-900 text-white">
        <div class="container mx-auto flex justify-between items-center py-4 animate__animated animate__bounceIn">
          <div class="text-3xl font-bold flex"><img class="rounded-full" width="50" height="100" src="{{asset('images/daron.jpeg')}}" alt=""><a href="/" class="ml-2">Lesclopesdudaron</a></div>
          <nav>
            <ul class="flex space-x-4">
                <div class="rounded-full border-2 border-white"><li class="mx-2"><a href="/" class="hover:text-gray-400 m-1">Accueil</a></li></div>
              <div class="rounded-full border-2 border-white"><li class="mx-2"><a href="#présentation" class="hover:text-gray-400 m-1">Présentation</a></li></div>
              <div class="rounded-full border-2 border-white"><li class="mx-2"><a href="#team" class="hover:text-gray-400 m-1">Equipe</a></li></div>
              <div class="rounded-full border-2 border-green-500"><li class="mx-2"><a href="/download" class="hover:text-green-400 m-1">Télecharger</a></li></div>
            </ul>
          </nav>
        </div>
      </header>
      <div class="flex justify-center mt-8">
        @if ($message =="connecte")
        <div class="flex">
            <a href="/dashboard"><div class="rounded-full border-2 border-red-500 mx-2 hover:text-red-500 hover:border-red-700"><h1 class="m-2">Dashboard</h1></div></a>
        </div>
        @elseif ($message == "noconnecte")
        <div class="flex">
            <a href="/login"><div class="rounded-full border-2 border-red-500 mx-2 hover:text-red-500 hover:border-red-700"><h1 class="m-2">Se connecter</h1></div></a>
            <a href="/register"><div class="rounded-full border-2 border-red-500 mx-2 hover:text-red-500 hover:border-red-700"><h1 class="m-2">S'enregistrer</h1></div></a>
        </div>
        @endif
      </div>
      <div class="flex justify-center mt-8">
        <iframe class="w-1/2 rounded-lg" width="560" height="450" src="https://www.youtube.com/embed/TX_HyFMtpuU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <div>
        <div class="flex justify-center mt-8">
            <a href="#présentation">
                <div class="border-4 border-red-500 rounded-full p-2 hover:border-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                    </svg>
            </a>
            
        </div>
    </div>
        
      </div>
      <div id="présentation" class="mt-8">
        <h1 class="text-center textcolor font-bold text-3xl sm:text-5xl text-white mt-4">🚬 Présentation du jeu ! 🚬</h1>
        <div class="flex justify-center mt-6">
            <img src="{{asset('images/jeu.png')}}" class="w-1/2 rounded-lg" alt="">
        </div>
        <h1><h1 class="font-normal mx-40 text-center mt-4">Le but du jeu est d'aider le personnage principal à acheter des cigarettes pour son père, qui est parti depuis très longtemps pour en chercher et n'est jamais revenu 😞.</h1></h1>
        <div class="flex justify-center mt-4">
            <img src="{{asset('images/jeu3.png')}}" class="w-1/2 rounded-lg" alt="">
        </div>
        <h1><h1 class="font-normal mx-40 text-center mt-4">Le personnage devra affronter les changements de méteo soudains dû aux différents biomes et les créatures se trouvant sur son chemin ⚔.</h1></h1>
      </div>

      <div class="flex justify-center mt-10">
        <div class="">
            <a href="#team">
                <div class="border-4 border-red-500 rounded-full p-2 hover:border-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                    </svg>
            </a>
        </div>
            
        </div>
      </div>

      <div id="team" class="mt-14">
        <div >
            <h1 class="text-center text-5xl m">💻 Team développeurs 🔌</h1>
            
            </div>
            <div class="flex justify-center mt-10">
                
                <div class="flex justify-center">
                    <div class="mx-10">
                      <div class="flex flex-col items-center justify-center">
                        <img class="rounded-full imgmagique" src="{{asset('images/team/avatar.avif')}}" alt="">
                        <p class="text-center">Wassim - Python developper</p>
                      </div>
                    </div>
                    <div class="mx-10">
                      <div class="flex flex-col items-center justify-center">
                        <img class="rounded-full imgmagique" src="{{asset('images/team/louis.jpeg')}}" alt="">
                        <p class="text-center">Louis - Web developper</p>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="flex justify-center mt-10">
                <div class="mx-40">
                  <div class="flex flex-col items-center justify-center">
                    <img class="rounded-full imgmagique" src="{{asset('images/team/haitam.jpg')}}" alt="">
                    <p class="text-center">Haitam - Python developper</p>
                  </div>
                </div>
                <div class="mx-10">
                    <div class="flex flex-col items-center justify-center">
                      <img class="rounded-full imgmagique" src="{{asset('images/team/lucas.png')}}" alt="">
                      <p class="text-center">Lucas - Python developper</p>
                    </div>
                </div>
                <div class="mx-40">
                    <div class="flex flex-col items-center justify-center">
                      <img class="rounded-full imgmagique" src="{{asset('images/team/avatar.avif')}}" alt="">
                      <p class="text-center">Merouane - Python developper</p>
                    </div>
                  </div>
              </div>
        </div>
      </div>
      <div class="mb-20"></div>
</body>
</html>