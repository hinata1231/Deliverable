<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>My_Path</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       
    </head>
    <body class="antialiased">
       <h1>My_Path 日本語教室（にほんごきょうしつ）先生用</h1>
       <div class='lessons'>
           <div class='lesson'>
              <h3 class='monthcalender'>一か月のカレンダー</h3>
            　<h3 class='weekcalender'>一週間のカレンダー</h3>
            　@foreach($lessons as $lesson)
            　{{$lesson->datetime}}
            　<button class="bg-sky-500/100"><a href='/teacher/lessons/{{$lesson->id}}'><h5 class='switch'>start</h5></a></button>
            　@endforeach
              <button class="bg-sky-500/100"><a href='/teacher/lessons/create'><h3 class='registration'> 授業登録</h3></a></button>
              <button class="bg-lime-700"><a href='/teacher/comment'><h3 class='comment'>先生からのお知らせ</h3></a></button>
              <button class="bg-sky-500/100"><a href='/teacher/member'><h3 class='introduction'>先生の紹介</h3></a></button>
               {{ Auth::user()->name }}
           </div>
        </div>
    </body>
</html>


