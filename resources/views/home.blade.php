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

    .imgmagique {
    float: left;
    width:  150px;
    height: 150px;
    object-fit: cover;
}
</style>

<body class="colorbackground text-white text-2xl font-bold">
    <div class="mb-4"></div>
    <header class="bg-gray-900 text-white rounded-full mx-8 shadow-lg">
        <div class="container flex justify-center sm:mx-auto sm:flex sm:justify-between sm:items-center py-4 animate__animated animate__fadeIn">
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
        @if ($message =="connecte")
        <div class="flex">
            <a href="/dashboard"><div class="rounded-full border-2 border-red-500 mx-2 hover:text-red-500 hover:border-red-700"><h1 class="m-2 mx-2 sm:mx-4">Dashboard</h1></div></a>
        </div>
        @elseif ($message == "noconnecte")
        <div class="flex">
            <a href="/login"><div class="rounded-full border-2 border-red-500 mx-2 hover:text-red-500 hover:border-red-700"><h1 class="sm:m-3 font-medium sm:font-bold mx-2 sm:mx-4">Se connecter</h1></div></a>
            <a href="/register"><div class="rounded-full border-2 border-red-500 mx-2 hover:text-red-500 hover:border-red-700"><h1 class="sm:m-3 font-medium sm:font-bold mx-2 sm:mx-4">Créer compte</h1></div></a>
        </div>
        @endif
      </div>
      <div class="flex justify-center mt-8">
        <iframe class="rounded-lg w-96 sm:w-5/12" width="560" height="315" src="https://www.youtube.com/embed/2mvi044TEfw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <div>
        <div class="flex justify-center mt-8">
            <a id="présentation" href="#présentation">
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
      <div class="mt-8">
        <h1 class="text-center textcolor font-bold text-2xl sm:text-5xl text-white mt-4">🚬 Présentation du jeu ! 🚬</h1>
        <div class="flex justify-center mt-6">
            <img src="{{asset('images/jeu.png')}}" class="w-96 sm:w-1/2 rounded-lg" alt="">
        </div>
        <h1><h1 class="font-normal mx-4 sm:mx-40 text-center mt-4">Le but du jeu est d'aider le personnage principal à acheter des cigarettes pour son père, qui est parti depuis très longtemps pour en chercher et n'est jamais revenu 😞.</h1></h1>
        <div class="flex justify-center mt-4">
            <img src="{{asset('images/jeu3.png')}}" class="w-96 sm:w-1/2 rounded-lg" alt="">
        </div>
        <h1><h1 class="font-normal mx-6 sm:mx-40 text-center mt-4">Le personnage devra affronter les changements de méteo soudains dû aux différents biomes et les créatures se trouvant sur son chemin ⚔.</h1></h1>
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
            <h1 class="text-center text-3xl sm:text-5xl m">💻 Team développeurs 🔌</h1>
            
            </div>
            <div class="flex justify-center mt-10">
                
                <div class="sm:flex justify-center">
                    <div class="mt-10 sm:mt-0 mx-10">
                      <div class="flex flex-col items-center justify-center">
                        <img class="rounded-full imgmagique" src="https://media.istockphoto.com/id/1300845620/fr/vectoriel/appartement-dic%C3%B4ne-dutilisateur-isol%C3%A9-sur-le-fond-blanc-symbole-utilisateur.jpg?s=612x612&w=0&k=20&c=BVOfS7mmvy2lnfBPghkN__k8OMsg7Nlykpgjn0YOHj0=" alt="">
                        <p class="text-center">Wassim - Video Maker</p>
                      </div>
                    </div>
                    <div class="mt-10 sm:mt-0 mx-10">
                      <div class="flex flex-col items-center justify-center">
                        <img class="rounded-full imgmagique" src="{{asset('images/team/louis.jpeg')}}" alt="">
                        <p class="text-center">Louis - Web developer</p>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="sm:flex justify-center mt-10">
                <div class="sm:mx-40">
                  <div class="flex flex-col items-center justify-center">
                    <img class="rounded-full imgmagique" src="{{asset('images/team/haitam.jpg')}}" alt="">
                    <p class="text-center">Haitam - Python developer</p>
                  </div>
                </div>
                <div class="mt-10 sm:mt-0 mx-10">
                    <div class="flex flex-col items-center justify-center">
                      <img class="rounded-full imgmagique" src="{{asset('images/team/lucas.png')}}" alt="">
                      <p class="text-center">Lucas - Python developer</p>
                    </div>
                </div>
                <div class="mt-10 sm:mt-0 sm:mx-40">
                    <div class="flex flex-col items-center justify-center">
                      <img class="rounded-full imgmagique" src="https://media.istockphoto.com/id/1300845620/fr/vectoriel/appartement-dic%C3%B4ne-dutilisateur-isol%C3%A9-sur-le-fond-blanc-symbole-utilisateur.jpg?s=612x612&w=0&k=20&c=BVOfS7mmvy2lnfBPghkN__k8OMsg7Nlykpgjn0YOHj0=" alt="">
                      <p class="text-center">Merouane - Python developer</p>
                    </div>
                  </div>
              </div>
        </div>
      </div>
      <div class="mb-20"></div>
</body>
</html>