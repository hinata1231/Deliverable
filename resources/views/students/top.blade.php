<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>My_Path</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         @vite(['resources/css/app.css', 'resources/js/app.js'])
       
    </head>
    <body class="antialiased">
       <h1>My_Path 日本語教室（にほんごきょうしつ）生徒用</h1>
       <div class='lessons'>
           <div class='lesson'>
              <h3 class='monthcalender'>一か月のカレンダー</h3>
            　<h3 class='weekcalender'>一週間のカレンダー</h3>
            　@foreach($lessons as $lesson)
            　{{$lesson->id}}
        　   <button class="bg-sky-700 m-3 p-3 rounded">
            　    <a href='/lessons/{{$lesson->id}}'><h5 class='switch'>start</h5></a>
        　   </button>
            　@endforeach
              <a href='/student/comment'><h3 class='news'>先生からのお知らせ</h3></a>
              <a href='/student/teacher'><h3 class='teacher'>先生の紹介</h3></a>
               {{ Auth::user()->name }}
           </div>
        </div>
    </body>
</html>
