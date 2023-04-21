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
    <div class="mb-4"></div>
    <div class="flex justify-center">
        <header class="bg-gray-900 text-white rounded-full mx-8 w-3/12 shadow-lg">
            <div class="flex justify-center py-4 animate__animated animate__bounceIn">
              <div class="text-3xl font-bold flex"><a href="/"><img class="rounded-full" width="50" height="100" src="{{asset('images/daron.jpeg')}}" alt=""></a><a href="/" class="ml-2">Lesclopesdudaron</a></div>
            </div>
          </header>
    </div>
    <div class="flex justify-center mt-56 animate__animated animate__flip">
        <div>
            <div class="rounded-full border-2 bg-red-500 text-black border-red-500 shadow-xl"><h1 class="mx-10 m-3"><a href="/download" class="hover:text-gray-800 m-1">Télecharger</a></h1></div>
            <h1 class="text-center text-sm mt-2 opacity-0 hover:opacity-100">Sauve un maximum de darons</h1>
        </div>
    </div>
</body>
</html>