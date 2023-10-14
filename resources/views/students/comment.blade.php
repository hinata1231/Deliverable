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
       <h1>先生からのお知らせ</h1>
        @foreach($comments as $comment)
        {{$comment->news}}
        
        @endforeach
      <div class='footer'>
          <a href="/lesson">戻る</a>
      </div>
    </body>
    </x-app-layout>
</html>
