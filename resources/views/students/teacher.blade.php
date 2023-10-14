<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>My_Path</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       
    </head>
<x-app-layout>
    <x-slot name="main-page">
      </x-slot>  
    <body class="antialiased">
       <h1>先生の紹介</h1>
       <div class='teachers'>
            @foreach($teachers as $teacher)
               <div class='teacher'>
                 <h2 class='name'>{{ $teacher->name }}</h2>
                  <p class='gender'>{{ $teacher->gender }}</p>
               </div>
            @endforeach
       </div>
       <div class='paginate'>
            {{ $teachers->links() }}
        </div>
         <div class="footer">
            <a href="/student/top">戻る</a>
        </div>
    </body>
</x-app-layout>
</html>
