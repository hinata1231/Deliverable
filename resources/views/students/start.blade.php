OCTYPE html>
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
       <h1>授業詳細</h1>
        <div class='lessons'>
            <a href="https://us05web.zoom.us/j/4775569817?pwd=Q2s3VUtCM0FGbUpVeUJqMjdVZndUUT09">授業をはじめる</a>
            <h3>ミーティングID：477　556　9817</h3>
            <h3>パスコード:HC1231</h3> 
            
            
        </div>
        <div class='footer'>
         <a href="/lesson">戻る</a>
      </div>
    </body>
</x-app-layout>
</html>